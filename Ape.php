<?php
require_once "Animal.php";
class ape extends Animal {
    public function __construct() {
        parent::__construct('Kera Sakti',2,'No');
    }
    public function yell() {
        return 'Auoooo';
    }
    public function __tostring() {
        return parent::__tostring().'Yell: '.$this->yell();
    }
}
$ape = new ape();
?>