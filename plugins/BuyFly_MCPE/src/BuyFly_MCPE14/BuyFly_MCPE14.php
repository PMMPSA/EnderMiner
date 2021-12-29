<?php 

namespace BuyFly_MCPE14; 

use pocketmine\event\Listener; 
use pocketmine\Player;
use pocketmine\plugin\PluginBase; 
use pocketmine\command\CommandSender; 
use pocketmine\command\Command; 
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config; 

class BuyFly_MCPE14 extends PluginBase implements Listener {	
    public $EconomyAPI;
	private $config;

    public function onEnable(){
		if(!is_dir($this->getDataFolder())){
            @mkdir($this->getDataFolder());
		}	
        $this->saveResource("config.yml"); 
        $this->config = new Config($this->getDataFolder()."config.yml", Config::YAML);
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::GREEN."BuyFly_MCPE14 Việt hóa!");
		$this->EconomyAPI = $this->getServer()->getPluginManager()->getPlugin("EconomyAPI");
	}
    
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) { 
if($cmd == "buyfly") {
$money = $this->EconomyAPI->myMoney($sender);
$amount = $this->config->get("amount");
$muaxong = $this->config->get("muaxong");
$muathatbai = $this->config->get("muathatbai");
if($money >= $amount){
$this->EconomyAPI->reduceMoney($sender, $amount);
$sender->sendMessage("$muaxong");
$sender->setAllowFlight(true);
} else {
$sender->sendMessage(TextFormat::RED."$muathatbai");
}
}
}
}