<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoL API</title>
    <link rel="stylesheet" type="text/css" href="scss/main.css">
</head>
<body>
<h1 class="logo">Mikail Köker</h1>
<?php


include('classes/Summoner.class.php');
include('classes/SummonerHelper.class.php');

$postName = $_POST['name'];


$newName = SummonerHelper::ReplaceTitle($postName);


$summonerObj = new Summoner($newName);


$summonerObj->setSummonerProperties();

echo '<div class="get1">';
echo '	<p>  Name:   ' .$summonerObj->Name()  .  '</p>';
echo '	<p>	 ProfileIcon:	' .$summonerObj->profileIconId()	.'</p>		';
echo '	<p>	  Level:	' .$summonerObj->summonerLevel()	.'</p>	';
echo '	<p>	  id:	' .$summonerObj->id()	.'</p>	';


?>
<h2 class="echo1"><ion-icon name="arrow-down-outline"></ion-icon>
    Put your ID down here<ion-icon name="arrow-down-outline"></ion-icon></h2>
<form action="rankedstats.php" method="post">
    <input required type="text" title="summonerId" name="summonerId" class="searchbar2" placeholder="Ranked Stats" />
    <input type="image" src="img/search.png" class="submit2" name="submit" alt="submit" width="42px" height="42px">
</form>

</div>

<a href='index.php' class='echo12'><p> Terug naar het hoofdpagina </p></a>;


<footer>&copy; Copyright 2020, Mikail Köker</footer>

<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>

