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
     * eg. http://pcdn.500px.net/45055042/af84c69182c045ffaa1a58ddb9334fc94ed64ec0/4.jpg
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
    private $normalImgNumber = 5;
    private $smallImgNumber = 2;

    public function __construct( $guid, $title, $img = null ) {
        $this->guid = explode('photo_id=', $guid);//ahora el guid viene dentro de un string tremendo
        $this->guid = $this->guid[1];
        $this->title = $title;
        $this->normalImgUrl = $img;
        $this->getGuid();
        if( $img !== null ) {
            $this->changeImgUrl();
        }
    }

    public function getGuid(){
        $guidParts = explode( '/', $this->guid );
        $this->guid = $guidParts[count( $guidParts ) - 1];
    }

    /**
     * Changes the image URL and sets the image format
     * @return void
     */
    public function changeImgUrl() {
        $urlParts = explode( '/', $this->normalImgUrl );
        $imgParts = explode('.', $urlParts[count( $urlParts ) - 1]);
        $newUrl = ($urlParts[0] == 'http:') ? 'http://' : 'https://';
        //Start after http:// and excluding file name
        for ( $i = 2; $i < count( $urlParts ) - 1; $i++ ) {
            $newUrl .= $urlParts[$i] . '/';
        }
        $this->normalImgUrl = $newUrl . $this->normalImgNumber . '.' . $imgParts[1];
        $this->normalImg = $this->guid . '.' . $imgParts[1];
        $this->smallImgUrl = $newUrl . $this->smallImgNumber . '.' . $imgParts[1];
        $this->smallImg = $this->guid . '_small.' . $imgParts[1];
    }

}
