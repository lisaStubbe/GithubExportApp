<?php
class VoidElement
{
    public function __construct($element, $attributes = []){
        $this->attributes = $attributes;
        $this->element = $element;
    }
    public function __toString(){
        $attriubtes = $this ->attributeList();
        return "<$this->element $attributes>";
    }
    private function attributeList(){
        $output = "";
        foreach ($this->attributes as $attribute =>$value){
            $output .= "$attribute=\"$value\" ";
        }
        return $output;
    }
} 
