	<?php
		//Comprobamos que se haya presionado el boton enviar
		if(isset($_POST['send'])){

		//Guardamos en variables los datos enviados
			$nombre = $_POST['name'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$telef= $_POST['telefono'];

		///Validamos del lado del servidor que el nombre y el email no estén vacios
			if($nombre == ''){
				echo "Debe ingresar su nombre";
			}
			else if($email == ''){
				echo "Debe ingresar su email";
			}else{
		$para = "altuna90@gmail.com";//Email al que se enviará
		$asunto = "$nombre Esta Interesado en los Servicios de la Distribuidora JARVIS C.A.";//Puedes cambiar el asunto del mensaje desde aqui
		//Este sería el cuerpo del mensaje
		$mensaje = "	
				<table width='588' height='220' border='0'>
					  <tr align='center' valign='middle'>
					    <td width='562'><table width='562' border='0'>
				          <tr>
					          <td width='239' align='center' valign='middle' bgcolor='#00CCFF'><strong>CLIENTE INTERESADO EN NUESTROS SERVICIOS.</strong></td>
			              </tr>
			            </table>
				          <table width='556' height='150' border='0' align='center' cellpadding='2' cellspacing='2'>
				            <tr>
				              <td width='48%' align='center'>&nbsp;</td>
			                </tr>
				            <tr>
				              <td width='48%' align='right'><strong>Nombre de la persona:</strong></td>
				              <td width='52%' align='left'>$nombre</td>
			                </tr>
				            <tr>
				              <td width='48%' align='right'><strong>Email de la persona o empresa:</strong></td>
				              <td width='52%' align='left'>$email</td>
			                </tr>
				            <tr>
				              <td align='right'><strong>Asunto del porque realiza la solicitud:</strong></td>
				              <td align='left'>$subject</td>
			                </tr>
				            <tr>
				              <td align='right' ><strong>Telefono de contacto:</strong> </td>
				              <td align='left'>$telef</td>
			                </tr>
				            <tr>
				              <td width='48%' align='right' ><strong>Descripcion:</strong></td>
				              <td width='52%' align='left'>$message</td>
			                </tr>
			              </table></td>
				      </tr>
					</table>
					";

			//Cabeceras del correo
			$headers = "From: $nombre <$email>\r\n"; //Quien envia?
			$headers .= "X-Mailer: PHP5\n";
			$headers .= 'MIME-Version: 1.0' . "\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //

			//Comprobamos que los datos enviados a la función MAIL de PHP estén bien y si es correcto enviamos

			if(mail($para, $asunto, $mensaje, $headers)){
			        echo '<script type="text/javascript">alert("Tu correo fue enviado con exito");
			        window.location.assign("http://solucionestecnologicasuruguay.com");
			        </script>'; 
			}else{ 
					echo '<script type="text/javascript">alert("Tu correo No fue enviado ");
			        window.location.assign("http://solucionestecnologicasuruguay.com");
			        </script>';
        			 
			}
		}
	}
	?>