<?php



namespace Time;





use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat as R;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{

    public $prefix = "§bTime";


    public function onEnable()
    {
        $this->getLogger()->info(R::DARK_PURPLE . "$this->prefix Plugin Enabled");
    }


    public function onDisable()
    {
        $this->getLogger()->info(R::DARK_RED . "$this->prefix Plugin Disabled");
    }


    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    {
        switch ($cmd->getName()) {
            case "day":
                if ($sender instanceof Player) {
                    if ($sender->hasPermission('day.use')) {
                        $sender->sendMessage("Succesfully Swithed To Day");
                        $sender->getLevel()->setTime(1000);
                    } else {
                        $sender->sendMessage("You Do Not Have The Permission To Use This Command");
                    }
                }
                break;

                    case "night":
                        if ($sender instanceof Player) {
                            if ($sender->hasPermission('night.use')) {
                                $sender->sendMessage("Succesfully Swithed To Night");
                                $sender->getLevel()->setTime(10000);
                            } else {
                                $sender->sendMessage("You Do Not Have The Permission To Use This Command");
                            }
                        }
                        break;
                }

          return true;
        }


}
