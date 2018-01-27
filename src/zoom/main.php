<?php
namespace zoom;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\entity\Effect;
use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\command\utils\InvalidCommandSyntaxException;
use pocketmine\event\TranslationContainer;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\CommandReader;
use pocketmine\CommandExecuter;
use pocketmine\command\defaults\EffectCommand;

# CODE BY Cat 'Discord'

class Main extends PluginBase implements Listener {
	
	private $config;
	
	public function onEnable() {
		@mkdir($this->getDataFolder());
		$this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, array("effect" => 13, "duration" => 13));
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onJoin(PlayerJoinEvent $event) {
		echo "onJoin() called!\n";
		$effect = Effect::getEffect($this->config->get("effect"));
		$player = $event->getPlayer();
		$effect->setDuration($this->config->get("duration"));
		$player->addEffect($effect);
		var_dump($effect);
		
	}
}
	

