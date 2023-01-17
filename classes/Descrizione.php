<?php 
require_once __DIR__. "/Prodotti.php";
class Descrizione extends Prodotti {
    protected string $categoria;
    protected string $descrizione;
    

    function __construct ($animale,$image,$titolo,$categoria,$prezzo,$descrizione){

       parent::__construct($animale,$image,$titolo,$prezzo);

       $this->setCategoria($categoria);
       $this->setDescrizione($descrizione);
      }
        
        



    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of descrizione
     */ 
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set the value of descrizione
     *
     * @return  self
     */ 
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    
}