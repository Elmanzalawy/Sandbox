## PHP Reference Variable

>A PHP reference is an alias, which allows two different variables to write to the same value. In PHP, an object variable doesn't contain the object itself as value. It only contains an object identifier which allows object accessors to find the actual object. When an object is sent by argument, returned or assigned to another variable, the different variables are not aliases: they hold a copy of the identifier, which points to the same object.

*TL;DR: A reference variable is calling the same variable by different names.*


## Example


```php > <?php
function foo(&$var){
    $var++;
}

$a=5;
foo($a);
// $a is 6 here
?>
```
