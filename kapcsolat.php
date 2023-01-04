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
        <img src="media/logo.png">
        <?php include('res/navigation.php'); ?>
    </header>

    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>

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

                    echo '<script type="text/javascript">
                        $(document).ready(function() {
                            swal({
                                title: "Hiba!",
                                text: "'.$error.'",
                                icon: "error",
                                button: "Ok",
                                timer: 3000
                            });
                        });
                    </script>';

                    /*echo '<script>alert("Hiba! '.$error.'");</script>'; */
                    /* echo '<p class="success">Sikeres kitöltés.</p>' */
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

                    echo '<script type="text/javascript">
                        $(document).ready(function() {
                            swal({
                                title: "Siker!",
                                text: "Sikeres kitöltés.",
                                icon: "success",
                                button: "Ok",
                                timer: 3000
                            });
                        });
                    </script>';

                    /* echo '<script>alert("Sikeres kitöltés.");</script>'; */

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

    <footer>
        <p>Partnerünk: <a href="http://localhost/beadando/index.php" target="blank">Ide kattints</a><br>
        <a id="email" href="mailto:nemail@example.com">nemail@example.com</a></p>
    </footer>
</body>
</html>