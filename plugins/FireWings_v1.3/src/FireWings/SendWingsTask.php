<?php

namespace FireWings;

use pocketmine\scheduler\PluginTask;
use pocketmine\level\particle\FlameParticle;

class SendWingsTask extends PluginTask{
	
	public function __construct(Main $main){
		$this->main = $main;
		parent::__construct($main);
	}
	
	// Thận Trọng! Говнокод!
	// Bạn Sẽ Thấy Một Điều Bất Ngờ Từ Plugin
	// Điều Bất Ngờ Đó Sẽ Xuất Hiện Trong 1 Thời Gian Dài Cho Đến Ghi Bạn Ghi wingfire off
	// Tác Giả Của Plugin Này Là: Говнокод
	// Plugin Được Code Với 1 Cách Hoàn Hảo
	// Bạn Thật May Mắn Khi Sở Hửu Được Plugin Này
	// Vì Sức Khỏe Của Bạn Tôi Khuyên Bạn Không Nên Edit Lại Plugin Nếu Không Hậu Quả Của Bạn Là Nổ Banh Đầu ^^
	// Tôi đã cảnh báo bạn.
	//
	// Tác Giả Plugin Này Đã Khá Khỏe Mạnh Nên Viết Plugin Không Bị Nổ Banh Đầu
	// Plugin Này Sẽ Cho Bạn Cảm Giác Như 1 Vị Thần
	// Plugin Này Nó Có 1 Mẹo Nhỏ Hãy Thử Tìm Đi Nhé
	// Không Có Gì Để Sao Chép Từ Đây
	
	public function onRun($currentTicks){
		foreach($this->getMain()->getServer()->getOnlinePlayers() as $player){
			if(isset($this->main->players[strtolower($player->getName())])){
				$playerPosition = $player->getPosition()->add(0, 1.2, 0);
				switch($player->getDirection()){
					case 0:
$position = $playerPosition->add(-0.5, 1.4, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1.4, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1.2, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1.2, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1.2, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1.2, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1, 1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1, -1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.8, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.8, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.8, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.8, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.8, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.8, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.8, 1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.8, -1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.6, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.6, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.6, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.6, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.6, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.6, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.6, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.6, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.4, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.4, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.4, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.4, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.4, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.4, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.4, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.4, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.2, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.2, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.2, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.2, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.2, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.2, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.2, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.2, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.2, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.2, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.2, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.2, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.4, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.4, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.4, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.4, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.6, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.6, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.6, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.6, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.6, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.6, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.8, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.8, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.8, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.8, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -1, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -1, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10));
						break 1;
					case 1:
$position = $playerPosition->add(0.8, 1.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.8, 1.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1, 1.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1, 1.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.8, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1.2, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1.2, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.8, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1.2, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1.2, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.8, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.2, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.2, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.8, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.2, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.2, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0, 0, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0, 0, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.2, 0, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.2, 0, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0, -0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0, -0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.2, -0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.2, -0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.2, -0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.2, -0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.4, -0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.4, -0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.2, -0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.2, -0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.4, -0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.4, -0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, -0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, -0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.4, -0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.4, -0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, -0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, -0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, -1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, -1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10));
						break 1;
					case 2:
$position = $playerPosition->add(0.5, 1.4, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 1.4, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 1.2, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 1.2, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 1.2, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 1.2, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 1, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 1, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 1, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 1, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 1, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 1, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 1, 1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 1, -1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.8, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.8, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.8, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.8, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.8, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.8, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.8, 1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.8, -1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.6, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.6, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.6, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.6, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.6, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.6, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.6, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.6, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.4, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.4, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.4, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.4, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.4, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.4, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.4, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.4, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.2, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.2, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.2, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.2, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.2, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.2, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.2, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.2, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.2, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.2, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.2, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.2, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.4, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.4, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.4, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.4, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.6, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.6, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.6, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.6, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.6, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.6, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.8, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.8, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.8, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.8, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.5, -1, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(0.5, -1, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
						break 1;
					case 3:
$position = $playerPosition->add(0.8, 1.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.8, 1.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1, 1.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1, 1.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.8, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1.2, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1.2, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.8, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1.2, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1.2, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.8, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(1, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-1, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.2, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.2, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.8, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.2, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.2, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0, 0, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0, 0, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.2, 0, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.2, 0, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0, -0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0, -0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.2, -0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.2, -0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.2, -0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.2, -0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.4, -0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.4, -0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.2, -0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.2, -0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.4, -0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.4, -0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, -0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, -0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.4, -0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.4, -0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, -0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, -0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 

$position = $playerPosition->add(0.6, -1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
$position = $playerPosition->add(-0.6, -1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 10)); 
						break 1;
				}
			}
		}
	}
	
	public function getMain()
	{
		return $this->main;
	}
}
