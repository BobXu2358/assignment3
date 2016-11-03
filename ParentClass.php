<?php
	// This is the file for the parent class

	class ParentClass {
      protected $name;
      protected $size;
      protected $numOfLegs;

      public function __construct($name, $size, $numOfLegs){
        $this->name = $name;
        $this->size = $size;
        $this->numOfLegs = $numOfLegs;
      }

      public function getName(){
        return $this->name;
      }

      public function getSize(){
        return $this->size;
      }

      public function getNumOfLegs(){
        return $this->numOfLegs;
      }

      public function setName($name){
        $this->name = $name;
      }

      public function setSize($size)
      {
        $this->size = $size;
      }

      public function setNumOfLegs($numOfLegs)
      {
        $this->numOfLegs = $numOfLegs;
      }

      public function __toString()
      {
        return $this->name . "s are " . $this->size . " sized mammals, they have " . $this->numOfLegs . " legs.";
      }
    }
