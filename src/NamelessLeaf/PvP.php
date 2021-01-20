<php?

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;

use pocketmine\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\EventListener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\utils\TextFormat
      
class main extends PluginBase implements Listener {
      
      public function onEnable(){
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
      }
      
      public function onCommand(CommandSender $sender, Command $cmd, string $lable, array $args) : bool{
  
          switch($cmd->getName()){
              case "PvP"
  
  
          }
      }     
      }
