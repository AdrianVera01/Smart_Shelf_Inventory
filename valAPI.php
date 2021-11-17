<?php
	//xd
	$conectar=mysqli_connect('fdb31.125mb.com','3935880_iot','Adrianvera01','3935880_iot');
	if(!$conectar){
		echo "No se pudo conectar con el servidor";
	}

	$correo= $_POST['txtusuario'];
	$canal= $_POST['txtchannel'];
	$api = $_POST['txtapi'];
        $coment = $_POST['txtcomentario'];
        
	if((repetido($canal,$conectar)==1)){
        
	
		echo "<script>alert('El canal ya está registrado')</script>";
		echo "<script>location.href='home.html'</script>";
	
        }


	else{
				
			$sql="INSERT INTO canales ( user, channel, api, comentario) VALUES('$correo','$canal','$api','$coment')";
			$ejecutar=mysqli_query($conectar,$sql);
				
			
				if (!$ejecutar){
				
				echo "<script>alert('Error al registrar, por favor intentarlo nuevamente')</script>";
				echo "<script>location.href='home.html'</script>";
		
				}
				
				else{
				
				echo "<script>alert('Registro exitoso, puedes consultar tu información iniciando sesión desde la página de inicio')</script>";
				echo "<script>location.href='index.html'</script>";
				
				
				}

			}
	function repetido($canal, $conectar )
	{
		$sql="SELECT * from canales where channel='$canal'";
	$result=mysqli_query($conectar,$sql);

	if(mysqli_num_rows($result) > 0){
		return 1;
	}else{
		return 0;
	}
	}

?>