<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar una nueva sesion de Curl;  ch = curlHandle
$ch = curl_init(API_URL);
// INDICAR QUE QUEREMOS RECIBIR EL RESULTADO DE LA PETICION Y NO MOSTRARLO EN PANTALLA 

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* ejecutar la peticion y
y guardamos el resultado
*/
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);

?>

<head>
    <title>La proxima pelicula de Marvel</title>
    <meta name="description" content="La proxima pelicula de Marvel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>
<main>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="200" alt="poster de <?= $data["title"]; ?>"
            style="border-radius: 16px;"  />
    </section>

    <hgroup>
        <h2> <?= $data["title"] ?> Se estrena en <?= $data["days_until"]; ?> dias</h2>
        <p> Fecha de estreno: <?= $data["release_date"] ?></p>
        <h3>La siguiete pelicula es : <?= $data["following_production"]["title"]; ?></h3>
    </hgroup>
</main>

<footer>
    <h4>By Juan Pablo</h4>
</footer>



<style>
    :root {
        color-scheme: ligth dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    h1 {
        color: green;
        background-color: gray;
    }
    img {
        margin: 0 auto;
    }
    section {
        display: flex;
        justify-content: center;
        text-align:center;
    }
    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
}
</style>