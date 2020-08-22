<?php

namespace Main;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

public function onEnable()
{
$this->getLogger()->info("[PLUGIN 0v3rCore ON]");
}

public function onDisable()
{
$this->getLogger()->info("[PLUGIN 0v3rCore OFF]");
}

public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{


switch($cmd->getName()){

	case "gm0":
	
	if($sender instanceof Player){
	if($sender->hasPermission("overgm0.cmd")){
	$sender->sendMessage("§7[§cOv3r§aGamemode§7] Vous avez été mis en Gamemode: survie.");
	$sender->sendGamemode(0);
	}else{
	$sender->sendMessage("§7[§c0v3r§aGamemode§7] §cErreur vous n'avez pas la permission.");
	}
	}break;
	
	case "gm1":
	
	if($sender instanceof Player){
	if($sender->hasPermission("overgm1.cmd")){
	$sender->sendMessage("§7[§cOv3r§aGamemode§7] Vous avez été mis en Gamemode: créatif.");
	$sender->sendGamemode(1);
	}else{
	$sender->sendMessage("§7[§c0v3r§aGamemode§7] §cErreur vous n'avez pas la permission.");
	}
	}break;
	
	case "gm2":
	
	if($sender instanceof Player){
	if($sender->hasPermission("overgm2.cmd")){
	$sender->sendMessage("§7[§cOv3r§aGamemode§7] Vous avez été mis en Gamemode: aventure.");
	$sender->sendGamemode(2);
	}else{
	$sender->sendMessage("§7[§c0v3r§aGamemode§7] §cErreur vous n'avez pas la permission.");
	}
	}break;
	
	case "gm3":
	
	if($sender instanceof Player){
	if($sender->hasPermission("overgm3.cmd")){
	$sender->sendMessage("§7[§cOv3r§aGamemode§7] Vous avez été mis en Gamemode: spectateur.");
	$sender->sendGamemode(3);
	}else{
	$sender->sendMessage("§7[§c0v3r§aGamemode§7] §cErreur vous n'avez pas la permission.");
	}
	}break;
	
}

}

}

