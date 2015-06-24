<?php

// this is to set connection variables
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "client invoicing problem";

// this is to create the connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>
<table>
    <tr>
        <th>Name</th>
        <th>Transactions</th>
        <th>Billings</th>
    </tr>
    <?php
        foreach ($conn->query('SELECT * FROM client') as $row) {
    ?>
    <tr>
    <?php
        //to calculate the transactions
        $nTransactions = $row['Transactions'];
      
        // to calculate the billing
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
        <td>
            <?php echo $nBilling;?> 
        </td>
    </tr>
    <?php
    }
    ?>
</table>
