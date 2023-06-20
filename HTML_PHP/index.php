<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;500&family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <title>Calc PHP</title>
</head>
<body>
    <h1>Calculator on PHP</h1>
    <div class="calc">
    <form action='' method='post'>
            <input type='text' class="screen" name='input' value=''>
        <section class="buttons">
            <div class="buttonsRow">
                <input type='submit' class="button double" name='op' value='C'>
                <input type='submit' class="button" name='op' value='&larr;'>
                <input type='submit' class="button symbol" name='op' value='&divide;'>
            </div>
            <div class="buttonsRow">
                <input type='submit' class="button" name='num' value='7'>
                <input type='submit' class="button" name='num' value='8'>
                <input type='submit' class="button" name='num' value='9'>
                <input type='submit' class="button symbol" name='op' value='&times;'>
            </div>
            <div class="buttonsRow">
                <input type='submit' class="button" name='num' value='4'>
                <input type='submit' class="button" name='num' value='5'>
                <input type='submit' class="button" name='num' value='6'>
                <input type='submit' class="button symbol" name='op' value='&minus;'>
            </div>
            <div class="buttonsRow">
                <input type='submit' class="button" name='num' value='1'>
                <input type='submit' class="button" name='num' value='2'>
                <input type='submit' class="button" name='num' value='3'>
                <input type='submit' class="button symbol" name='op' value='&plus;'>
            </div>
            <div class="buttonsRow">
                <input type='submit' class="button triple" name='num' value='0'>
                <input type='submit' class="button symbol" name='op' value='&equals;'>
            </div>
        </section>
    </form>
    </div>
</body>
</html>

<?php
    $cookie_name1 = 'num';
    $cookie_value1 = '';
    $cookie_name2 = 'op';
    $cookie_value2 = '';

    if(isset($_POST['num'])){
        $num = $_POST['input'].$_POST['num'];
    }else{
        $num = '';
    }
    echo $num;
?>