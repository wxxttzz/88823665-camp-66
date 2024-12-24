<!DOCTYPE html>
<html>

<head>
    <title>PHP TEST</title>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>

    <h1>PHP WXTZ</h1>
    <?php
    $num = 2;
    echo "<h1> แม่สูตรคูณ : $num </h1>";
    echo "<div class = 'row'>"; 

    for ($j = 1 ; $j <= 12; $j++){
        echo "<div class = 'row ms-5 mt-5 '>";
        echo "<p> $num x $j = ".$num*$j."</p>";
    echo "</div>";
    }
    echo "</div>";

    ?>
</div>

</body>

</html>