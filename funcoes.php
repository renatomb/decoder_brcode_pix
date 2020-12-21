<?php
/*
# Biblioteca de funções para o decodificador da linha do Pix copia e cola
# cujo texto é utilizado para a geração do QRCode para recebimento
# de pagamentos através do Pix do Banco Central.
#
#
# Desenvolvido em 2020 por Renato Monteiro Batista - http://renato.ovh
#
# Este código pode ser copiado, modificado, redistribuído
# inclusive comercialmente desde que mantida a refereência ao autor.
*/ 

function decode_brcode($brcode){
   /*
   # Esta rotina desmembra uma linha Pix Copia-e-cola
   # Todas as linhas são compostas por [ID do campo][Tamanho do campo com dois dígitos][Conteúdo do campo] conforme o padrão EMV®1 QRCPS Merchant Presented
   # Caso o campo possua filhos esta função age de maneira recursiva.
   #
   # Autor: Eng. Renato Monteiro Batista
   */
   $n=0;
   while($n < strlen($brcode)) {
      $codigo=substr($brcode,$n,2);
      $n+=2;
      $tamanho=intval(substr($brcode,$n,2));
      if (!is_numeric($tamanho)) {
         return false;
      }
      $n+=2;
      $valor=substr($brcode,$n,$tamanho);
      $n+=$tamanho;
      if (preg_match("/^[0-9]{4}.+$/",$valor) && ($codigo != 54)){
//      if (($codigo==26) || ($codigo==)) {
         $retorno[$codigo]=decode_brcode($valor);
      }
      else {
         $retorno[$codigo]="$valor";
      }
   }
   return $retorno;
}

?>