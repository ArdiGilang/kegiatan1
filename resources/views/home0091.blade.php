<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Awal</title>
</head>
<style>
.button {
  border: none;
  color: rgb(0, 0, 0);
  padding: 20px 35px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  cursor: pointer;
}

.button1 {border: 2px solid #3cff00; background-color: #FFFFFF; color: black;}
.button2 {background-color: #3cff00; color: rgb(0, 0, 0);}
</style>

<body>
	<div class="container-md" align="center">
  		<h1>Tampilan Awal</h1>
  		<td align="center"><button onclick="document.location='/artikel'" class="button button1">Artikel</button>&emsp;<button onclick="document.location='/contact'" class="button button2">Contact Me</button></td>
	</div>
</body>
</html>
