<?php
$conectare=mysqli_connect('localhost','root','','nume1');
if(!$conectare){
	die('Conectarea la baza de date nu a reusit!');
}