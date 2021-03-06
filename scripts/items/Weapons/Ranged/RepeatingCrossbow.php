<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class RepeatingCrossbow extends TypeNormal {
	public function build() {
		$this->name = "repeating crossbow";
		$this->graphic = 0x26C3;
		$this->type = "";
		$this->flags = 0x00;
		$this->value = 0;
		$this->amount = 1;
		$this->color = 0;
		$this->aosstrengthreq = 30;
		$this->aosmindamage = 0;
		$this->aosmaxdamage = 12;
		$this->aosspeed = 41;
		$this->mlspeed = 2;
		$this->oldstrengthreq = 30;
		$this->oldmindamage = 10;
		$this->oldspeed = 41;
		$this->defhitsound = 0;
		$this->defmisssound = 0;
		$this->hits = 31;
		$this->maxHits = 80;
		$this->weight = 6.0;

}}
?>
