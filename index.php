<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoL API </title>
    <link rel="stylesheet" type="text/css" href="scss/main.css">
</head>
<body>

    <h1 class="logo">Mikail Köker</h1>

    <form action="searchsummoner.php" method="post">
      <input required type="text" title="name" name="name" class="searchbar" placeholder="Search Summoner" />
       <input type="image" src="img/search.png" class="submit" name="submit" alt="submit" width="42px" height="42px">
    </form>



    <div class="slideshow-container">
        <h2 class="h211"><ion-icon name="bulb-outline"></ion-icon>TIPS<ion-icon name="bulb-outline"></ion-icon></h2>

        <div class="mySlides">
            <q>Know your champions
                This seems like an obvious place to start, but knowing every single champion and what their abilities do can help you figure out synergies with your own favorite champions and help you counter your enemies’ picks.</q>
            <p class="author">- Tip #1</p>
        </div>

        <div class="mySlides">
            <q>Focus on a favorite champion
                You can quickly climb in ranked if you specialize at playing a champion in a particular role. Once you learn the mechanics of the champion, you can focus on being in the right place at the right time for your team and set them up for victory.</q>
            <p class="author">- Tip #2</p>
        </div>

        <div class="mySlides">
            <q>Wave management is king
                Minions play a huge role in League of Legends, especially at higher Elo. You can positively lord your increased knowledge of minion wave mechanics against people who don’t understand the intricacies.</q>
            <p class="author">- Tip #3</p>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>

    <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>



    <footer>&copy; Copyright 2020, Mikail Köker</footer>

    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

</body>
</html>
