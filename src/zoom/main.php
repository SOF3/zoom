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
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\entity\EntityArmorChangeEvent;
use pocketmine\event\player\PlayerEditBookEvent;
use pocketmine\event\player\PlayerGameModeChangeEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerBedLeaveEvent;
use pocketmine\event\entity\EntityShootBowEvent;
use pocketmine\event\entity\EntitySpawnEvent;
use pocketmine\event\entity\EntityTeleportEvent;
use pocketmine\event\entity\EntityInventoryChangeEvent;
use pocketmine\event\entity\EntityBlockChangeEvent;
use pocketmine\event\entity\EntityMotionEvent;
use pocketmine\CommandReader;
use pocketmine\CommandExecuter;
use pocketmine\command\defaults\EffectCommand;
# CODE BY Cat 'Discord'
class Main extends PluginBase implements listener {
	
	private $config;
	
	public function onEnable() {
		$this->getLogger()->info("Created by Cat -Discord- ");
		@mkdir($this->getDataFolder());
		$this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, array("effect" => 18, "duration" => 18, "MessageEffect" => 18, "MessageDuration" => 18, "ArmorEffect" => 18, "ArmorDuration" => 18, "EditBookEffect" => 18, "EditBookDuration" => 18, "GamemodeChangeEffect" => 18, "GamemodeChangeDuration" => 18, "InteractEffect" => 18, "InteractDuration" => 18, "BowEffect" => 18, "BowDuration" => 18, "TeleportEffect" => 18, "TeleportDuration" => 18, "LeaveBedEffect" => 18, "LeaveBedDuration" => 18, "InventoryChangeEffect" => 18, "InventoryChangeDuration" => 18, "BlockChangeEffect" => 18, "BlockChangeDuration" => 18));
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onJoin(PlayerJoinEvent $event) {
		$effect = Effect::getEffect($this->config->get("effect"));
		$effect->setDuration($this->config->get("duration") * 18);
		$player = $event->getPlayer();
		$player->addEffect($effect);
		
	}
	
	public function onChat(PlayerChatEvent $event) {
		$effect = Effect::getEffect($this->config->get("MessageEffect"));
		$player = $event->getPlayer();
		$effect->setDuration($this->config->get("MessageDuration") * 18);
		$player->addEffect($effect);
		
	}
				     
	public function onArmorChange(EntityArmorChangeEvent $event) {
		$effect = Effect::getEffect($this->config->get("ArmorEffect"));
		$entity = $event->getEntity();
		$effect->setDuration($this->config->get("ArmorDuration") * 18);
		$entity->addEffect($effect);
					
		}	
	
	public function onEditBook(PlayerEditBookEvent $event) {
		$effect = Effect::getEffect($this->config->get("EditBookEffect"));
		$player = $event->getPlayer();
		$effect->setDuration($this->config->get("EditBookDuration") * 18);
		$player->addEffect($effect);
					
		}
	
	public function onGamemodeChange(PlayerGameModeChangeEvent $event) {
		$effect = Effect::getEffect($this->config->get("GamemodeChangeEffect"));
		$player = $event->getPlayer();
		$effect->setDuration($this->config->get("GamemodeChangeDuration") * 18);
		$player->addEffect($effect);
					
		}
	
	public function onInteract(PlayerInteractEvent $event) {
		$effect = Effect::getEffect($this->config->get("InteractEffect"));
		$player = $event->getPlayer();
		$effect->setDuration($this->config->get("InteractDuration") * 18);
		$player->addEffect($effect);
					
		}
	
	public function onShootBow(EntityShootBowEvent $event) {
		$effect = Effect::getEffect($this->config->get("BowEffect"));
		$entity = $event->getEntity();
		$effect->setDuration($this->config->get("BowDuration") * 18);
		$entity->addEffect($effect);
					
		}
	
	public function onTeleport(EntityTeleportEvent $event) {
		$effect = Effect::getEffect($this->config->get("TeleportEffect"));
		$entity = $event->getEntity();
		$effect->setDuration($this->config->get("TeleportDuration") * 18);
		$entity->addEffect($effect);
					
		}
	
	public function onLeaveBed(PlayerBedLeaveEvent $event) {
		$effect = Effect::getEffect($this->config->get("LeaveBedEffect"));
		$player = $event->getPlayer();
		$effect->setDuration($this->config->get("LeaveBedDuration") * 18);
		$player->addEffect($effect);
					
		}
	
	public function onInventoryChange(EntityInventoryChangeEvent $event) {
		$effect = Effect::getEffect($this->config->get("InventoryChangeEffect"));
		$entity = $event->getEntity();
		$effect->setDuration($this->config->get("InventoryChangeDuration") * 18);
		$entity->addEffect($effect);
					
		}
	
	public function onBlockChange(EntityBlockChangeEvent $event) {
		$effect = Effect::getEffect($this->config->get("BlockChangeEffect"));
		$entity = $event->getEntity();
		$effect->setDuration($this->config->get("BlockChangeDuration") * 18);
		$entity->addEffect($effect);
					
		}
}
