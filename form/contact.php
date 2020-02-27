<?php

header( "refresh:5;url=https://vendikasa.it/?f" );
 
 
 
$via = $_POST['via'];
$città = $_POST['città'];
$cap = $_POST['cap'];
$tipo = $_POST['tipo'];
$locali = $_POST['locali'];
$bagni = $_POST['bagni'];
$mq = $_POST['mq'];
$piano = $_POST['piano'];
$numPiani = $_POST['numPiani'];
$riscaldamento = $_POST['riscaldamento'];
$box = $_POST['box'];
$stato = $_POST['stato'];
$affittato = $_POST['affittato'];
$anno = $_POST['anno'];
$luminosità = $_POST['luminosità'];
$esposizione = $_POST['esposizione'];
$terrazza = $_POST['terrazza'];
$balcone = $_POST['balcone'];
$giardino = $_POST['giardino'];
$ascensore = $_POST['ascensore'];
$arredato = $_POST['arredato'];
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];


$formcontent="From: $name \n Email: $email \n Nome: $name: \n Telefono: $phone \n via: $via \n città: $città \n cap: $cap
\n tipo: $tipo \n locali: $locali \n bagni: $bagni \n mq: $mq \n piano: $piano \n numPiani: $numPiani 
\n riscaldamento: $riscaldamento \n box: $box \n stato: $stato \n affittato: $affittato \n anno: $anno 
\n luminosità: $luminosità \n esposizione: $esposizione \n terrazza: $terrazza \n balcone: $balcone \n giardino: $giardino \n ascensore: $ascensore \n arredato: $arredato 
\n email: $email ;




$recipient = "info@vendikasa.it";
$subject = "Contact Form - Test";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

?>










<html lang="it" class="no-js">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-4870348-30"></script>
    <script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-4870348-30');
</script>

    <script type="text/javascript">
	var _iub = _iub || [];
	_iub.csConfiguration = {"lang":"it","siteId":1552744,"cookiePolicyId":99147785, "banner":{ "position":"bottom" } };
</script><script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async> </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <!-- title -->
    <title>Vendikasa, L'agenzia immobiliare senza commissioni</title>
    <meta name="description" content=" Vendikasa è l'agenzia immobiliare online per Milano per vendere casa senza commissioni. Vendi casa rapidamente a Milano" />
    <meta name="keywords" content="real estate, agenzia immobiliare, agenzia immobiliare online, immobiliare italia, immobiliare, agenzia lowcost, vendere casa, vendi casa online" />
    <meta name="author" content="">
    <!-- favicon -->
    <link rel="shortcut icon" href="images/icon/favicon.png">
    <!-- animation -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <!-- themify-icons -->
    <link rel="stylesheet" href="css/themify-icons.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.transitions.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- base -->
    <link rel="stylesheet" href="css/base.css" />
    <!-- elements -->
    <link rel="stylesheet" href="css/elements.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="css/responsive.css" />


</head>
<body>
<h1 style="text-align:center">Grazie! Entro 24 ore riceverai nella tua casella email la nostra dettagliata valutazione del tuo immobile!</h1>
</br>
<h2 style="text-align:center">
<a href='https://vendikasa.it' style='text-decoration:none;color:#ce2200;'> VendiKasa.it</a>
</h2>

<iframe src="https://vendikasa.it" width="100%" height="100%">
</body>
</html>