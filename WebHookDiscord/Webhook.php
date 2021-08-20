<?php

namespace WebHookDiscord;

class Webhook {
    
    public $webhookurl;
    public static $timestamp;
    public static $data = [];

    public function __construct(string $webhookurl)
    {
        $this->webhookurl = $webhookurl;
        $this::$timestamp = date("c", strtotime("now"));
    }

    public function setMessage(string $message) {
        $this::$data['content'] = $message;
        return $this;
    }

    public function setUser(string $username = "", string $avatarURL = "") {
        if(!empty($username)) {
            $this::$data['username'] = $username;
        } 
        if(!empty($avatarURL)) {
            $this::$data['avatar_url'] = $avatarURL;
        }
        return $this;
    }

    public function setTTS(bool $tts = false) {
        $this::$data['tts'] = $tts;
        return $this;
    }

    public function setFile(string $file = "") {
        $this::$data['file'] = $file;
        return $this;
    }

    public function embed() {
        $embed = new Embed;
        return $embed;
    }

    public function deleteHook(int $id) {
        $this->webhookurl .= "/messages/$id";
        $this->send();
    }


    public function send() {
        $json = json_encode($this::$data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_TIMEOUT, 5); // 5 seconds
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5); // 5 seconds

        curl_setopt($curl, CURLOPT_URL, $this->webhookurl);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }
} 