<?php

use WebHookDiscord\Webhook;

require_once('../WebHookDiscord/WebHook.php');
require_once('../WebHookDiscord/Embed.php');

$url_discord_webhook = "url";

$webhook = new Webhook($url_discord_webhook);

$webhook->setMessage('Un petit message tranquille.')->embed()->setDescription("Une petite description !");

$webhook->send();

