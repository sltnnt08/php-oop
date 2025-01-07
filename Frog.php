<?php
require_once "Animal.php";
    class frog extends Animal {
        public function __construct() {
            parent::__construct('Frog',4,'Yes');
        }
        public function jump() {
            return 'hop hop';
        }
        public function __tostring() {
            return parent::__tostring().'Jump: '.$this->jump();
        }
    }
$frog = new frog();
?>