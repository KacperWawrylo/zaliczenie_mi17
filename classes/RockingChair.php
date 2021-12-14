<?php
   require_once "../ForHome.php";
   class RockingChair extends ForHome
   {
        private string $name;
        private string $color;
        private int $price;
        private string $material;
        private string $armrest;
        private string $legs;
    
        private function __construct($name,$color,$price,$material,$armrest,$legs){
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
            $this->material = $material;
            $this->armrest = $armrest;
            $this->legs = $legs;
        }
        public function setColor($color){
            $this->color=$color;
        }
        public function getColor(){
            return $this->color;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
        public function setPrice($price){
            $this->price = $price;
        }
        public function getPrice(){
            return $this->price;
        }
        public function setMaterial($material){
            $this->material = $material;
        }
        public function getMaterial(){
            return $this->material;
        }
        public function setArmrest($armrest){
            $this->armrest = $armrest;
        }
        public function getArmrest(){
            return $this->armrest;
        }
        public function setLegs($legs){
            $this->legs = $legs;
        }
        public function getLegs(){
            return $this->legs;
        }
        public function __toString() {
            return " Fotel o kolorze : ". $this->getColor(). " ,nazwie :  ". $this->getName(). " ,cenie : ".$this->getPrice();
        }
        public function sit()
        {
            echo "siedze<br>";
        }
        public function setting(){
            echo "ustawiam fotel<br>";
        }
        public function tilting(){
            echo "bujam sie<br>";
        }

   }
?>