<?php
include('JsonConversie.class.php');

class Ranked
{

    private $summonerId = "";
    private $queueType = "";
    private $tier = "";
    private $rank = "";
    private $summonerName = "";
    private $wins = "";
    private $losses = "";
    private $leaguePoints = "";


    function __construct($summonerId)
    {
        $this->summonerId = $summonerId;

    }


    public function summonerId()
    {
        return $this->summonerId;
    }

    public function queueType()
    {
        return $this->queueType;
    }

    public function tier()
    {
        return $this->tier;
    }

    public function rank()
    {
        return $this->rank;
    }
    public function summonerName()
    {
        return $this->summonerName;
    }
    public function wins()
    {
        return $this->wins;
    }
    public function losses()
    {
        return $this->losses;
    }
    public function leaguePoints()
    {
        return $this->leaguePoints;
    }




    public function setRankedProperties()
    {

        $jsonconversie = new JsonConversie($this->summonerId);
        $jsonconversie->setAPIUrl("https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner/");

        $jsonconversie->Conversie();

        $this->summonerId = $jsonconversie->getInfo("summonerId");
        $this->queueType = $jsonconversie->getInfo("queueType");
        $this->tier = $jsonconversie->getInfo("tier");
        $this->rank = $jsonconversie->getInfo("rank");
        $this->summonerName = $jsonconversie->getInfo("summonerName");
        $this->wins = $jsonconversie->getInfo("wins");
        $this->losses = $jsonconversie->getInfo("losses");
        $this->leaguePoints = $jsonconversie->getInfo("leaguePoints");


    }
}

?>
