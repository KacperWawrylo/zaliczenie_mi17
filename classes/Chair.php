<?php
    class Chair
    {
        private string $name;
        private string $color;
        private string $setting;
    
        function __construct($name,$color,$setting){
            $this->name = $name;
            $this->color = $color;
            $this->setting = $setting;
        }
        
        public function sit()
        {
            echo "siedze<br>";
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
            return $this->color;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
        public function __toString() {
            return " Fotel o kolorze : ". $this->getColor(). " i nazwie :  ". $this->getName();
        }
    }
    $chair = new Chair("diablo","czerwony","podniesiony");
    print $chair;
?>