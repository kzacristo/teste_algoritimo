<?php
require_once('conexao.php');

?>
<table>
      <thead>
        	<tr>
          	<th>Nome Time</th>
          	<th>forca time</th>
          	<th colspan="2">Ações</th>
        	</tr> 
    	 </thead>
      <tbody>
	<?php
		foreach($dbh->query('SELECT SUM(habilidade + forca + estamina) AS soma
							   ,t.nome	
						 FROM   jogador as j 
	  			  			   ,time as t
						 WHERE j.idTime = t.id   
						 GROUP BY j.idTime') as $linha){
			
				echo'<tr>';
				echo "<td>{$linha[]}</td>";            
            	echo "<td>{$linha[]}</td>";
				echo'<tr>';
		}
	?>
	</tbody>
</table>