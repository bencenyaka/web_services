<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My web</title>

    <link rel="stylesheet" href="res/style.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

    <header>
        <a id="index" href="index.php"><img src="media/logo.png"></a>
        <?php include('res/navigation.php'); ?>
        <a id="kapcs" href="kapcsolat.php">Kapcsolat</a>
    </header>

    <section id="bemutat">
        <div class="container">
            <div class="text">
                <h1>Lorem ipsum sit damet.</h1>
                <p>Lorem ipsum<br>
                Lorem ipsum sit damet lorem ipsum.</p>
                <a href="http://localhost/webdes/index.php" target="blank"><button>Klikk ide!</button></a>
            </div>

            <div class="img"><img src="media/bemutkep.png"></div>
        </div>
    </section>

    <section id="szolgal">
        <h1>Szolgáltatások</h1>
        <hr>
        <ul>
            <li>
                <h2>Webdesign</h2>
                <img src="media/webdes.png" alt="Web Desing">

                <?php          
                    $text= file_get_contents("text/webdesign.txt");
                    echo'
                    <p>'. $text .'</p>';
                ?>

            </li>
            <li>
                <h2>Videó szerkesztés</h2>
                <img src="media/vediting.png" alt="Video Editing">
                
                <?php          
                    $text= file_get_contents("text/videditing.txt");
                    echo'
                    <p>'. $text .'</p>';
                ?>
                
            </li>
            <li>
                <h2>Kép szerkesztés</h2>
                <img src="media/pedit.png" alt="Photo editing">
                
                <?php          
                    $text= file_get_contents("text/photoediting.txt");
                    echo'
                    <p>'. $text .'</p>';
                ?>
                
            </li>
        </ul>
    </section>

    <section id="galeria">
        <h1>Galéria</h1>
        <hr>
        <div class="galeria-div">
            <a data-fancybox="gallery" href="media/gallery1.jpeg"><img src="media/gallery1.jpeg"></a>
            <a data-fancybox="gallery" href="media/gallery2.jpg"><img src="media/gallery2.jpg"></a>
            <a data-fancybox="gallery" href="media/gallery3.jpg"><img src="media/gallery3.jpg"></a>
        </div>
        <div class="galeria-div">
            <a data-fancybox="gallery" href="media/gallery4.jpg"><img src="media/gallery4.jpg"></a>
            <a data-fancybox="gallery" href="media/gallery5.jpg"><img src="media/gallery5.jpg"></a>
            <a data-fancybox="gallery" href="media/gallery6.jpg"><img src="media/gallery6.jpg"></a>
        </div>
    </section>

    <section id="projektek">
        <h1>Projektek</h1>
        <hr>
        <div class="grid-container">
            <div class="grid-item">
                <h2>Portfólió</h2>
                <?php          
                    $text= file_get_contents("text/portfolio.txt");
                    echo'
                    <p>'. $text .'</p>';
                ?>
                <p class="link">Megtekintéshez kattintson <a href="https://bencenyaka.github.io/personal_portfolio/" target="blank"><span>ide</span></a></p>
            </div>

            <div class="grid-item">
                <h2>Időjárás App</h2>
                <?php          
                    $text= file_get_contents("text/idoj.txt");
                    echo'
                    <p>'. $text .'</p>';
                ?>
                <p class="link">Megtekintéshez kattintson <a href="https://bencenyaka.github.io/weather_app/" target="blank"><span>ide</span></a></p>
            </div>

            <div class="grid-item">
                <h2>Madeira</h2>
                <?php          
                    $text= file_get_contents("text/madeira.txt");
                    echo'
                    <p>'. $text .'</p>';
                ?>
                <p class="link">Megtekintéshez kattintson <a href="https://www.youtube.com/watch?v=NcBjx_eyvxc" target="blank"><span>ide</span></a></p>
            </div>

            <div class="grid-item">
                <h2>Videó - MP3</h2>
                <?php          
                    $text= file_get_contents("text/vidmp3.txt");
                    echo'
                    <p>'. $text .'</p>';
                ?>
                <p class="link">Megtekintéshez kattintson <a href="https://dark-elk-kilt.cyclic.app/" target="blank"><span>ide</span></a></p>
            </div>

            <div class="grid-item">
                <h2>Francia Alpok</h2>
                <?php          
                    $text= file_get_contents("text/fralp.txt");
                    echo'
                    <p>'. $text .'</p>';
                ?>
                <p class="link">Megtekintéshez kattintson <a href="https://www.instagram.com/french_alps/" target="blank"><span>ide</span></a></p>
            </div>

            <div class="grid-item">
                <h2>Horvátország</h2>
                <?php          
                    $text= file_get_contents("text/horv.txt");
                    echo'
                    <p>'. $text .'</p>';
                ?>     
                <p class="link">Megtekintéshez kattintson <a href="https://www.youtube.com/watch?v=eZZLhNV3I50" target="blank"><span>ide</span></a></p>
            </div>
        </div>
    </section>
</body>
</html>