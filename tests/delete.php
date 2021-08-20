<?php

use WebHookDiscord\Webhook;

require_once('../WebHookDiscord/WebHook.php');
require_once('../WebHookDiscord/Embed.php');

$url_discord_webhook = "";

$webhook = new Webhook($url_discord_webhook);

$webhook->deleteHook(852881829571854407);