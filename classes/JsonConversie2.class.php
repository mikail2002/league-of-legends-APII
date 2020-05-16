<?php

class JsonConversie
{
    public $url = "";
    private $api = "?api_key=RGAPI-6d0445c5-02b6-440d-9584-4b8fd2f26ace";
    private $input = "";
    private $data = "";


    function __construct($input)
    {
        $this->input = $input;

    }


    function setAPIUrl($url)
    {
        $this->url = $url;
    }

    function api($api)
    {
        $this->api = $api;
    }

    function Conversie()
    {
        $json = file_get_contents($this->url ."". $this->input ."". $this->api);

        return $this->data = json_decode($json,true);
    }

    function getInfo($whichInfo)
    {
        return $this->data[0][$whichInfo];
    }
}
?>
