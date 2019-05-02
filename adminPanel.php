<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <style>

.logo img{
  width: 390px;
  height: 225px;
  margin-top: -220px;
  margin-bottom: 25px;
  margin-left: 10px;
}

.logo img:hover {
  cursor: pointer;
  background:#E1ECFF;
  -webkit-transform:scale(1.1);transform:scale(1.1);
}

h1 {
	text-align: center;
	font-size: 38px;
	border: 1px solid black;
	color:black;
	background:#8EADF7;
	margin-bottom:40px;
}

ul li {
	margin-bottom:-10px;
	margin-left: 550px;
	font-size: 22px;
}



  </style>
</head>
<body>
    <div class="logo">
  		<a href="index.html">
  		<img src="img/nat_com.jpg" alt="Logo de empresa">
  		</a>
	</div>

<h1>Qué desea hacer?</h1>

<ul>
	<li><h3><a href="capturar.html">CAPTURAR</a></h3></li>
	<li><h3><a href="buscar.html">BUSCAR</a></h3></li>
	<li><h3><a href="modificar.html">MODIFICAR</a></h3></li>
	<li><h3><a href="eliminar.html">ELIMINAR</a></h3></li>
</ul>

<a href="logout.php"><button class="logout">Cerrar sesión</button></a>

</body>
</html>