<?php

namespace NamelessLeaf\Main;

use pocketmne\Player;
use pocketmine\Server;
use pocketmine\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;
  
class Main extends PluginBase implements Listener {
  
  public function onEnable(){
    $this->getLogger()->info("enabled");
  }
}
