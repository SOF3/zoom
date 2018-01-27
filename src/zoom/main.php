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
use pocketmine\event\player\PlayerDeathEvent
use pocketmine\CommandReader;
use pocketmine\CommandExecuter;
use pocketmine\command\defaults\EffectCommand;

# CODE BY Cat 'Discord'

class Main extends PluginBase implements Listener {
	
	private $config;
	
	public function onEnable() {
		@mkdir($this->getDataFolder());
		$this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, array("effect" => 18, "duration" => 18, "DeathEffect" => 18, "DeathDuration" => 18));
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onJoin(PlayerJoinEvent $event) {
		$effect = Effect::getEffect($this->config->get("effect"));
		$player = $event->getPlayer();
		$effect->setDuration($this->config->get("duration") * 18);
		$player->addEffect($effect);
		var_dump($effect);
		
	}
	
	public function onDeath(PlayerDeathEvent $event) {
		$effect = Effect::getEffect($this->config->get("DeathEffect"));
		$killer = $event->getPlayer();
		$effect->setDuration($this->config->get("DeathDuration") * 18);
		$player->addEffect($effect);
		var_dump($effect);
}
	

