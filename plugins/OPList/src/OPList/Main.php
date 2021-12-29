<?php

namespace OPList;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

use pocketmine\utils\TextFormat;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

		public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("Plugin OP List Được Làm Bởi Ghast Noob");
		    }
				
		public function onCommand(CommandSender $sender,Command $cmd,$label, array $args) {
		if ($cmd->getName() != "oplist") return false;	
        			
        foreach (array_keys($this->getServer()->getOps()->getAll()) as $ops) {			
                    $p = $this->getServer()->getPlayer($ops);
					$sender->sendMessage("§c༺§aQuản Trị Viên: $ops §c༻");
					}
}
}