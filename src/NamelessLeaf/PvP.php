<?php

namespace NamelessLeaf;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSenser;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use jojoe77777\FormAPI;

class PvP extends PluginBase implements Listener {
  
  public function onEnable(){
    
    switch($cmd->getName()){
      case "pvp":
        if($sender instanceof Player){
          $this->openMyForm($sender);
      }
      break;
     }
    
    return true;
  }   
  
  
}
