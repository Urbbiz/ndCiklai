<h4>1.Naršyklėje nupieškite linija iš 400 “*”. </h4>
<p> a) Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
</p>
<p>b) Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”;
</p>

<?php
$simboliuSk = 400;
for ($i = 1; $i <= $simboliuSk; $i++) {
    echo '<span style = word-break:break-all>*</span>';
}
echo '<br><br>';

$eilute = 0;
for ($i = 1; $i <= $simboliuSk; $i++) {
    echo '<span style = word-break:break-all>*</span>';
    $eilute++;
    if ($eilute == 50) {
        echo '<br>';
        $eilute = 0;
    }
}
?>
<h4>2. Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek
    tarp jų yra didesnių už 150. Skaičiai didesni nei 275 turi būti raudonos spalvos.
</h4>

<?php
$skDaugiau = 0;
for ($i = 0; $i < 300; $i++) {
    $skaicius = rand(0, 300);
    if ($skaicius > 150) {
        $skDaugiau++;
    }
    if ($skaicius > 275) {
        echo "<span style = color:red> $skaicius </span>";
    } else {
        echo "<span> $skaicius </span>";
    }
}
echo '<br><br>';
echo "didesnių skaičių už 150 yra = $skDaugiau !";
?>

<h4>3. Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1
    iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi
    būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.
</h4>


<?php

$antrasSk = rand(3000, 4000);
$stringas = '';
for ($i = 1; $i <= $antrasSk; $i++) {
    if ($i % 77 === 0) {
        $stringas .= ($i . ', ');
    }
}
echo substr($stringas, 0, (mb_strlen($stringas) - 2));
?>
<h4> 4. Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane
    atrodytų kvadratinis.
</h4>
<?php
$j = 0;
for ($i = 0; $i < 625; $i++) {

    echo "<span style ='padding-right:7; px; font-size: 10px;font-weight: bold;' >*</span>";
    $j++;
    if ($j === 25) {
        echo '<br>';
        $j = 0;
    }
}

?>
<h3>
    5. Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
</h3>

<?php
$b= 25;
for ($i = 0; $i <25; $i++){
    echo '<br>';
    $b --;
    for($j = 0; $j < 25; $j++ ) {
        if ($j == $i || $b == $j){
            echo"<span style ='padding-right:7; px; font-size: 10px;font-weight: bold;color:red;' >*</span>";
        } else
        echo "<span style ='padding-right:7; px; font-size: 10px;font-weight: bold;' >*</span>";
    }
}
?>

<h4>6. Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos
    metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas.
    Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
</h4>
<h6>a) Iškritus herbui;</h6>
<h6>b) Tris kartus iškritus herbui;</h6>
<h6>c)Tris kartus iš eilės iškritus herbui;</h6>


<?php
$herbas = 0;
$integeris = 0;
$h = '';
do {
$monetosMetimas = rand(0,1);
if ($monetosMetimas === 0) {
    $herbas ++;
    $h .='H ';
}
if ($monetosMetimas === 1) {
$integeris ++;
$h .='S ';
}
}while ( $herbas !== 1);
echo "<span>$h</span>";
echo '<br>';
echo "a) herbas iskrito = $herbas, ";
echo'<br><br>';
// *******************************************
$herbas = 0;
$integeris = 0;
$h = '';
do {
$monetosMetimas = rand(0,1);
if ($monetosMetimas === 0) {
    $herbas ++;
    $h .='H ';
}
if ($monetosMetimas === 1) {
$integeris ++;
$h .='S ';
}
}while ( $herbas !== 3);
echo "<span>$h</span>";
echo '<br>';
echo "b) herbas iskrito = $herbas, ";
echo'<br><br>';
// *******************************************
$herbas = 0;
$integeris = 0;
$h = '';
do {
    $monetosMetimas = rand(0,1);
if ($monetosMetimas === 0 ) {
    $herbas ++;
    $h .='H ';
    }
    if ($monetosMetimas === 1) {
    $integeris ++;
    $integeris =0;
    $herbas = 0;
    $h .='S ';
    }
}while ($herbas !== 3 );
echo "<span>$h</span>";
echo '<br>';
echo "c) herbas iskrito 3 kartus is eiles = $herbas, ";
?>

<h4>Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25.
    Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį
    generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol
    kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų.
</h4>

<?php

$taskaiKazys = 0;
$taskaiPetras = 0; 
do { 
$ejimasKazys = rand(5, 25);
$ejimasPetras = rand(10, 20);
$taskaiKazys += $ejimasKazys;
$taskaiPetras += $ejimasPetras;

if ($ejimasKazys > $ejimasPetras) {
    echo " Kazio taskai = $ejimasKazys, Petro taskai = $ejimasPetras, partija laimejo KAZYS!!!, bendri Kazio taskai = $taskaiKazys, bendri Petro taskai = $taskaiPetras".'<br>';
}elseif ($ejimasKazys < $ejimasPetras) {
    echo " Kazio taskai = $ejimasKazys, Petro taskai = $ejimasPetras, partija laimejo PETRAS!!!, bendri Kazio taskai = $taskaiKazys, bendri Petro taskai = $taskaiPetras".'<br>';
} else {
    echo " Kazio taskai = $ejimasKazys, Petro taskai = $ejimasPetras, LYGIOSIOS!!!, bendri Kazio taskai = $taskaiKazys, bendri Petro taskai = $taskaiPetras".'<br>';
}

} while ($taskaiKazys <= 222 && $taskaiPetras <= 222);
echo "Kazio taskai = $taskaiKazys, o Perto taskai = $taskaiPetras ".'<br>';
?>

<h4> 8. Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).
</h4>
<div style="display: inline-block;text-align: center;">
<?php

for ($i =1; $i <= 10; $i++) {
echo '<br>';
    $zvaigzde = $i; 
    for($j = 0; $j < $i; $j++ ) {
        $colorR = rand(0,255);
        $colorG = rand(0,255);
        $colorB = rand(0,255);
        echo"<span style ='padding-right:15; px; font-size: 10px;font-weight: bold; color: rgb($colorR, $colorG,$colorB);;text-align: center;' >*</span>";
    }
}
for ($i =11; $i >= 0; $i--) {
echo '<br>'; 
    for($j = 0; $j < $i; $j++ ) {
        $colorR = rand(0,255);
        $colorG = rand(0,255);
        $colorB = rand(0,255);
        echo"<span style ='padding-right:15; px; font-size: 10px;font-weight: bold; color: rgb($colorR, $colorG,$colorB);;text-align: center;' >*</span>";
    }
}
?>
</div>

<h4>9. Panaudokite funkciją microtime(). Paskaičiuokite kiek sekundžių užtruks kodą:
$c = "10 bezdzioniu \n suvalge 20 bananu.";
Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą: 
$c = '10 bezdzioniu \n suvalge 20 bananu.';
(Stringas viengubose ir dvigubose kabutėse)
</h4>

<?php

$milijonasPrasukimu = 1000000;

$pirmasisLaikas = microtime();
for ($i = 0; $i < $milijonasPrasukimu; $i++) {
    $c = "10 bezdzioniu \n suvalge 20 bananu.";
}
$antrasLaikas = microtime();
for ($i = 0; $i < $milijonasPrasukimu; $i++) {
    $c = '10 bezdzioniu \n suvalge 20 bananu.';
}
$treciasLaikas = microtime();

$pirmasLaikasFormatuotas = (float) (substr($pirmasisLaikas, 11, 10) . '.' . substr($pirmasisLaikas, 2, 8));
echo "Siuo metu nuo 1970m praejo $pirmasLaikasFormatuotas sekundziu ";
echo '<br>';

$antrasLaikasFormatuotas = (float) (substr($antrasLaikas, 11, 10) . '.' . substr($antrasLaikas, 2, 8));
$eksperimentasPirmas = $antrasLaikasFormatuotas - $pirmasLaikasFormatuotas;
echo "Pirmasis bandymas uztruko $eksperimentasPirmas sekundziu.";
echo '<br>';

$treciasLaikasFormatuotas = (float) (substr($treciasLaikas, 11, 10) . '.' . substr($treciasLaikas, 2, 8));
$eksperimentasAntras= $treciasLaikasFormatuotas - $antrasLaikasFormatuotas;
echo "Antrasis bandymas uztruko $eksperimentasAntras sekundziu.";
echo '<br><br>';
?>

<h4>Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
</h4>
<p> a) “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
</p>
<p> b) “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
</p>
<?php

$vinis1 = 85;
$vinis2 = 85;

$kiekSmugiu = 0;
$kiekStipriuSmugiu = 0;

for($i= 1; $i<= 5; $i++) {
//     echo '<br><br>';
// Echo "$i vinis". '<br>';
    do {   
        $smugis = rand(5, 20);
        $vinis1 -= $smugis;

        $kiekSmugiu ++;
     
        if ($vinis1 <=0) {
            $vinis1 = 0;
        }
        // echo "*** $kiekSmugiu smugis = $smugis mm, nesukalto vinio ilgis = $vinis1 mm, ";
    } while ($vinis1 > 0);
    $vinis1 = 85;
    
}
echo"a) Viso 5 viniams sukalti reikejo $kiekSmugiu smugiu".'<br>';

for($i= 1; $i<= 5; $i++) {
//     echo '<br><br>';
// Echo "$i vinis". '<br>';
    do {   
        $stiprusSmugis = rand(20, 30)* rand(0, 1);
        $vinis2 -= $stiprusSmugis;
        $kiekStipriuSmugiu ++;
        if ($vinis2 <=0) {
            $vinis2 = 0;
        }
        // echo "*** $kiekStipriuSmugiu smugis = $stiprusSmugis mm, nesukalto vinio ilgis = $vinis2 mm, ";
    } while ($vinis2 > 0);
    $vinis2 = 85; 
}
echo'<br>';
echo"b) Viso 5 viniams sukalti reikejo $kiekStipriuSmugiu  stipriu smugiu";






