<?php

use WebHookDiscord\Webhook;

require_once('../WebHookDiscord/WebHook.php');
require_once('../WebHookDiscord/Embed.php');

$url = "https://discord.com/api/webhooks/852877536714424350/ZFjKkAhztOWy1Y_40F_Zz9CbvzeO-igbhp1bVw0JLlufQrEiE-Fzs32PDlLFci7Ayziu";

$webhook = new Webhook($url);

$webhook->embed()
->setColor("#FFFFFF")
->setAuthor("Nirbose", "https://miro.medium.com/max/2400/1*mk1-6aYaf_Bes1E3Imhc0A.jpeg", "https://google.fr")
->setTitle("Un super Titre !")->setUrl("https://google.fr")
->setDescription("Je ne sais pas trop quoi mettre ici donc je met un truc au pif...");

$webhook->send();