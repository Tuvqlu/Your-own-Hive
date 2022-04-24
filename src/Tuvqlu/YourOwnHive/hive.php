<?php

namespace Tuvqlu\YourOwnHive;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\entity\EntityTeleportEvent;

class hive extends PluginBase implements Listener{

    protected function onEnable() : void{  
        $this->getLogger()->info("Plugin has been Enabled");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        @mkdir($this->getDataFolder());
        $this->saveDefaultConfig();
    }
    
	public function onJoin(PlayerJoinEvent $event) : void{
		$player = $event->getPlayer();
        $this->sendTitle("Welcome!");
	}
    
    public function onLevelChange(EntityTeleportEvent $event) : void{
		$entity = $event->getEntity();
		if($entity instanceof Player){
            $this->sendTitle("Teleporting to World...");
        }
    }

}
