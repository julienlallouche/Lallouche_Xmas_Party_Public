<?php
// Boilerplate for exercice DAY 3 at university MIW 05
// Code is bad and poor... but just enough for skills students :-) 

// Redirect to script to send email
if (!empty($_POST['email'])) {

    // Sending invitation by email
    header('Location: send_email.php');
    exit;

}


$body_class = "";

// Display delivery status, (tips anti-refreshing) 
if (!empty($_GET['delivery']) and $_GET['delivery'] === "sent") {


    $body_class = "delivery_sent";
}



?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <style type="text/css">


    </style>

</head>
<body>

<div class="delivery_sent">

    <form action="send_email.php" method="POST">
        <div class="formulaire">
            <input type="email" name="email" placeholder="Ton email de star..." required/>
            <button type="submit">
                <h3>Inscrit-toi !</h3>
                <div class="logo">
                    <img src="./img/vip.svg">
                </div>
            </button>
        </div>
        
        <!--<div class="envoi_formulaire">
            <div class="inner_container">
                <img src="./img/mail.svg">
            </div>
        </div>-->
    </form>
</div>

</body>
</html>