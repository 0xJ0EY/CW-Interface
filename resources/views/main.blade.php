<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lambor-Pi-ni</title>

    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave" rel="stylesheet">

</head>

<style>
    html, body {
        margin: 0;
        padding: 0;
        background: url("/img/pizza.jpg");
        background-size: 50vw 50vw;
        height: 100%;

        font-family: 'Sedgwick Ave', cursive;
    }

    .title {
        font-size: 30px;

        text-align: center;
        color: #C25C32;
        text-shadow: -1px 0 #88472D, 0 1px #88472D, 1px 0 #88472D, 0 -1px #88472D;

    }

    .btn-container {
        padding: 0;

        width: 250px;

        margin: auto;
        list-style-type: none;
    }


    .button {
        font-family: '-apple-system', 'helvetica', 'arial';
        background-color: #000;
        border-width: 2px;
        border-color: #654F43;
        border-style: double;
        color: #654F43;
        /*height: 50px;*/
        line-height: 50px;
        width: 250px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 10px 2px;
        cursor: pointer;
    }

    .bar {
        width: 100%;
        display: block;
        background-color: #52ff19;
        height: 0;
        overflow: hidden;
    }

    .button img {
        width: 100px;
    }

    .selected {
        background-color: #c9c9c9 !important;
    }

    .selected .bar {
        height: 26px;
        display: block;
        border-bottom: 2px solid #20d70c;
        color: #20d70c;
        font-size: 20px;
        line-height: 26px;
    }

    .button1 {background-color: #DEB45C}
    .button1:hover {background-color: rgb(207, 238, 172)}
    .button2 {background-color: #FFE249;}
    .button2:hover {background-color: rgb(207, 238, 172)}
    .button3 {background-color: #C85535;}
    .button3:hover {background-color: rgb(207, 238, 172)}

</style>
<body>
    <h2 class="title">Team lambor-pi-ni</h2>

    <ul class="btn-container">
        <li>
            <a href="/option/apple/" class="button button1">
                <img src="/img/apple.png" alt="Apple">
            </a>
        </li>
        <li>
            <a href="/option/science/" class="button button2">
                <img src="/img/science.png" alt="Science Center">
            </a>
        </li>
        <li>
            <a href="/option/starbucks/" class="button button3">
                <img src="/img/starbucks.png" alt="Starbucks">
            </a>
        </li>
    </ul>
</body>
</html>