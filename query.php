<?php

// this is to set connection variables
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "client invoicing problem";

// this is to create the connection
$conn = new mysqli($servername, $username, $password, $dbname);

// this is to create the administrator account
$dbt->create_admin_account("admin@email.com", "Adm!nP@$$", "Firstname", "Lastname");
?>
   <table>
    <tr>
    <th>Name</th>
    <th>Transactions</th>
    <th>Billings</th>
  </tr>
    <?php
foreach ($db->query('SELECT * FROM client') as $row) {
?>
       <tr>
        <?php
    //to calculate the transactions
    $nTransactions = $row['Transactions'];
    
    // to calculate the billing
    $nBilling = .50 * $nTransactions;
    // if transactions is more than 50 times
    if ($nTransactions > 50.00) {
        
        /**
         **    this is to calculate the billing rate based on the transactions
         **/
        $nBilling = ($nTransactions - 50.00) * .75 + .50 * 50.00;
        
    }
?>
       <td>
        <?php
    echo $row['Name'];
?>
       </td>
        <td>
        <?php
    echo $nTransactions;
?> 
        </td>
        <td>
        <?php
    echo $nBilling;
?> 
        </td>
        </tr>
        <?php
}
?>
   </table>
