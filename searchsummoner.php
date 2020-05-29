<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LoL Api</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <?php
        include('assets/classes/Summoner.class.php');
        include('assets/classes/SummonerHelper.class.php');
        include('assets/classes/Ranked.class.php');

        $postName = $_POST['name'];
        $newName = SummonerHelper::ReplaceTitle($postName);
        $summonerObj = new Summoner($newName);
        $summonerObj->setSummonerProperties();
        $postId = $summonerObj->id();
        $rankedObj2 = new Ranked($postId);
        $rankedObj2->setRankedProperties();
    ?>
    <section class="menu summoner">
        <div id="promo1">
            <div class="jumbotron">
                <h1>Summoner info/stats</h1>
                <div class="row no-gutters stats-grid">
                    <div class="col-md-6">
                        <div class="stat-small">
                            <h3>Name:</h3>
                            <h4><?php echo $summonerObj->Name(); ?></h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stat-small">
                            <h3>Level &amp; Lp:</h3>
                            <h4>Lvl. <?php echo $summonerObj->summonerLevel()?> - <?php echo $rankedObj2->leaguePoints(); ?> LP</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stat-small">
                            <h3>QueueType:</h3>
                            <h4><?php echo $rankedObj2->queueType(); ?></h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stat-small">
                            <h3>Rank:</h3>
                            <h4><?php echo $rankedObj2->tier()?> <?php echo $rankedObj2->rank(); ?></h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stat-small">
                            <h3>Wins:</h3>
                            <h4><?php echo $rankedObj2->wins(); ?></h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stat-small">
                            <h3>Losses:</h3>
                            <h4><?php echo $rankedObj2->losses(); ?></h4>
                        </div>
                    </div>
                </div><a class="goback" href="index.php" style="margin-top: 0;">Go back</a></div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>