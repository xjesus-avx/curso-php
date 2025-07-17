<?php
// llamar a una api
const API_URL = "https://whenisthenextmcufilm.com/api";
//iniciar una nueva sesion de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*Ejecutar la peticion
    y guardar el resultado
*/
$result = curl_exec($ch);

// una alternativa seria usar file_get_contents
// $result =  file_get_contents(API_URL); // si solo quieres hacer un GET de una API
$data = json_decode($result, true);

curl_close($ch);
//var_dump($data);

?>
<head>
    <title>La proxima pelicula de marvel</title>
    <meta name="description" content="La proxima pelicula de marvel"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
</head>
<main>
   
        <!--
        <h2>La proxima pelicula de marvel</h2>
        <pre style="font-size: 8px; overflow:scroll; height:250px;">
            <?php //var_dump($data);?>
        </pre>
-->
    <section>
        <img src="<?= $data["poster_url"];?>" width="300" alt="Poster de <?= $data["title"]; ?>"
         style="border-radius: 16px" />
    </section>

    <hgroup>
        <h3><?=$data["title"] ?> se estrena en <?=$data["days_until"] ?> dias.</h3>
        <p>Fecha de estreno: <?=$data["release_date"]; ?></p>
    </hgroup>
    <p>La siguiente pelicula es: <?=$data["following_production"]["title"] ?> </p>
    <img src="<?=$data["following_production"]["poster_url"] ?>" style="width: 100px" />

</main>

<style>
    :root{
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }
    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>