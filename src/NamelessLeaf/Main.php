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

class main extends PluginBase implements Listener {
  
  public function onEnable(){
    $this->getLogger()->info("Its Enabled UvU");
  }
  
  public fuction onDisable(){
    $this->getLogger()->info("Its Disabled not UvU");
  }
  
  public fuction onCommand(CommandSender $sender, Command $cmd, String $lable, Array $args) : bool {
    
    switch($cmd->getName()){
      case "test":
        if($sender instanceof Player){
          $this->form($sender);
        } else {
          $sender->sendMessage("you no player wtf? r u a pig");
        }
    }
    return true;
  }
  
  public function form($player)
}  
