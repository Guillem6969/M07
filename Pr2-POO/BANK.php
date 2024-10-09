<!-- 1. Create a new bank account with an iniƟal balance of 400.0.
2. Output the balance.
3. Close and reopen the account.
4. Perform a deposit of +150.0 and show the updated balance.
5. Perform a withdrawal of -25.0 and show the updated balance.
6. AƩempt a withdrawal of -600.0 (which should fail due to insufficient balance).
7. Output the final balance aŌer all transacƟons.
8. Close the account. -->
<?php

$first_account_balance = 400.0;
$first_account_status = "opened";
$first_account_overdraft = 0;

echo "My balance : " . $first_account_balance .".<br>";

echo "My account is now ". $first_account_status .".<br>";

$first_account_status = "reopened";
echo "My account is now ". $first_account_status .".<br>";

echo "Doing transaction deposit (+150) with current balance ". $first_account_balance ."<br>";

$first_account_balance += 150;
echo "My new balance after deposit (+150) : ". $first_account_balance ."<br>";

echo "Doing transaction withdrawal (-25) with current balance ". $first_account_balance ."<br>";

$first_account_balance -= 25;
echo "My new balance after deposit (+150) : ". $first_account_balance ."<br>";


echo "Doing transaction withdrawal (-600) with current balance ". $first_account_balance ."<br>";


if (($first_account_balance - 600) < $first_account_overdraft) {
  
  echo "Error transaction : Insuficient balance to complete the withdrawal.<br>";

}

echo "My new balance after failed last transaction : ". $first_account_balance ."<br>";


$first_account_status = "closed";
echo "My account is now ". $first_account_status .".<br>";


echo"<br><br>-------------------------------------------------------- <br><br>";

$second_account_balance = 200.0;
$second_account_status = "opened";
$second_account_overdraft = -100;

echo "My balance : " . $second_account_balance .".<br>";

echo "Doing transaction deposit (+100) with current balance ". $second_account_balance ."<br>";

$second_account_balance += 100;
echo "My new balance after deposit (+100) : ". $second_account_balance ."<br>";


echo "Doing transaction withdrawl (-300) with current balance ". $second_account_balance ."<br>";

$second_account_balance -= 300;
echo "My new balance after deposit (-300) : ". $second_account_balance ."<br>";

echo "Doing transaction withdrawl (-50) with current balance ". $second_account_balance ."<br>";

$second_account_balance -= 50;
echo "My new balance after deposit (-50) : ". $second_account_balance ."<br>";

echo "Doing transaction withdrawl (-120) with current balance ". $second_account_balance ."<br>";

if (($second_account_balance - 120) < $second_account_overdraft) {

  echo "Error transaction : Withdrawal exceeds overdraft limit.<br>";

}

echo "My balance after failed last transaction : ". $second_account_balance ."<br>";

echo "Doing transaction withdrawl (-20) with current balance ". $second_account_balance ."<br>";

$second_account_balance -= 20;
echo "My new balance after deposit (-300) : ". $second_account_balance ."<br>";

$second_account_status = "closed";
echo "My account is now ". $second_account_status .".<br>";

echo "Error: Account is already closed.";