<?php
session_start();
if (isset($_SESSION['n'])&&(isset($_SESSION['s'])&&(isset($_SESSION['q'])
{
	echo "Ваше имя ".$_SESSION['n']." Ваша фамилия ".$_SESSION['s']." Ваш возраст ".$_SESSION['q'];
}
else
{
	echo "Ваших данных нет";
}
?>