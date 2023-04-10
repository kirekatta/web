   <form action="" method="post" enctype="multipart/form-data">
	<p>Введите свое имя:<input type="text" name="nam"></p>
	<p>Введите свою зарплату:<input type="text" name="money"></p>
	<p>Введите свой возраст:<input type="text" name="yourNumber"></p>
	<p>Введите свою страну проживания:<input type="text" name="strana"></p>
	<p><input type="submit" value="Сохранить мои данные"></p>
</form>
<?php
	session_start();
	$n=$_POST['nam'];
	$s=$_POST['money'];
	$q=$_POST['yourNumber'];
	$w=$_POST['strana'];
	if (isset($n)&&isset($s)&&isset($q)&&isset($w))
	{$_SESSION['n']=$n;
	 $_SESSION['s']=$s;
	 $_SESSION['q']=$q;
	 $_SESSION['w']=$w;
	}
?>
<p><a href="test.php">Смотреть ваши данные</a></p>