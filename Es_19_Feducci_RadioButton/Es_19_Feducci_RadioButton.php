<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $domanda = "Qual'è il pianeta più vicino al sole?";
        $risposte = array("Venere", "Terra", "Marte", "Mercurio", "Giove");

        echo "<b><i><p style=''>$domanda</p></i></b>";
        foreach($risposte as $elementi){
            echo "<input type='radio' name='risposta'>";
            echo "<label>$elementi</label><br>";
        }
    ?>
</body>
</html>