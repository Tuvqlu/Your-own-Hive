<?php

namespace Tuvqlu\YourOwnHive;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class hive extends PluginBase{
  
  public function onEnable(): void{
      $this->getLogger()->( . TextFormat::DARK_RED . "This is still in-development!");
  }
}
