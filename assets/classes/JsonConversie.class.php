<?php

class JsonConversie
{
    public $url = "";
    private $api = "?api_key=RGAPI-09a679f3-a106-441d-8f60-5dd54f17498b";
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
        return $this->data[$whichInfo];
    }
}
?>
