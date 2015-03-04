<?php	
	$valor = $_POST['variable_input'];		
?>
<?php 
      function filtroMail($valor){
           if(filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE){
                return false;
           }else{
                if (preg_match("/(['])/",$valor)) {
                     return false;
                }
                if (preg_match('/(["])/',$valor)) {
                     return false;
                }
                if (preg_match("/([;])/",$valor)) {
                     return false;
                }
                if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$valor)) {
                     return false;
                }else{
                     $valor = filter_var($valor, FILTER_SANITIZE_EMAIL);
                     return true;
                }
           }
      } 
	  if (!filtroMail($valor)) { 
         echo 'Email incorrecto';
 }else {
         echo 'Email correcto';
 } 
 ?>
