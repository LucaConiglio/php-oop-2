<?php 
class Prodotti {
 protected string $animale;
 protected string $image;
 protected string $titolo;
 protected int|string $prezzo;
 
 function __construct($animale,$image,$titolo,$prezzo) {
  $this->setAnimale($animale);
  $this->setImage($image);
  $this->setTitolo($titolo);
  $this->setPrezzo($prezzo);
  
 }

 /**
  * Get the value of animale
  */ 
 public function getAnimale() {
 
  if ($this->animale == "cane"){
    
    echo '<i class="fa-solid fa-dog"></i>';
  }else if ($this->animale == "gatto") {

    echo '<i class="fa-solid fa-cat"></i>';
 } else {

 }
}
 
 /**
  * Set the value of animale
  *
  * @return  self
  */ 
 public function setAnimale($animale) {
  
  $this->animale = $animale;

  return $this;
 }
 /**
   * Get the value of image
   */ 
  public function getImage()
  {
    return $this->image;
  }

  /**
   * Set the value of image
   *
   * @return  self
   */ 
  public function setImage($image)
  {
    $this->image = $image;

    return $this;
  }

 /**
  * Get the value of titolo
  */ 
 public function getTitolo()
 {
  return $this->titolo;
 }

 /**
  * Set the value of titolo
  *
  * @return  self
  */ 
 public function setTitolo($titolo)
 {
  $this->titolo = $titolo;

  return $this;
 }
 /**
  * Get the value of prezzo
  */ 
 public function getPrezzo()
 {
  return $this->prezzo;
 }

 /**
  * Set the value of prezzo
  *
  * @return  self
  */ 
 public function setPrezzo($prezzo)
 {
  $this->prezzo = $prezzo;

  return $this;
 }

  
}