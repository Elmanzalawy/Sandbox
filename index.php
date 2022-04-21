<?php
trait Logger
{
    public function log($msg)
    {
        echo date('Y-m-d H:i:s'). ' - ' . '('. __CLASS__.'): '. $msg . PHP_EOL;
    }
}


class BankAccount
{
    use Logger;

    private $accountNumber;

    public function __construct($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        $this->log("A new $accountNumber bank account has been created.");
    }
}

$bankAccount = new BankAccount("1234565");