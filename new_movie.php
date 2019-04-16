<?php
session_start();

	   echo "Previous payment details: ";echo "<br>";
	   echo "donation amount: ",$_SESSION["donation_amount"];echo "<br>";
	   echo "card number: ",$_SESSION["card_no"];
       echo "<br>"; echo "<br>";
       echo " Enter the amount for the movie ".$_POST['movies'];
 
?>
<html>
<body>
	<form action="transaction.php" method="post">
     Donation Amount:<input type="text" name="amount" required>
     <br><br>
     <input type="submit" id="s1" value="Confirm the transaction">
</html>
