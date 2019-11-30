<!DOCTYPE html>
 <html>
 	<head>
		<title>Web recibida</title>
	</head>
  <body>
  
         <center>
                  <h1>  
                        <span>Bienvenidos a nuestra pagina web para compras virtuales de Gonzalez auto cars.</span>
                  </h1>
      




      <?php

  
      
          echo "El Nombre de el usuario Es:";
           echo"</br>";
         
          echo $_REQUEST['Nombre1']; 

           echo"</br>";
           echo"</br>";

           echo "Su Numero de Cedula Es:";
            echo"</br>";
          
           echo $_REQUEST['cedula1'];
             
           echo"</br>";
           echo"</br>";

          echo "Su Numero de Targeta de Credito Es:";
           
            echo"</br>";
          echo $_REQUEST['targeta1'];
          
           echo"</br>";
           echo"</br>";
         
          echo "Su E-mail Es:";
          
           echo"</br>";
          echo $_REQUEST['e-mail1'];
 
      ?>
      

      <center>
              <h2>
                    <span style="color:#ff7f00"> Gracias por su compra en GONZALEZ AUTO CARS. S,A.</span>

              </h2>

      </center>


  			
  		     
  		


  	<center><a href="C:\Users\ander\Documents\Source\Ventas\Index Pagina Web\index.html"><span><h4>Regresar</h4></span></a></center>

  </body>
</html>