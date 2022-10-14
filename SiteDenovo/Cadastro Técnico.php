<?php

$nome = addslashes($_POST['nome']);
$endereco = addslashes($_POST['endereco']);
$cep = addslashes($_POST['cep']);
$CPF = addslashes($_POST['CPF']);
$email_dono = addslashes($_POST['email_dono']);
$tel_dono = addslashes($_POST['tel_dono']);
$Pdata = addslashes($_POST['Pdata']);
$q_obs = addslashes($_POST['q_obs']);
$connect = mysql_connect('PackThings','root','gustavo');
$db = mysql_select_db('site2');
$query = "INSERT INTO Tecnico (NomeCliente,Endereco,CEP,CPF,Email,Tel,DataNasc,CurriRes) VALUES ('$nome','$endereco','$cep','$CPF','$email_dono','$tel_dono','$Pdata','$q_obs')";
$insert = mysql_query($query,$connect);

  
?>