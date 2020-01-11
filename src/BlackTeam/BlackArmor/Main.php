<?php
  
namespace BlackTeam\BlackArmor;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\scheduler\PluginTask;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\entity\EntityArmorChangeEvent;
use pocketmine\Player;
use pocketmine\entity\EffectInstance;
use pocketmine\entity\Effect;
use pocketmine\item\Item;
use pocketmine\inventory\PlayerInventory;
use pocketmine\inventory\ArmorInventory;


class Main extends PluginBase implements Listener{

	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
  }

  public function onLoad() {
    	$this->getLogger()->info(TF::GREEN . "BlackArmor par la BlackTeam");
  }
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
	if($sender instanceof ConsoleCommandSender){
	            if(!isset($args[0])){
                    $sender->sendMessage("Usage: /frags");
                    return false;
                }
	            if(!$p = $this->getServer()->getPlayer($args[0])){
	                $sender->sendMessage(C::RED . "That player could not be found.");
	                return false;
                }
	            $this->giveItem($p);
	            return false;
            }elseif($sender instanceof Player){
	            if(isset($args[0])){
                    if(!$p = $this->getServer()->getPlayer($args[0])){
                        $sender->sendMessage(C::RED . "That player could not be found.");
                        return false;
                    }
                    $this->giveItem($p);
                    return false;
                }
	            $this->giveItem($sender);
	            return false;
            }
        
        return true;
    }
public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        switch($command->getName()){
            case "frags":
                if(isset($args[0])){
                    switch($args[0]){

case "help":
              $sender->sendMessage("§e§lSKYBLOCK NPCS");

$sender->sendMessage("§bprotector");

$sender->sendMessage("§bwise");

$sender->sendMessage("§bsuperior");

$sender->sendMessage("§bold");

$sender->sendMessage("§bunstable");

$sender->sendMessage("§bstrong");
$sender->sendMessage("§o§7/frags (name)");
  break;

                        case "wise":
				    $wise = Item::get(ItemIds::DRAGON_BREATH, 0, 64));
				    $wise->setCustomName("§6§6§7§8§9§9§6§5§1§2§5Wise Dragon Fragments\n\n§5§lEPIC");
              $sender->getInventory()->addItem($wise));
				    
  break;


}
}
return true;
default:
                return false;
        
}
}
  public function onArmorChange(EntityArmorChangeEvent $ev){
  	$player = $ev->getEntity();
    $Nid = $ev->getNewItem()->getID();
    $Oid = $ev->getOldItem()->getID();

    if($player instanceof Player){
    //Casque
    if($Nid->getCustomName("§8§9§8§9§8§6Wise Dragon Chestplate\n\n§7Strenght: \nHealth: §a+195 HP\n§7Defense: §a+175\n§7Intelligence: §a+50\n\n§6Full Set Bonus: Wise Blood\n§7All abilities costs §a50%§7 less mana.\n\n§6§lLEGENDARY"){
 $player->setMaxHealth(110)
	 $player->setHealth(110)
    }elseif($Oid->getCustomName("§8§9§8§9§8§6Wise Dragon Chestplate\n\n§7Strenght: \nHealth: §a+195 HP\n§7Defense: §a+175\n§7Intelligence: §a+50\n\n§6Full Set Bonus: Wise Blood\n§7All abilities costs §a50%§7 less mana.\n\n§6§lLEGENDARY){
      $player->setMaxHealth(20)
	 $player->setHealth(20)
    }
    
    //Plastron
    if($Nid === 303){
 $eff = new EffectInstance(Effect::getEffect(Effect::RESISTANCE) , 2 * 999999, 1, true);
$player->addEffect($eff);
      
    }elseif($Oid === 303){
      $player->removeEffect(11);
      $player->removeEffect(12);
    }
    
    //Jambieres
    if($Nid === 304){
 $eff = new EffectInstance(Effect::getEffect(Effect::SPEED) , 1 * 999999, 1, true);
$player->addEffect($eff);
      
    }elseif($Oid === 304){
      $player->removeEffect(10);
      $player->removeEffect(1);
    }
    
    //Bottes
    if($Nid === 305){
 $eff2 = new EffectInstance(Effect::getEffect(Effect::JUMP_BOOST) , 1 * 999999, 1, true);
$player->addEffect($eff2);
      
    }elseif($Oid === 305){
      $player->removeEffect(23);
      $player->removeEffect(8);
    }
  }
}
}
