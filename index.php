<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Övningar 1</title>
</head>
<body>

<h1>Övningssida!</h1>
<p>Det här är en övningssida för php.</p>
    <!--Övning 1.1:-->
    <?php 
        echo "<p>Hello World!</p>"; 
    ?>

    <!--Övning 1.2:-->
    <?php
        function writeHelloWorld() {
            echo "Hello World!";
        }
    ?>
    <p>
        <?php writeHelloWorld(); ?>
    </p>

    <!--Övning 1.3:-->
    <?php
        function returnText() {
            return "Hello World!";
        }
    ?>

    <p>
        <?php
            echo returnText();
        ?>
    </p>


    <!--Övning 1.4:-->

    <p>
        <?php
            printString("Hello World!");
        ?>
    </p>

    <?php
        function printString($text) {
            echo $text;
        }
    ?>
</body>
</html>