<?php
include ("PHPMailerAutoload.php");

//Comprobamos que se haya presionado el boton enviar

//Guardamos en variables los datos enviados



$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$nivel  = $_POST['nivel'];
$estadocivil  = $_POST['estadocivil'];
$cursodeinteres  = $_POST['cursodeinteres'];

$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


///Validamos del lado del servidor que el nombre y el email no estén vacios
if($nombre == ''){
echo "Debe ingresar su nombre";
}
else if($correo == ''){
echo "Debe ingresar su email";
}else{


$mail = new PHPMailer();


$mail->IsSMTP();
$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465;
$mail->SMTPAuth = true;

$mail->Username = "jcastillovnz@gmail.com";
$mail->Password = "24845258";

$mail->From = "jcastillovnz@gmail.com";
$mail->FromName = "E&GOZ Services";

$mail->Subject = "$asunto";
$mail->WordWrap = 50;

$mail->AddAttachment(""); // archivo adjunto

$mail->AddAddress("jcastillovnz@gmail.com"); // Correo destino
$mail->IsHTML(TRUE);

$mail->Body = "   


     



  <table width='449' height='510' border='1' cellpadding='0' cellspacing='0'> 
        <tr>
          <td align='left' bgcolor='#f0efef'><div align='center'><img src='https://lh3.googleusercontent.com/-HEsQ2c5-Iyo/VvaVlUBMEqI/AAAAAAAAANs/pO0mfQ8NCHEMlqO65QACMHJK41bqjc_EgCCo/s912-Ic42/LOGO.png' width='157' height='71' /></div></td>
          <td align='left'>&nbsp;</td>
        </tr>
        <tr> <td width='37%' align='left' bgcolor='#f0efef'><strong>Nombre:</strong></td> <td width='63%' align='left'>$nombre</td> </tr> <tr> <td align='left' bgcolor='#f0efef'><strong>Correo:</strong></td> 
      <td align='left'>$correo</td> </tr> <tr> <td width='37%' align='left' bgcolor='#f0efef'><strong>Teléfono:</strong></td> <td width='63%' align='left'>$telefono</td> </tr> <tr> <td width='37%' align='left' bgcolor='#f0efef'><strong>Nivel de ingles:</strong></td> <td width='63%' align='left'>$nivel</td> </tr> <tr> <td width='37%' align='left' bgcolor='#f0efef'><strong>Estado civil:</strong></td> <td width='63%' align='left'>$estadocivil</td> </tr> 
      <tr>
        <td height='25' align='left' bgcolor='#f0efef'><strong>Curso de interes:</strong></td>
        <td align='left'>$cursodeinteres</td>
      </tr>
      <tr> <td height='229' align='left' bgcolor='#f0efef'><strong>Mensaje:</strong></td> <td align='left'>$mensaje</td> </tr> </table>

";//Puedes cambiar el asunto del mensaje desde aqui
//Este sería el cuerpo del mensaje



if(!$mail->Send()) {
  echo'<script type="text/javascript">
            alert("Enviado Correctamente");
            window.location="http://localhost:8080/EG/contacto.html"
         </script>'. $mail->ErrorInfo ; 
} else {

  echo'<script type="text/javascript">
            alert("Mensaje enviado exitosamente");
            window.location="http://localhost:8080/EG/contacto.html"
         </script>';

}
 }

?>