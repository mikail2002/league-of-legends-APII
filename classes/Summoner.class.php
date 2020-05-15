<?php
include('JsonConversie.class.php');

class Summoner
{

    private $name = "";
    private $profileIconId = "";
    private $summonerLevel = "";
    private $id = "";


    function __construct($name)
    {
        $this->name = $name;

    }


    public function name()
    {
        return $this->name;
    }

    public function profileIconId()
    {
        return $this->profileIconId;
    }

    public function summonerLevel()
    {
        return $this->summonerLevel;
    }

    public function id()
    {
        return $this->id;
    }




    public function setSummonerProperties()
    {

        $jsonconversie = new JsonConversie($this->name);
        $jsonconversie->setAPIUrl("https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/");

        $jsonconversie->Conversie();


        $this->name = $jsonconversie->getInfo("name");
        $this->profileIconId = $jsonconversie->getInfo("profileIconId");
        $this->summonerLevel = $jsonconversie->getInfo("summonerLevel");
        $this->id = $jsonconversie->getInfo("id");


    }
}

?>
