<?php
    session_start();
	require_once "fungsi/koneksi.php";
    if(isset($_SESSION['user'])) {
        echo "<script>window.location.replace('user/')</script>";
    }
    else {
        unset($_SESSION['user']);
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan Kamar Pada Asrama Kampus Universitas Negeri Padang Pesel</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles4.css">
	<link rel="stylesheet" type="text/css" href="css/image.css">
	<script type="text/javascript" src="lib/sweet.js"></script>
	<style type="text/css">
		
		
	</style>
</head>
<body>

	<nav>
		<ul>
			<li><a href="index">Beranda</a></li>
			<li><a href="kamar">Asrama</a></li>
			<li><a href="fasilitas">Fasilitas</a></li>
			<li><a href="daftar">Daftar</a></li>
			<li><a href="login">Login</a></li>
			<li style="text-align: right;"><script type="text/javascript">
		var d=new Date()
		var weekday=new
		Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
		var monthname=new
		Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Des")
		document.write(weekday[d.getDay()] + ", ")
		document.write(d.getDate() +" ")
		document.write(monthname[d.getMonth()]+ "  ")
		document.write(d.getFullYear())	
	</script>
		<script type="text/javascript">
		var timer = null
		function stop()
		{
			clearTimeout(timer)
		}
		function start()
		{
			var time= new Date()
			var hours= time.getHours()
			var minutes= time.getMinutes()
			minutes=((minutes < 10) ? "0" : " ") + minutes
			var seconds = time.getSeconds()
			seconds=((seconds < 10) ? "0" : " ") + seconds
			var clock = hours + ":" + minutes + ":" +seconds
			document.forms[0].display.value = clock
			timer = setTimeout("start()",1000)
		}
	</script>
	<body onLoad="start()" onunLoad="stop()">
	<form>
		<input type="text" name="display" size="10">
    </form>
</body></li>
			
		</ul>
	</nav>

	<main>
		<center>
		

			