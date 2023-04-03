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
<b><font color=red size=4> DIGITAR O ID E CLICAR EM TRAZER DADOS</font></b>
                    <div class="box">
                    <font size=1>
					
					
					


<font size=1>  
  <form name="form1" action="listar_pesquisa_update.php" method="POST">



<font size=4 color=blue><b>
Qual ID para Atualizar?:
</font></b>

<td><input type="text" name="id_update" placeholder="Digite o ID Para Pesquisa" size=2  class="input is-large"/></td>

<td><input type="submit" value="TRAZER OS DADOS" /><input type="hidden" name="done"  value="" /></td>

</table>

</form>
					
				<?php 
   include "sql_t.i.php";//conexão com o banco de dados
   
   @mysql_select_db($db);//selecione o banco de dados
   if(isset($_POST['done'])){  
   
	$id_retorno = $_POST['id_update'];
	$sqltudo = mysql_query("select  * FROM crtl_patrimonio  where id= $id_retorno ")  or die(mysql_error());           
    $colunas = mysql_num_rows($sqltudo);
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
		   $historico = @mysql_result($sqltudo, $j, "historico");  
		   $url_termo = @mysql_result($sqltudo, $j, "url_termo");
		   $url_foto = @mysql_result($sqltudo, $j, "url_foto");             
           }
   }
	   print'</table>';

?>

<form name="form2" action="atualiza.php" method="POST">

  <div class="field">
                                <div class="control">                                    
									<font color=red size=6><b>
									<tr><td>ID:</td><td><input type="hidden" enable="false" name="id" value="<?php echo $id; ?>" size=6/><?php echo $id; ?></td></tr>
									</font></b>
									<input type="text" placeholder="NETBIOS" name="netbios"  value="<?php echo $netbios; ?>" class="input is-large"/>
									<input type="text" placeholder="IP" name="endereco_ip" value="<?php echo $endereco_ip; ?>"class="input is-large"/>									
									<input type="text" placeholder="S.O" name="sistema_operacional" value="<?php echo $sistema_operacional; ?>" class="input is-large"/>
									<input type="text" placeholder="COLABORADOR" name="colaborador" value="<?php echo $colaborador; ?>" class="input is-large"/>
									<input type="text" placeholder="OBRA" name="obra"  value="<?php echo $obra; ?>" class="input is-large"/>
									<input type="text" placeholder="DEPARTAMENTO" name="departamento"  value="<?php echo $departamento; ?>" class="input is-large"/>																		
									<input type="text" placeholder="FABRICANTE" name="fabricante" value="<?php echo $fabricante; ?>" class="input is-large"/>
									<input type="text" placeholder="TIPO" name="tipo_equipamento" value="<?php echo $tipo_equipamento; ?>" class="input is-large"/>
									<input type="text" placeholder="URL DA FOTO" name="url_foto" value="<?php echo $url_foto; ?>" class="input is-large"/>
									<input type="text" placeholder="URL DO TERMO" name="url_termo" value="<?php echo $url_termo; ?>" class="input is-large"/>
									<input type="blob" placeholder="OBSERVAÇÕES" name="historico" value="<?php echo $historico; ?>" class="input is-large"/>
									
                                </div>
                            </div>
                            
                            <button type="submit" onclick="" class="button is-block is-link is-large is-fullwidth">ATUALIZAR</button><input type="hidden" name="done"  value="" />
                        </form>
						

						
                    </div>
                </div>
            </div>
        </div>
    </section>
	

<a href="listar.php">Listar</a>
</body>

</html>