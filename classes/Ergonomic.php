<?php
   require_once "../Office.php";
   class Ergonomic extends Office
   {
        private string $name;
        private string $color;
        private int $price;
        private string $material;
        private string $armrest;
        private string $for_the_loins;

        private function __construct($name,$color,$price,$material,$armrest,$for_the_loins){
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
            $this->material = $material;
            $this->armrest = $armrest;
            $this->for_the_loins = $for_the_loins;
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
        public function setLoins($for_the_loins){
            $this->for_the_loins = $for_the_loins;
        }
        public function getLoins(){
            return $this->for_the_loins;
        }
        public function __toString() {
            return " Fotel o kolorze : ". $this->getColor(). " ,nazwie :  ". $this->getName(). " ,cenie : ".$this->getPrice();
        }
        public function sit()
        {
            echo "siedze<br>";
        }
        public function tilting(){
            echo "bujanie sie<br>";
        }
        public function couldRide(){
            echo "jezdze na kolkach<br>";
        }
        public function lumbarpositioning(){
            echo "ustawianie odcinku ledzwiowego<br>";
        }
   }
?>