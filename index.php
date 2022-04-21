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

trait FileLogger
{
    public function log($msg){
        echo "$msg".PHP_EOL;
    }
}

class FileUtil
{
    //trait method override (we use this to prevent conflicts between traits with same method names)
    use Copier, Logger, FileLogger{
        Logger::log insteadOf FileLogger;
    }
}

$fileUtil = new FileUtil;
$fileUtil->copy('file A', 'file B');
$fileUtil->log("Trait method override");