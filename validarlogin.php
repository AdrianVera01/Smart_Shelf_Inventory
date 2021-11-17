<?php
       

 $conectar=mysqli_connect('fdb31.125mb.com','3935880_iot','Adrianvera01','3935880_iot');
	if(!$conectar){
		echo "No se pudo conectar con el servidor";
	}
	//usar las variables xd
	
	$correo= $_POST['txtusuario'];
	$password= $_POST['txtpassword'];
        $passmd5 = md5($password);
        
        
       $query = mysqli_query($conectar,"SELECT * FROM usuariosproject WHERE usuario='$correo' and password ='$passmd5' "); 
       $nr = mysqli_num_rows($query);

	if (!$nr){
		
          echo "<script>alert('Usuario o Contraseña incorrectos verfique e intenta nuevamente')</script>";
          echo "<script>location.href='login.php'</script>";
 
                
	 }
         
         else{
                 
          session_start();
          
          $_SESSION["usuariolog"] = $_POST['txtusuario'];
         
          echo "<script>alert('Inicio de sesión exitoso')</script>";
          
          echo "<script>location.href='home.html'</script>";
          
          
	}
?>
		