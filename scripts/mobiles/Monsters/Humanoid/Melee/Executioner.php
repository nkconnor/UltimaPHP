<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Executioner extends Mobile {
	public function summon() {
		$this->name = "male";
		$this->body = 0;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(386, 400);
		$this->dex = rand(151, 165);
		$this->int = rand(161, 175);
		$this->maxhits = 0;
		$this->hits = $this->maxhits;
		$this->damage = 8;
		$this->damageMax = 10;
		$this->resist_physical = rand(35, 45);
		$this->resist_fire = rand(25, 30);
		$this->resist_cold = rand(25, 30);
		$this->resist_poison = rand(10, 20);
		$this->resist_energy = rand(10, 20);
		$this->karma = -5000;
		$this->fame = 5000;
		$this->virtualarmor = 40;

}}
?>
