<?php

function getNotes($select)
{
    if($select === 92)
    {
        $pushcart = array("Push Cart containing tomatoes",
        "Push Cart containing nothing",
        "Push Cart containing dirt",
        "Push Cart containing straw",
        "Push Cart containing rocks",
        "Push Cart containing YOUR DEAD!!!");

        shuffle($pushcart);

        return $pushcart[0];
    }
    else if($select >= 48 && $select <= 56)
    {
        $farmAnimals = array("Hen", "Sheep", "Goat", "Cow", "Duck", "Goose", "Mule");

        shuffle($farmAnimals);

        return $farmAnimals[0];
    }
    else if($select >= 0 && $select <= 10)
    {
        return "Special Abilities: Infravision (60'), smell gold and gems.";
    }
    else if($select >= 11 && $select <= 20)
    {
        return "Special Abilities: Infravision (60'), iron vulnerability, +4 bonus to detect secret doors.";

    }
    else if($select >= 21 && $select <= 30)
    {

        return "Special Abilities: Infravision (30'), two-weapon fighting, good luck charm.";
    }
    else
    {
        return '';
    }


}


?>