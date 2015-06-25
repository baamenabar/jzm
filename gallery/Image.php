<?php

class Image {

    public $guid;
    public $title;
    /**
     * Normal image name. Contains the GUID and image format
     * It's the name by we will save it
     * eg. 45055042.jpg
     * @var string
     */
    public $normalImg;
    /**
     * Normal image URL.
     * eg. https://drscdn.500px.org/photo/111668655/m%3D900/1f26180f98376cf0a0e37d3414ce96dc
     * @var string
     */
    public $normalImgUrl;
    /**
     * Normal image name. Contains the GUID, 'small' sufix and image format
     * It's the name by we will save it
     * eg. 45055042_small.jpg
     * @var string
     */
    public $smallImg;
    public $smallImgUrl;
    public $base_extension = 'jpg';
    private $normalImgNumber = 5;
    private $smallImgNumber = 2;

    public function __construct( $guid, $title, $img = null ) {
        $this->guid = $guid;
        $this->title = $title;
        $this->normalImgUrl = $img;
        $this->getGuid();
        if( $img !== null ) {
            $this->changeImgUrl();
        }
    }

    public function getGuid(){
        $guidParts = explode( '/', $this->guid );
        $this->guid = $guidParts[array_search('photo', $guidParts ) + 1];
    }

    /**
     * Valids if a given URL contains a valid GUID.
     * A GUID must be numeric and goes after /photo/ in the URL.
     * @param  string $guid e.g http://500px.com/photo/52621296
     * @return bool
     */
    public static function validGuid($guid){
        $guidParts = explode( '/', $guid );
        if(is_numeric($guidParts[array_search('photo', $guidParts ) + 1])){
            return true;
        }
        return false;
    }

    /**
     * Changes the image URL and sets the image format
     * @return void
     */
    public function changeImgUrl() {
        $urlParts = explode( '/', $this->normalImgUrl );
        $imgParts = explode('.', $urlParts[array_search('photo', $urlParts ) + 1]);
        $newUrl = ($urlParts[0] == 'http:') ? 'http://' : 'https://';
        //Start after http:// and excluding file name
        for ( $i = 2; $i < count( $urlParts ) - 1; $i++ ) {
            $newUrl .= $urlParts[$i] . '/';
        }
        //$this->normalImgUrl = $newUrl . $this->normalImgNumber . '.' . $imgParts[1];
        $this->normalImg = $this->guid . '.' . $this->base_extension;
        $this->smallImgUrl = $newUrl . $this->smallImgNumber . '.' . $this->base_extension;
        $this->smallImg = $this->guid . '_small.' . $this->base_extension;
    }

}
