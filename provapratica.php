
<?php
session_start();
//session_destroy();
@$_SESSION["total"]++;
$python = 0;
$php = 0;
$java = 0;
$cmais = 0;

if(@$_POST["btn"] == "botao"){
    
        if(@$_POST["a1"] == "python")
        @$_SESSION["python"]++;
    
        if(@$_POST["a1"] == "php")
        @$_SESSION["php"]++;
    
        if(@$_POST["a1"] == "java")
        @$_SESSION["java"]++;
    
        if(@$_POST["a1"] == "cmais")
        @$_SESSION["cmais"]++;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="margin:5px; paddin-inline:20px;">
    <h2 style="background-color: grey; text-align:center" align:center>Prova Prática - Enquete</h2>

    <fieldset>
<legend>Enquete</legend>
1.Qual a linguagem de Programação você mais gosta?

<form method="post">
<input type="radio" value="python" name="a1"> Python<br>
<input type="radio" value="php" name="a1"> PHP<br>
<input type="radio" value="java" name="a1"> Java<br>
<input type="radio" value="cmais" name="a1"> C++

<div style="text-align:center">
<button type="submit" name="btn" value="botao">Votar</button>
</div>
</form>
</fieldset>
<hr>

<fieldset>
<legend>Resultado</legend>
<ul>
    <li>Python <?php echo number_format (@$_SESSION["python"] / @$_SESSION["total"]*100,0);?>%</li>
    <hr align="left" size = "15" width=<?php echo @$_SESSION["python"];?> color="red">
    <li>PHP <?php echo number_format (@$_SESSION["php"] / @$_SESSION["total"]*100,0);?>%</li>
    <hr align="left" size = "15" width=<?php echo @$_SESSION["php"];?> color="green">
    <li>Java <?php echo number_format (@$_SESSION["java"] / @$_SESSION["total"]*100,0);?>%</li>
    <hr align="left" size = "15" width=<?php echo @$_SESSION["java"];?> color="blue">
    <li>C++ <?php echo number_format (@$_SESSION["cmais"] / @$_SESSION["total"]*100,0);?>%</li>
    <hr align="left" size = "15" width=<?php echo @$_SESSION["cmais"];?> color="yellow">
</ul>
</fieldset>
</div>
<div style="text-align:center">
&copy; Sistema de Enquete - IFPI 2018
</div>
</body>
</html>