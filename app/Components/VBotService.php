<?php
/**
 * Created by PhpStorm.
 * User: wuguozhang
 * Date: 2019-03-24
 * Time: 12:18
 */
namespace App\Components;

use Hanson\Vbot\Foundation\Vbot;
use Hanson\Vbot\Message\Text;

class VBotService
{


    public function __construct()
    {

    }

    public static function hello()
    {
        return 'hello world';
    }

    public function start()
    {
        $options = config('vbot');

        $vbot = new Vbot($options);
        $vbot->messageHandler->setHandler(function ($message) {
            Text::send($message['from']['UserName'], 'Hi, I\'m Vbot!');
        });
        $vbot->server->serve();
    }
}