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

class Main extends PluginBase implements Listener {
  
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
  
  $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
                    $result = $data;
                    if ($result === null) {
                        return;
                    }
                    if($result === 0) {
                      
                    }
              
                    switch ($result) {
                        case 0:
                        break;
                    }
                
                    return;
                } );
                $form->setTitle("Title");
                $form->setContent("yay content");
                $form->addButton("test");
                $form->sendToPlayer($player);
}
