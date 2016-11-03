<?php 
	// this file will extend ParentClass.php

	class ChildClass extends ParentClass {
      private $needsRestOnLand;

      public function __construct($name, $size, $numOfLegs, $needsRestOnLand){
        parent::__construct($name, $size, $numOfLegs);
        $this->needsRestOnLand = $needsRestOnLand;
      }

      public function getNeedsRestOnLand(){
        return $this->needsRestOnLand;
      }

      public function setNeedsRestOnLand($needsRestOnLand){
        $this->needsRestOnLand = $needsRestOnLand;
      }

      public function __toString()
      {
        $oldStr = parent::__toString();
        $str = " They are marine mammals that can swim fast, ";
        if($this->needsRestOnLand){
          $str = $str . "but they need to return to the land.";
        }
        else{
          $str = $str . "and they live in the water like fishes.";
        }
        return $oldStr . $str;
      }
    }
