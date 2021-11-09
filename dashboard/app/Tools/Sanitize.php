<?php

namespace App\Tools;

class Sanitize
{
    public function onlyNumbers($string)
    {
        return preg_replace('/[^0-9]/', '', $string);
    }
    function validCpf($string){
        $clear_prod = $this->onlyNumbers($string);
        if(is_numeric($clear_prod)){
          $clear_prod = substr(str_repeat("0",11).$clear_prod, -11);
          return $clear_prod;
        }
        return null;
      }
}
