<?php

namespace Watermelon\PlayerJoin;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat as O;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{

  public function onEnable(){

    @mkdir($this->getDataFolder());
         $this->saveResource("config.yml");
         $this->config= new Config($this->getDataFolder() . "config.yml",
Config::YAML);
 $this->getServer()->getPluginManager()->registerEvents($this, $this);
}
  public function onJoin(PlayerJoinEvent $event){

    $player = $event->getPlayer();
    $name = $event->getPlayer()->getName();

    $player->sendMessage($this->getConfig()->get("join-message"));
  }
}
