<!doctype html>
<html lang="en">
    <head>
        <title> Welcome Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://googleapis.com/css?family=Tangerine">
    </head>
    <style>
    body{
            text-align:center;
            font-family: 'Tangerine',serif;
            font-size: 48px;
            text-shadow: 4px 4px 4px #aaa;
        }
    </style>
    <body>
        <h1> {{ $name }} </h1>
       <?php 
        echo "<h1> Welcome User: $name </h1>";
        ?>
    </body>
</html>