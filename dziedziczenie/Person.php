<?php
    class Person {
        private string $name;
        private string $gender;
        private int $age;
        function __construct($name, $gender, $age) {
            $this->name = $name;
            $this->gender = $gender;
            $this->age = $age;
        }
        function walk() {
            echo "Spaceruje w parku<br>";
        }
        function sit() {
            echo "Siedze w krzesle<br>";
        }
        function sleep() {
            echo "Spie w lozku<br>";
        }
    }
    class Programmer {
        private string $name;
        private string $gender;
        private int $age;
        private string $language;
        function __construct($name, $gender, $age, $language) {
            $this->name = $name;
            $this->gender = $gender;
            $this->age = $age;
            $this->language = $language;
        }
        function writeCode() {
            echo "Pisze kod " . $this->language . "<br>";
        }
        function walk() {
            echo "Spaceruje w parku<br>";
        }
        function sit() {
            echo "Siedze w krzesle<br>";
        }
        function sleep() {
            echo "Spie w lozku<br>";
        }
    }
    class JuniorDeveloper {
        private string $name;
        private string $gender;
        private int $age;
        private string $language;
        private string $education;
        function __construct($name, $gender, $age, $language, $education) {
            $this->name = $name;
            $this->gender = $gender;
            $this->age = $age;
            $this->language = $language;
            $this->education = $education;
        }
        function readDocumentation() {
            echo "Czytam dokumentacje techniczna<br>";
        }
        function writeCode() {
            echo "Pisze kod " . $this->language . "<br>";
        }
        function walk() {
            echo "Spaceruje w parku<br>";
        }
        function sit() {
            echo "Siedze w krzesle<br>";
        }
        function sleep() {
            echo "Spie w lozku<br>";
        }
    }
 
    class SeniorDeveloper {
        private string $name;
        private string $gender;
        private int $age;
        private string $language;
        private int $leadingExpirience;
        function __construct($name, $gender, $age, $language, $leadingExpirience) {
            $this->name = $name;
            $this->gender = $gender;
            $this->age = $age;
            $this->language = $language;
            $this->leadingExpirience = $leadingExpirience;
        }
        function writeReview() {
            echo "Sprawdzam kod Juniora<br>";
        }
        function writeCode() {
            echo "Pisze kod " . $this->language . "<br>";
        }
        function walk() {
            echo "Spaceruje w parku<br>";
        }
        function sit() {
            echo "Siedze w krzesle<br>";
        }
        function sleep() {
            echo "Spie w lozku<br>";
        }
    }
 
    class Driver {
        private string $name;
        private string $gender;
        private int $age;
        private int $drivingExpirience;
        function __construct($name, $gender, $age, $drivingExpirience) {
            $this->name = $name;
            $this->gender = $gender;
            $this->age = $age;
            $this->drivingExpirience = $drivingExpirience;
        }
    }
    class Trucker {
        
    }
    class TaxiDriver {
        
    }
    class Student {
        
    }
 
    $person = new Person("Adam", "m", 20);
    $person->sleep();
    $person->walk();
?>