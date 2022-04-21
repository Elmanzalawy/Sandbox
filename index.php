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

//----------------------------------------
//?Composite Traits

trait Reader
{
    public function read($source)
    {
        echo "Reading from $source".PHP_EOL;
    }
}

trait Writer
{
    public function write($destination)
    {
        echo "Writing to $destination".PHP_EOL;
    }

}

trait Copier
{
    use Reader, Writer;

    public function copy($source, $destination)
    {
        $this->read($source);
        $this->write($destination);
    }
}

class FileUtil
{
    use Copier;
}

$fileUtil = new FileUtil;
$fileUtil->copy('file A', 'file B');