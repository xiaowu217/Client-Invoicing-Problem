<?php

//set connection variables
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "client invoicing problem";

//create the connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>

<!--table for the records-->
<table class="table table-bordered table-striped" data-provide="datagrid">
	<thead>	
		<tr>
			<th>Name</th>
			<th>Transactions</th>
			<th>Billings</th>
		</tr>
	</thead>
	<tbody>	
    <?php
		//create a row on table for each record
        foreach ($conn->query('SELECT * FROM clients') as $row) {
    ?>
    <tr>
    <?php
        //get the transactions
        $nTransactions = $row['Transactions'];
      
        //calculate the billing
        $nBilling = .50 * $nTransactions;
		
        // if transactions is more than 50 times
        if ($nTransactions > 50.00) {
            $nBilling = ($nTransactions - 50.00) * .75 + .50 * 50.00;
        }
    ?>
        <td>
            <?php echo $row['Name'];?>
        </td>
        <td>
            <?php echo $nTransactions;?> 
        </td>
		<!--display the billings with curreny format-->
        <td>$ <?php echo number_format($nBilling, 2, '.', '') ;?> 
        </td>
    </tr>
    <?php
    }
    ?>
	</tbody>	
</table>
