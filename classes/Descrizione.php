<?php 
include_once __DIR__.(./Prodotti.php );
class Descrizione {
    protected string $categoria;
    protected string $descrizione;
    protected string $materiali;

    function __construct extends Prodotti($categoria,$descrizione,$materiali);
      //  Parent::__construct

        $this->setCategoria($categoria);
        $this->setDescrizione($descrizione);
        $this->setMateriali($materiali);


}