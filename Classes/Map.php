<?php
class Map{
    
    public $goal = 10;
    public $createdMap = array();
    
    public function __construct($tw){

        $this->createMap[] = $tw[0];
        $out = $this->createMap[0];
        echo $out->getName();
    }
    
    
    public function move($createdMap,$character,$number){
        if($character->current + $number< goal){
            $character->current += $number;
        }else{
            ending($character);
        }
    }
    public function ending($character){
        
    }

}

?>