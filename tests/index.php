<?php

use WebHookDiscord\Webhook;

require_once('../WebHookDiscord/WebHook.php');
require_once('../WebHookDiscord/Embed.php');

$url_discord_webhook = "https://discord.com/api/webhooks/852523021998882826/iKbtViLE83pp8PXEAM80JaoqMVttcWyjfhNnRyU6uysAbL8KxRiDM6_ubkHVKT27S5hp";

$webhook = new Webhook($url_discord_webhook);

$webhook->setMessage('Un petit message tranquille.')->embed()->setDescription("Une petite description !");

$webhook->send();

