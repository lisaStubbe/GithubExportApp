<?php

require_once('Element.php');

class P extends Element
{
    function __construct($content = "")
    {
        parent::__construct("p", $content);
    }
}