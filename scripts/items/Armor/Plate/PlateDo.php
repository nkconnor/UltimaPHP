<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class PlateDo extends TypeNormal {
	public function build() {
		$this->name = "plate do";
		$this->graphic = 0x277D;
		$this->type = "";
		$this->flags = 0x00;
		$this->value = 0;
		$this->amount = 1;
		$this->color = 0;
		$this->aosstrengthreq = 0;
		$this->aosmindamage = 0;
		$this->aosmaxdamage = 0;
		$this->aosspeed = 0;
		$this->mlspeed = 0;
		$this->oldstrengthreq = 0;
		$this->oldmindamage = 0;
		$this->oldspeed = 0;
		$this->defhitsound = 0;
		$this->defmisssound = 0;
		$this->hits = 60;
		$this->maxHits = 70;
		$this->weight = 10.0;

}}
?>
