<?php
namespace EffectMeForever;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\entity\Effect;
use pocketmine\utils\Config;
use pocketmine\event\Listener;

# CODE BY Cat

class Main extends PluginBase implements Listener {
	
	private $config;
	
	public function onEnable() {
		@mkdir($this->getDataFolder());
		$this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, array("effect" => 10, "time" => 30));
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onQueryRegenerate(QueryRegenerateEvent $event) {
		$event->setPlayerEffect($this->config->get("effect"));
		$event->setPlayerEffectLength($this->config->get("time"));
	}
}
