<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Rabbit extends Mobile {
	public function summon() {
		$this->name = "a rabbit";
		$this->body = 205;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(6, 10);
		$this->dex = rand(26, 38);
		$this->int = rand(6, 14);
		$this->maxhits = rand(4, 6);
		$this->hits = $this->maxhits;
		$this->damage = 0;
		$this->damageMax = 0;
		$this->resist_physical = rand(5, 10);
		$this->resist_fire = 0;
		$this->resist_cold = 0;
		$this->resist_poison = 0;
		$this->resist_energy = 0;
		$this->karma = 0;
		$this->fame = 150;
		$this->virtualarmor = 6;

}}
?>
