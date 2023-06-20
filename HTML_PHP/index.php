<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;500&family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <title>Calc JS</title>
</head>
<body>
    <h1>Calculator on PHP</h1>
    <div class="calc">
    <form action='' method='post'>
        <section class="screen">
            0
        </section>
        <section class="buttons">
            <div class="buttonsRow">
                <input type='submit' class="button double" name='C' value='C'>
                <input type='submit' class="button" value='&larr;'>
                <input type='submit' class="button symbol" value='&divide;'>
            </div>
            <div class="buttonsRow">
                <input type='submit' class="button" value='7'>
                <input type='submit' class="button" value='8'>
                <input type='submit' class="button" value='9'>
                <input type='submit' class="button symbol" value='&times;'>
            </div>
            <div class="buttonsRow">
                <input type='submit' class="button" value='4'>
                <input type='submit' class="button" value='5'>
                <input type='submit' class="button" value='6'>
                <input type='submit' class="button symbol" value='&minus;'>
            </div>
            <div class="buttonsRow">
                <input type='submit' class="button" value='1'>
                <input type='submit' class="button" value='2'>
                <input type='submit' class="button" value='3'>
                <input type='submit' class="button symbol" value='&plus;'>
            </div>
            <div class="buttonsRow">
                <input type='submit' class="button triple" value='0'>
                <input type='submit' class="button symbol" value='&equals;'>
            </div>
        </section>
    </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['C'])){
    echo '<script>console.log("aaaaaa")</script>';
    }
?>