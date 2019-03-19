<html>
<body>
           <form name="frmAjout">
		   <table>
		  <?php $base=mysqli_connect ('localhost', 'root', '');
					mysqli_select_db ($base,'obladi');

					echo("<tr>");
					echo("<td> Motif de la réclamation : </td>");
					echo("<td>");	
					$res=mysqli_query($base,"select * from motif");	
					echo('<select size="1" name="selectMotif">');
					while($T=mysqli_fetch_array($res))
						echo('<option value="'.$T['id_motif'].'">'.$T['motif'].'</option>');
					echo('</select></td></tr>');
		   ?>
		   </table>
		   </form>
</body></html>