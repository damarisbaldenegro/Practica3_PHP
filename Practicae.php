<!DOCTYPE html>
<html>
    <head>
        <title>Practica 3</title>
    </head>
    <body>
       <?php
           
            $Autor = array(
                /*0*/array(
                    'id' => '1',
                    'Autor' => 'Juan Rulfo',
                    'Contenido' => 'Persona encargada de contar lo que se vivia en su pueblo ',
		    'Fecha' => '25/02/15 12:55PM',
		    'Retweets' => 'Hola Juan Rulfo'
                ),
                /*1*/array(
                    'id' => '2',
                    'Autor' => 'Rocio Lopez',
                    'Contenido' => 'Mujer de 25 años en los que ha estudiando y trabaja en CFE ',
		    'Fecha' => '26/02/15 20:38PM',
		    'Retweets' => 'Te veo en la noche Rocio saludos '
                ),
                /*2*/array(
                    'id' => '3',
                    'Autor' => 'Pedro Nevarez ',
                    'Contenido' => 'Pagina Oficial de pedro nevarez ',
		    'Fecha' => '12/02/15 12:23PM',
		    'Retweets' => 'Hola Pedro nos vemos en la noche'
                ),
                /*3*/array(
                   'id' => '4',
                    'Autor' => 'Roxana Ruiz',
                    'Contenido' => 'Persona encargada de contar lo que se vivia en su pueblo ',
		    'Fecha' => '12/01/15 14:32PM',
		    'Retweets' => 'Hola Roxana Ruiz'
                ),
                 /*4*/array(
                    'id' => '5',
                    'Autor' => 'Pedro Zermeño',
                    'Contenido' => 'Tiene 21 años y trabaja en CFE ',
		    'Fecha' => '25/02/15',
		    'Retweets' => 'Hola Pedro Zermeño'
                ),
				  /*5*/array(
                    'id' => '6',
                    'Autor' => 'Josue Martinez',
                    'Contenido' => 'Persona encargada de contar lo que se vivia en su pueblo ',
		    'Fecha' => '25/02/15',
		    'Retweets' => 'Hola Juan Rulfo'
                ),
                 /*6*/array(
                   'id' => '7',
                    'Autor' => 'Julia Martinez ',
                    'Contenido' => 'Ama de casa  ',
		    'Fecha' => '25/02/15 22:50PM',
		    'Retweets' => 'Hola Julia Martinez'
                )
            );
            
        ?> 
	<br>
        <br>
		
	<div>
	<?php foreach ($Autor as $Autor) { ?>
	<div>
	<span>
            <?php echo "ID" ?>
	    <?php echo $Autor['id']; ?>  
	    <br><br>
        </span>  
	<span>
	<?php echo "Autor" ?> 
	<?php echo $Autor['Autor']; ?>
	<br>
	</span>
	<p>
	<?php echo "Contenido"?> 
	<?php echo $Autor['Contenido']; ?>
	<br>
	</p>
	<span>
	<?php echo "Fecha y Hora"?> 
	<?php echo $Autor['Fecha']; ?>
	<br><br>
	</span>
	<span>
	<?php echo "Retweet"?> 
	<?php echo $Autor['Retweets']; ?>
	<br>
	</span>
	<br>
	<br><br><br>
	<?php } ?>
			
	</div>
	
	</div>	
	
     </body>
	 
	 
	 </html>