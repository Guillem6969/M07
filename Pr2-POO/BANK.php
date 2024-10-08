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
$first_account_status = "closed";
$first_account_overdraft = false;

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


if (($first_account_balance - 600) < 0) {
  $first_account_overdraft = true;
  echo "Error transaction : Insuficient balance to complete the withdrawal.<br>";

}

echo "My new balance after failed last transaction : ". $first_account_balance ."<br>";


$first_account_status = "closed";
echo "My account is now ". $first_account_status .".<br>";




