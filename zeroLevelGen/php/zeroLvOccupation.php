<?php
//Zero Levo Occupation


function getOccupation($input)
{
	        $a00 = array("Dwarven Apothecarist", "Dwarf", "Cudgel (as Staff)", "1d4", "Steel Vial");
		$a01 = array("Dwarven Blacksmith", "Dwarf", "Hammer (as Club)", "1d4", "Mithril, 1 oz.");
		$a02 = array("Dwarven Riveter", "Dwarf", "Hammer (as Club)", "1d4", "Mithril, 1 oz.");
		$a03 = array("Dwarven Chestmaker", "Dwarf", "Chisel (as Dagger)", "1d4", "Wood, 10 lbs.");
		$a04 = array("Dwarven Herder", "Dwarf", "Staff", "1d4", "Sow");
		$a05 = array("Dwarven Miner", "Dwarf", "Pick (as Club)", "1d4", "Lantern");
		$a06 = array("Dwarven Linkman", "Dwarf", "Pick (as Club)", "1d4", "Lantern");
		$a07 = array("Dwarven Mushroom Farmer", "Dwarf", "Shovel (as Staff)", "1d4", "Sack");
		$a08 = array("Dwarven Rat-Catcher", "Dwarf", "Club", "1d4", "Net");
		$a09 = array("Dwarven Stonemason", "Dwarf", "Hammer (as club)", "1d4", "Fine Stones, 10 lbs.");
		$a10 = array("Dwarven Mason", "Dwarf", "Hammer (as club)", "1d4", "Fine Stones, 10 lbs.");
		//Elves 11 - 20
		// 14 - Falconer
		$a11 = array("Elven Artisan", "Elf", "Staff", "1d4", "Clay, 1 lbs.");
		$a12 = array("Elven Barrister", "Elf", "Quill (as Dart)", "1d4", "Book");
		$a13 = array("Elven Chandler", "Elf", "Scissors (as Dagger)", "1d4", "Candles, 20");
		$a14 = array("Elven Falconer", "Elf", "Dagger", "1d4", "Falcon");
		$a15 = array("Elven Forester", "Elf", "Staff", "1d4", "Herbs, 1 lbs.");
		$a16 = array("Elven Herbalist", "Elf", "Staff", "1d4", "Herbs, 1 lbs.");
		$a17 = array("Elven Glassblower", "Elf", "Hammer (as Club)", "1d4", "Glass Beads");
		$a18 = array("Elven Navigator", "Elf", "Bow", "1d6", "Spyglass");
		$a19 = array("Elven Sage", "Elf", "Dagger", "1d4", "Parchment and Quill Pen");
		$a20 = array("Elven Scholar", "Elf", "Dagger", "1d4", "Parchment and Quill Pen");
		//Halflings 21 - 30
		$a21 = array("Halfling Chicken Butcher", "Halfling", "Hand Axe", "1d6", "Chicken Meat, 5 lbs.");
		$a22 = array("Halfling Dyer", "Halfling", "Staff", "1d4", "Fabric, 3 yards");
		$a23 = array("Halfling Tailor", "Halfling", "Staff", "1d4", "Fabric, 3 yards");
		$a24 = array("Halfling Glovemaker", "Halfling", "Awl (as Dagger)", "1d4", "Gloves, 4 pairs");
		$a25 = array("Halfling Gypsy", "Halfling", "Sling", "1d4", "Hex Doll");
		$a26 = array("Halfling Haberdasher", "Halfling", "Scissors (as Dagger)", "1d4", "Fine suits, 3 sets");
		$a27 = array("Halfling Mariner", "Halfling", "Knife (as Dagger)", "1d4", "Sailcloth, 2 yards");
		$a28 = array("Halfling Moneylender", "Halfling", "Short Sword", "1d6", "");
		$a29 = array("Halfling Trader", "Halfling", "Short Sword", "1d6", "");
		$a30 = array("Halfling Vagrant", "Halfling", "Club", "1d4", "Begging Bowl");
		//Humans 31 -
		//Humans 31 - 40 Alchemist to Caravan Guard
		// 32 - Animal Trainer
		$a31 = array("Alchemist", "Human", "Staff", "1d4", "Oil, 1 flask");
		$a32 = array("Animal Trainer", "Human", "Club", "1d4", "Pony");
		$a33 = array("Armourer", "Human", "Hammer (as Club)", "1d4", "Iron Helmet");
		$a34 = array("Astrologer", "Human", "Dagger", "1d4", "Spyglass");
		$a35 = array("Barber", "Human", "Razor (as Dagger)", "1d4", "Scissors (as Dagger)");
		$a36 = array("Beadle", "Human", "Staff", "1d4", "Holy Symbol");
		$a37 = array("Beekeeper", "Human", "Hammer (as club)", "1d4", "Jar of Honey");
		$a38 = array("Blacksmith", "Human", "Hammer (as Club)", "1d4", "Steel Tongs");
		$a39 = array("Butcher", "Human", "Cleaver (as axe)", "1d6", "Side of Beef");
		$a40 = array("Caravan Guard", "Human", "Short Sword", "1d6", "Linen, 1 Yard");
		// Humans 41 - 47 Cheesemaker to Ditchdigger
		$a41 = array("Cheesemaker", "Human", "Cudgel (as Staff)", "1d4", "Stinky Cheese");
		$a42 = array("Cobbler", "Human", "Awl (as Dagger)", "1d4", "Shoehorn");
		$a43 = array("Confidence Artist", "Human", "Dagger", "1d4", "Quality Cloak");
		$a44 = array("Cooper", "Human", "Crowbar (as Club)", "1d4", "Barrel");
		$a45 = array("Costermonger", "Human", "Knife (as Dagger)", "1d4", "Fruit");
		$a46 = array("Cutpurse", "Human", "Dagger", "1d4", "Small Chest");
		$a47 = array("Ditchdigger", "Human", "Shovel (as Staff)", "1d4", "Fine Dirt, 1 lbs.");
		//Humans 48 - 56 Farmer Potato to Onion
		$a48 = array("Farmer Potato", "Human", "Pitchfork (as Spear)", "1d8", "Livestock (see notes)");
		$a49 = array("Farmer Wheat", "Human", "Pitchfork (as Spear)", "1d8", "Livestock (see notes)");
		$a50 = array("Farmer Turnip", "Human", "Pitchfork (as Spear)", "1d8", "Livestock (see notes)");
		$a51 = array("Farmer Corn", "Human", "Pitchfork (as Spear)", "1d8", "Livestock (see notes)");
		$a52 = array("Farmer Rice", "Human", "Pitchfork (as Spear)", "1d8", "Livestock (see notes)");
		$a53 = array("Farmer Parsnip", "Human", "Pitchfork (as Spear)", "1d8", "Livestock (see notes)");
		$a54 = array("Farmer Radish", "Human", "Pitchfork (as Spear)", "1d8", "Livestock (see notes)");
		$a55 = array("Farmer Rutabaga", "Human", "Pitchfork (as Spear)", "1d8", "Livestock (see notes)");
		$a56 = array("Farmer Turnip", "Human", "Pitchfork (as Spear)", "1d8", "Livestock (see notes)");
		// Humans 57 - 70: Fortune Teller to Jester
		// 66 - Herder
		$a57 = array("Fortune Teller", "Human", "Dagger", "1d4", "Tarot Deck");
		$a58 = array("Gambler", "Human", "Club", "1d4", "Dice");
		$a59 = array("Gong Farmer", "Human", "Trowel (as Dagger)", "1d4", "Sack of Night Soil");
		$a60 = array("Ditcher", "Human", "Shovel (as Staff)", "1d4", "Trowel (as Dagger)");
		$a61 = array("Grave Digger", "Human", "Shovel (as Staff)", "1d4", "Trowel (as Dagger)");
		$a62 = array("Guild Beggar", "Human", "Sling", "1d4", "Crutches");
		$a63 = array("Beggar", "Human", "Sling", "1d4", "Crutches");
		$a64 = array("Healer", "Human", "Club", "1d4", "Holy Water, 1 Vial");
		$a65 = array("Herbalist", "Human", "Sling", "1d4", "Herbs, 1 lbs.");
		$a66 = array("Herder", "Human", "Staff", "1d4", "Herding Dog");
		$a67 = array("Hunter", "Human", "Short Bow", "1d6", "Deer Pelt");
		$a68 = array("Huntsman", "Human", "Short Bow", "1d6", "Deer Pelt");
		$a69 = array("Indentured Servant", "Human", "Staff", "1d4", "Locket");
		$a70 = array("Jester", "Human", "Dart", "1d4", "Silk Cloths");
		// Humans 71 - 80: Jeweler to Rope Maker
		$a71 = array("Jeweler", "Human", "Dagger", "1d4", "Gem worth 20 gp");
		$a72 = array("Locksmith", "Human", "Dagger", "1d4", "Fine Tools");
		$a73 = array("Mendicant", "Human", "Club", "1d4", "Cheese Dip");
		$a74 = array("Locksmith", "Human", "Dagger", "1d4", "Fine Tools");
		$a75 = array("Merchant", "Human", "Dagger", "1d4", "");
		$a76 = array("Miller/Baker", "Human", "Club", "1d4", "Flour, 1 lbs.");
		$a77 = array("Minstrel", "Human", "Dagger", "1d4", "Ukulele");
		$a78 = array("Noble", "Human", "Longsword", "1d8", "Gold Ring worth 10 gp");
		$a79 = array("Orphan", "Human", "Club", "1d4", "Rag Doll");
		$a80 = array("Ostler", "Human", "Staff", "1d4", "Bridle");
		$a81 = array("Rope Maker", "Human", "Knife (as Dagger)", "1d4", "Rope, 100'");
		// 81 - 90: Scribe to Urchin
		$a82 = array("Scribe", "Human", "Dart", "1d4", "Parchment, 10 sheets");
		$a83 = array("Shaman", "Human", "Mace", "1d6", "Herbs, 1 lbs.");
		$a84 = array("Slave", "Human", "Club", "1d4", "Strange-looking Rock");
		$a85 = array("Smuggler", "Human", "Sling", "1d4", "Waterproof Sack");
		$a86 = array("Squire", "Human", "Longsword", "1d8", "Steel Helmet");
		$a87 = array("Herald", "Human", "Longsword", "1d8", "Steel Helmet");
		$a88 = array("Tax Collector", "Human", "Longsword", "1d8", "");
		$a89 = array("Trapper", "Human", "Sling", "1d4", "Badger Pelt");
		$a90 = array("Molecatcher", "Human", "Sling", "1d4", "Mole Pelt");
		$a91 = array("Urchin", "Human", "Stick (as Club)", "1d4", "Begging Bowl");
		//92 - 96: Wainwright to Wood Seller
		// Humans 92 -  Wainwright
		$a92 = array("Wainwright", "Human", "Club", "1d4", "Push Cart (see notes)");
		$a93 = array("Weaver", "Human", "Dagger", "1d4", "Fine Suit of Clothes");
		$a94 = array("Wizard's Apprentice", "Human", "Dagger", "1d4", "Black Grimoire");
		$a95 = array("Woodcutter", "Human", "Hand Axe", "1d6", "Bundle of Wood");
		$a96 = array("Woodmonger", "Human", "Hand Axe", "1d6", "Bundle of Wood");
		$a97 = array("Wood Seller", "Human", "Hand Axe", "1d6", "Bundle of Wood");
		// Humans 97 - 99: Mercenary to 
		$a98 = array("Mercenary", "Human", "Longsword", "1d8", "");
		$a99 = array("Outlaw", "Human", "Short Sword", "1d6", "");
		$a100 = array("Soldier", "Human", "Spear", "1d8", "");
	

        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25, $a26, $a27, $a28, $a29, $a30, $a31, $a32, $a33, $a34, $a35, $a36, $a37, $a38, $a39, $a40, $a41, $a42, $a43, $a44, $a45, $a46, $a47, $a48, $a49, $a50, $a51, $a52, $a53, $a54, $a55, $a56, $a57, $a58, $a59, $a60, $a61, $a62, $a63, $a64, $a65, $a66, $a67, $a68, $a69, $a70, $a71, $a72, $a73, $a74, $a75, $a76, $a77, $a78, $a79, $a80, $a81, $a82, $a83, $a84, $a85, $a86, $a87, $a88, $a89, $a90, $a91, $a92, $a93, $a94, $a95, $a96, $a97, $a98, $a99, $a100);
        
        return $array1[$input];
        
}

function getOccupationNumber($select)
{
	if($select == "1")
	{
        $number = rand(0, 100);
	}
	else if($select == "2")
	{
        $number = rand(31, 100);
	}
	else if($select == "3")
	{
        $number = rand(0, 30);
	}
	else if($select == "4")
	{
        $number = rand(0, 10);
	}
	else if($select == "5")
	{
        $number = rand(11, 20);
	}
	else if($select == "6")
	{
        $number = rand(21, 30);
	}
	else
	{
        $number = rand(98, 100);
	}

        return $number;
}


?>