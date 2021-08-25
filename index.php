<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Creare una variabile con un paragrafo di testo a vostra scelta.
        $paragrafo =    "Questa ricetta è l’espressione della grande creatività italiana in cucina: pochi ingredienti delle razioni dell’esercito americano per un giovane cuoco che si trovò nell’impegnativo incarico di
                        mettere su un pranzo per le truppe alleate a base, naturalmente, di spaghetti, ma niente pomodori, solo uova & bacon americane, una buonissima crema di latte e del formaggio grattugiato; per 
                        finire un pizzico di pepe nero e la ricetta passa di bocca in bocca in tutto il mondo.
                        Nel tempo, si sostituisce la pancetta con il guanciale e dopo diverse versioni si elimina completamente la panna, ma si inserisce qualche albume per migliorare la cremosità.
                        Metti a bollire abbondante acqua salata e nel frattempo inizia a preparare il condimento per la pasta alla carbonara2Taglia a cubetti il guanciale e fallo rosolare in una padella, appena prende colore elimina il grasso, ma ricordati di metterne da parte una piccola quantità, ti servirà dopo.
                        In una ciotola sbatti le due uova intere e i due tuorli, aggiungi la piccola quantità di grasso del guanciale che avevi messo da parte, ti aiuterà a dare morbidezza al condimento, e mescola bene.
                        Al composto che ottieni aggiungi il Pecorino Medoro grattugiato e abbondante pepe macinato al momento, mescola bene.
                        Scola gli spaghetti al dente, mettili nella padella in cui c’è il guanciale, aggiungi il resto del composto e amalgama energicamente a fuoco spento.
                        Impiatta e servi la pasta alla carbonara con guanciale e pecorino accompagnata da un buon bicchiere di vino rosso delle nostre terre, per consolidare amicizie e trovare nuove alleanze.";
        $parolaCensurata = $_GET["word"];
        $paragrafo = str_replace($parolaCensurata,"***",$paragrafo);
        $lunghezzaParagrafo = strlen($paragrafo);
    ?>
    <p><?php  echo $paragrafo  ?> </p>
    <h3>il paragrafo contiene <?php echo $lunghezzaParagrafo ?> caratteri</h3>
    <h4>La parola censurata e' <?php echo $parolaCensurata ?> </h4>
</body>
</html>