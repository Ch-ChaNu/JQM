<?php

/**
 * @name JQM
 * @version α1
 * @main JQM\JQM
 * @api 3.0.0
 * @author ChaNu
 */
namespace jqm;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;

use pocketmine\event\Listener;
use pocketmine\event\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class JQM extends PluginBase implements Listener {
	public function onEnable() {
		$this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
		
		
		$this->getServer()->getCommandMap()->register($this->getDescription()->getName(),$ji);
	}
	public function onJoin(PlayerJoinEvent $event) {
		$event->setJoinMessage ( false );
		$player = $event->getPlayer ();
		$n = ($player->getName());
		if ($player->isOp ()) {
			$this->getServer ()->broadcastMessage ("§l§b[§f +§b ]  §b{$n}님이 접속하셨습니다" ) ;
		} else {
			$this->getServer ()->broadcastMessage ("§l§b[§f +§b ]  §f{$n}님이 접속하셨습니다" );
		}
	}
	public function onQuit(PlayerQuitEvent $event) {
		$event->setQuitMessage ( false );
		$player = $event->getPlayer ();
		$n = ($player->getName());
		
		if ($player->isOp ()) {
			$this->getServer ()->broadcastMessage ( "§l§b[§f  - §b] §b{$n}님이 퇴장하셨습니다" );
		} else {
			$this->getServer ()->broadcastMessage ( "§l§b[§f  -§b ] §f{$n}님이 퇴장하셨습니다" );
		}
	}
	
	
}