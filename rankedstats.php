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


include('classes/Ranked.class.php');

$postId = $_POST['summonerId'];

$rankedObj = new Ranked($postId);


$rankedObj->setRankedProperties();

echo '<div class="get1">';
echo '	<p>  Type:   ' .$rankedObj->queueType()  .  '</p>';
echo '	<p>	 Rank:	' .$rankedObj->tier()	.'' .$rankedObj->rank()	.'</p>		';
echo '	<p>	  Name:	' .$rankedObj->summonerName()	.'</p>	';
echo '	<p>	  Wins:	' .$rankedObj->wins()	.'</p>	';
echo '	<p>	  Losses:	' .$rankedObj->losses()	.'</p>	';
echo '	<p>	  Lp:	' .$rankedObj->leaguePoints()	.'</p>	';
echo '</div>';

?>

<a href='index.php' class='echo12'><p> Terug naar het hoofdpagina </p></a>;

<footer>&copy; Copyright 2020, Mikail Köker</footer>

</body>
</html>

