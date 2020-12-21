<!doctype html>
<html lang="pt-br">
<head>
<title>Gerador de QR Code do PIX</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Gerador gratuito de QR Code e BR Code do Pix. Gere o seu QR Code ou a linha digitável do Pix Copia e Cola.">
<meta name="keywords" content="pix, qrcode pix, qr code, br code, brcode pix, pix copia e cola" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E6M96X7Y2Y"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E6M96X7Y2Y');
</script>
</head>
<body>
<div class="card">
   <h3>Decodificador do Pix Copia-e-Cola:</h3>
   <form method="POST">
   <div class="row row-cols-lg-auto g-3 align-items-center">
      <label for="brcode" class="form-label">Linha do pix copia-e-cola:</label>
      <textarea class="text-monospace" name="brcode" id="brcodepix" rows="5" cols="100" onclick="this.select()"><?= $_POST["brcode"];?></textarea>
   </div>
   <p align="center"><input type="submit" value="Decodificar o BR Code" class="btn btn-primary"></p>
   </form>
</div>
<?php

if (isset($_POST["brcode"])) {
   require_once("funcoes.php");
   echo '<div class="card"><PRE>';
   print_r(decode_brcode($_POST["brcode"]));
   echo '</PRE></div>';

}

?>
<div class="card">
<p align="center">Este é um projeto opensource criado em 2020 por <a href="http://renato.ovh">Renato Monteiro Batista</a> executado nos servidores da <a href="http://rmbinformatica.com">RMB Informática</a>, o código fonte está disponível no <a href="https://github.com/renatomb/decoder_brcode_pix">Repositório decoder_brcode_pix do Github</a>.</p>
<p align="center">Visite também o <a href="https://qrcodepix.tk/">Gerador de QR Code do Pix</a>.
</div>
</body>
</html>