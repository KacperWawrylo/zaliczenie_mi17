<?php
    class Chair
    {
        private string $name;
        private string $color;
    
        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
        
        public function sit()
        {
            echo "siedze<br>";
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
    $chair = new Chair("diablo","czerwony");
    print $chair;
?>