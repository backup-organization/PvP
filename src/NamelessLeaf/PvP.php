<?php
#
#DO NOT CHANGE 
#MADE BY
#NAMELESSLEAF
#
namespace PvP\NamelessLeaf;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;

use pocketmine\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\EventListener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\utils\TextFormat;
      
class pvp extends PluginBase implements Listener {}
      
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
      
      
public function mainForm($player){
$formapi = $this->getServer()->getPluginManager()->getPlugin("FormAPI");

$form = $formapi->createSimpleForm(function (Player $event, array $data){
$player = $event->getPlayer();
$result = $data[0];
if ($result === null) {
}
switch ($result) {
case 1:

    }
break;



});
$form->setTitle("1VS1");
$form->setContent("PROCEED");
$form->addButton("MATCH");
$form->addButton("testc", 1, "https://i.yike.com/yike.jpg");
$form->sendToPlayer($player);

} 
      }
