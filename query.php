<?php
	
	$db = new PDO('mysql:host=localhost;dbname=client invoicing problem;charset=utf8', 'root', '');
	?>
	<table>
	<tr>
    <th>Name</th>
    <th>Transactions</th>
	<th>Billings</th>
  </tr>
	<?php
	foreach($db->query('SELECT * FROM client') as $row) {
		?>
		<tr>
		<?php
		
		$nTransactions=$row['Transactions'];
		$nBilling=.50*$nTransactions;
		if ($nTransactions>50){
			$nBilling=($nTransactions-50)*.75+.50*50;
			
		}
		?>
		<td>
		<?php echo $row['Name'] ?>
		</td>
		<td>
		<?php echo $nTransactions?> 
		</td>
		<td>
		<?php echo $nBilling ?> 
		</td>
		</tr>
		<?php
	}
	?>
	</table>
	


