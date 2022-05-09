<?php

Class student{
    // public $name = "Azbayar";
    public $name;
    private $nas;

    // baiguulagch funktsiig ingej uusgene
    // ene ni studnet classin baiguulagch funkts ni bna!!!!
    function __construct(){
        echo "ene bol baiguulagch function shuu!!!<br> baiguulagch funkts bolhoor hamgiin turuund duudagdana";

    }

    //ene ni funkts uusgeh neg helber
    function nerHevleh($name){
        $this->name = $name;
        echo $this->name;
        
    }

    //set age gdg funkts ni agdnaas utgaa avna!
    function setAge($age){
        $this->age = $age;
    }
    function getAge(){
        return $this->age;
    }



}

?> 