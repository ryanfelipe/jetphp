<?php
  /*
  * @author João Artur
  * @description www.joaoartur.com - www.github.com/JoaoArtur
  */

  // Modelo de Formatar

  abstract class Formatar {
    public static function mysqlData($data) {
      return date('d/m/Y',strtotime($data));
    }
    public static function urlTexto($texto) {
      return strtolower(str_replace(' ','-',$texto));
    }
    public static function dataMysql($data) {
      return date('Y-m-d',strtotime($data));
    }
    public static function dinheiro($dinheiro) {
      return Config::mostrar('moeda').' '.number_format($dinheiro,2,',','.');
    }
  }
?>