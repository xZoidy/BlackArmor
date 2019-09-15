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

  public function onArmorChange(EntityArmorChangeEvent $ev){
  	$player = $ev->getEntity();
    $Nid = $ev->getNewItem()->getID();
    $Oid = $ev->getOldItem()->getID();

    if($player instanceof Player){
    //Casque
    if($Nid === 302){
 $eff2 = new EffectInstance(Effect::getEffect(Effect::NIGHT_VISION) , 1 * 999999, 0, true);
$player->addEffect($eff2);
      
    }elseif($Oid === 302){
      $player->removeEffect(16);
      $player->removeEffect(22);
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
