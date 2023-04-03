<?php
session_start();
include('verifica_login.php');
?>
<html>
<?php

//criar a conexÃ£o com o banco

include "sql_t.i.php";



if(isset($_POST['done'])){   

    $endereco_ip = $_POST['endereco_ip'];
    $netbios = $_POST['netbios'];
    $sistema_operacional = $_POST['sistema_operacional'];
    $colaborador = $_POST['colaborador'];    
    $tipo_equipamento = $_POST['tipo_equipamento'];
	$fabricante = $_POST['fabricante'];
	$departamento = $_POST['departamento'];
	$usuario_cadastro = $_SESSION['usuario'];	
	$obra = $_POST['obra'];	
	
	

    if(empty($endereco_ip) || empty($netbios)|| empty($sistema_operacional) || empty($colaborador)|| empty($departamento)|| empty($fabricante)|| empty($tipo_equipamento)|| empty($obra)){
	
	
		

        $erro = "Atenção, você deve preencher todos os campos";
	
    }else{        

       $sql = mysql_query("INSERT INTO `crtl_patrimonio`(`data_cadastro`,`endereco_ip`, `netbios`, `sistema_operacional`, `colaborador`,`obra`,`departamento`,`tipo_equipamento`,`fabricante`,`usuario_cadastro`) VALUES (now(),'$endereco_ip ', '$netbios', '$sistema_operacional','$colaborador','$obra', '$departamento','$tipo_equipamento','$fabricante','$usuario_cadastro')") or die(mysql_error());
	   

            if($sql){

                $erro = "Dados cadastrados com sucesso!";

              } else{

                  $erro = "Não foi possivel cadastrar os dados";

              }

    }

}

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<script language="javascript" type="text/javascript">

function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }
	

	
</script>

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
<a href="http://intranet.lotisa.com.br/ti/control_pass/menu.php">[M E N U ]</a></font>
<br>
<a href="listar.php">[L I S T A R ]</a></font>
<br>
<a href="http://intranet.lotisa.com.br/ti/controle_patrimonio/listar_pesquisa_update.php">[U P D A T E ]</a></font>
<br>
<a href="http://intranet.lotisa.com.br/ti/controle_patrimonio/init.php">[C A D A S T R O  ]</a></font>


<p align=right>
<a href=logout.php>[S A I R]</a>
</p>
<body>

    <section class="hero is-success is-fullheight">
	
        
            <div class="container has-text-centered">			
                <div class="column is-4 is-offset-4">
                    <h1 class="title has-text-grey">CADASTRO DE ATIVOS</h1>
					<h2 class="title has-text-grey"><font size=4>[Tecnologia da Informação]</font></h2>                   
                    <div class="box">
                        <form name="form1" action="init.php" method="POST">
						<?php
if(isset($erro)){
    print '<div style="width:80%; background:red; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';
}
if(isset($erro2)){
    print '<div style="width:80%; background:green; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro2.'</div>';
}
?>	
                            <div class="field">
                                <div class="control">                                    
									<input name="netbios"   class="input is-large" placeholder="netbios" autofocus="" onkeyup="maiuscula(this)">									
									<input name="endereco_ip"  class="input is-large" placeholder="endereco_ip" autofocus="" onkeyup="maiuscula(this)">
									<input name="sistema_operacional"  class="input is-large" placeholder="sistema_operacional" autofocus="" onkeyup="maiuscula(this)">
									<input name="colaborador"  class="input is-large" placeholder="colaborador" autofocus="" onkeyup="maiuscula(this)">
									<input name="obra"  class="input is-large" placeholder="obra" autofocus="" onkeyup="maiuscula(this)">
									<input name="departamento"  class="input is-large" placeholder="departamento" autofocus=""onkeyup="maiuscula(this)">
									<input name="fabricante"  class="input is-large" placeholder="fabricante" autofocus="" onkeyup="maiuscula(this)">
									<select name="tipo_equipamento" class="input is-large" placeholder="tipo_equipamento" autofocus="" >
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
                                </div>
                            </div>
                            
                            <button type="submit" onclick="" class="button is-block is-link is-large is-fullwidth">CADASTRAR</button><input type="hidden" name="done"  value="" />
                        </form>
						
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	

<br>

</body>

</html>

