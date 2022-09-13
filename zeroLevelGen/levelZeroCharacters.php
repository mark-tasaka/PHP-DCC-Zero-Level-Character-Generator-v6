<!DOCTYPE html>
<html>
<head>
<title>Dungeon Crawl Classics Greenleaf Adventures Character Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Dungeon Crawl Classics Greenleaf Adventures Character Generator. Goodman Games.">
	<meta name="keywords" content="Dungeon Crawl Classics, Jim Wampler, Goodman Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2021">
		

	<link rel="stylesheet" type="text/css" href="css/dcc_zero_characters.css">
    
    
    
</head>
<body>
    
    <!--- php --->
    
    <?php
    
    include 'php/characterSex.php';
    include 'php/alignment.php';
    include 'php/diceRoll.php';
    include 'php/message.php';
    include 'php/zeroLvOccupation.php';
    include 'php/abilityScoreGen.php';
    include 'php/luckySign.php';
    include 'php/wealth.php';
    include 'php/equipment.php';
    include 'php/languages.php';
    include 'php/notes.php';
    include 'php/nameSelect.php';
    
        
        if(isset($_POST["theSex"]))
        {
            $characterSex = $_POST["theSex"];
    
        }
    
    
        $sexOfCharacter0 = getSex($characterSex);
        $sexOfCharacter1 = getSex($characterSex);
        $sexOfCharacter2 = getSex($characterSex);
        $sexOfCharacter3 = getSex($characterSex);
    
    


        if(isset($_POST["theGivenName"]))
        {
            $givenName = $_POST["theGivenName"];

        }

        if($givenName == '100')
        {
            $givenName0 = rand(0, 49);
            $givenName1 = rand(0, 49);
            $givenName2 = rand(0, 49);
            $givenName3 = rand(0, 49);
        }
        else
        {
            $givenName0 = $givenName;
            $givenName1 = $givenName;
            $givenName2 = $givenName;
            $givenName3 = $givenName;
        }
        


        if(isset($_POST["theSurname"]))
        {
            $surname = $_POST["theSurname"];

        }

        if($surname == '100')
        {
            $surname0 = rand(0, 37);
            $surname1 = rand(0, 37);
            $surname2 = rand(0, 37);
            $surname3 = rand(0, 37);
        }
        else
        {
            $surname0 = $surname;
            $surname1 = $surname;
            $surname2 = $surname;
            $surname3 = $surname;
        }

        $genderName0 = getNameGender($sexOfCharacter0);
        $genderName1 = getNameGender($sexOfCharacter1);
        $genderName2 = getNameGender($sexOfCharacter2);
        $genderName3 = getNameGender($sexOfCharacter3);

        $characterName0 = getName($givenName0, $surname0, $genderName0);
        $characterName1 = getName($givenName1, $surname1, $genderName1);
        $characterName2 = getName($givenName2, $surname2, $genderName2);
        $characterName3 = getName($givenName3, $surname3, $genderName3);

        $nameSelectMessage0 = getNameDescript($givenName0, $surname0);
        $nameSelectMessage1 = getNameDescript($givenName1, $surname1);
        $nameSelectMessage2 = getNameDescript($givenName2, $surname2);
        $nameSelectMessage3 = getNameDescript($givenName3, $surname3);


        if(isset($_POST["theAlignment"]))
        {
            $alignOption = $_POST["theAlignment"];
        }
    
        $characterAlignment0 = getAlignment($alignOption);
        $characterAlignment1 = getAlignment($alignOption);
        $characterAlignment2 = getAlignment($alignOption);
        $characterAlignment3 = getAlignment($alignOption);

        
        if(isset($_POST["theAbilityScore"]))
        {
            $abilityScoreGen = $_POST["theAbilityScore"];
        
        }

        $abilityScoreArray0 = array();
        $abilityScoreArray1 = array();
        $abilityScoreArray2 = array();
        $abilityScoreArray3 = array();
        

        for($i = 0; $i < 6; ++$i)
        {
            $abilityScore = rollAbilityScores ($abilityScoreGen);

            array_push($abilityScoreArray0, $abilityScore);

        }       
        
        for($i = 0; $i < 6; ++$i)
        {
            $abilityScore = rollAbilityScores ($abilityScoreGen);

            array_push($abilityScoreArray1, $abilityScore);

        }       
        
        for($i = 0; $i < 6; ++$i)
        {
            $abilityScore = rollAbilityScores ($abilityScoreGen);

            array_push($abilityScoreArray2, $abilityScore);

        }       
        
        for($i = 0; $i < 6; ++$i)
        {
            $abilityScore = rollAbilityScores ($abilityScoreGen);

            array_push($abilityScoreArray3, $abilityScore);

        }

        $strength0 = $abilityScoreArray0[0];
        $agility0 = $abilityScoreArray0[1];
        $stamina0 = $abilityScoreArray0[2];
        $personality0 = $abilityScoreArray0[3];
        $intelligence0 = $abilityScoreArray0[4];
        $luck0 = $abilityScoreArray0[5];
        
        $strengthMod0 = getAbilityModifier($strength0);
        $agilityMod0 = getAbilityModifier($agility0);
        $staminaMod0 = getAbilityModifier($stamina0);
        $personalityMod0 = getAbilityModifier($personality0);
        $intelligenceMod0 = getAbilityModifier($intelligence0);
        $luckMod0 = getAbilityModifier($luck0);

        $strength1 = $abilityScoreArray1[0];
        $agility1 = $abilityScoreArray1[1];
        $stamina1 = $abilityScoreArray1[2];
        $personality1 = $abilityScoreArray1[3];
        $intelligence1 = $abilityScoreArray1[4];
        $luck1 = $abilityScoreArray1[5];
        
        $strengthMod1 = getAbilityModifier($strength1);
        $agilityMod1 = getAbilityModifier($agility1);
        $staminaMod1 = getAbilityModifier($stamina1);
        $personalityMod1 = getAbilityModifier($personality1);
        $intelligenceMod1 = getAbilityModifier($intelligence1);
        $luckMod1 = getAbilityModifier($luck1);
        
        $strength2 = $abilityScoreArray2[0];
        $agility2 = $abilityScoreArray2[1];
        $stamina2 = $abilityScoreArray2[2];
        $personality2 = $abilityScoreArray2[3];
        $intelligence2 = $abilityScoreArray2[4];
        $luck2 = $abilityScoreArray2[5];
        
        $strengthMod2 = getAbilityModifier($strength2);
        $agilityMod2 = getAbilityModifier($agility2);
        $staminaMod2 = getAbilityModifier($stamina2);
        $personalityMod2 = getAbilityModifier($personality2);
        $intelligenceMod2 = getAbilityModifier($intelligence2);
        $luckMod2 = getAbilityModifier($luck2);
        
        $strength3 = $abilityScoreArray3[0];
        $agility3 = $abilityScoreArray3[1];
        $stamina3 = $abilityScoreArray3[2];
        $personality3 = $abilityScoreArray3[3];
        $intelligence3 = $abilityScoreArray3[4];
        $luck3 = $abilityScoreArray3[5];
        
        $strengthMod3 = getAbilityModifier($strength3);
        $agilityMod3 = getAbilityModifier($agility3);
        $staminaMod3 = getAbilityModifier($stamina3);
        $personalityMod3 = getAbilityModifier($personality3);
        $intelligenceMod3 = getAbilityModifier($intelligence3);
        $luckMod3 = getAbilityModifier($luck3);

        $dieRollMessage = dieRollMethodText($abilityScoreGen);

        
        
        if(isset($_POST["theHitPoints"]))
        {
            $hitPointsGen = $_POST["theHitPoints"];
        
        }

        $hitPointsMessage = hitPointsMethodText($hitPointsGen);

        $hitPoints = 0;

        if($hitPointsGen == "1")
        {
            
            $hitPoints0 = rand(1, 4);
            $hitPoints1 = rand(1, 4);
            $hitPoints2 = rand(1, 4);
            $hitPoints3 = rand(1, 4);

        }

        if($hitPointsGen == "2")
        {
            
            $hitPoints0 = 4;
            $hitPoints1 = 4;
            $hitPoints2 = 4;
            $hitPoints3 = 4;
        }

        
        if(isset($_POST["theOccupations"]))
        {
            $occupationsSelection = $_POST["theOccupations"];
        
        }



        $professionNum0 = getOccupationNumber($occupationsSelection); 
        $professionNum1 = getOccupationNumber($occupationsSelection); 
        $professionNum2 = getOccupationNumber($occupationsSelection); 
        $professionNum3 = getOccupationNumber($occupationsSelection);

        
        $notes0 = getNotes($professionNum0);
        $notes1 = getNotes($professionNum1);
        $notes2 = getNotes($professionNum2);
        $notes3 = getNotes($professionNum3);

        $armour0 = getArmour($professionNum0);
        $armour1 = getArmour($professionNum1);
        $armour2 = getArmour($professionNum2);
        $armour3 = getArmour($professionNum3);

        $occupationArray0 = array();
        $occupationArray1 = array();
        $occupationArray2 = array();
        $occupationArray3 = array();

        $occupationArray0 = getOccupation($professionNum0);
        $occupationArray1 = getOccupation($professionNum1);
        $occupationArray2 = getOccupation($professionNum2);
        $occupationArray3 = getOccupation($professionNum3);

        
        $profession0 = $occupationArray0[0];
        $profession1 = $occupationArray1[0];
        $profession2 = $occupationArray2[0];
        $profession3 = $occupationArray3[0];
        
        $species0 = $occupationArray0[1];
        $species1 = $occupationArray1[1];
        $species2 = $occupationArray2[1];
        $species3 = $occupationArray3[1];

        $trainedWeapon0 = $occupationArray0[2];
        $trainedWeapon1 = $occupationArray1[2];
        $trainedWeapon2 = $occupationArray2[2];
        $trainedWeapon3 = $occupationArray3[2];

        $weaponDamage0 = $occupationArray0[3];
        $weaponDamage1 = $occupationArray1[3];
        $weaponDamage2 = $occupationArray2[3];
        $weaponDamage3 = $occupationArray3[3];

        $birthAugur0 = array();
        $birthAugur1 = array();
        $birthAugur2 = array();
        $birthAugur3 = array();
        
        $birthAugur0 = getBirthAugur();
        $birthAugur1 = getBirthAugur();
        $birthAugur2 = getBirthAugur();
        $birthAugur3 = getBirthAugur();
        
        $birthAugurNo0 = $birthAugur0[0];
        $birthAugurNo1 = $birthAugur1[0];
        $birthAugurNo2 = $birthAugur2[0];
        $birthAugurNo3 = $birthAugur3[0];
        
        $birthAugurName0 = $birthAugur0[1];
        $birthAugurName1 = $birthAugur1[1];
        $birthAugurName2 = $birthAugur2[1];
        $birthAugurName3 = $birthAugur3[1];
        
        $birthAugurRoll0 = $birthAugur0[2];
        $birthAugurRoll1 = $birthAugur1[2];
        $birthAugurRoll2 = $birthAugur2[2];
        $birthAugurRoll3 = $birthAugur3[2];

        $luckySignMeleeHit0 = meleeAttackLuckSign($luckMod0, $birthAugurNo0);
        $luckySignMeleeHit1 = meleeAttackLuckSign($luckMod1, $birthAugurNo1);
        $luckySignMeleeHit2 = meleeAttackLuckSign($luckMod2, $birthAugurNo2);
        $luckySignMeleeHit3 = meleeAttackLuckSign($luckMod3, $birthAugurNo3);

        $meleeHit0 = $strengthMod0 + $luckySignMeleeHit0;
        $meleeHit1 = $strengthMod1 + $luckySignMeleeHit1;
        $meleeHit2 = $strengthMod2 + $luckySignMeleeHit2;
        $meleeHit3 = $strengthMod3 + $luckySignMeleeHit3;
        
        $luckySignMeleeDamage0 = meleeDamageLuckSign($luckMod0, $birthAugurNo0);
        $luckySignMeleeDamage1 = meleeDamageLuckSign($luckMod1, $birthAugurNo1);
        $luckySignMeleeDamage2 = meleeDamageLuckSign($luckMod2, $birthAugurNo2);
        $luckySignMeleeDamage3 = meleeDamageLuckSign($luckMod3, $birthAugurNo3);

        $meleeDam0 = $strengthMod0 + $luckySignMeleeDamage0;
        $meleeDam1 = $strengthMod1 + $luckySignMeleeDamage1;
        $meleeDam2 = $strengthMod2 + $luckySignMeleeDamage2;
        $meleeDam3 = $strengthMod3 + $luckySignMeleeDamage3;

        $luckySignMissileHit0 = missileAttackLuckSign($luckMod0, $birthAugurNo0);
        $luckySignMissileHit1 = missileAttackLuckSign($luckMod1, $birthAugurNo1);
        $luckySignMissileHit2 = missileAttackLuckSign($luckMod2, $birthAugurNo2);
        $luckySignMissileHit3 = missileAttackLuckSign($luckMod3, $birthAugurNo3);

        $missileHit0 = $agilityMod0 + $luckySignMissileHit0;
        $missileHit1 = $agilityMod1 + $luckySignMissileHit1;
        $missileHit2 = $agilityMod2 + $luckySignMissileHit2;
        $missileHit3 = $agilityMod3 + $luckySignMissileHit3;
        
        $luckySignMissileDamage0 = missileDamageLuckSign($luckMod0, $birthAugurNo0);
        $luckySignMissileDamage1 = missileDamageLuckSign($luckMod1, $birthAugurNo1);
        $luckySignMissileDamage2 = missileDamageLuckSign($luckMod2, $birthAugurNo2);
        $luckySignMissileDamage3 = missileDamageLuckSign($luckMod3, $birthAugurNo3);

        $missileDam0 = $agilityMod0 + $luckySignMissileDamage0;
        $missileDam1 = $agilityMod1 + $luckySignMissileDamage1;
        $missileDam2 = $agilityMod2 + $luckySignMissileDamage2;
        $missileDam3 = $agilityMod3 + $luckySignMissileDamage3;

        $init0 = getInit($agilityMod0, $luckMod0, $birthAugurNo0);
        $init1 = getInit($agilityMod1, $luckMod1, $birthAugurNo1);
        $init2 = getInit($agilityMod2, $luckMod2, $birthAugurNo2);
        $init3 = getInit($agilityMod3, $luckMod3, $birthAugurNo3);

        $speed0 = getSpeed($luckMod0, $birthAugurNo0);
        $speed1 = getSpeed($luckMod1, $birthAugurNo1);
        $speed2 = getSpeed($luckMod2, $birthAugurNo2);
        $speed3 = getSpeed($luckMod3, $birthAugurNo3);

        $critMod0 = getCritMod($luckMod0, $birthAugurNo0);
        $critMod1 = getCritMod($luckMod1, $birthAugurNo1);
        $critMod2 = getCritMod($luckMod2, $birthAugurNo2);
        $critMod3 = getCritMod($luckMod3, $birthAugurNo3);

        $fumbieDie0 = getFumbleDie($professionNum0);
        $fumbieDie1 = getFumbleDie($professionNum1);
        $fumbieDie2 = getFumbleDie($professionNum2);
        $fumbieDie3 = getFumbleDie($professionNum3);

        $fumbleMod0 = getFumbleMod($luckMod0, $birthAugurNo0);
        $fumbleMod1 = getFumbleMod($luckMod1, $birthAugurNo1);
        $fumbleMod2 = getFumbleMod($luckMod2, $birthAugurNo2);
        $fumbleMod3 = getFumbleMod($luckMod3, $birthAugurNo3);

        $armourClass0 = getAC($agilityMod0, $luckMod0, $birthAugurNo0); 
        $armourClass1 = getAC($agilityMod1, $luckMod1, $birthAugurNo1); 
        $armourClass2 = getAC($agilityMod2, $luckMod2, $birthAugurNo2); 
        $armourClass3 = getAC($agilityMod3, $luckMod3, $birthAugurNo3); 

        $armourBonus0 = getACBonusArmour($professionNum0);
        $armourBonus1 = getACBonusArmour($professionNum1);
        $armourBonus2 = getACBonusArmour($professionNum2);
        $armourBonus3 = getACBonusArmour($professionNum3);

        $armourClassWithArmour0 = $armourClass0 + $armourBonus0;
        $armourClassWithArmour1 = $armourClass1 + $armourBonus1;
        $armourClassWithArmour2 = $armourClass2 + $armourBonus2;
        $armourClassWithArmour3 = $armourClass3 + $armourBonus3;

        $hotPointLuckBonus0 = getHitPointLuck($luckMod0, $birthAugurNo0);
        $hotPointLuckBonus1 = getHitPointLuck($luckMod1, $birthAugurNo1);
        $hotPointLuckBonus2 = getHitPointLuck($luckMod2, $birthAugurNo2);
        $hotPointLuckBonus3 = getHitPointLuck($luckMod3, $birthAugurNo3);

        $luckToHp0 = getHitPointLuck($luckMod0, $birthAugurNo0);
        $luckToHp1 = getHitPointLuck($luckMod1, $birthAugurNo1);
        $luckToHp2 = getHitPointLuck($luckMod2, $birthAugurNo2);
        $luckToHp3 = getHitPointLuck($luckMod3, $birthAugurNo3);
        
        $hitPoints0 += $staminaMod0;
        $hitPoints1 += $staminaMod1;
        $hitPoints2 += $staminaMod2;
        $hitPoints3 += $staminaMod3;

        $hitPoints0 += $luckToHp0;
        $hitPoints1 += $luckToHp1;
        $hitPoints2 += $luckToHp2;
        $hitPoints3 += $luckToHp3;
        
        $hitPoints0 = minHitPoints($hitPoints0);
        $hitPoints1 = minHitPoints($hitPoints1);
        $hitPoints2 = minHitPoints($hitPoints2);
        $hitPoints3 = minHitPoints($hitPoints3);

        $refLuckBonus0 = getRefLuckBonus($luckMod0, $birthAugurNo0);
        $refLuckBonus1 = getRefLuckBonus($luckMod1, $birthAugurNo1);
        $refLuckBonus2 = getRefLuckBonus($luckMod2, $birthAugurNo2);
        $refLuckBonus3 = getRefLuckBonus($luckMod3, $birthAugurNo3);

        $ref0 = $agilityMod0 + $refLuckBonus0;
        $ref1 = $agilityMod1 + $refLuckBonus1;
        $ref2 = $agilityMod2 + $refLuckBonus2;
        $ref3 = $agilityMod3 + $refLuckBonus3;

        $fortLuckBonus0 = getFortLuckBonus($luckMod0, $birthAugurNo0);
        $fortLuckBonus1 = getFortLuckBonus($luckMod1, $birthAugurNo1);
        $fortLuckBonus2 = getFortLuckBonus($luckMod2, $birthAugurNo2);
        $fortLuckBonus3 = getFortLuckBonus($luckMod3, $birthAugurNo3);

        $fort0 = $staminaMod0 + $fortLuckBonus0;
        $fort1 = $staminaMod1 + $fortLuckBonus1;
        $fort2 = $staminaMod2 + $fortLuckBonus2;
        $fort3 = $staminaMod3 + $fortLuckBonus3;
        
        $willLuckBonus0 = getWillLuckBonus($luckMod0, $birthAugurNo0);
        $willLuckBonus1 = getWillLuckBonus($luckMod1, $birthAugurNo1);
        $willLuckBonus2 = getWillLuckBonus($luckMod2, $birthAugurNo2);
        $willLuckBonus3 = getWillLuckBonus($luckMod3, $birthAugurNo3);

        $will0 = $personalityMod0 + $willLuckBonus0;
        $will1 = $personalityMod1 + $willLuckBonus1;
        $will2 = $personalityMod2 + $willLuckBonus2;
        $will3 = $personalityMod3 + $willLuckBonus3;

        $wealth0 = getStartingWealth($professionNum0);
        $wealth1 = getStartingWealth($professionNum1);
        $wealth2 = getStartingWealth($professionNum2);
        $wealth3 = getStartingWealth($professionNum3);

        $languages0 = array();
        $languages1 = array();
        $languages2 = array();
        $languages3 = array();

        $languages0 = getLanguages($intelligenceMod0, $luckMod0, $birthAugurNo0, $species0, $characterAlignment0, $intelligence0);
        $languages1 = getLanguages($intelligenceMod1, $luckMod1, $birthAugurNo1, $species1, $characterAlignment1, $intelligence1);
        $languages2 = getLanguages($intelligenceMod2, $luckMod2, $birthAugurNo2, $species2, $characterAlignment2, $intelligence2);
        $languages3 = getLanguages($intelligenceMod3, $luckMod3, $birthAugurNo3, $species3, $characterAlignment3, $intelligence3);

        $equipment0 = array();
        $equipment1 = array();
        $equipment2 = array();
        $equipment3 = array();

        $randomStartingEquip0 = getRandomEquipment();
        $randomStartingEquip1 = getRandomEquipment();
        $randomStartingEquip2 = getRandomEquipment();
        $randomStartingEquip3 = getRandomEquipment();

        array_push($equipment0, $occupationArray0[4]);
        array_push($equipment1, $occupationArray1[4]);
        array_push($equipment2, $occupationArray2[4]);
        array_push($equipment3, $occupationArray3[4]);
        
        array_push($equipment0, $randomStartingEquip0);
        array_push($equipment1, $randomStartingEquip1);
        array_push($equipment2, $randomStartingEquip2);
        array_push($equipment3, $randomStartingEquip3);


    ?>

    
    

  <img id="character_sheet"/>
   <section>
       
	   <aside id="topleft">
    	<span id="name0">
           <?php

           echo $characterName0;


            ?>
           </span>
           
		<span id="strength0">
        <?php
            echo $strength0;
            ?>
        </span>

        
        <span id="strengthMod0">
        <?php
            $strengthMod0 = getModSign($strengthMod0);
            echo $strengthMod0;
            ?>
        </span>

		<span id="agility0">
        <?php
            echo $agility0;
            ?>
        </span>

          <span id="agilityMod0">
        <?php
            $agilityMod0 = getModSign($agilityMod0);
            echo $agilityMod0;
            ?>
        </span>

           
		<span id="stamina0">
        <?php
            echo $stamina0;
            ?>
        </span>

          <span id="staminaMod0">
        <?php
            $staminaMod0 = getModSign($staminaMod0);
            echo $staminaMod0;
            ?>
        </span>

		<span id="personality0">
        <?php
            echo $personality0;
            ?>
        </span>

         <span id="personalityMod0">
        <?php
            $personalityMod0 = getModSign($personalityMod0);
            echo $personalityMod0;
            ?>
        </span>

		<span id="intelligence0">
        <?php
            echo $intelligence0;
            ?>
        </span>

         <span id="intelligenceMod0">
        <?php
            $intelligenceMod0 = getModSign($intelligenceMod0);
            echo $intelligenceMod0;
            ?>
        </span>

		<span id="luck0">
        <?php
            echo $luck0;
            ?>
        </span>

         <span id="luckMod0">
        <?php
            $luckMod0 = getModSign($luckMod0);
            echo $luckMod0;
            ?>
        </span>

		<p id="birthAugur0">
        <?php
            echo $birthAugurName0 . ': ' . $birthAugurRoll0 . ' (' . $luckMod0 . ')';
        ?>
        </p>
           
        
        <p id="armourClass0"> 
        <?php
            echo $armourClassWithArmour0.  ' (' . $armourClass0 .')';
            ?>
        </p>

		<span id="hitPoints0">
        <?php
            echo $hitPoints0;
        ?>
        </span> 
           
        <span id="ref0">
        <?php
            $ref0 = getModSign($ref0);
            echo $ref0;
            ?>
            </span>

        <span id="fort0">
        <?php
            $fort0 = getModSign($fort0);
            echo $fort0;
            ?>
            </span>

        <span id="will0">
        <?php
            $will0 = getModSign($will0);
            echo $will0;
            ?>
            </span>
		   
        <span id="init0">
        <?php
            $init0 = getModSign($init0);
            echo $init0;
            ?>
        </span>


		<span id="melee0">
        <?php
        $meleeHit0 = getModSign($meleeHit0);
        echo $meleeHit0;
        ?>
        </span>
        <span id="range0">
        <?php
        $missileHit0 = getModSign($missileHit0);
        echo $missileHit0;
        ?>
        </span>
		<span id="meleeDamage0">
        <?php
        $meleeDam0 = getModSign($meleeDam0);
        echo $meleeDam0;
        ?>
        </span>
		 <span id="rangeDamage0">
        <?php
        $missileDam0 = getModSign($missileDam0);
        echo $missileDam0;
        ?>
         </span>
           
        <span id="fumbleDie0">
        <?php
            $fumbleMod0 = getModSign2($fumbleMod0);
            echo $fumbieDie0 . $fumbleMod0;
        ?>
        </span>
           
        <span id="sex0">
           <?php
            
            echo $sexOfCharacter0;
            
            ?>
           </span>
           
           
        <span id="alignment0">
           <?php
            
            echo $characterAlignment0;
            
            ?>
           </span>

        <span id="profession0">
           <?php
            
            echo $profession0;
            
            ?>
        </span>

        <span id="weapon0">
           <?php
            
            echo $trainedWeapon0;
            
            ?>
        </span>
        <span id="weaponDamage0">
           <?php
            
            echo $weaponDamage0;
            
            ?>
        </span>

        <span id="armour0">
            <?php
            echo $armour0;
            ?>
        </span>


           
           
		<span id="critDie0">
        <?php
        
        $critMod0 = getModSign2($critMod0);
            echo 'd4' . $critMod0 . ' / I';  
        ?>
        </span>
           
           <span id="wealth0">
           <?php
            echo $wealth0;
            ?>
           </span>
           
           <span id="languages0">
           <?php

           $arraySize = count($languages0);

           foreach($languages0 as $lan)
           {
               echo $lan;

               --$arraySize;

               if($arraySize > 1)
               {
                   echo ', ';
               }
               else if($arraySize === 1)
               {
                   echo ' & ';
               }
               else
               {
                    echo '';
               }

           }

           ?>
           </span>
		 
           <span id="speed0">
           <?php
            echo $speed0;
           ?>
           </span>
           
           

           <span id="equipment0">
           <?php

           $equipCount = count($equipment0);

           if($equipment0[0] != "")
           {
                echo 'Trade Goods: ' . $equipment0[0] . " & ";

           }
           else
           {
                echo $equipment0[0];
           }

           echo $equipment0[1];


           ?>
           </span>

           <span id="notes0">
           <?php
            echo $notes0;
           ?>
            </span>
           
		   <span id="dieRollMethod0"> 
           <?php
            
            echo $nameSelectMessage0 . '<br/>' . $dieRollMessage . $hitPointsMessage;
            
            ?> 
            </span>

           <span id="damageBonus0"></span>
           	   
		</aside>

              
	   <aside id="topright">
    	<span id="name1">
           <?php
           
           echo $characterName1;
            
            ?>
           </span>

           <span id="strength1">
        <?php
            echo $strength1;
            ?>
        </span>

        
        <span id="strengthMod1">
        <?php
            $strengthMod1 = getModSign($strengthMod1);
            echo $strengthMod1;
            ?>
        </span>

		<span id="agility1">
        <?php
            echo $agility1;
            ?>
        </span>

          <span id="agilityMod1">
        <?php
            $agilityMod1 = getModSign($agilityMod1);
            echo $agilityMod1;
            ?>
        </span>

           
		<span id="stamina1">
        <?php
            echo $stamina1;
            ?>
        </span>

          <span id="staminaMod1">
        <?php
            $staminaMod1 = getModSign($staminaMod1);
            echo $staminaMod1;
            ?>
        </span>

		<span id="personality1">
        <?php
            echo $personality1;
            ?>
        </span>

         <span id="personalityMod1">
        <?php
            $personalityMod1 = getModSign($personalityMod1);
            echo $personalityMod1;
            ?>
        </span>

		<span id="intelligence1">
        <?php
            echo $intelligence1;
            ?>
        </span>

         <span id="intelligenceMod1">
        <?php
            $intelligenceMod1 = getModSign($intelligenceMod1);
            echo $intelligenceMod1;
            ?>
        </span>

		<span id="luck1">
        <?php
            echo $luck1;
            ?>
        </span>

         <span id="luckMod1">
        <?php
            $luckMod1 = getModSign($luckMod1);
            echo $luckMod1;
            ?>
        </span>

           
		<p id="birthAugur1">
        <?php
            echo $birthAugurName1 . ': ' . $birthAugurRoll1 . ' (' . $luckMod1 . ')';
        ?>
        </p>
           
        <p id="armourClass1">
        <?php
            echo $armourClassWithArmour1.  ' (' . $armourClass1 .')';
            ?>
            </p>

           
		<span id="hitPoints1">
        <?php
            echo $hitPoints1;
        ?>
        </span> 
           
        <span id="ref1">
        <?php
            $ref1 = getModSign($ref1);
            echo $ref1;
            ?>
            </span>


            <span id="fort1">
        <?php
            $fort1 = getModSign($fort1);
            echo $fort1;
            ?>
            </span>


            <span id="will1">
        <?php
            $will1 = getModSign($will1);
            echo $will1;
            ?>
            </span>
		   
        <span id="init1">
        <?php
            $init1 = getModSign($init1);
            echo $init1;
            ?>
        </span>

		<span id="melee1">
        <?php
        $meleeHit1 = getModSign($meleeHit1);
        echo $meleeHit1;
        ?>
        </span>
        <span id="range1">
        <?php
        $missileHit1 = getModSign($missileHit1);
        echo $missileHit1;
        ?>
        </span>
		<span id="meleeDamage1">
        <?php
        $meleeDam1 = getModSign($meleeDam1);
        echo $meleeDam1;
        ?>
        </span>
		 <span id="rangeDamage1">
        <?php
        $missileDam1 = getModSign($missileDam1);
        echo $missileDam1;
        ?>
         </span>
           
        <span id="fumbleDie1">
        <?php
            $fumbleMod1 = getModSign2($fumbleMod1);
            echo $fumbieDie1 . $fumbleMod1;
        ?>
        </span>
           
        <span id="sex1">
           
           <?php
            
            echo $sexOfCharacter1;
            
            ?>
           </span>
           
        <span id="alignment1">
           <?php
            
            echo $characterAlignment1;
            
            ?>
           </span>

           
        <span id="profession1">
           <?php
            
            echo $profession1;
            
            ?>
        </span>
        
        <span id="weapon1">
           <?php
            
            echo $trainedWeapon1;
            
            ?>
        </span>
        <span id="weaponDamage1">
           <?php
            
            echo $weaponDamage1;
            
            ?>
        </span>
        
        <span id="armour1">
            <?php
            echo $armour1;
            ?>
        </span>
           
           
		<span id="critDie1">
        <?php
        
        $critMod1 = getModSign2($critMod1);
            echo 'd4' . $critMod1 . ' / I';  
        ?>
        </span>
           
                      
           <span id="wealth1">
           <?php
            echo $wealth1;
            ?>
           </span>
           
           <span id="languages1">
           <?php

           $arraySize = count($languages1);

           foreach($languages1 as $lan)
           {
               echo $lan;

               --$arraySize;

               if($arraySize > 1)
               {
                   echo ', ';
               }
               else if($arraySize === 1)
               {
                   echo ' & ';
               }
               else
               {
                    echo '';
               }

           }
           ?>
           </span>


           <span id="speed1">
           <?php
            echo $speed1;
           ?>
           </span>
           
           <span id="equipment1">
           <?php

                $equipCount = count($equipment1);

                if($equipment1[0] != "")
                {
                    echo 'Trade Goods: ' . $equipment1[0] . " & ";

                }
                else
                {
                    echo $equipment1[0];
                }

                echo $equipment1[1];


           ?>
           </span>

           <span id="notes1">
           <?php
            echo $notes1;
           ?>
            </span>

           <span id="dieRollMethod1">
           <?php
            
            echo $nameSelectMessage1 . '<br/>' .  $dieRollMessage . $hitPointsMessage;
            
            ?> 
            </span>
           
           
           
           <span id="damageBonus1"></span>
           	   
		</aside>
	    
       
                     
	   <aside id="bottomleft">
    	<span id="name2">
            
           <?php
           
           echo $characterName2;
 
            ?>


           </span>
           
           <span id="strength2">
        <?php
            echo $strength2;
            ?>
        </span>

        
        <span id="strengthMod2">
        <?php
            $strengthMod2 = getModSign($strengthMod2);
            echo $strengthMod2;
            ?>
        </span>

		<span id="agility2">
        <?php
            echo $agility2;
            ?>
        </span>

          <span id="agilityMod2">
        <?php
            $agilityMod2 = getModSign($agilityMod2);
            echo $agilityMod2;
            ?>
        </span>

           
		<span id="stamina2">
        <?php
            echo $stamina2;
            ?>
        </span>

          <span id="staminaMod2">
        <?php
            $staminaMod2 = getModSign($staminaMod2);
            echo $staminaMod2;
            ?>
        </span>

		<span id="personality2">
        <?php
            echo $personality2;
            ?>
        </span>

         <span id="personalityMod2">
        <?php
            $personalityMod2 = getModSign($personalityMod2);
            echo $personalityMod2;
            ?>
        </span>

		<span id="intelligence2">
        <?php
            echo $intelligence2;
            ?>
        </span>

         <span id="intelligenceMod2">
        <?php
            $intelligenceMod2 = getModSign($intelligenceMod2);
            echo $intelligenceMod2;
            ?>
        </span>

		<span id="luck2">
        <?php
            echo $luck2;
            ?>
        </span>

         <span id="luckMod2">
        <?php
            $luckMod2 = getModSign($luckMod2);
            echo $luckMod2;
            ?>
        </span>
           
		<p id="birthAugur2">
        <?php
            echo $birthAugurName2 . ': ' . $birthAugurRoll2 . ' (' . $luckMod2 . ')';
        ?>
        </p>
          
        <p id="armourClass2">
        <?php
            echo $armourClassWithArmour2 .  ' (' . $armourClass2 .')';
            ?>
           </p>

           
		<span id="hitPoints2">
        <?php
            echo $hitPoints2;
        ?>
        </span> 
           
        <span id="ref2">
        <?php
            $ref2 = getModSign($ref2);
            echo $ref2;
            ?>
            </span>
        <span id="fort2">
        <?php
            $fort2 = getModSign($fort2);
            echo $fort2;
            ?>
            </span>


            <span id="will2">
        <?php
            $will2 = getModSign($will2);
            echo $will2;
            ?>
            </span>
		   
        <span id="init2">
        <?php
            $init2 = getModSign($init2);
            echo $init2;
            ?>
        </span>


		<span id="melee2">
        <?php
        $meleeHit2 = getModSign($meleeHit2);
        echo $meleeHit2;
        ?>
        </span>
        <span id="range2">
        <?php
        $missileHit2 = getModSign($missileHit2);
        echo $missileHit2;
        ?>
        </span>
		<span id="meleeDamage2">
        <?php
        $meleeDam2 = getModSign($meleeDam2);
        echo $meleeDam2;
        ?>
        </span>
		 <span id="rangeDamage2">
        <?php
        $missileDam2 = getModSign($missileDam2);
        echo $missileDam2;
        ?>
         </span>
           
        <span id="fumbleDie2">
        <?php
            $fumbleMod2 = getModSign2($fumbleMod2);
            echo $fumbieDie2 . $fumbleMod2;
        ?>
        </span>
           
        <span id="sex2">
           
           <?php
            
            echo $sexOfCharacter2;
            
            ?>
           </span>
           
        <span id="alignment2">
           <?php
            
            echo $characterAlignment2;
            
            ?>
           </span>
           
        <span id="profession2">
           <?php
            
            echo $profession2;
            
            ?>
        </span>
        
        <span id="weapon2">
           <?php
            
            echo $trainedWeapon2;
            
            ?>
        </span>
        <span id="weaponDamage2">
           <?php
            
            echo $weaponDamage2;
            
            ?>
        </span>

        
        <span id="armour2">
            <?php
            echo $armour2;
            ?>
        </span>
           
           
		<span id="critDie2">
        <?php
        
        $critMod2 = getModSign2($critMod2);
            echo 'd4' . $critMod2 . ' / I';  
        ?>
        </span>
           
                      
           <span id="wealth2">
           <?php
            echo $wealth2;
            ?>
           </span>
           
           <span id="languages2">
           <?php
           $arraySize = count($languages2);

           foreach($languages2 as $lan)
           {
               echo $lan;

               --$arraySize;

               if($arraySize > 1)
               {
                   echo ', ';
               }
               else if($arraySize === 1)
               {
                   echo ' & ';
               }
               else
               {
                    echo '';
               }

           }
           ?>
           </span>

           <span id="speed2">
           <?php
            echo $speed2;
           ?>
           </span>
           
           
           
           <span id="equipment2">
           <?php

                if($equipment2[0] != "")
                {
                    echo 'Trade Goods: ' . $equipment2[0] . " & ";

                }
                else
                {
                    echo $equipment2[0];
                }

                echo $equipment2[1];


           ?>
           </span>

           <span id="notes2">
           <?php
            echo $notes2;
           ?>
            </span>
           
           <span id="dieRollMethod2">
           <?php
            
            echo $nameSelectMessage2 . '<br/>' .  $dieRollMessage . $hitPointsMessage;
            
            ?> 
            </span>
           
           
		</aside>
       
       
                            
	   <aside id="bottomright">
    	<span id="name3">
           <?php
           
           echo $characterName3;
            
            ?></span>

<span id="strength3">
        <?php
            echo $strength3;
            ?>
        </span>

        
        <span id="strengthMod3">
        <?php
            $strengthMod3 = getModSign($strengthMod3);
            echo $strengthMod3;
            ?>
        </span>

		<span id="agility3">
        <?php
            echo $agility3;
            ?>
        </span>

          <span id="agilityMod3">
        <?php
            $agilityMod3 = getModSign($agilityMod3);
            echo $agilityMod3;
            ?>
        </span>

           
		<span id="stamina3">
        <?php
            echo $stamina3;
            ?>
        </span>

          <span id="staminaMod3">
        <?php
            $staminaMod3 = getModSign($staminaMod3);
            echo $staminaMod3;
            ?>
        </span>

		<span id="personality3">
        <?php
            echo $personality3;
            ?>
        </span>

         <span id="personalityMod3">
        <?php
            $personalityMod3 = getModSign($personalityMod3);
            echo $personalityMod3;
            ?>
        </span>

		<span id="intelligence3">
        <?php
            echo $intelligence3;
            ?>
        </span>

         <span id="intelligenceMod3">
        <?php
            $intelligenceMod3 = getModSign($intelligenceMod3);
            echo $intelligenceMod3;
            ?>
        </span>

		<span id="luck3">
        <?php
            echo $luck3;
            ?>
        </span>

         <span id="luckMod3">
        <?php
            $luckMod3 = getModSign($luckMod3);
            echo $luckMod3;
            ?>
        </span>
           
        <p id="birthAugur3">
        <?php
            echo $birthAugurName3 . ': ' . $birthAugurRoll3 . ' (' . $luckMod3 . ')';
        ?>
        </p>
        
        <p id="armourClass3"> 
        <?php
            echo $armourClassWithArmour3 .  ' (' . $armourClass3 .')';
            ?>
           </p>
           

		<span id="hitPoints3">
        <?php
            echo $hitPoints3;
        ?>
        </span> 
           
        <span id="ref3">
        <?php
            $ref3 = getModSign($ref3);
            echo $ref3;
            ?>
            </span>

            
        <span id="fort3">
        <?php
            $fort3 = getModSign($fort3);
            echo $fort3;
            ?>
            </span>


            <span id="will3">
        <?php
            $will3 = getModSign($will3);
            echo $will3;
            ?>
            </span>
		   
        <span id="init3">
        <?php
            $init3 = getModSign($init3);
            echo $init3;
            ?>
        </span>

		<span id="melee3">
        <?php
        $meleeHit3 = getModSign($meleeHit3);
        echo $meleeHit3;
        ?>
        </span>
        <span id="range3">
        <?php
        $missileHit3 = getModSign($missileHit3);
        echo $missileHit3;
        ?>
        </span>
		<span id="meleeDamage3">
        <?php
        $meleeDam3 = getModSign($meleeDam3);
        echo $meleeDam3;
        ?>
        </span>
		 <span id="rangeDamage3">
        <?php
        $missileDam3 = getModSign($missileDam3);
        echo $missileDam3;
        ?>
         </span>
           
        <span id="fumbleDie3">
        <?php
        
            $fumbleMod3 = getModSign2($fumbleMod3);
            echo $fumbieDie3 . $fumbleMod3;
        ?>
        </span>
           
        <span id="sex3">
           
           <?php
            
            echo $sexOfCharacter3;
            
            ?>
           </span>
           
           
        <span id="alignment3">
           <?php
            
            echo $characterAlignment3;
            
            ?>
           </span>
           
        <span id="profession3">
           <?php
            
            echo $profession3;
            
            ?>
        </span>
        
        <span id="weapon3">
           <?php
            
            echo $trainedWeapon3;
            
            ?>
        </span>
        <span id="weaponDamage3">
           <?php
            
            echo $weaponDamage3;
            
            ?>
        </span>

        
        <span id="armour3">
            <?php
            echo $armour3;
            ?>
        </span>
           
           
		<span id="critDie3">
        <?php
            $critMod3 = getModSign2($critMod3);
            echo 'd4' . $critMod3 . ' / I';  
        ?>
        </span>
                      
           <span id="wealth3">
           <?php
            echo $wealth3;
            ?>
           </span>
           
           <span id="languages3">
           <?php
           $arraySize = count($languages3);

           foreach($languages3 as $lan)
           {
               echo $lan;

               --$arraySize;

               if($arraySize > 1)
               {
                   echo ', ';
               }
               else if($arraySize === 1)
               {
                   echo ' & ';
               }
               else
               {
                    echo '';
               }

           }
           ?>
           </span>
		 
           <span id="speed3">
           <?php
            echo $speed3;
           ?>
           </span>
           
           
           <span id="equipment3">
           <?php


                if($equipment3[0] != "")
                {
                    echo 'Trade Goods: ' . $equipment3[0] . " & ";

                }
                else
                {
                    echo $equipment3[0];
                }

                echo $equipment3[1];


           ?>
           </span>

           <span id="notes3">
           <?php
            echo $notes3;
           ?>
            </span>
           
           <span id="dieRollMethod3">
           <?php
            
            echo $nameSelectMessage3 . '<br/>' .  $dieRollMessage . $hitPointsMessage;
            
            ?> 
            </span>
           
           

           <span id="damageBonus3"></span>
           	   
		</aside>
       
       
	   	   
	</section>
	

		
  <script>
	  

	  
        let imgData = "images/dcc_zero_character_sheet.png";
        $("#character_sheet").attr("src", imgData);
        

  </script>
		
	
    
</body>
</html>