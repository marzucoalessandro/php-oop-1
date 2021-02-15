<?php
// Istruzioni:
// Create una classe per descrivere un entitá, assegnatele degli attributi, utilizzate il constructor. Create alcune istanze della classe. Stampate a schermo gli attributi di ogni istanza.
// Per chi non ha fantasia ecco qualche entitá che potete usare:
// Animale, Persona, Casa, Computer, Hotel, Film, Videogioco, Sport, Bicicletta, Veicolo, Nazione etc.

class Hotel {
  public $name;
  public $city;
  public $address;
  public $stars;
  public $roomsNumber;
  public $parking;
  public $foto;


  function __construct(string $name, string $city, string $address, int $stars, int $roomsNumber, string $parking, string $foto){
    $this ->name = $name;
    $this ->city = $city;
    $this ->address = $address;
    $this ->stars = $stars;
    $this ->roomsNumber = $roomsNumber;
    $this ->parking = $parking;
    $this ->foto = $foto;

  }

  public function setSeaWatch($SeaWatch){
    $this ->seaWatch = $SeaWatch;
  }

}

$Ambassador = new Hotel("Ambassador", "Roma", "Via dei gigli 51", 3, 25, "si", "https://cf.bstatic.com/xdata/images/hotel/270x200/65251888.jpg?k=200afe82f7ae1716f74f53d6f45d899f7cc1718031ea5b83e2645063140a4ea5&o=");
// var_dump($Ambassador);
$Splendid = new Hotel("Splendid", "Milano", "Corso Mazzini 23", 4, 30, "si", "https://cf.bstatic.com/images/hotel/max1024x768/626/62647098.jpg");
$Vittoria = new Hotel("Vittoria", "Firenze", "Piazzale Flaminio 3", 5, 50, "no", "https://2.bp.blogspot.com/-MwkxNgVn5h8/XIbHfdB_bgI/AAAAAAABOc0/fPYtUgMBBColW6uH2kvpKbkNm91sni72QCLcBGAs/s1600/hotel%2Bspa%2Bmadonna%2Bdi%2Bcampiglio.jpg");
$Astrid = new Hotel("Astrid", "Bologna", "Via Ottavia 12", 2, 81, "si", "https://cf.bstatic.com/xdata/images/hotel/270x200/65251888.jpg?k=200afe82f7ae1716f74f53d6f45d899f7cc1718031ea5b83e2645063140a4ea5&o=");
$Belvedere = new Hotel("Belvedere", "Napoli", "Piazza del Plebiscito 1", 3, 120, "no", "https://cf.bstatic.com/xdata/images/hotel/270x200/65251888.jpg?k=200afe82f7ae1716f74f53d6f45d899f7cc1718031ea5b83e2645063140a4ea5&o=");
$Majestic = new Hotel("Majestic", "Bari", "Via delle Carrozze 20", 4, 10, "no", "https://www.suiteweb.it/datastore/uploads/837/900_0/1500204093ff57cf665a70e01faedf2351804d65ea.jpg");
$Miramare = new Hotel("Miramare", "Palermo", "Via Sicilia 1", 5, 30, "si", "https://www.hotelcrozzon.com/img/TOP/index2.jpg");
$Hotel = [$Ambassador, $Splendid, $Vittoria, $Astrid, $Belvedere, $Majestic, $Miramare];

$Astrid ->setSeaWatch("no");

var_dump($Hotel);

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>oop 1</title>
   </head>
   <style>
      h1{
        text-align: center;
      }
      .container{
        display: flex;
        flex-wrap: wrap;
      }
      .hotel1{
        background-color: lightblue;
        border: 1px solid black;
        border-radius: 5px;
        padding: 20px;
        margin: 20px;
        width: 400px;
      }
      .hotel2{
        background-color: orange;
        border: 1px solid black;
        border-radius: 5px;
        padding: 20px;
        margin: 20px;
        width: 400px;
      }
      img{
        width: 100%;
      }

      </style>
      <body>

        <h1>Lista Hotel</h1>
        <div class="container">

          <?php foreach ($Hotel as $key => $value): ?>
            <?php if ($value->parking == "si"): ?>

              <div class="hotel1">
                <img src="<?php echo ($value->foto); ?>" alt="">
                <h1>Nome: <?php echo ($value->name); ?></h1>
                <h3>Città: <?php echo ($value->city); ?></h3>
                <p>Indirizzo: <?php echo ($value->address); ?></p>
                <p>Voto: <?php echo ($value->stars); ?> stelle</p>
                <p>Stanze: <?php echo ($value->roomsNumber) ?></p>
                <p>Parcheggio: <?php echo ($value->parking) ?></p>
              </div>
            <?php else: ?>

              <div class="hotel2">
                <img src="<?php echo ($value->foto); ?>" alt="">
                <h1>Nome: <?php echo ($value->name); ?></h1>
                <h3>Città: <?php echo ($value->city); ?></h3>
                <p>Indirizzo: <?php echo ($value->address); ?></p>
                <p>Voto: <?php echo ($value->stars); ?> stelle</p>
                <p>Stanze: <?php echo ($value->roomsNumber) ?></p>
                <p>Parcheggio: Attenzione non c'è parcheggio </p>
              </div>
            <?php endif; ?>

          <?php endforeach; ?>

        </div>
    </body>
  </html>
