<?php
   require_once "../Chair.php";
   class Gaming extends Chair
   {
        private string $type;
        private string $color;
        private string $setting;
        private int $price;
        private string $material;
        private string $armrest;
        private string $model;
    
        private function __construct($type,$name,$setting,$price,$material,$armrest,$model){
            $this->name = $name;
            $this->color = $color;
            $this->setting = $setting;
            $this->price = $price;
            $this->material = $material;
            $this->armrest = $armrest;
            $this->model = $model;
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
        public function adjustin_the_armrest(){
            echo "ustawianie podlokietnika<br>";
        }
   }
?>