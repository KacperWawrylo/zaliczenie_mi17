<?php
   require_once "../Office.php";
   class Ergonomic extends Office
   {
        private string $type;
        private string $color;
        private string $setting;
        private int $price;
        private string $material;
        private string $armrest;
        private string $for_the_loins;

        private function __construct($type,$name,$setting,$price,$material,$armrest,$for_the_loins){
            $this->name = $name;
            $this->color = $color;
            $this->setting = $setting;
            $this->price = $price;
            $this->material = $material;
            $this->armrest = $armrest;
            $this->for_the_loins = $for_the_loins;
        }
        public function setSetting($setting)
        {
            $this->setting = $setting;
        }
        public function getSetting()
        {
            return $this->setting = $setting;
        }
        public function setColor($color){
            $this->color=$color;
        }
        public function getColor(){
            return $this->color = $color;
        }
        public function setType($type){
            $this->type=$type;
        }
        public function getType(){
            return $this->type = $type;
        }
        public function sit()
        {
            echo "siedze<br>";
        }

        public function setting($setting)
        {
            $this->setting = $setting;
        }

        public function tilting(){
            echo "bujanie sie<br>";
        }
        public function couldRide(){
            echo "jezdze na kolkach<br>";
        }
        public function lumbarpositioning(){
            echo "ustawianie odcinku ledzwiowego<br>"
        }
   }
?>