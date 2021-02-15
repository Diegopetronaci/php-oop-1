<?php

/** Videogame Class
 * @author Diego Diego@gmail.com
 * @copyright 2021
*/

class Videogame {
    public $titolo;
    public $genere;
    public $produttore;
    public $pegi;
    public $prezzo;
    public $console;

    public function __construct(string $titolo, string $genere, string $produttore, int $pegi, float $prezzo, string $console) {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->produttore = $produttore;
        $this->pegi = $pegi;
        $this->prezzo = $prezzo;
        $this->console = $console;
    }

    /* function getTitolo() {
        return $this->titolo;
    } */
}

$assassinCread3 = new Videogame("Assassin's Creed 3", 'Azione/Storico', 'Ubisoft', 18, 20.99, 'PS4');
$uncharted4 = new Videogame("Uncharted 4", 'Azione/Avventura', 'Noughtydog', 18, 25.99, 'PS4');
$rust = new Videogame("Rust", 'Survival', 'Facepunch Studios', 15, 15.99, 'PC');
$seaOfThieves = new Videogame("Sea Of Thieves", 'Survival/Pirateria', 'Microsoft', 8, 35.99, 'XBOX ONE');

//var_dump($assassinCread3, $uncharted4, $rust, $seaOfThieves);

//var_dump($rust->getTitolo());

$videogames = [$assassinCread3, $uncharted4, $rust, $seaOfThieves];
//var_dump($videogames);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($videogames as $videogame) { ?>
        
        <h2> Titolo: <?php echo $videogame->titolo; ?> </h2>
        <p> Genere: <?php echo $videogame->genere; ?> </p>
        <p> Produttore: <?php echo $videogame->produttore; ?> </p>
        <p> Pegi: <?php echo $videogame->pegi; ?> </p>
        <p> Prezzo: <?php echo $videogame->prezzo; ?> </p>
        <p> Console: <?php echo $videogame->console; ?> </p>

        <?php //echo $videogame->getTitolo(); ?>

    <?php } ?> 
</body>
</html>