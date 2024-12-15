<?php
$name = "Juan Pablo";
$isDev = true;
$age = 24 ;


define('LOGO_URL', 'https://www.php.net/images/logos/php-logo-white.svg');

$output = "hola  soy $name y tengo $age  años. ✌️";
$outputAge = match (true) {
     $age < 2  => "Eres un bebe, $name 👶" ,
     $age < 10 => "Eres un niño, $name 👦",
     $age < 18 => "Eres un adolecente, $name 👨‍🎓",
     $age === 18 => "Eres mayor de edad, $name 👨‍🎓",
     $age < 40 => "Eres un adulto joven, $name 🧓",
     $age < 60 => "Eres un adulto viejo, $name 🧓",
     default => "Huelas mas a madera que fruta, $name 👴"

};

//Arrays

$bestLenguaje = ["PHP", "JAVASCRIPT","JAVA","PYTHON"];
$bestLenguaje[] = "TypesScrit";

$person = [
    "name" => "Juan Pablo",
    "age" => 24,
    "isDev" => true,
    "lenguages" => ["PHP", "JavaScript","Python"],
];

$person["name"] = "Juan Pablo ML";
$person["lenguages"][2] = "Java";
?>

<ul>
    <?php foreach ($bestLenguaje as $key => $lenguaje) :?>
        <li> <?= $key . " " . $lenguaje?> </li>
    <?php endforeach;?>
</ul>

<h2><?= $outputAge ?></h2>

<img src="<?= LOGO_URL ?>" alt="Logo PHP" width="200">  
<h1>
   <?= $output ?>
</h1>
