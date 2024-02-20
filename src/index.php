<?php 

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/index.css">
        <title>ctf</title>
        <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

            .outer {
                background-color: black;
                position: relative;
                height: 100vh;
            }

            .heading {
                text-align: center;
                margin: auto;
                width: fit-content;
                border: 3px solid #cc9933;
                padding: 40px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            h1 {
                font-size: 5rem;
                font-family: 'egyptian_nightsregular';
                font-weight: normal;
                color: #cc9933;
            }

            @font-face {
    font-family: 'egyptian_nightsregular';
    src: url('assets/egyptiannights-yaov-webfont.woff2') format('woff2'),
         url('assets/egyptiannights-yaov-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}

        </style>
    </head>
    <body>
        <div class="outer">
        <div class="heading">
            <h1>Flag is hidden</h1>
            <br>
            <h1>Find it</h1>
        </div>
        </div>
    </body>
</html>
