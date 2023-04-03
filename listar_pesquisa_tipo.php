<?php
session_start();
include('verifica_login.php');
?>	
<!DOCTYPE html>
<html>



 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>



<img src=css/logo.png><br>
Hoje, 
<script Language="JavaScript">
<!--
mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday; 
myear = mydate.getFullYear();

if(myday == 0)
day = " Domingo, " 

else if(myday == 1)
day = " Segunda - Feira, " 

else if(myday == 2)
day = " Terça - Feira, " 

else if(myday == 3)
day = " Quarta - Feira, " 

else if(myday == 4)
day = " Quinta - Feira, " 

else if(myday == 5)
day = " Sexta - Feira, " 

else if(myday == 6)
day = " Sábado, " 

if(mymonth == 0)
month = "Janeiro " 

else if(mymonth ==1)
month = "Fevereiro " 

else if(mymonth ==2)
month = "Março " 

else if(mymonth ==3)
month = "Abril " 

else if(mymonth ==4)
month = "Maio " 

else if(mymonth ==5)
month = "Junho " 

else if(mymonth ==6)
month = "Julho " 

else if(mymonth ==7)
month = "Agosto " 

else if(mymonth ==8)
month = "Setembro " 

else if(mymonth ==9)
month = "Outubro " 

else if(mymonth ==10)
month = "Novembro " 

else if(mymonth ==11)
month = "Dezembro " 

document.write("<font face=arial, size=2>"+ day);
document.write(myweekday+" de "+month+ "</font>");
document.write(myear);
// -->
</script>
<br>
<a href="../control_pass/menu.php">[M E N U ]</a></font>
<br>
<a href="listar.php">[L I S T A R ]</a></font>
<br>
<a href="listar_pesquisa_update.php">[U P D A T E ]</a></font>
<br>
<a href="init.php">[C A D A S T R O  ]</a></font>
<body>

    <section class="hero is-success is-fullheight">
	
        
            <div class="container has-text-centered">			
                
                    <h1 class="title has-text-grey">MENU DE ACESSO</h1>
					<h2 class="title has-text-grey"><font size=4>[Tecnologia da Informação]</font></h2>                   
                    <div class="box">
                    <font size=2>
					
					<form name="form1" action="listar_pesquisa.php" method="post">


<td>Pesquisar Por Nome?:
<br>
<input type="text"  name="colaborador_procura" class="campo"/></td></tr>
<tr>
<td></td>
<td><input type="submit" value="Pesquisar" /><input type="hidden" name="done"  value="" /></td>
</tr>
</tbody>
</table>
</form>
					
					<form name="form1" action="listar_pesquisa_tipo.php" method="post">


<td>Pesquisar Por Tipo?:
<br>
<select name="colaborador_procura"   autofocus="" >									
									<option>SELECIONE</option>
									<option>CELULAR</option>
									<option>CHIP</option>
									<option>ESTACAO</option>									
									<option>SCANNER</option>
									<option>NOTEBOOK</option>
									<option>IMPRESSORA</option>																		
									<option>RELOGIO</option>
									<option>MONITOR</option>
									<option>TV</option>
									<option>MOCHILA</option>
									<option>ROTEADOR</option>
									
									
									</select>				
</td>
<tr>
<td></td>
<td><input type="submit" value="Pesquisar" /><input type="hidden" name="done"  value="" /></td>
</tr>
</tbody>
</table>
</form>

					
					<?php 
   include "sql_t.i.php";//conexão com o banco de dados
   
   @mysql_select_db($db);//selecione o banco de dados
   
	$colaborador_retorno = $_POST['colaborador_procura'];
	$sqltudo = mysql_query("select  * FROM crtl_patrimonio  where tipo_equipamento like UPPER('$colaborador_retorno%') order by endereco_ip ")  or die(mysql_error());
           
           $colunas = mysql_num_rows($sqltudo);

	   print'<br>';	

	   print'<br>';   	
       print'<table border="1"   bordercolor="#00BFFF" >';
	   print'<tr>';
	   print'<td><b>ID</td>';	   
	   print'<td><b>IP</td>';
	   print'<td><b>NETBIOS</td>';
	   print'<td><b>S.O</td>';
	   print'<td><b>COLABORADOR</td>';
	   print'<td><b>OBRA</td>';
	   print'<td><b>DEPARTAMENTO</td>';
	   print'<td><b>FABRICANTE</td>';	   
	   print'<td><b>TIPO</td>';
	   print'<td><b>ICO</td>';
	   print'<td><b>TERMO</td>';
	   print'<td><b>FOTO</td>';
	   print'</tr></b>';
           for($j = 0; $j < $colunas; $j++){/*caso no mesmo dia tenha mais eventos continua imprimindo */
           $id = @mysql_result($sqltudo, $j, "id");/*pegando os valores do banco referente ao evento*/
           $endereco_ip = @mysql_result($sqltudo, $j, "endereco_ip");
           $netbios = @mysql_result($sqltudo, $j, "netbios");
           $sistema_operacional = @mysql_result($sqltudo, $j, "sistema_operacional");
           $colaborador = @mysql_result($sqltudo, $j, "colaborador");
           $departamento = @mysql_result($sqltudo, $j, "departamento");
           $processador = @mysql_result($sqltudo, $j, "processador");
           $memoria = @mysql_result($sqltudo, $j, "memoria");
           $disco_rigido = @mysql_result($sqltudo, $j, "disco_rigido");
           $tipo_equipamento = @mysql_result($sqltudo, $j, "tipo_equipamento");            
		   $fabricante = @mysql_result($sqltudo, $j, "fabricante");            
		   $obra = @mysql_result($sqltudo, $j, "obra");   
		   $url_termo = @mysql_result($sqltudo, $j, "url_termo");
		   $url_foto = @mysql_result($sqltudo, $j, "url_foto");
			if ($tipo_equipamento == "ESTACAO") {
			$contador_estacao++;
			   }
			   if ($tipo_equipamento == "CELULAR") {
			$contador_celular++;
			   }

		   if ($tipo_equipamento == "NOTEBOOK") {
			$contador_notebook++;
			   }
		   if ($tipo_equipamento == "IMPRESSORA") {
			$contador_impressora++;
			   }   
          	  
		   if ($tipo_equipamento == "RELOGIO") {
			$contador_relogio++;
			   }
			
			if ($tipo_equipamento == "CELULAR") {
			$contador_celular++;
			   }
			   
			if ($tipo_equipamento == "CHIP") {
			$contador_chip++;
			   }
		   if ($tipo_equipamento == "SCANNER") {
			$contador_scanner++;
			   }
		    if ($tipo_equipamento == "MOCHILA") {
			$contador_mochila++;
			   }
		   if ($tipo_equipamento == "NOBREAK") {
			$contador_nobreak++;
			   }
		   if ($tipo_equipamento == "ROTEADOR") {
			$contador_roteador++;
			   }
		
		   
	   print'<tr>';
	   print '<td>'.$id.'</td>';	   	   
	   print '<td>'.$endereco_ip.'</td>';
	   print '<td>'.$netbios.'</td>';
	   print '<td>'.$sistema_operacional.'</td>';	     
	   print '<td>'.$colaborador.'</td>';
	   print '<td>'.$obra.'</td>';
	   print '<td>'.$departamento.'</td>';	   
	   print '<td>'.$fabricante.'</td>';
	   print '<td>'.$tipo_equipamento.'</td>';
		
		
	   if ($tipo_equipamento == "ESTACAO"){
			print '<td><img src="images/desktop.jpg" width=30 height=30></td>';
		}
	   if ($tipo_equipamento == "CELULAR"){
			print '<td><img src="images/celular.jpg" width=30 height=30></td>';
		}
		if ($tipo_equipamento == "CHIP"){
			print '<td><img src="images/chip.jpg" width=30 height=30></td>';
		}
		if ($tipo_equipamento == "NOTEBOOK"){
			print '<td><img src="images/notebook.jpg" width=30 height=30></td>';
		}	
		if ($tipo_equipamento == "IMPRESSORA"){
			print '<td><img src="images/impressora.jpg" width=30 height=30></td>';
		}		
		if ($tipo_equipamento == "RELOGIO"){
			print '<td><img src="images/relogio.jpg" width=30 height=30></td>';		
		}
		if ($tipo_equipamento == "SCANNER"){
			print '<td><img src="images/scanner.jpg" width=30 height=30></td>';		
		}
		if ($tipo_equipamento == "MOCHILA"){
			print '<td><img src="images/mochila.png" width=30 height=30></td>';		
		}
		
		if ($tipo_equipamento == "ROTEADOR"){
			print '<td><img src="images/semicone.png" width=30 height=30></td>';		
		}
		if ($tipo_equipamento == "MONITOR"){
			print '<td><img src="images/monitor.png" width=30 height=30></td>';		
		}
		if ($tipo_equipamento == "TV"){
			print '<td><img src="images/semicone.png" width=30 height=30></td>';		
		}
		
		if ($url_termo ==""){			
			print '<td><img src="images/bolinha_vermelha.png" width=30 height=30></td>';
		}else{				
			print '<td><a href="uploads_termo/'.$url_termo.'"target="_blank"><img src="images/bolinha_verde.png" width=30 height=30></a>';	
		}			
		if ($url_foto ==""){			
			print '<td><img src="images/bolinha_vermelha.png" width=30 height=30></td>';
		}else{				
			print '<td><a href="uploads_foto/'.$url_foto.'"target="_blank"><img src="images/bolinha_verde.png" width=30 height=30></a>';	
		}
	   print '</tr>';	
           }
	    print'</table>';
		print '<br>';
		print '<hr>';
		echo 'EQUIPAMENTOS CADASTRADOS: ';
		print '<ul>';

		print '<li>';
		echo 'Impressoras: ';
		print '<font color=red>';
		echo $contador_impressora;
		print '</font>';
		print '</li>';
		print '<br>';

		print '<li>';
		echo 'Notebooks: ';
		print '<font color=red>';
		echo $contador_notebook;
		print '</font>';
		print '</li>';
		print '<br>';

		print '<li>';
		echo 'Estações: ';
		print '<font color=red>';
		echo $contador_estacao;
		print '</font>';
		print '</li>';
		print '<br>';

		print '<li>';
		echo 'Relogios Ponto: ';
		print '<font color=red>';
		echo $contador_relogio;
		print '</font>';
		print '</li>';
		print '<br>';


		print '<li>';
		echo 'Chips de Celular: ';
		print '<font color=red>';
		echo $contador_chip;
		print '</font>';
		print '</li>';
		print '<br>';

		print '<li>';
		echo 'Celulares Com Chip: ';
		print '<font color=red>';
		echo $contador_celular;
		print '</font>';
		print '</li>';
		print '<br>';

		print '<li>';
		echo 'Mochilas Notebook: ';
		print '<font color=red>';
		echo $contador_mochila;
		print '</font>';
		print '</li>';
		print '<br>';

		print '<li>';
		echo 'ROTEADOR:';
		print '<font color=red>';
		echo $contador_roteador;
		print '</font>';
		print '</li>';
		print '<br>';

		

?>					
                    </div>
                </div>
            </div>
        </div>
    </section>
	


</body>

</html>

