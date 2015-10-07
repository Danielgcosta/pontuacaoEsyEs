<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<script>

//Declaração de variáveis:
	var ciclo="3º";
	var ano="2015";
	var phoenixPontos=10;
	var morcegoPontos=10;	
	var castorPontos=10;
	var dataAtualizacao="03/10/2015";
	
	var pontos =[null,null,null];
	var nomePatrulha = ["","",""];
	var esferas = ["","",""];
	var	colocacoes = ["1º","2º","3º"];
	
//Definição da ordem das patrulhas
if (castorPontos > phoenixPontos)
{
	if (castorPontos > morcegoPontos) 
	{	
		pontos[0] = castorPontos; //C1
		nomePatrulha[0] = "Castor";
		if (morcegoPontos > phoenixPontos) //C1, M2, P3
		{
			pontos[1] = morcegoPontos;	//M2
			nomePatrulha[1] = "Morcego";
			pontos[2] = phoenixPontos;	//P3
			nomePatrulha[2] = "Phoenix";
		}	
		else	//M3, P2 ou M2, P2
		{
			if (morcegoPontos == phoenixPontos) //C1, M2, P2
			{
				pontos[1] = morcegoPontos;	//M2
				nomePatrulha[1] = "Morcego";
				pontos[2] = phoenixPontos;	//P2
				nomePatrulha[2] = "Phoenix";
				colocacoes = ["1º","2º","2º"];
			}
			else	//C1, P2, M3
			{
				pontos[1] = phoenixPontos;	//P2
				nomePatrulha[1] = "Phoenix";
				pontos[2] = morcegoPontos;	//M3
				nomePatrulha[2] = "Morcego";
			}
		}
	}
	else 
	{
		if (castorPontos == phoenixPontos)	//C1, M1, P2
		{
			pontos[0] = castorPontos; 	//C1
			nomePatrulha[0] = "Castor";
			pontos[1] = morcegoPontos;	//M1
			nomePatrulha[1] = "Morcego";
			pontos[2] = phoenixPontos;	//P2
			nomePatrulha[2] = "Phoenix";
			colocacoes = ["1º","1º","2º"];
		}
		else	//M1, C2, P3
		{
			pontos[0] = morcegoPontos;	//M1
			nomePatrulha[0] = "Morcego";			
			pontos[1] = castorPontos; 	//C2
			nomePatrulha[1] = "Castor";
			pontos[2] = phoenixPontos;	//P3
			nomePatrulha[2] = "Phoenix";			
		}
	}
}
else
{
	if (castorPontos == phoenixPontos)	
	{
		if (castorPontos > morcegoPontos) //C1, P1, M2
		{
			pontos[0] = castorPontos;	//C1
			nomePatrulha[0] = "Castor";			
			pontos[1] = phoenixPontos; 	//P1
			nomePatrulha[1] = "Phoenix";
			pontos[2] = morcegoPontos;	//M2
			nomePatrulha[2] = "Morcego";
			colocacoes = ["1º","1º","2º"];			
		}
		else
		{
			if (castorPontos == morcegoPontos)	//C1, M1, P1
			{
				pontos[0] = castorPontos;	//C1
				nomePatrulha[0] = "Castor";				
				pontos[1] = morcegoPontos; 	//M1
				nomePatrulha[1] = "Morcego";
				pontos[2] = phoenixPontos;	//P1
				nomePatrulha[2] = "Phoenix";
				colocacoes = ["1º","1º","1º"];
			}
			else	//M1, C2, P2
			{
				pontos[0] = morcegoPontos;	//M1
				nomePatrulha[0] = "Morcego";				
				pontos[1] = castorPontos; 	//C2
				nomePatrulha[1] = "Castor";								
				pontos[2] = phoenixPontos;	//P2
				nomePatrulha[2] = "Phoenix";
				colocacoes = ["1º","2º","2º"];
			}
		}
	}
	else	
	{
		if (morcegoPontos > phoenixPontos)	//M1, P2, C3
		{
			pontos[0] = morcegoPontos;	//M1	
			nomePatrulha[0] = "Morcego";							
			pontos[1] = phoenixPontos; 	//P2
			nomePatrulha[1] = "Phoenix";			
			pontos[2] = castorPontos;	//C3
			nomePatrulha[2] = "Castor";			
		}
		else
		{
			if (morcegoPontos == phoenixPontos)	//M1, P1, C2
			{
				pontos[0] = morcegoPontos;	//M1
				nomePatrulha[0] = "Morcego";				
				pontos[1] = phoenixPontos; 	//P1
				nomePatrulha[1] = "Phoenix";	
				pontos[2] = castorPontos;	//C2
				nomePatrulha[2] = "Castor";					
				colocacoes = ["1º","1º","2º"];
			}
			else
			{
				pontos[0] = phoenixPontos;	//P1
				nomePatrulha[0] = "Phoenix";
				if (morcegoPontos > castorPontos)	//P1, M2, C3
				{
					pontos[1] = morcegoPontos; 	//M2
					nomePatrulha[1] = "Morcego";
					pontos[2] = castorPontos;	//C3
					nomePatrulha[2] = "Castor";	
				}
				else
				{
					if (morcegoPontos == castorPontos)	//P1, C2, M2
					{
						pontos[1] = castorPontos; 	//C2
						nomePatrulha[1] = "Castor";							
						pontos[2] = morcegoPontos;	//M2
						nomePatrulha[2] = "Morcego";
						colocacoes = ["1º","2º","2º"];						
					}
					else	//P1, C2, M3
					{
						pontos[1] = castorPontos; 	//C2
						nomePatrulha[1] = "Castor";													
						pontos[2] = morcegoPontos;	//M3
						nomePatrulha[2] = "Morcego";																
					}
				}
			}
		}
	}
}


//Definição das esferas das patrulhas
function defEsferas()
{
	switch (nomePatrulha[0]){
		case "Castor":
			castorSphere1.style.display = 'block';
			castorSphere2.style.display = 'none';
			castorSphere3.style.display = 'none';
			switch (nomePatrulha[1]){
				case "Phoenix":
					phoenixSphere1.style.display = 'none';
					phoenixSphere2.style.display = 'block';
					phoenixSphere3.style.display = 'none';
					morcegoSphere1.style.display = 'none';
					morcegoSphere2.style.display = 'none';
					morcegoSphere3.style.display = 'block';
				break;
				case "Morcego":
					morcegoSphere1.style.display = 'none';
					morcegoSphere2.style.display = 'block';
					morcegoSphere3.style.display = 'none';					
					phoenixSphere1.style.display = 'none';
					phoenixSphere2.style.display = 'none';
					phoenixSphere3.style.display = 'block';
				break;
			}
		break;
		case "Morcego":
			morcegoSphere1.style.display = 'block';
			morcegoSphere2.style.display = 'none';
			morcegoSphere3.style.display = 'none';
			switch (nomePatrulha[1]){
				case "Castor":
					castorSphere1.style.display = 'none';
					castorSphere2.style.display = 'block';
					castorSphere3.style.display = 'none';
					phoenixSphere1.style.display = 'none';
					phoenixSphere2.style.display = 'none';
					phoenixSphere3.style.display = 'block';
				break;
				case "Phoenix":
					phoenixSphere1.style.display = 'none';
					phoenixSphere2.style.display = 'block';
					phoenixSphere3.style.display = 'none';	
					castorSphere1.style.display = 'none';
					castorSphere2.style.display = 'none';
					castorSphere3.style.display = 'block';
				break;
			}
		break;
		case "Phoenix":
			phoenixSphere1.style.display = 'block';
			phoenixSphere2.style.display = 'none';
			phoenixSphere3.style.display = 'none';
			switch (nomePatrulha[1]){
				case "Castor":
					castorSphere1.style.display = 'none';
					castorSphere2.style.display = 'block';
					castorSphere3.style.display = 'none';
					morcegoSphere1.style.display = 'none';
					morcegoSphere2.style.display = 'none';
					morcegoSphere3.style.display = 'block';
				break;
				case "Morcego":
					morcegoSphere1.style.display = 'none';
					morcegoSphere2.style.display = 'block';
					morcegoSphere3.style.display = 'none';
					castorSphere1.style.display = 'none';
					castorSphere2.style.display = 'none';
					castorSphere3.style.display = 'block';
				break;
			}
		break;
	}
}

</script>

<HEAD><TITLE>Pontuação das Patrulhas</TITLE>
<META content='width=device-width, initial-scale=1,maximum-scale=2' name='viewport1'; charset=UTF-8">
<STYLE type="text/css">
	* {
		background-repeat: no-repeat;
		margin:0;
	}
	#body {
		width:100%;
		height:100%;
		margin:0;
		position: relative;
		background-color: black;
		}
	#container {
		width:100%;
		height:100%;
		margin:0;
		background-color: black;
		}
	td {
		vertical-align: top;
		font-family: Myriad Pro;
		font-size: 100%;
		padding: 0;	
		}
	table {
		margin:auto;
		align: center;
		}
</STYLE> 
</HEAD>

<BODY bgcolor="#000000" onload="defEsferas()" id="body">
<DIV id="container">
<table colspan="3"  width=600 height=600 border=0 background="img/bg.png" id="table">
    <tr height="20"> 
		<td width="20"></td>
		<td width="500"></td>
		<td width="20"></td>
	</tr>
	<tr height=100%>
		<td></td>
		<td>
			<p><image src="img/textTropaEscoteira.png"></image></p>
		</td>
		<td></td>
	</tr>
    <tr height="20"> 
		<td width="10"></td>
		<td width="500"></td>
		<td width="20"></td>
	</tr>	
	<tr height=100%>
		<td></td>
		<td>
			<p><font size="6" color="green" font-family="Myriad Pro"><a><script type="text/javascript">document.write(ciclo);</script></a> Ciclo de <a><script type="text/javascript">document.write(ano);</script></a> - Resultado parcial<br>Pontuação das Patrulhas</font></p>
		</td>
		<td></td>
	</tr>
	<tr height="20"> 
		<td width="10"></td>
		<td width="500"></td>
		<td width="20"></td>
	</tr>
	<tr height=100%>
		<td></td>
		<td>
			<table border=0 align="center">
				<tr height=100%> <!--1 row-->
					<td width="150" align="center"><font size="6" color="blue" font-family="Myriad Pro"><a><script type="text/javascript">document.write(colocacoes[0]);</script></a> lugar</font></td>
					<td width="10" rowspan="9"></td>				
					<td width="150"></td>
					<td width="10" rowspan="9"></td>				
					<td width="150" rowspan="2"></td>
				</tr>
				<tr height=100%> <!--2 row-->
					<td align="center"><font size="6" color="black" font-family="Myriad Pro"><a><script type="text/javascript">document.write(nomePatrulha[0]);</script></a></font></td><!-- Nome da patrulha em primeiro lugar-->											
					<td align="center"><font size="6" color="blue" font-family="Myriad Pro"><a><script type="text/javascript">document.write(colocacoes[1]);</script></a> lugar</font></td>				
				</tr>
				<tr height="40" margin=0> <!--3 row-->
					<td rowspan="3" align="center">
						<img src="img/castor.png" width="160" height="160" style="display: none;" id="castorSphere1">	<!--impressão da esfera do 1º lugar-->
						<img src="img/morcego.png" width="160" height="160" style="display: none;" id="morcegoSphere1"/>
						<img src="img/phoenix.png" width="160" height="160" style="display: none;" id="phoenixSphere1"/>	
					</td>
					<td align="center"><font size="6" color="black" font-family="Myriad Pro"><a><script type="text/javascript">document.write(nomePatrulha[1]);</script></a></font></td><!-- Nome da patrulha em segundo lugar-->					
					<td align="center"><font size="6" color="blue" font-family="Myriad Pro"><a><script type="text/javascript">document.write(colocacoes[2]);</script></a> lugar</font></td>
				</tr>
				<tr height="40"> <!--4 row-->
					<td rowspan="3" align="center">
						<img src="img/castor.png" width="160" height="160" style="display: none;" id="castorSphere2">	<!--impressão da esfera do 2º lugar-->
						<img src="img/morcego.png" width="160" height="160" style="display: none;" id="morcegoSphere2"/>
						<img src="img/phoenix.png" width="160" height="160" style="display: none;" id="phoenixSphere2"/>	
					</td>
					<td align="center"><font size="6" color="black" font-family="Myriad Pro"><a><script type="text/javascript">document.write(nomePatrulha[2]);</script></a></font></td><!-- Nome da patrulha em terceiro lugar-->
				</tr>
				<tr height="60"> <!--5 row-->
					<td rowspan="3" align="center">
						<img src="img/castor.png" width="160" height="160" style="display: none;" id="castorSphere3">	<!--impressão da esfera do 3º lugar-->
						<img src="img/morcego.png" width="160" height="160" style="display: none;" id="morcegoSphere3"/>
						<img src="img/phoenix.png" width="160" height="160" style="display: none;" id="phoenixSphere3"/>	
					</td>
				</tr>
				<tr height="40"> <!--6 row-->
					<td align="center"><font size="6"><a><script type="text/javascript">document.write(pontos[0]);</script></a></font></td>
				</tr>
				<tr height="40"> <!--7 row-->
					<td rowspan="2"></td>
					<td align="center"><font size="6"><a><script type="text/javascript">document.write(pontos[1]);</script></a></font></td>
				</tr>
				<tr height="40"> <!--8 row-->	
					<td></td>						
					<td align="center"><font size="6"><a><script type="text/javascript">document.write(pontos[2]);</script></a></font></td>
				</tr>							
			</table>
		</td>		
		<td></td>
	</tr>
	<tr height="20">
		<td></td>
		<td height="18" align="right">
			<a href="http://pontuacao.esy.es/img/listaPontos.png" target="_blank"><font size="2" color="white">Veja aqui as regras de pontuação</a></font>
			<font size="2" color="yellow">(atualizado em <a><script type="text/javascript">document.write(dataAtualizacao);</script></a>)</font>
		</td>
		<td></td>
	</tr>
	</tr>
</table>
</DIV>
</BODY>
</HTML>