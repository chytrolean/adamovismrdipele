<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
</head>
<body>
<div class="all">
    <header>
        <nav class="nav-flex">
            <div class="nav-atribute img-atribute"><a href="index.html"><img src="cl.png" alt="logo" class="logo"></a><h2 class="h2-main">Chytrolean</h2><h3 class="h3-atribute">Web developer</h2></div>
            <div class="nav-atribute nav-hover"><h2 class="h2-atribute"><a href="about.html">About</a></h2></div>
            <div class="nav-atribute nav-hover"><h2 class="h2-atribute"><a href="work.html">Work</a></h2></div>
            <div class="nav-atribute nav-hover"><h2 class="h2-atribute"><a href="skill.html">Skill</a></h2></div>
            <div class="nav-atribute nav-hover"><h2 class="h2-atribute"><a href="contact.php">Contact</a></h2></div>
            <div class="nav-atribute icons"><a href="fb"><ion-icon name="logo-facebook" class="ico fb-ico"></a></ion-icon><a href="ig"><ion-icon name="logo-instagram" class="ico ig-ico"></a></ion-icon><a href="in"><ion-icon name="logo-linkedin" class="ico in-ico"></a></ion-icon></div>
        </nav>
    </header>


<div class="contact">
        <form method="POST" action="contact.php" >
              <input name="jmeno" type="text" class="input input-name" placeholder="Vaše jméno">
                <input name="email"type="text" class="input input-email" placeholder="Email">
             <textarea name="zprava" class="input input-zprava" placeholder="Zpráva"></textarea><br>
           <input type="submit" class="contactSubmit" value="Odeslat">
        </form>
    </div>
<?php 

mb_internal_encoding("UTF-8");
        
        

        $hlavicka = 'From:' . $_POST['contact'];
            $hlavicka .= "\nMIME-Version: 1.0\n";
            $hlavicka .= "Content-Type: text/html; charset=\"utf-8\"\n";
            $adresa = 'daniel.herejk23@gmail.com';
                    $predmet = 'new message';
                    $hlaska='';
    if($_POST) {
        if (isset($_POST['jmeno']) && $_POST['jmeno'] &&
                    isset($_POST['email']) && $_POST['email']) {
            $uspech = mail($adresa, $predmet, $_POST['zprava']);
            if ($uspech) {
                $hlaska = '<h2 class="php">Email byl odeslán </h2>';
            }
 else {
                $hlaska = '<h2 class="php">Email se nepodařilo odeslat </h2>';
            }
        } else {
            $hlaska = '<h2 class="php">formulář není správně vyplněný! </h2>';
        }
    }
    if ($hlaska) {
        echo ('<p>' . $hlaska . '</p>');
    }
?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="jQ.js"></script>
<script src="script.js"></script>
</body>
</html>