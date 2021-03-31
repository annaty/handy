<?php
class Form{

    private  $_data;
    public $surround = 'p';

    public function __construct($data){
        $this ->_data = $data;
    }

    private function surround($html){
        return "<{$this->surround}>$html<{$this->surround}>";
        }

    public function input($name,$type){
        return $this->surround( '<input type="'.$type.'" name="'. $name.'" required placeholder="'.$name.'" >');
    }

    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }

}