<?php

namespace Ariza\LobbyCore\Listeners;

use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat as C;

class PlayerListeners implements Listener {

    public function onJoin(PlayerJoinEvent $event): void {
        $player = $event->getPlayer();
        $player->sendMessage(C::GREEN . "Welcome to the server!");
    }

    public function onDamage(EntityDamageEvent $event) {
        $event->cancel();
    }
}