<?php

class pessoa implements animal
{

    private $estimacao;

    public function addEstimacao (animal $objanimal)
{
    $this-> estimacao[]= $objanimal->getAnimal();

}

     public function showEstimacao()
     {
        echo 'Animal de Estimação: <br>';
        foreach (this ->estimacao as $estim)
     }
     echo $estim '<br>';
    }

   

  