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
      case "yo":
        if($sender instanceof Player){
          $this->form($sender);
        } else {
          $sender->sendMessage("you no player wtf? r u a pig");
        }
    }
    return true;
  }
  
  public function form($player){
    $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
    $form = $api->createSimpleForm(function (Player $player, int $data = null)){
      $result = $data;
      if($result === null){
        return true;
      }
      switch($result){
        case 0:
          $player->sendMessage("yes")
        break;
          
        case 1:
          $player->sendMessage("EXIT")
        break;
      }
    });
    $form->setTitle("No Way I Fuckinf Missed 1 Thing");
    $form->setContent("FINALY MOTHER FUCKERS");
    $form->addButton("No Way");
    $form->addButton("Exit Form");
    $form->sendToPlayer($player);
    return $form;
  }
}  
