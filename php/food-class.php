<?php
class Food{
            var $id;
            var $name;
            var $hunger;
            var $sanity;
            var $health;
            var $spoil;
            var $cooking;
            var $exclusive;

            function __construct($_id, $_name, $_hunger, $_health, $_sanity, $_spoil, $_cooking, $_exclusive)
            {
              $this->id = $_id;
              $this->name = $_name;
              $this->hunger = $_hunger;
              $this->health = $_health;
              $this->sanity = $_sanity;
              $this->spoil = $_spoil;
              $this->cooking = $_cooking;
              $this->exclusive = $_exclusive;
            }

            public function getPanName(){
              return $this->exclusive == "true" ? "Portable Crock Pot" : "Crock Pot";
            }

            function __toString()
            {
              return "
              Name: $this->name <br>
              Hunger: $this->hunger <br>
              Health: $this->health <br>
              Sanity: $this->sanity <br>
              Spoil Time: $this->spoil <br>
              Cooking Time: $this->cooking <br>
              Warly Exclusive Recipe: $this->exclusive";
            }
          }

          
          function getFoodById($id, $foods_array){

            for ($i=0; $i < count($foods_array); $i++)
            { 
                if($foods_array[$i]->id == $id)
                {
                    return $foods_array[$i];
                }
            }
        }
?>