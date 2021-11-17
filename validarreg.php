
<?php
	
	$conectar=mysqli_connect('fdb31.125mb.com','3935880_iot','Adrianvera01','3935880_iot');
	if(!$conectar){
		echo "Error al conectar con servidor";
	}

    function validar_clave($clave,&$error_clave){
        if(strlen($clave) < 6){
           $error_clave = "La clave debe tener al menos 6 caracteres";
           return false;
        }
        if(strlen($clave) > 16){
           $error_clave = "La clave no puede tener más de 16 caracteres";
           return false;
        }
        if (!preg_match('`[a-z]`',$clave)){
           $error_clave = "La clave debe tener al menos una letra minúscula";
           return false;
        }
        if (!preg_match('`[A-Z]`',$clave)){
           $error_clave = "La clave debe tener al menos una letra mayúscula";
           return false;
        }
        if (!preg_match('`[0-9]`',$clave)){
           $error_clave = "La clave debe tener al menos un caracter numérico";
           return false;
        }
        $error_clave = "";
        return true;
     }


	$nombre= $_POST['txtnombre'];
	$correo= $_POST['txtusuario'];
	$password= $_POST['txtpassword'];

     $error_clave = "";
     $valid = validar_clave($_POST['txtpassword'],$error_clave);




    function repetido($usu,$conee)
	{
        
        $sql="SELECT * from usuariosproject where usuario='$usu'";
	$result=mysqli_query($conee,$sql);

	if(mysqli_num_rows($result) > 0)
        {
		return 1;
	}
        
        else{
		return 0;
	}   
	}   
     
    

    if($valid){
        $passmd5 = md5($password);

        
	if((repetido($correo,$conectar)==0))
        {
        
                $sql= "INSERT INTO usuariosproject (nombre, usuario, password) VALUES ('$nombre','$correo','$passmd5')";
                
		$ejecutar= mysqli_query($conectar,$sql);
				
			
				if (!$ejecutar){
				
				echo "<script>alert('Error al registrar, por favor intentarlo nuevamente')</script>";
				echo "<script>location.href='login.php'</script>";
		
				}
				
				else{
				
				echo "<script>alert('Registro exitoso')</script>";
				echo "<script>location.href='home.html'</script>";
				        
        
        }
        
	}


	else{
				
		echo "<script>alert('El usuario ya está registrado')</script>";
		echo "<script>location.href='login.php'</script>";
			
        }

    }

    else{

        echo "<script>alert('$error_clave')</script>";
		echo "<script>location.href='register.php'</script>";
			
    };    
?>