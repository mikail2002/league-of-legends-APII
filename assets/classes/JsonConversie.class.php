<?php

class JsonConversie
{
    public $url = "";
    private $api = "?api_key=RGAPI-87cd29b5-558b-417e-b16b-d0208359cc72";
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
