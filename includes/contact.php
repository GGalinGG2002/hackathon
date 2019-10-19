<?php
include 'conectare.php';
if(!empty($_POST['nume'])&&!empty($_POST['email'])&&!empty($_POST['mesaj'])
&&isset($_POST['nume'])&&isset($_POST['email'])&&isset($_POST['mesaj'])){
$nume = $_POST['nume'];
$email = $_POST['email'];
$mesaj = $_POST['mesaj'];
$sql = "INSERT INTO contact (nume,email,mesaj) VALUES ('$nume','$email','$mesaj')";
$result = mysqli_query($conectare,$sql);
header("Location: ../contact.php?info=ok");
}
else
{
	header("Location: ../contact.php?info=eroare");
}