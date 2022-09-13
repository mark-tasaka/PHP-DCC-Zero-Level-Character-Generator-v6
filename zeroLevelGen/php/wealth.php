<?php

function getStartingWealth($select)
{
    $copper = 0;

    for($i = 0; $i < 5; ++$i)
    {
        $coins = rand(1, 12);

        $copper += $coins;
    }

    if($select === 28)
    {
        $copper += 200;

        return "5 gp, 10 sp & " . $copper . " cp";
    }
    else if($select === 29)
    {

        return "20 sp & " . $copper . " cp";
    }
    else if($select === 75)
    {
        $copper += 27;

        return "4 gp, 14 sp & " . $copper . " cp";
    }
    else if($select === 88)
    {
        $copper += 100;

        return  $copper . " cp";
    }
    else
    {
        return  $copper . " cp";
    }

}


?>