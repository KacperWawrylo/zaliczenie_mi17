<?php
   require_once "../Chair.php";
   class ForHome extends Chair
   {
        private string $name;
        private string $color;
        private int $price;
        private string $material;
    
        private function __construct($name,$color,$price,$material){
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
            $this->material = $material;
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

   }
?>