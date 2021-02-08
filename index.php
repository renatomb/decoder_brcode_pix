<!doctype html>
<html lang="pt-br">
<head>
<title>Gerador de QR Code do PIX</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Decodificador gratuito do BR Code do Pix copia-e-cola.">
<meta name="keywords" content="pix, qrcode pix, qr code, br code, brcode pix, pix copia e cola" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E6M96X7Y2Y"></script>
<script src="https://kit.fontawesome.com/0f8eed42e7.js" crossorigin="anonymous"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E6M96X7Y2Y');
</script>
<style>
a {text-decoration: none;} 
p {text-align: center;}
</style>
</head>
<body>
<div class="card">
   <h3>Decodificador do Pix Copia-e-Cola:</h3>
   <form method="POST">
   <div class="row row-cols-lg-auto g-3 align-items-center">
      <label for="brcode" class="form-label">Linha do pix copia-e-cola:</label>
      <textarea class="text-monospace" name="brcode" id="brcodepix" rows="5" cols="100" onclick="this.select()"><?= $_POST["brcode"];?></textarea>
   </div>
   <p><button type="submit" class="btn btn-primary">Decodificar o BR Code <i class="fas fa-hammer"></i></button>&nbsp;<a href="https://qrcodepix.dinheiro.tech?doacao" class="btn btn-info">Ajude a manter este projeto <i class="fas fa-hand-holding-usd"></i></a>&nbsp;<a href="https://qrcodepix.dinheiro.tech" class="btn btn-info">Gerador de QR Code Pix <i class="fas fa-qrcode"></i></a></p>
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
<p>Este é um projeto opensource criado em 2020 por <i class="fas fa-user-secret"></i> <a href="http://renato.ovh" target="_blank">Renato Monteiro Batista</a> executado nos servidores <i class="fas fa-server"></i> da <a href="http://rmbinformatica.com" target="_blank">RMB Informática</a>.</p>
<p>O código fonte <i class="fas fa-code"></i> está disponível no <a href="https://github.com/renatomb/decoder_brcode_pix" target="_blank">Repositório <i class="fab fa-git-square"></i> decoder_brcode_pix <i class="fab fa-github"></i></a>.</p>
</div>
</body>
</html>