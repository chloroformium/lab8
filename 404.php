<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oh</title>
    <style>
        body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: black;
}

.full404 {
    background-color: white;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.page404 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    height: 100%;
    width: 100%;
}

.modbear404 {
    height: 100vh;
    width: auto;
    object-fit: cover;
}

.text404 {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;  /* Для дополнительного отступа */
}

.large404 {
    font-size: 200px; /* Уменьшили размер для лучшего размещения */
    font-weight: bolder;
    margin: 0;
}

.small404 {
    font-size: 50px; /* Размер текста */
    margin: 0;
}

    </style>
</head>
<body>
<div class="full404">
 <div class="page404">
    <img class="modbear404" src="<?php echo get_template_directory_uri(); ?>/img/modbear404.png" alt="modbear404">
    <div class="text404">
        <p class="large404">404</p>
        <p class="small404">It looks like this page no longer exists</p>
        <p class="small404">It's ok, life goes on</p>
    </div>
 </div>
<div>
</html>