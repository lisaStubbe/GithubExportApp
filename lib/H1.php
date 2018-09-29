<?php

require_once('Element.php');

class H1 extends Element
{

    function __construct($content = "")
    {
       parent::__construct("h1", $content);
    }
}