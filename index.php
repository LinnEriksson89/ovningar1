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

    <!--Övning 2.1:-->
    <?php
        $firstname = "Linn";
        $surname = "Eriksson";

        echo "<p>Hej " . $firstname . " " . $surname . "!</p>";
        echo "<p>Hej $firstname $surname!</p>";
    ?>

    <!--Övning 2.2:-->
    <p>
        <?php
            $a = 5;
            $b = 10;

            echo "$a plus $b är " . $a+$b . "<br>";
            echo "$a gånger $b är " . $a*$b . "<br>";
            echo "$a delat med $b är " . $a/$b . "<br>";
            echo "Resten (modulus) av $b delat med $a är " . $b%$a . "<br>";

        ?>
    </p>

    <!--Övning 2.3:-->
    <?php
        $a = "5.3";
        $b = "8.1";

        $a = floatval($a);
        $b = floatval($b);

        echo "<p>$a gånger $b är " . $a*$b . "</p>";

        echo "<p>$a gånger $b är ungefär lika med " . round($a*$b, 1) . "</p>";

        $a = intval($a);
        $b = intval($b);

        echo "<p>$a gånger $b är " . $a*$b . "</p>";

    ?>

    <!--Övning 3.1:-->
    <?php
        function sumOfChars($string) {
            return mb_strlen($string);
        }

        $string = "Linn";
        echo "<p>Antal tecken i $string är " . sumOfChars($string) . ".</p>";
    ?>

    <!--Övning 3.2:-->
    <?php
        $text = "Linn";

        function sixChars($text) {
            if(mb_strlen($text) >= 6) {
                return $test = true;
            } else {
                return $test = false;
            }
        }

        if(sixChars($text)) {
            echo "<p>Textsträngen ($text) är mer än sex tecken lång!</p>";
        } else {
            echo "<p>Textsträngen ($text) är av godkänd längd.</p>";
        }
    ?>
    
    <!--Övning 3.3:-->
    <?php
        function switchChars($text) {
            $tempInt = mb_strlen($text) - 1;
            $tempArray = mb_str_split($text);
            $tempFirst = $tempArray[0];
            $tempLast = $tempArray[$tempInt];
            $tempArray[0] = $tempLast;
            $tempArray[$tempInt] = $tempFirst;

            $text = implode($tempArray);

            echo "<p>$text</p>";
        }

        switchChars("Linn");
    ?>

    <!--Övning 4.1:-->
    <?php
        echo "<p>";

        for ($i=0; $i < 5; $i++) { 
            echo "Hello World!<br>";
        }

        echo "</p>";
    ?>

    <!--Övning 4.2-->
    <?php
        echo "<p>";

        $a = 1;
        while ($a <= 5) {
            echo "Hello World!<br>";
            $a++;
        }

        echo "</p>";
    ?>

    <!--Övning 4.3:-->
    <?php
        $cars = array("Volvo", "Saab", "Fiat", "Honda", "Seat", "Skoda");
        $tempInt = count($cars);

        echo "<ul>";
        foreach($cars as $car) {
            echo "<li>$car</li>";
        }
        echo "</ul>";
    ?>

    <!--Övning 4.4:-->
    <?php
        $teachers = array(
            "Mattias Dahlgren" => "mattias.dahlgren@miun.se",
            "Mikael Hasselmalm" => "mikael.hasselmalm@miun.se",
            "Elisabeth Gradin" => "elisabeth.gradin@miun.se",
            "Jan-Erik Jonsson" => "jan-erik.jonsson@miun.se"
           ); 

        echo "<table><tr><th>Namn</th><th>E-post</th></tr>";

        foreach($teachers as $name => $email) {
            echo "<tr><td>$name</td><td><a href='mailto:$email'>$email</a></td></tr>";
        }

        echo "</table>";
    
    ?>

</body>
</html>