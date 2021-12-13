<?php
   require_once "../Chair.php";
   class Office extends Chair
   {
        private string $type;
        private string $color;
        private string $setting;
        private int $price;
        private string $material;
    
        private function __construct($type,$name,$setting,$price,$material){
            $this->name = $name;
            $this->color = $color;
            $this->setting = $setting;
            $this->price = $price;
            $this->material = $material;
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

   }
?>
