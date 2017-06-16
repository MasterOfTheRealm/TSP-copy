<?php

/*
 *
 *    _____ ___________ 
 *   |_   _/  ___| ___ \
 *     | | \ `--.| |_/ /
 *     | |  `--. \  __/ 
 *     | | /\__/ / |    
 *     \_/ \____/\_|   
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author CookieTeam
 *
 *
*/

namespace pocketmine\block;

use pocketmine\event\TranslationContainer;
use pocketmine\item\Item;
use pocketmine\level\Level;
use pocketmine\math\AxisAlignedBB;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

class Bed extends Transparent {

	protected $id = self::BED_BLOCK;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function getHardness(){
		return 0.2;
	}

	public function getResistance(){
		return 1;
	}

	public function getName(){
		static $names = [
		0 => "White Bed",
		1 => "Light Gray Bed",
		2 => "Gray Bed",
		3 => "Black Bed",
		4 => "Brown Bed",
		5 => "Red Bed",
		6 => "Orange Bed",
		7 => "Yellow Bed",
		8 => "Lime Bed",
		9 => "Green Bed",
		10 => "Cyan Bed",
		11 => "Light Blue Bed",
		12 => "Purple Bed",
		13 => "Magenta Bed",
		14 => "Pink Bed"
	    ];
		return $names[$this->meta & 0x0f];
	}

	// TODO onActivate & place... 
}
