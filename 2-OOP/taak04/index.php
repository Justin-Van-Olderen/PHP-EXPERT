<?php

public class Scooter{
    $kleur;
    $merk;
    $inhoudTank;
    

    $piago  = new Scooter();
    $peugeot = new Scooter();

    $piago: merk="piago", kleur="rood", inhoudTank="6"
    $peugeot: merk="peugeot", kleur="zwart", inhoudTank="7"

    //deze functie controleert de scooter
    function checkInhoud(){ 
        if($this->inhoud == 7){
            echo 'De scooter is vol!' 
            }
        else{
            echo 'de scooter is niet vol';
        }
    }
}





?>