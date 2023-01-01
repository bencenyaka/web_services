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
</head>
<body>

    <header>
        <img src="media/logo.png">
        <?php include('res/navigation.php'); ?>
    </header>

    <section id="bemutat">
        <div class="container">
            <div class="text">
                <h1>Lorem ipsum sit damet.</h1>
                <p>Lorem ipsum<br>
                Lorem ipsum sit damet lorem ipsum.</p>
                <a href="#kapcsolat"><button>Klikk ide!</button></a>
            </div>

            <div class="img"><img src="media/bemutkep.png"></div>
        </div>
    </section>

    <section id="szolgal">
        <h1>Szolgáltatások</h1>
        <hr>
        <ul>
            <li>
                <h2>Webdesing</h2>
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
            <a data-fancybox="gallery" href="media/1.png"><img src="media/1.png"></a>
            <a data-fancybox="gallery" href="media/2.png"><img src="media/2.png"></a>
        </div>
        <div class="galeria-div">
            <a data-fancybox="gallery" href="media/4.jpg"><img src="media/4.jpg"></a>
            <a data-fancybox="gallery" href="media/4.png"><img src="media/4.png"></a>
            <a data-fancybox="gallery" href="media/3.jpg"><img src="media/3.jpg"></a>
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
                <h2>Videó - MP3 letöltő</h2>
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

    <section id="kapcsolat">
        <h1>Kapcsolat</h1>
        <hr>
        <form method="post" action="index.php">
            <div>
                <label for="inName">Teljes név:<span>*</span></label>
                <input type="text" name="name" placeholder="Arató András">
            </div>
            <div>
                <label for="inEmail">Email:<span>*</span></label>
                <input type="email" name="email" placeholder="aratoandras@host.com">
            </div>
            <div>
                <label for="InPhonenumber">Telefonszám:</label>
                <input type="tel" name="phone_number" placeholder="01234567891">
            </div>
            <div>
                <label for="InMessage">Üzenet:<span>*</span></label>
                <textarea type="text"  name="message" placeholder="Az üzenetét ebbe a mezőbe írja."></textarea>
            </div>
            <div>
                <p><sup><span>*</span><span>kötelező</span></sup></p>
            </div>
            <div style="text-align:center;">
                <button name="sendMessage">Küldés</button>
            </div>
        </form>

        <?php

            $databaseName = "database";
            $databaseUser = "admin";
            $databasePsw = "admin";
                        
            $dsn = "mysql:host=localhost;dbname=". $databaseName .";charset=utf8mb4";
            $db = new PDO($dsn, $databaseUser, $databasePsw);

            $vName = "";
            $vEmail = "";
            $vMessage = "";
            $vPhonenumber = 0;

            if(isset($_POST['sendMessage']))
            {
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $phone_number = $_POST['phone_number'];
                $message = trim($_POST['message']);

                $error = false;

                if(strlen($name) < 1)
                {
                    $error = "A rendes nevével töltse ki a mezőt.";
                }
                if(strlen($email) < 1)
                {
                    $error = "A rendes email címével töltse ki a mezőt.";
                }
                if(strlen($message) < 1)
                {
                    $error = "Üzenetével töltse ki a mezőt.";
                }
                if(is_numeric($phone_number) == false && empty($phone_number) == false){
                    $error = "A rendes telefonszámával töltse ki a mezőt.";
                }
                if($error)
                {
                    $vName = $name;
                    $vEmail = $email;
                    $vPhonenumber = $phone_number;
                    $vMessage = $message;
                    
                    echo '<p class="error">Hiba! '.$error.'</p>';
                }
                else
                {
                    $sql = "INSERT INTO data VALUES(NULL, :name, :email, :phone_number, :message)";
                    $values = [
                        'name' => $name,
                        'email' => $email,
                        'phone_number' => $phone_number,
                        'message' => $message,
                    ];

                    $query = $db->prepare($sql);
                    $query->execute($values);

                    echo '<p class="success">Sikeres kitöltés.</p>';

                    /* File kiírás */

                    $file = fopen("contacts.txt", "a") or die("Unable to open this file.");
                    $mesfile = fopen("messages.txt", "a") or die("Unable to open this file.");
                    
                    $txt = $name . " | " . $email . " | " . $phone_number . "\n\n";
                    $mestxt = $name . " | " . $message . "\n\n";

                    fwrite($file, $txt);
                    
                    fwrite($mesfile, $mestxt);
                    
                    fclose($file);
                    fclose($mesfile);

                }
            }

        ?>
    </section>

</body>
</html>