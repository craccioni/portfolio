<?php

$phone = $_REQUEST[phone];

function trataNumero($phone) {
 echo strlen($phone).'<br>';
 // seria melhor cirar uma white list.
 // tratando manualmente
 $phone = str_replace("-", "", $phone);
 $phone = str_replace("(", "", $phone);
 $phone = str_replace(")", "", $phone);
 $phone = str_replace("_", "", $phone);
 $phone = str_replace(" ", "", $phone);
 $phone = str_replace("+", "", $phone);
 //---------------------

 // Se nao tiver DDD e 9 digito
 if (strlen($phone) == 8) {

  $phone = '9'.$phone;

 };

 // Se nao tiver DDD
 if (strlen($phone) == 9) {

  $phone = '11'.$phone;

 };

 // Se tiver DDD mas nao tiver o 9 digito
 if (strlen($phone) == 10) {

  $inicio = substr($phone, 0, 2);
  $fim =  substr($phone, 2, 10);
  $phone = $inicio.'9'.$fim;

 };

 //verificando se é celular
 $celReal = array ("9","8","7","6","5","4");

 // retirando espaços
 $phone = trim($phone);

 // Valida se esta com 55
 $ddi = strripos($phone, '55');
 $val_ddi = strlen($ddi);

 if ($val_ddi != 1) {

        $phone = '55'.$phone;

 }

 // Verifica se e celular mesmo
 if (strlen($phone) == 13) {

        $validaCel = substr($phone,5,1);
        if (in_array($validaCel, $celReal)){

                return $phone;

        } else {

                return false;

        }
 }

}

echo trataNumero($phone);

?>