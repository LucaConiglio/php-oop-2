<!-- Immaginare quali sono le classi necessarie per creare uno shop online
 con le seguenti caratteristiche:
L’e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo,
 prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando 
 (prodotto, cibo, gioco, cuccia). -->

 <?php 
require_once  "./classes/Prodotti.php";
require_once "./classes/Descrizione.php";

$cards = [
  $prodotto_1 = new Descrizione("gatto","https://picsum.photos/300/300","gomitolo di lana","gatto","9€","palla da gioco per gatti"),
  $prodotto_2 = new Descrizione("cane","https://picsum.photos/300/300", "pallina di gomma","cane", "3€","palla da tennis per cani"),
  $prodotto_3 = new Descrizione("gatto","https://picsum.photos/300/300", "croccantini per gatti","gatto","13€","croccantini ipoallergenici specifico per gatti"),
  $prodotto_4 = new Descrizione("cane","https://picsum.photos/300/300", "croccantini per cani","gatto","10.50€","croccantini al manzo"),
  $prodotto_5 = new Descrizione("gatto","https://picsum.photos/300/300", "lettiera", "gatto","17€","lettiera per gatti grandezza, 55*40*10cm"),
  $prodotto_6 = new Descrizione("cane","https://picsum.photos/300/300", "osso di plastica", "cane","2.50€","osso commestibile: peso netto 500gr"),
  $prodotto_7 = new Descrizione("gatto","https://picsum.photos/300/300", "affila unghia", "gatto","21€","affila unghia per gatti, materiali: legno,tessuti vari e plastica"),
  $prodotto_8 = new Descrizione("cane","https://picsum.photos/300/300", "pettorina", "cane","14.50€","pettorina supercomoda per cani di grossa taglia"),

];

//var_dump($cards);
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
  <section class="pt-5">
    <div class="container">
      <div class="row p5">
            <?php foreach($cards as $prodotto) { ?> <div class="col">
            <div class="card">
            <img src="<?php echo $prodotto->getImage() ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $prodotto->getTitolo() ?></h5>
              <p class="card-text"><?php echo $prodotto->getDescrizione() ?></p>
             <a href="#" class="text-danger"><?php echo $prodotto->getAnimale() ?></a>
           </div>
          </div>
        </div>
        <?php }?>
      </div>
      
    </div>
  </section>
  

 </body>
 </html>