<?php

class TelegramNotifier
{
    private $conf;

    public function __construct(array $init)
    {
        $this->conf = (object)$init;
    }

    public function send($message)
    {
        // Build uri to make request to the Telegram
        $uri = http_build_query([
            'chat_id' => $this->conf->chat_id,
            'disable_web_page_preview' => $this->conf->disable_web_page_preview,
            'text' => $message
        ]);

        $url = sprintf($this->conf->url, $this->conf->bot_id, $uri);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $repsonse = curl_exec($ch);

        curl_close($ch);

        return json_decode($repsonse);
    }
}