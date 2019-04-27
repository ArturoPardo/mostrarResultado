
  <?php
	conectar();
	$select=mysql_query("SELECT * FROM sesiones ORDER by sesion DESC");
	mysql_close();
	$num_res=mysql_num_rows($select);
	if($num_res>0)
	{
		//mostramos los resultados
		while($row=mysql_fetch_array($select))
		{			
			?>          
             <?php echo $row['id'];?>        
			<!--fin caja-->
			<?php
		}//FIN DEL WHILE
	}
?>      