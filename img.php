<?php 
class Img {
    public function __construct($img){
        $this ->img = $img;
    } 

    
    function Img() { 
        header("Content-type: image/png");
        echo file_get_contents(__DIR__."/images/protected/NoOneCanViewMeDirectly.png");
    } 
}