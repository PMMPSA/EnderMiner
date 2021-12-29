<?php

namespace GN\Sizer;

use pocketmine\plugin\PluginBase;
use pocketmine\command\{Command, CommandSender};
use pocketmine\entity\Entity;
use pocketmine\{Server, Player};

class Sizer extends PluginBase{
    
    public $b = array();
    public function onEnable(){
        $this->getLogger()->info("Size Đã Hoạt Động");
        $this->getServer()->getCommandMap()->register("size", new GN($this));
    }
    
    public function respawn(PlayerRespawnEvent $e){
        $o = $e->getPlayer();
        if(!empty($this->b[$o->getName()])){
            $buyukluk = $this->b[$o->getName()];
            $o->setDataProperty(Entity::DATA_SCALE, Entity::DATA_TYPE_FLOAT, $buyukluk);
        }
    }
}

class GN extends Command{
    
    private $p;
    public function __construct($plugin){
        $this->p = $plugin;
        parent::__construct("size", "Plugin Size by Ghast Noob");
    }
    
    public function execute(CommandSender $g, $label, array $args){
        if($g->hasPermission("size.command")){
            if(isset($args[0])){
                if(is_numeric($args[0])){
                    $this->p->b[$g->getName()] = $args[0];
                    $g->setDataProperty(Entity::DATA_SCALE, Entity::DATA_TYPE_FLOAT, $args[0]);
                    $g->sendMessage("§f[§aSize Của Bạn Đã Được Chỉnh Sang: ".$args[0]."§f]");
                }elseif($args[0] == "reset"){
                    if(!empty($this->p->b[$g->getName()])){
                        unset($this->p->b[$g->getName()]);
                        $g->setDataProperty(Entity::DATA_SCALE, Entity::DATA_TYPE_FLOAT, 1);
                        $g->sendMessage("§f[§aSize Của Bạn Đã Trở Về Bình Thường§f]");
                    }else{
                        $g->sendMessage("§f[§aSize Của Bạn Đã Được Reset§f]");
                    }
                }else{
                    $g->sendMessage("§f[§bCách Dùng Size§f] \n§f•§a /size help §f-§a Để Biết Cách Dùng \n§f•§a /size <Size> §f-§a Để Chỉnh Lại Size \n§f•§a /size reset §f-§a Để Chỉnh Size Lại Mặc Định \n§f•§a Plugin Được Làm Bởi §eGhast Noob§r");
                }
            }
        }
    }
}