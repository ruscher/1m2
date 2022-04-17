<?php 
// InÌcio PaginaÁ„o

function remove_query ($query,$key) {
	parse_str($query,$ar); //$_SERVER['QUERY_STRING']
	$result = http_build_query(array_diff_key($ar,array($key=>"")));
	return $result;
}

function f_paginacao($tr,$rpp,$pg) { // $tr eh total_records e $rpp eh registros por pagina  
  if ($tr%$rpp==0){$pages = intval($tr / $rpp)-1;} else {$pages = intval($tr / $rpp);} // calcula quantas paginas serao necessarias  
  if ($tr>0){  
     echo "<b>Total: $tr - </b>";  
     $NumRegistroInicial = ($pg*$rpp)+1;  
     if ($pg <> $pages) {$NumRegistroFinal = ($pg*$rpp)+$rpp;} else {$NumRegistroFinal = $tr;}  
     echo " Registros de $NumRegistroInicial a $NumRegistroFinal";  
     echo " - ";  
     echo "<b> P·ginas: </b>";  
     if ($pg <> 0) {  
       $showpage = $pg - 1;  

       echo ' <span id="page" class="page"><a id=mulink href="'.$_SERVER["PHP_SELF"].'?'.remove_query($_SERVER["QUERY_STRING"],"pg").'&pg=0">&laquo;</a></span> ';  
       echo ' <span id="page" class="page"><a id=mulink href="'.$_SERVER["PHP_SELF"].'?'.remove_query($_SERVER["QUERY_STRING"],"pg").'&pg='.$showpage.'">&lsaquo;</a></span> ';  

     }  
     for ($i = $pg-5; $i<$pg; $i++) {  
        $showpage=$i+1;  
        if ($i>=0) {  

	           echo ' <span id="page" class="page"><a id=mulink href="'.$_SERVER["PHP_SELF"].'?'.remove_query($_SERVER["QUERY_STRING"],"pg").'&pg='.$i.'">'.$showpage.'</a></span> ';  

        }  
     }  
     for ($i = $pg; ($i<=$pages AND $i<=($pg+5)); $i++) {  
        $showpage=$i+1;  
        if ($i == $pg) {  
           echo '<span id="page_open" class="page_open">'.$showpage.'</span>';
		} else {
           echo ' <span id="page" class="page"><a id=mulink href="'.$_SERVER["PHP_SELF"].'?'.remove_query($_SERVER["QUERY_STRING"],"pg").'&pg='.$i.'">'.$showpage.'</a></span>';  
        } 

     }  

     if ($pg < $pages) {  
        $showpage = $pg + 1;

        echo ' <span id="page" class="page"><a id=mulink href="'.$_SERVER["PHP_SELF"].'?'.remove_query($_SERVER["QUERY_STRING"],"pg").'&pg='.$showpage.'">&rsaquo;</a></span> '; 
        echo ' <span id="page" class="page"><a id=mulink href="'.$_SERVER["PHP_SELF"].'?'.remove_query($_SERVER["QUERY_STRING"],"pg").'&pg='.$pages.'">&raquo;</a></span> ';  

     }  
	echo "";
  }  
  

}  
// Fim PaginaÁ„o


function utf8_compliant($str) {
    if ( strlen($str) == 0 ) {
        return TRUE;
    }
	$strcheck = preg_match('/^.{1}/us',$str,$ar);
	if ($strcheck <> 1){
		$str = htmlentities($str);
	}
    return $str;
}
function RetImagens($dir) {
	$arq = scandir($dir);
	foreach ($arq as $valor) {
		if( ($valor <> ".") AND ($valor <> "..") ) {
		preg_match_all("/^(.*)\.(.*)$/i", $valor, $ext); 
		$nome = $ext[1][0];   
		$ext  = $ext[2][0];   
			//if( ($ext == "jpg") OR ($ext == "JPG") OR ($ext == "jpeg") OR ($ext == "JPEG")) {     
			 $imagens[]   =   $valor;
			//}
		}
	}
	
	return ($imagens ? $imagens : 0);
}

function nomemaiusculo($nome){
	$nomeresposta=ucwords(strtolower($nome));
	$fnome = array(" De ", " Do ", " Dos ", " Da ", " Del ", " E ", " Das ");
	$rnome = array(" de ", " do ", " dos ", " da ", " del ", " e ", " das ");
	$resposta = str_replace($fnome, $rnome, $nomeresposta);
	return $resposta;
}
//tipos de moeda Bota sinal
function valormoeda($number,$tipo){
	if($tipo=="Euro"){
		$number=eregi_replace("[,]",".",$number);	
		$nombre_format_francais = number_format($number, 2, ',', '.');
		// Ä 1 234,56 
		$nombre_format_francais=eregi_replace("[.]"," ",$nombre_format_francais);	
		$number= "Ä ".$nombre_format_francais."";		
	} elseif($tipo=="Dollar"){
		$number=eregi_replace("[,]",".",$number);
		// NotaÁ„o Inglesa com separador de milhar
		$english_format_number = number_format($number, 2, '.', ',');
		// $ 1234.57
		$number= "$ ".$english_format_number."";
	} elseif($tipo=="Real"){
		$number=eregi_replace("[,]",".",$number);
		$portuguese_format_number = number_format($number, 2, ',', '.');
		$number= "R$ ".$portuguese_format_number."";
		
	} elseif($tipo=="Hectare" or $tipo=="Alqueire"){
		$number=eregi_replace("[,]",".",$number);
		$ha_format_number = number_format($number, 2, ',', '.');
		$number= "".$tipo." R$ ".$ha_format_number."";
		
	} else {
		$number=eregi_replace("[ ]","",$number);		
		$number=eregi_replace("[.]","",$number);
		$number=eregi_replace("[,]","",$number);
		$tipo_format_number = number_format($number, 0, '', '');
		$number= "".$tipo_format_number." ".$tipo."";
	}
return $number;
}
function valormoedaform($number,$tipo){
	if($tipo=="Euro"){
		$number=eregi_replace("[,]",".",$number);	
		$nombre_format_francais = number_format($number, 2, ',', '.');
		$nombre_format_francais=eregi_replace("[.]"," ",$nombre_format_francais);	
		$number= "".$nombre_format_francais."";		
	} elseif($tipo=="Dollar"){
		$number=eregi_replace("[,]",".",$number);
		$english_format_number = number_format($number, 2, '.', ',');
		$number= "".$english_format_number."";
	} elseif($tipo=="Real"){
		$number=eregi_replace("[,]",".",$number);
		$portuguese_format_number = number_format($number, 2, ',', '.');
		$number= "".$portuguese_format_number."";
		
	} elseif($tipo=="Hectare" or $tipo=="alqueire"){
		$number=eregi_replace("[,]",".",$number);
		$ha_format_number = number_format($number, 2, ',', '.');
		$number= "".$ha_format_number."";
		
	} else {
		$number=eregi_replace("[ ]","",$number);		
		$number=eregi_replace("[.]","",$number);
		$number=eregi_replace("[,]","",$number);
		$tipo_format_number = number_format($number, 0, '', '');
		$number= "".$tipo_format_number."";
	}
return $number;
}

function nbsplast($texto){
 $len = strlen($texto);
 if($texto[$len-1] == " "){
   $resultado=substr_replace($texto,"",-1);
 } else {
   $resultado=$texto;
 }
 return $resultado;
}

function removeCaracterespecial($des_texto)
{
 $des_texto = ereg_replace("[^a-zA-Z0-9_.]", "", 
 strtr($des_texto, "·‡„‚ÈÍÌÛÙı˙¸Á¡¿√¬… Õ”‘’⁄‹« ", "aaaaeeiooouucAAAAEEIOOOUUC_"));
 $des_texto=eregi_replace("_"," ",$des_texto);
 $des_texto=addslashes($des_texto);
 return $des_texto;
}

function removeAcentos($des_texto)
{
    $des_texto=eregi_replace("[·‡„‚‰]","a",$des_texto);
    $des_texto=eregi_replace("[ÈËÍÎ]","e",$des_texto);    
    $des_texto=eregi_replace("[ÌÏÓÔ]","i",$des_texto);    
    $des_texto=eregi_replace("[ÛÚÙıˆ]","o",$des_texto);    
    $des_texto=eregi_replace("[˙˘˚¸]","u",$des_texto);    
    $des_texto=eregi_replace("[Ò]","n",$des_texto);    
    $des_texto=eregi_replace("[Á]","c",$des_texto);    
    $des_texto=eregi_replace("[¡¿√¬ƒ]","A",$des_texto);
    $des_texto=eregi_replace("[…» À]","E",$des_texto);    
    $des_texto=eregi_replace("[ÕÃŒœœ]","I",$des_texto);    
    $des_texto=eregi_replace("[”“‘’÷]","O",$des_texto);    
    $des_texto=eregi_replace("[⁄Ÿ€‹]","U",$des_texto);    
    $des_texto=eregi_replace("[—]","N",$des_texto);    
    $des_texto=eregi_replace("[«]","C",$des_texto);         
        
    $des_texto=addslashes($des_texto);
        
    return $des_texto;
}
function metragem($num){
	$num = eregi_replace("[,]",".",$num);
	return $num;	
}

function trataValor($num){

	if(strlen($num) <= 6){
		$valor = explode(",",$num);
		$valor = $valor[0].".".@$valor[1]; 
		
	}	elseif(strlen($num) >= 8 and strlen($num) <= 10){
		$todo = array();
		$parte = explode(",",$num);
		$todo = explode(".",$parte[0]);
		$mil = $todo[0];
		$real = $todo[1];
		$centavos = $parte[1];
		$valor = $mil.$real.".".$centavos;

	}       elseif(strlen($num) >= 12 and strlen($num) <= 14){
		$todo = array();
		$parte = explode(",",$num);
		$todo = explode(".",$parte[0]);
		$milh = $todo[0];
		$mil = $todo[1];
		$real = $todo[2];
		$centavos = $parte[1];
		$valor = $milh.$mil.$real.".".$centavos;

	} else {

	    $valor=$num;

	}
	
return $valor;
}

// Hora certa 11:00
function Horacerta($horaform){ 
     $horatrans = explode (":", $horaform); 
     $hora_certa = "$horatrans[0]:$horatrans[1]"; 
  return $hora_certa; 
} 
//// Exemplo de como usar a funÁ„o
//$data = "2005-04-02 00:30:00"; // formato datetime
//echo date_time($data, "d/m/y \‡\s H:i"); // retorna a string: "02/04/05 ‡s 00:30"

function date_time($date_time, $output_string, $utilizar_funcao_date = false) {
// Verifica se a string est· num formato v·lido de data ("aaaa-mm-dd" ou "aaaa-mm-dd hh:mm:ss")
if (preg_match("/^(\d{4}(-\d{2}){2})( \d{2}(:\d{2}){2})?$/", $date_time)) {
$valor['d'] = substr($date_time, 8, 2);
$valor['m'] = substr($date_time, 5, 2);
$valor['Y'] = substr($date_time, 0, 4);
$valor['y'] = substr($date_time, 2, 2);
$valor['H'] = substr($date_time, 11, 2);
$valor['i'] = substr($date_time, 14, 2);
$valor['s'] = substr($date_time, 17, 2);

// Verifica se a string est· num formato v·lido de hor·rio ("hh:mm:ss")
} else if (preg_match("/^(\d{2}(:\d{2}){2})?$/", $date_time)) {
$valor['d'] = NULL;
$valor['m'] = NULL;
$valor['Y'] = NULL;
$valor['y'] = NULL;
$valor['H'] = substr($date_time, 0, 2);
$valor['i'] = substr($date_time, 3, 2);
$valor['s'] = substr($date_time, 6, 2);

} else {
return false;
}

if ($utilizar_funcao_date) {
return date($output_string, mktime($valor['H'], $valor['i'], $valor['s'], $valor['m'], $valor['d'], $valor['Y']));
}

foreach (array('d', 'm', 'Y', 'y', 'H', 'i', 's') as $caractere) {
$output_string = ereg_replace("(^|[^\\\\])".$caractere, "\\1".$valor[$caractere], $output_string);
}
$output_string = ereg_replace("(^|[^\\\\])\\\\", "\\1", $output_string);

return $output_string;
}


// dateDiff("13/01/1981") imprime 1981-01-13
function dateDiff($sDataInicial)
{
	if($sDataInicial=='' or $sDataInicial=="0000-00-00" or $sDataInicial==" " or $sDataInicial=="//"){ //Caso nao tenha data nenhum coloque 0000-00-00
		$fdatamysql="0000-00-00"; 
	} else {
		$fdlist=explode('/',$sDataInicial); 
		$fdatamysql=$fdlist[2]."-".$fdlist[1]."-".$fdlist[0];
	}
return ($fdatamysql);
}
//echo dateDiffbr("1981-01-13") imprime 13/01/1981
function dateDiffbr($sDataInicialbr) {
$fdlistbr=explode('-',$sDataInicialbr); 
$fdatamysqlbr=$fdlistbr[2]."/".$fdlistbr[1]."/".$fdlistbr[0];
return ($fdatamysqlbr);
}
// Data atual dd/mm/aaaa e transforma pra entrar no banco de dados que recebe aaaa-mm-dd
$dlist=explode('/',date("d/m/Y"));
$datamysql=$dlist[2]."-".$dlist[1]."-".$dlist[0];

// IDADE basta usar:
// $calcula = new Idade();
// $idade = $calcula->Calcular("01", "07", "2007");
// echo "$idade";
class Idade {
public function Calcular ($dia, $mes, $ano)
{
    if (!checkdate($mes, $dia, $ano)) {
        //echo "A data que vocÍ informou est· errada [ $dia/$mes/$ano ]";
        //exit;
    } 

    $dia_atual = date("d");
    $mes_atual = date("m");
    $ano_atual = date("Y");
    $idade = $ano_atual - $ano ." anos";

    if (($ano_atual - $ano)=="0") {

            $idade = $mes_atual - $mes ." meses";

                if (($mes_atual - $mes)=="0") {
            
                        $idade = $dia_atual - $dia ." dias";
                     
                            if (($dia_atual - $dia)=="1") {
                        
                                    $idade = $dia_atual - $dia ." dia";
                                 
                           } elseif (($dia_atual - $dia)=="0") {
                        
                                    $idade = " Hoje";
                                 
                           }


               } elseif (($mes_atual - $mes)=="1") {
   
                        $idade = $mes_atual - $mes ." mes";
                           
               }
         
   } elseif (($ano_atual - $ano)=="1") {
   
            $idade = $ano_atual - $ano ." ano";
               
   }
    return $idade;
    } 
} 

class FaltaIdade {
public function Calcular ($dia, $mes, $ano)
{
    if (!checkdate($mes, $dia, $ano)) {
        // echo "A data que vocÍ informou est· errada [ $dia/$mes/$ano ]";
        // exit;
    } 

    $dia_atual = date("d");
    $mes_atual = date("m");
    $ano_atual = date("Y");
    $idade = $ano_atual - $ano ." anos";

    if (($ano_atual - $ano)=="0") {

            $idade = $mes_atual - $mes ." mes";

                if (($mes_atual - $mes)=="0") {
            
                        $idade = $dia_atual - $dia ." dia";
                     
                            if (($dia_atual - $dia)=="1") {
                        
                                    $idade = $dia_atual - $dia ." dia";
                                 
                           } elseif (($dia_atual - $dia)=="0") {
                        
                                    $idade = "hoje";
                                 
                           }


               } elseif (($mes_atual - $mes)=="1") {
   
                        $idade = $mes_atual - $mes ." mes";
                           
               }
         
   } elseif (($ano_atual - $ano)=="1") {
   
            $idade = $ano_atual - $ano ." ano";
               
   }
    return $idade;
    } 
}

function quantotmp($data_final){
	$data_atual = date ("Y-m-d"); 
	// separamos em partes as datas 
	$array_nacimiento = explode ( "-", $data_final ); 
	$array_actual = explode ( "-", $data_atual ); 
	
	$anos =  $array_actual[0] - $array_nacimiento[0]; // calculamos anos 
	$meses = $array_actual[1] - $array_nacimiento[1]; // calculamos meses 
	$dias =  $array_actual[2] - $array_nacimiento[2]; // calculamos dÌas 
	
	//ajuste de dias negativos $dias 
	if ($dias < 0){ 
		--$meses; 
	
		switch ($array_actual[1]) { 
			   case 1:     $dias_mes_anterior=31; break; 
			   case 2:  
					if (bisiesto($array_actual[0])==true){ 
						$dias_mes_anterior=29; 
					} else { 
						$dias_mes_anterior=28;  
					} 
					break;
			   case 3:     $dias_mes_anterior=31; break; 
			   case 4:     $dias_mes_anterior=31; break; 
			   case 5:     $dias_mes_anterior=30; break; 
			   case 6:     $dias_mes_anterior=31; break; 
			   case 7:     $dias_mes_anterior=30; break; 
			   case 8:     $dias_mes_anterior=31; break; 
			   case 9:     $dias_mes_anterior=31; break; 
			   case 10:     $dias_mes_anterior=30; break; 
			   case 11:     $dias_mes_anterior=31; break; 
			   case 12:     $dias_mes_anterior=30; break; 
		} 
	
		$dias=$dias + $dias_mes_anterior; 
	} 
	
	//ajuste de meses negativos $meses 
	if ($meses < 0) 
	{ 
		--$anos; 
		$meses=$meses + 12; 
	} 

	$result="";
	
	if($anos<>0){
		if($anos==1){
			$result.="".$anos." ano ";
		} else {
			$result.="".$anos." anos ";	
		}
	}
	
	if($meses<>0){
		if($meses==1){
			$result.="".$meses." mÍs ";
		} else {
			$result.="".$meses." meses ";	
		}
	}
	
	if($dias<>0){
		if($dias==1){
			$result.="".$dias." dia ";
		} else {
			$result.="".$dias." dias ";	
		}
	} else {
		$result.="0 dias ";
	}

	return $result;
	
	

} 
function bisiesto($anio_actual){ 
	if(!checkdate(2, 29, $anio_actual)){
		$bisiesto=false;
	}else{
		$bisiesto=true;
	}	
	return $bisiesto; 
}

//echo quantotmp("1990-06-26");


function contadia($dia1, $mes1, $ano1) {
	
	//defino data 2 
	$ano2 = date("Y"); 
	$mes2 = date("m"); 
	$dia2 = date("d"); 
	
	//calculo timestam das duas datas 
	$timestamp1 = mktime(0,0,0,$mes1,$dia1,$ano1); 
	$timestamp2 = mktime(4,12,0,$mes2,$dia2,$ano2); 
	
	//diminuo a uma data a outra 
	$segundos_diferenca = $timestamp1 - $timestamp2; 
	//echo $segundos_diferenca; 
	
	//converto segundos em dias 
	$dias_diferenca = $segundos_diferenca / (60 * 60 * 24); 
	
	//obtenho o valor absoluto dos dias (tiro o possÌvel sinal negativo) 
	$dias_diferenca = abs($dias_diferenca); 
	
	//tiro os decimais aos dias de diferenca 
	$dias_diferenca = floor($dias_diferenca);
	
	if($dias_diferenca==1){
		$txtdia=" dia";
	} else {
		$txtdia=" dias";	
	}
	
	return $dias_diferenca.$txtdia;
}
?>
