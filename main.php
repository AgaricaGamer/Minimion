<?php

declare(strict_types=1);

namespace AgaricaGamer\Minimion;

use AgaricaGamer\Minimion\entities\MinionEntity;
use muqsit\invmenu\InvMenuHandler;
use pocketmine\entity\Entity;
use pocketmine\plugin\PluginBase;

class PiggyMinions extends PluginBase
{
    public function onEnable(): void
    {
        if (!InvMenuHandler::isRegistered()) {
            InvMenuHandler::register($this);
        }

        Entity::registerEntity(MinionEntity::class, true);

        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
    }
}