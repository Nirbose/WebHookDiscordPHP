# WebHookDiscordPHP

PHP class that will allow you to send Webhook discord from your website (like an article system for example)

## Exemple
```php
use WebHookDiscord\Webhook;

require_once('./WebHookDiscord/WebHook.php');
require_once('./WebHookDiscord/Embed.php');

$url_discord_webhook = "https://url_discord";

$webhook = new Webhook($url_discord_webhook);

$webhook->setMessage('1 message.')->setUser("Nirbose")->setTTS(true);

$webhook->send();

```

__With an Embed:__
```php
use WebHookDiscord\Webhook;

require_once('./WebHookDiscord/WebHook.php');
require_once('./WebHookDiscord/Embed.php');

$url_discord_webhook = "https://url_discord";

$webhook = new Webhook($url_discord_webhook);

$webhook->embed()->setAuthor('Nirbose')->setTitle('My great title')->setDescription('Here is an example of a nice embed, right?');

$webhook->send();

```
