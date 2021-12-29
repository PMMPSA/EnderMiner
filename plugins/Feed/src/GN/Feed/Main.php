<?php
namespace GN\Feed;

use pocketmine\plugin\PluginBase; 
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase {
	
	public function onEnable() {
		$msg = [
			" ",
			"  ______            _ ",
			" |  ____|          | |",
			" | |__ ___  ___  __| |",
			" |  __/ _ \/ _ \/ _` |",
			" | | |  __/  __/ (_| |",
			" |_|  \___|\___|\__,_|",
			" ",
			" Plugin Làm Bởi Ghast Noob",
			" "
		];
		$this->getLogger()->notice(implode("\n", $msg));
	}
	
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
		if($sender instanceof Player) {
			if($sender->getFood() == 20) {
				$sender->sendMessage("§f[§aThanh Thức Ăn Của Bạn Vẫn Đang Đầy§f]");
				return true;
			}
			
			$sender->setFood(20);
			$sender->sendMessage("§f[§aThanh Thức Ăn Của Bạn Đã Được Khôi Phục§f]");
		}
	}
	
}
