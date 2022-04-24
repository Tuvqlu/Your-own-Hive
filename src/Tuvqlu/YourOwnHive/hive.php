<?php

namespace Tuvqlu\YourOwnHive;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class hive extends PluginBase{

    protected function onEnable() : void{  
        $this->getLogger()->info("Plugin has been Enabled");
        @mkdir($this->getDataFolder());
        $this->saveDefaultConfig();
    }

}
