<?php

date_default_timezone_set( 'America/Santiago' );

require( 'rss_fetch.inc' );
require( 'extlib/simple_html_dom.php' );
require( 'extlib/LiquenImg.php' );
require( 'Image.php' );

define('MAGPIE_CACHE_ON', false);

class Worker {

    public $rssUrl = 'http://500px.com/jzmusic/rss';
    public $imgDir = 'images';
    public $imgFile = 'images.txt';
    public $domFile = 'dom.html';
    private $logFile = 'log.txt';
    private $rss;
    private $html;
    private $linquenImg;
    private $linquenImgOpts = array('q' => 90, 'oc' => 1, 'width' => 200, 'height' => 120, 'c' => true);
    private $localImgs;
    private $rssImgs;
    private $saveImgs;
    private $deleteImgs;

    public function __construct() {
        try {
            $this->rss = fetch_rss( $this->rssUrl );
        } catch ( Exception $e ) {
            $this->log( $e->getMessage() );
            exit( $e->getMessage() );
        }
        $this->html = new simple_html_dom();
        $this->linquenImg = new LiquenImg();
        if($this->fetch()){ // Fetch RSS
            $this->diff(); // Checks which images need to be deleted or saved
            $this->delete(); // Delete images from disk
            $this->save(); // Save images to disk
            $this->dom(); // Create the DOM
            $this->log( 'Ejecutado normalmente' );
        } else {
            $this->log( 'Problemas con el formato del RSS. GUID no válido o cambió de formato.' );
        }

    }

    private function fetch() {
        //Local Images
        $this->localImgs = $this->readLocal();
        //RSS Images
        foreach ( $this->rss->items as $entry ) {
            $guid = $entry['guid'];
            if(!Image::validGuid($guid)){
                return false;
            }
            $title = $entry['title'];
            $this->html->load( $entry['description'] );
            $img = $this->html->find( 'img' );
            $img = $img[0]->attr['src'];
            $this->rssImgs[] = new Image( $guid, $title, $img );
        }
        return true;
    }

    private function save() {
        if( count( $this->rssImgs ) > 1 ){
            $this->cleanLocal();
            foreach ( $this->rssImgs as $img ) {
                //Save the image
                if( in_array( $img->guid, $this->saveImgs ) ){
                    $this->curl($img->normalImgUrl, $img->normalImg); // Normal image
                    $this->thumb( $img->guid ); // Small image
                }
                //Save RSS image file name
                $this->writeLocal($img);
            }
        }
    }

    private function delete() {
        foreach ($this->deleteImgs as $guid) {
            unlink( $this->imgDir . '/' . $guid . '.jpg');
            unlink( $this->imgDir . '/' . $guid . '_small.jpg');
        }
    }

    private function diff(){
        $rssImgs = array();
        foreach ( $this->rssImgs as $img ) {
            $rssImgs[] = $img->guid;
        }
        $localImgs = array();
        foreach ( $this->localImgs as $img ) {
            $localImgs[] = $img->guid;
        }
        //Images to delete from disk
        $this->deleteImgs = array_diff ( $localImgs, $rssImgs );
        //Images to save on disk
        $this->saveImgs = array_diff( $rssImgs, array_intersect( $localImgs, $rssImgs ) );
    }

    private function curl( $url, $fileName ){
        $ch = curl_init($url);
        $fp = fopen($this->imgDir . '/' . $fileName , 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);
    }

    private function thumb($guid){
        $this->linquenImgOpts['url'] = $guid . '.jpg';
        $this->linquenImgOpts['on'] = $guid . '_small';
        $this->linquenImg->getImage( $this->linquenImgOpts );
    }

    private function readLocal(){
        $imgs = array();
        $file = new SplFileInfo( $this->imgFile );
        if( $file->isFile() ) {
            $file = new SPLFileObject( $this->imgFile );
            foreach ( $file as $line ) {
                if( !$file->eof() ){
                    $img = explode( '::', $line );
                    $imgs[] = new Image( $img[0], $img[1] );
                }
            }
        }
        return $imgs;
    }

    private function writeLocal($img){
        $file = new SPLFileObject( $this->imgFile, 'a' );
        $file->fwrite( $img->guid . '::' . $img->title . PHP_EOL );
    }

    private function cleanLocal(){
        $file = new SPLFileObject( $this->imgFile, 'w+' );
        $file->fwrite( '' );
    }

    private function dom(){
        $currentDir = explode( '\\', getcwd() ); // Windows
        if( count( $currentDir) == 1 ) {
            $currentDir = explode( '/', getcwd() ); // Linux
        }
        $currentDir = $currentDir[count( $currentDir ) - 1];
        $file = new SPLFileObject( $this->domFile, 'w+' );
        $dom = '<ul class="popup-gallery">';
        foreach ( $this->rssImgs as $img ) {
            $url = $currentDir . '/' . $this->imgDir . '/'. $img->guid;
            $dom .= '<li><a href="'. $url . '.jpg' .'" title="'. utf8_encode($img->title) .'"><img src="'. $url . '_small.jpg" width="'. $this->linquenImgOpts['width'] .'" height="'. $this->linquenImgOpts['height'] .'"><p>'. utf8_encode($img->title) .'</p><div class="imagen-hover"></div></a></li>';
        }
        $file->fwrite( $dom . '</ul>' );
    }

    private function log( $msg ) {
        $file = new SPLFileObject( $this->logFile, 'a' );
        $file->fwrite( date('d/m/Y H:i (e)') . ' - ' . $msg . PHP_EOL );
    }

}

$worker = new Worker();
