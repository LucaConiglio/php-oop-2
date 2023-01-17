<!-- Immaginare quali sono le classi necessarie per creare uno shop online
 con le seguenti caratteristiche:
L’e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo,
 prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando 
 (prodotto, cibo, gioco, cuccia). -->

 <?php 
include_once  "./classes/Prodotti.php";

$cards [
  $prodotto_1 = new Prodotti("gatto","pallina di gomma","3€"),
  $prodotto_2 = new Prodotti("cane", "gomitolo di lana", "9€"),
  $prodotto_3 = new Prodotti("gatto", "croccantini", "14€"),
  $prodotto_4 = new Prodotti("cane", "croccantini", "10€"),
  $prodotto_5 = new Prodotti("gatto", "lettiera", "14"),
  $prodotto_6 = new Prodotti("cane", "osso di plastica", "2.50€"),
  $prodotto_7 = new Prodotti("gatto", "affila unghia", "18€"),
  $prodotto_8 = new Prodotti("cane", "pettorina", "9€"),

] 

var_dump($card);
?>

 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php oop2</title>
  <!-- Favicon -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!-- Bootstrap e mio css -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
 </head>
 <body>
  <?php echo $card->getAnimale()?>
  

 </body>
 </html>