<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Glassive's personal website.">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <title>Home | Glassive</title>
    <meta name="description" content="Home page for Glassive's personal website.">
</head>

<body>
        <main>
                <div class="wrapper">
                        <? include_once("views/zeus.php")?>
        
                        <div class="buttons">
                                <a class="circle" href="/taikohs"><i class="ph ph-music-notes"></i></a>
                                <a class="circle" target="_blank" rel="noopener noreferrer" href="https://x.com/glassive_"><i class="ph ph-twitter-logo"></i></a>
                                <a class="circle" target="_blank" rel="noopener noreferrer" href="https://osu.ppy.sh/users/12453848"><i class="ph ph-circle"></i></a>
                                <a class="circle" target="_blank" rel="noopener noreferrer" href="https://www.twitch.tv/glassive_"><i class="ph ph-twitch-logo"></i></a>
                                <a class="circle" target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/@glassive"><i class="ph ph-youtube-logo"></i></a>
                        </div>
                </div>

                <div id="stars-container"></div>
        </main> 


        <footer>
                <p style="text-align: center;"> This site is hosted by UNTONE. <a href="https://untone.uk/personal.html">Learn more.</a></p>
        </footer>

        <script src="js/main.js"></script>
</body>
</html>