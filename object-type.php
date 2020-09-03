<?php
class komputer{
  public $prosesor,
          $memory;

    public function getcetak(){
        return "$this->prosesor, $this->memory";
    }
      
    public function __construct($prosesor,$memory="12 Gb"){
        $this->prosesor = $prosesor;
        $this->memory = $memory;

    }
  }

  class cetakinfokomputer{
      public function cetakinfo(komputer $komputer){
            $str="{$komputer->getcetak()}";
            return $str;
      }
  }

  $komputerSaya = new komputer("Core i7","8 Gb");
  $infokomputer = new cetakinfokomputer();
  echo $komputerSaya->getcetak();
  echo "<br>";
  echo $infokomputer->cetakinfo($komputerSaya);  
?>