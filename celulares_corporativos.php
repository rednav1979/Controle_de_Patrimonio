
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
<a href=http://intranet.lotisa.com.br/>[VOLTAR]</a>
<body>

    <section class="hero is-success is-fullheight">
	
	
        
            <div class="container has-text-centered">			
                
                    <h1 class="title has-text-grey">CELULARES CORPORATIVOS</h1>
					<h2 class="title has-text-grey"><font size=4>[Tecnologia da Informação]</font></h2>                   
                    <div class="box">
                    <font size=1>
					
					<?php 
   include "sql_t.i.php";//conexão com o banco de dados
   
   @mysql_select_db($db);//selecione o banco de dados
   
	$colaborador_retorno = $_POST['colaborador_procura'];
	// FILTRO NO SQL PARA NAO MOSTRAR OS CHIPS LIVRES E OS DO FILHO DO FABIO
	$sqltudo = mysql_query("select  * FROM crtl_patrimonio  where tipo_equipamento IN('CHIP','CELULAR') and colaborador !='LIVRE' and id != '190' and id != '189' order by colaborador;")  or die(mysql_error());
           
           $colunas = mysql_num_rows($sqltudo);

	   print'<br>';	

	   print'<br>';	
	   	
           print'<table border="1"   bordercolor="#00BFFF" >';
	   print'<tr>';
	   print'<td><b>ID</td>';	   
	   print'<td><b>EQUIPAMENTO</td>';	   
	   print'<td><b>COLABORADOR</td>';
	   print'<td><b>OBRA</td>';
	   print'<td><b>DEPARTAMENTO</td>';
	   
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
	   print'<td><b>TIPO</td>';
	   
           
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
           

	

	 
	   /*print '<table border=1>';/*monta a tabela de eventos*/

	  print'<tr>';
	   print '<td>'.$id.'	</td>';	   
	   print '<td>'.$netbios.'</td>';	   
	   print '<td>'.$colaborador.'</td>';
	   print '<td>'.$obra.'</td>';
	   print '<td>'.$departamento.'</td>';	   
	   
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
		
	   
	   
	  
	  
	   	
	   print '</tr>';	
           }
	   print'</table>';




?>

						
                    </div>
                </div>
            </div>
        </div>
    </section>
	


</body>

</html>