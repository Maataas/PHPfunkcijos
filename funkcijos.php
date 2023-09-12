<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "1. Sukurkite funkciją kuri priimtų du kintamuosius, juos sudaugintų ir atvaizduotų rezultatą naršyklėje.";

    function multiply($a, $b){
        echo  "<p>" . ($a * $b) . "</p>";
    }

    multiply(5,4);

    echo "<hr>";
    echo "2.Sukurkite funkciją kuri priimtų vieną kintamąjį, vardą. Ir atvaizduotų rezultatą naršyklėje: “labas “ ir tą paduotą vardą.";

    function name($vardas) {
        echo "<p>" . "Labas " . $vardas . "</p>";
    }

    name("Matai");
    echo "<hr>";

    echo "3. Sukurkite funkciją  kuri priimtų vieną kintamąjį, tekstą. Ir atvaizduotų rezultatą naršyklėje: kiek simbolių yra tame tekste.";

    function text($tekstas) {
        echo "<p>" . $tekstas . "</p>";
        echo "<p>" . strlen(str_replace(" ","",$tekstas)) . "</p>";
        
    }

    text("Laba diena");
    echo "<hr>";

    echo "4. Sukurkite funkciją kuri priimtų 2 kintamuosius tekstus, vardą, pavardę ir atspausdintų inicialus. T.y vardo ir pavardės pirmąsias raides DIDŽIOSIOMIS raidėmis.";

    function nameSurname($vardas,$pavarde){
        echo "<p>" . substr($vardas,0,1) . " " . substr($pavarde,0,1) . "</p>";
    }

    nameSurname("Matas","Maciulis");
    echo "<hr>";

    echo "5. Parašykite funkciją kuri sugeneruotų 3 random skaičius nuo 0 iki 5 ir atvaizduotų naršyklėje vienoje eilutėje atskirtus kableliais. Po paskutinio skaičiaus kablelio neturi būti.";

    
    function random() {
        $row = "";
        for ($i=0; $i < 3 ; $i++) { 
            $skaicius = rand(0,5);
            $row .= $skaicius . ", ";
        }
        echo "<p>" . substr($row, 0, -2) . "</p>";
    }

    random();

    echo "<hr>";
    echo "6. Parašykite funkciją kuri sugeneruotų 10 p tagų su skaičiais juose nuo 1 iki 10 ir atvaizduotų naršylkėje. Rezultate HTML’e turi matytis 10 p tagų su skaičiais.";

    function tagai() {
        for ($i=1; $i < 11 ; $i++) { 
            echo "<p>" . $i . "</p>";
        }
    }
    tagai();

    echo "<hr>";
    echo "<h4> 7. Sukurkite funkciją kuri priimtų 3 kintamuosius min, max ir length, sugeneruotų random masyvą length ilgio, užpildytų random skaičiais min max intervale. </h4>";
    
    function randomArr($min, $max, $length) {
        $arr = [];
        for ($i=0; $i < $length ; $i++){ 
            $arr[] = rand($min, $max);
        }
        
        return  $arr;
        
    }
    
    print_r(randomArr(5,10,5));

    echo "<hr>";

    echo "8. Parašykite funkciją kuri priimtų tekstą kintamąjį ir į gražintų “apsuktą” pvz paduodate Naglis, gaunate silgaN.";

    function backwords($vardas) {
        return strrev($vardas);
    }

    echo "<p>" . backwords("Matas") . "</p>";
    echo "<hr>";

    echo "SUNKESNI 1. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;";

    function tekstas($text)  {
        echo "<h1>" . $text . "</h1>";
    }
    
    tekstas("Laba diena");
    echo "<hr>";

    echo "2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją.";

    function hTag($text, $number) {
        echo "<h" . $number . ">" . $text . "</h" . $number . ">";
    }

    hTag("Labas", 5);
    hTag("Labas", 2);
    hTag("Labas", 4);
    echo "<hr>";

    echo "4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save)";

    function skaicius($sk) {
        $count = 0;
        for ($i=2; $i < $sk ; $i++) { 
            if($sk % $i == 0){
                $count++;
            }
        }
        return $count;
    }
    echo "<p>" . skaicius(10) . "</p>";

    echo "<hr>";
    echo "5. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.";

   print_r(sortSmt());

    function sortSmt() {
        $arr = [];
        for ($i=0; $i < 100 ; $i++) { 
           $arr[] = rand(33,77); 
        }
        for ($i=0; $i < count($arr) ; $i++) { 
            for ($a=0; $a < count($arr) ; $a++) { 
                if(skaicius($arr[$i]) < skaicius($arr[$a])){
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$a];
                    $arr[$a] = $temp;
                }
            }
        }
        return $arr;
    }

    echo "<hr>";
    echo "<h4> 6. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius. </h4>";

    function sortSmtt() {
        $array = [];
        for ($i=0; $i < 100 ; $i++) { 
           $array[] = rand(333,777); 
        }

        $arr = [];
        for ($i=0; $i <count($array) ; $i++) { 
            if(skaicius($array[$i]) == 0){
               $arr[] = $array[$i]; 
            }
        }
        return $arr;
    } 

    print_r(sortSmtt());
    echo "<hr>";

    echo "<h5> 9. Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento. </h5>";
    

    $arr = [];
    for ($i=0; $i < 3 ; $i++) { 
        $arr[] = rand(1,33);

    }  
    $shouldGo = true;
    while ($shouldGo) {
        $count = 0;

        for ($i= count($arr) - 3; $i < count($arr) ; $i++) { 
            if(skaicius($arr[$i])){
                $arr[] = rand(1,33);
                break;
            }
           $count++;
        }
        if($count == 3){
            $shouldGo = false;
        }
    }

    print_r($arr);
    echo "<hr>";

    echo "<h5> 10. Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo (ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. </h5>";

    $masyvas = [];
    for ($i=0; $i < 10 ; $i++) { 
        $masyvas2 = [];
        for ($a=0; $a < 10 ; $a++) { 
            $masyvas2[] = rand(1,100);
        }
        $masyvas[] = $masyvas2;
    }

    print_r($masyvas);




    
    

        
    
    






    









    ?>
</body>
</html>