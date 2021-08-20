<?php

namespace WebHookDiscord;

class Embed {

    public function setType(string $type = "rich") {
        WebHook::$data['embeds'][0]["type"] = $type;
    }
    
    public function setAuthor(string $name, string $iconURL = null, string $url = null) {
        WebHook::$data['embeds'][0]["author"]["name"] = $name;
        if(!is_null($iconURL)) {
            WebHook::$data['embeds'][0]["author"]["icon_url"] = $iconURL;   
        }
        if(!is_null($url)) {
            WebHook::$data['embeds'][0]["author"]["url"] = $url;  
        }
        return $this;
    }

    public function setTitle(string $title) {
        WebHook::$data['embeds'][0]["title"] = $title;
        return $this;
    }

    public function setDescription(string $description) {
        WebHook::$data['embeds'][0]['description'] = $description;
        return $this;
    }

    public function setUrl(string $url) {
        if(filter_var($url, FILTER_VALIDATE_URL)) {
            WebHook::$data['embeds'][0]['url'] = $url;
        } else {
            WebHook::$data['embeds'][0]['url'] = "";
        }
        return $this;
    }

    public function setColor(string $color) {
        $color = str_replace("#", "", $color);
        WebHook::$data['embeds'][0]['color'] = hexdec($color);
        return $this;
    }

    public function setTimestamp() {
        WebHook::$data['embeds'][0]['timestamp'] = WebHook::$timestamp;
        return $this;
    }

    public function setFooter(string $text, string $iconURL = null) {
        WebHook::$data['embeds'][0]['footer']['text'] = $text;
        if(!is_null($iconURL)) {
            WebHook::$data['embeds'][0]['footer']['icon_url'] = $iconURL;
        }
        return $this;
    }

    public function setThumbnail(string $url) {
        WebHook::$data['embeds'][0]['thumbnail']['url'] = $url;
        return $this;
    }

    public function setImage(string $url) {
        WebHook::$data['embeds'][0]['image']['url'] = $url;
        return $this;
    }

    public function addFields(array $fields) {
        WebHook::$data['embeds'][0]['fields'] = $fields;
        return $this;
    }

    public function addField(string $name, string $value, bool $inline = false) {
        $field = [
            "name"=>$name, 
            "value"=>$value, 
            "inline"=>$inline
        ];
        WebHook::$data['embeds'][0]['fields'][] = $field;
        return $this;
    }

}