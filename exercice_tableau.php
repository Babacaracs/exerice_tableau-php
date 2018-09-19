<?php
    //exercice pour dédramatiser les tableaux

    echo  ("<h1> premier niveau faire ce tableau</h1>");
    //boucle for
    echo ("<h2>utilisation avec for</h2>");
    $arr = [
        "coucou72",
        "vie_oiseau",
        "test_value50",
        "bonjour",
        "arbitraire",
    ];

    for ($num=0; $num <count($arr); $num++) { 
        echo 'la valeur est egale '.$arr[$num].'<br>';
    }
    //boucle foreach
    echo ("<h2>utilisation avec foreach</h2>");
    foreach ($arr as $key => $value) {
         echo 'la valeur est egale '.$value.'<br>';
    }
    //boucle while
    echo ("<h2>utilisation avec while</h2>");
    $j=0;
    while ($j<count($arr)) {
        echo 'la valeur est egale '.$arr[$j].'<br>';
        $j++;
    }

    echo ("<h2>utilisation avec print_r</h2>");
    echo '<pre>';
        print_r($arr);
    echo '</pre>';
    echo ("<h1>second  niveau faire ce tableau</h1>");
    $arr1 = [
        "coucou72" => 10,
        "vie_oiseau" => 15,
        "test_value50" => 25,
        "bonjour" => 20,
        "arbitraire" => 5,
    ];
    foreach ($arr1 as $key => $value) {
         # code...
     echo 'la valeur est egale '.$key.' => '.$value.'<br>';
    }

    echo ("<h1>troisème  niveau faire ce tableau</h1>");
    $arr2 = [
        "coucou72" => 10,
        "vie_oiseau" => 15,
        "test_value50" => [
            "in_tab" => "in tab",
            "in_tab1" => "dans tableau 1",
        ],
        "bonjour" => 20,
        "arbitraire" => 5,
    ];
    foreach ($arr2 as $key => $value) 
    {
        if ($key!="test_value50") {
          echo $key.' => '.$value.'<br>';}
          if ($key=="test_value50") {
              foreach ($value as $key2 => $value2)
            {
            echo 'la valeur est egale '. $key2,' => ',$value[$key2],'<br>'; 
             }
          }
    }

    //afficher les valeurs comme l'exemple suivant :
    //la valeur coucou72 (ou) valeur de la clé est égale à 10
    //la valeur vie_oiseau (ou) valeur de la clé est égale à 15 ....

   /* $rtl = '<br>'; // ou “\n” pour l'exécution en ligne de commande

    // parcourir le premier tableau $arr avec for, foreach et while
    echo '=> Exercice avec premier tableau $arr'.$rtl.$rtl;

    echo '-> Avec for '.$rtl;
    // réponse ici

    echo '-> Avec foreach '.$rtl;
    // réponse ici

    echo '-> Avec while '.$rtl;
    // réponse ici

    echo $rtl.'-------------'.$rtl;

    // parcourir le deuxième et troisième tableau avec foreach
    echo 'Exercice avec le deuxième et le troisème tableau '.$rtl.$rtl;

    echo '-> Avec le tableau $arr1'.$rtl;
    // réponse ici

    echo $rtl.'-> Avec le tableau $arr2'.$rtl;
    // réponse ici*/

?>
