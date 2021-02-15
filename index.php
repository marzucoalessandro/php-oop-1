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

  function __construct(string $name, string $city, string $address, int $stars, int $roomsNumber, string $parking){
    $this ->name = $name;
    $this ->city = $city;
    $this ->address = $address;
    $this ->stars = $stars;
    $this ->roomsNumber = $roomsNumber;
    $this ->parking = $parking;
  }


}

$Ambassador = new Hotel("Ambassador", "Roma", "Via dei gigli 51", 3, 25, "si");
// var_dump($Ambassador);
$Splendid = new Hotel("Splendid", "Milano", "Corso Mazzini 23", 4, 30, "si");
$Vittoria = new Hotel("Vittoria", "Firenze", "Piazzale Flaminio 3", 5, 50, "no");
$Astrid = new Hotel("Astrid", "Bologna", "Via Ottavia 12", 2, 81, "si");
$Belvedere = new Hotel("Belvedere", "Napoli", "Piazza del Plebiscito 1", 3, 120, "no");
$Majestic = new Hotel("Majestic", "Bari", "Via delle Carrozze 20", 4, 10, "no");
$Miramare = new Hotel("Miramare", "Palermo", "Via Sicilia 1", 5, 30, "si");
$Hotel = [$Ambassador, $Splendid, $Vittoria, $Astrid, $Belvedere, $Majestic, $Miramare];


// var_dump($Hotel);

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
      .hotel{
        background-color: lightblue;
        border: 1px solid black;
        border-radius: 5px;
        padding: 20px;
        margin: 20px;
        width: 400px;
      }

      </style>
      <body>

        <h1>Lista Hotel</h1>
        <div class="container">

          <?php foreach ($Hotel as $key => $value): ?>
            <?php if ($value->parking == "si"): ?>

              <div class="hotel">
                <h1>Nome: <?php echo ($value->name); ?></h1>
                <h3>Città: <?php echo ($value->city); ?></h3>
                <p>Indirizzo: <?php echo ($value->address); ?></p>
                <p>Voto: <?php echo ($value->stars); ?> stelle</p>
                <p>Stanze: <?php echo ($value->roomsNumber) ?></p>
                <p>Parcheggio: <?php echo ($value->parking) ?></p>
              </div>
            <?php else: ?>
              
              <div class="hotel">
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
