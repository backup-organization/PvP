<?php
#
#DO NOT CHANGE 
#MADE BY
#NAMELESSLEAF
#
namespace NamelessLeaf;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;

use pocketmine\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\EventListener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\utils\TextFormat;
      
class main extends PluginBase implements Listener {
      
      public function onEnable(){
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
      }
      
      public function onCommand(CommandSender $sender, Command $cmd, string $lable, array $args) : bool{
  
          switch($cmd->getName()){
                case "pvp":
                      if($sender instanceof Player){
                      $this->openMyForm($sender);
                      }
  break;
  
          }
  return true;
      }     
      
      
      public function openMyForm($player){
            $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
            $form = $api->createSimpleForm(function (Player $player, int $data = null){
                  $result = $data;
                  if($result === null){
                        return true;
                  }
                  switch($result){
                        case 0:
                              break;
                        case 1:
                              break;
                  }
            }};
            $from->setTitle("PvP Options");
            $form->setContent("Choose PvP Mode");
            $form->addButton("1vs1");
            $form->addButton("Sumo");
            $form->sendToPlayer;  
            return $form                              
      }
