<?php

namespace Watermelon\PlayerJoin;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

use pocketmine\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class main extends PluginBase implements Listener {
   
   public function onEnable(){
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
      @Watermelon($this->getDataFoler());
      $this->saveDefaultConfig();
      $this->getResource("config.yml");
   }
    
   public function onLoad {
      $this->getLogger()->info ("plugin has loaded")
}
   
   public function onJoin(PlayerJoinEvent $event){
      $player = $event->getPlayer();
      
      if($player instanceof Player)
      $player->sendMessage($this->getConfig()->get("Message"));
   }
}
