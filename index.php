<?php
// tipado dinamico, debil y gradual
$name= "Pedro";
//$name= 2;
$isDev= true;
$age= 39;
$newAge = 39 + '1';

$isOld = $age > 40; 

// constantes// globales
define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');
// constantes// LOCALES 
const NOMBRE = "Jota";

// \backslash para escapar un caracter
$output = "Hola \$name $name, con una edad de $age.";
/*
$outputAge = $isOld
? "Eres viejo, lo siento"
: "Eres joven, felicidades";
*/
$outputAge = match (true){
    $age < 2 => "Eres un bebe, $name",
    $age < 10 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name",
    $age == 18 => "Eres mayor de edad, $name",
    $age < 40 => "Eres un adulto joven, $name",
    $age <= 60 => "Eres un adulto viejo, $name",
    default => "Hueles mas a madera que a fruta, $name",
} ;

$bestLanguages = ["Php", "javascript", "Python", 1];
$bestLanguages [3] = "java";
$bestLanguages[] ="typescript";
?>
<ul>
    <?php foreach ($bestLanguages as $k => $language): ?>
        <li><?= $k . " " . $language  ?></li>
    <?php endforeach; ?>
</ul>
<h2>
    <?= $bestLanguages[0] ?> </h2>
    <?= $outputAge ?> </h2>
</h2>
<?php
// array asociativo

$person =[
    "name" => "pedro",
    "age" => 39,
    "isDev" => true,
    "languages" => ["Php", "Javascript", "Python"],
];
print_r($person);

// var_dump para mostrar en pantalla, tipo dto y dato
//var_dump($name);
//var_dump($isDev);
//var_dump($age);

// se recomienda desactivar los errores en modo produccion desde php ini



// para concatenar .
// para sumar por defecto +

?>

<h1>

<?= "Mi primera App - by ". $name . " " . $newAge . "\n:)";?>
<?= $output;?>
<!-//echo "Mi primera App";->

</h1>

<style>
    :root {
        color-scheme: light dark;
    }
    body{
        display: grid;
        place-content: center;
    }
</style>

