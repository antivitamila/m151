<?php
      session_start();

      $anzahl_aufrufe = 1;
      if (isset($_SESSION['anzahl_aufrufe'])) {
          $anzahl_aufrufe = $_SESSION['anzahl_aufrufe'];
      }
    
    echo "Die Seite wurde {$anzahl_aufrufe}x aufgerufen.";
    
    $anzahl_aufrufe = $anzahl_aufrufe + 1;

    $_SESSION['anzahl_aufrufe'] = $anzahl_aufrufe;

    echo "<h1>Pizza Konfigurator</h1>";
    echo "Deine Pizza besteht aus folgenden Toppings:";
    
    $userListe = [
        'Salami', 
        'Zwiebel',
        'Speck'
     ];

     var_dump($userListe);

     echo print_r($userListe, true);
?>


<form method="POST" action="?">
    <p>Füge weitere Zutaten hinzu:</p>
    <input type="text" name="name" placeholder="Zutat"/>
    <input type="submit" value="Hinzufügen"/>
</form>