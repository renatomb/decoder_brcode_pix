function decode_brcode(brcode, recursivamente=true){
   /*
   # Esta rotina desmembra uma linha Pix Copia-e-cola
   # Todas as linhas são compostas por [ID do campo][Tamanho do campo com dois dígitos][Conteúdo do campo] conforme o padrão EMV®1 QRCPS Merchant Presented
   # Caso o campo possua filhos esta função age de maneira recursiva.
   #
   # Autor: Eng. Renato Monteiro Batista (http://renato.ovh)
   # Live demo disponivel em: https://dinheiro.tech/decodificador-brcode-pix
   # Codigo fonte disponivel no repositorio do github: https://github.com/renatomb/decoder_brcode_pix
   */
   if (!recursivamente) {
      console.log('Decode nao recursivo ' + brcode);
   }
   let n = 0;
   let retorno = {};
   while(n < brcode.length) {
      let codigo = brcode.substring(n, n+2);
      n += 2;
      let tamanho = parseInt(brcode.substring(n, n+2));
      if (isNaN(tamanho)) {
         return false;
      }
      n += 2;
      let valor = brcode.substring(n, n+tamanho);
      console.log('Cod:' + codigo + ' T: ' + tamanho + ' Data: ' + valor);
      n += tamanho;
      if (codigo == '26') {
         retorno['26']=decode_brcode(valor, false);
      }
      else if (recursivamente && (/^[0-9]{4}.+$/.test(valor) && (codigo != '54'))) {
         retorno[codigo] = decode_brcode(valor);
      }
      else {
         retorno[codigo] = valor;
      }
   }
   return retorno;

}