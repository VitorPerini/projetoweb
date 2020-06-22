<?php
	date_default_timezone_set('America/vila_velha');
	$hora = date('H:i');
	
	
$cid = '457033'; // CID da sua cidade, encontre a sua em http://hgbrasil.com/weather

$dados = json_decode(file_get_contents('http://api.hgbrasil.com/weather/?cid='.$cid.'&format=json'), true); // Recebe os dados da API


?>
<html lang="pt-br">
	<head>
		<title>clima em html</title>
		<meta charset="UTF-8">
	</head>
<style type="text/css">
<!--
@charset 'UTF-8';
*{margin:0; padding:0;}
body{
	background:#fff;
	font-family:Arial;
}
.bloco{
	width:400px;
	height:200px;
	background:#ececec;
	box-shadow:0px 2px 10px #ccc;
	border-radius:3px;
}
#header{
	width:100%;
	height:45px;
	background:#e7e7e7;
	display:block;
	
}
a:link{
	background:tranparent; color:blue; text-decoration:underline;
}
a:hover{
	background:tranparent; color:black; text-decoration:underline;
}
a:visited{
	background:tranparent; color:blue; text-decoration:underline;
}
-->
</style>
<body>
	<div class="bloco" id="bloco">
		<div id="header">
			<span style="float:left; padding-top:12px; padding-left:12px;"><?php echo $dados['results']['city']; ?></span>
			<span style="float:left; padding-top:28px; margin-left:-38px; font-size:8px;"><a target="_blank" href="<?php echo $site;?>" title="<?php echo $titlesite; ?>"><?php echo $titlesite;?></a></span>
			<span style="float:right; padding-top:12px; padding-right:12px; cursor:pointer;" onclick="document.getElementById('bloco').style.display='none'">&times;</span>
		</div>
			<span style="position:absolute; margin-top:60px; font-size:10pt; margin-left:12px;">Sensa&ccedil;&atilde;o 26�C</span>
			<img style="position:absolute; margin-left:130px; float:left;" src="imagens/<?php echo $dados['results']['img_id']; ?>.png" width="200" height="200"/>
			<span style="font-size:23pt; float:right; margin-top:50px; margin-right:12px;"><b><?php echo $hora;?></b></span>
	</div>
</body>
</html>