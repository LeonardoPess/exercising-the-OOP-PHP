<?php

    class Person {
        // Properties
        private $name;
        private $eyeColor;
        private $age;

        public static $drinkingAge = 21;

        #function __construct($name,$eyeColor,$age) {
            #$this->name = $name;
            #$this->eyeColor = $eyeColor;
            #$this->age = $age;
        #}
        
        //Methods
        public function setName(string $newName) {
            $this->name = $newName;
        }

        public function getName() {
            return $this->name;
        }  

        public function getDA() {
            return self::$drinkingAge;
        }  

        public static function setDrinkingAge($newDA) {
            self::$drinkingAge = $newDA;
        }

	}