<?php

class BankAccount
{
    private float $balance;

    public function __construct($balance = 0)
    {
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }

        return $this;
    }
}

class SavingAccount extends BankAccount
{

    private float $interestRate;

    public function setInterestRate($rate)
    {
        $this->interestRate = $rate;
        return $this;
    }

    public function addInterest()
    {
        $interest = $this->interestRate * $this->getBalance();

        $this->deposit($interest);
        return $this;
    }
}

$savingAccount = new SavingAccount(100);
$savingAccount->setInterestRate(0.02)->addInterest()->getBalance();
echo $savingAccount->getBalance();