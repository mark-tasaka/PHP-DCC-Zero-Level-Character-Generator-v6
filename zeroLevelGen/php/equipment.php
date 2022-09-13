<?php

function getRandomEquipment()
{
    $equipment =  array("backpack",
    "candle",
    "chain (10 feet)",
    "chalk (1 piece)",
    "chest (empty)",
    "crowbar",
    "flask (empty)",
    "flint and steel",
    "grappling hook",
    "small hammer",
    "holy symbol",
    "holy water (1 vial)",
    "iron spike",
    "lantern",
    "mirror (hand size)",
    "oil (1 flask)",
    "10 foot Pole",
    "ration (1 day)",
    "rope (50 feet)",
    "sack (large)",
    "sack (small)",
    "thieves tools",
    "torch (1)",
    "waterskin");

    shuffle($equipment);

    $gear = $equipment[0];

    return $gear;
}


function getArmour($select)
{
    if($select === 98)
    {
        return 'Hide Armour';
    }
    else if($select === 99)
    {
        return 'Leather Armour';
    }
    else if($select === 100)
    {
        return 'Shield';
    }
    else
    {
        return '';
    }
}


function getACBonusArmour($select)
{
    if($select === 98)  
    {
        return 3;
    }
    else if($select === 99)
    {
        return 2;
    }
    else if($select === 100)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}


function getFumbleDie($select)
{
    if($select === 98)  
    {
        return "d12";
    }
    else if($select === 99)
    {
        return "d8";
    }
    else if($select === 100)
    {
        return "d8";
    }
    else
    {
        return "d4";
    }
}



?>