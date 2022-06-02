<?php
trait message1
{
    public function msg1()
    {
        echo "OOP is fun";
    }
}
trait message2 
{
    public function msg2()
    {
        echo "OOp reduces duplication";
    }
}
 
class Welcome
{
    use message1, message2;
}

$welcome = new Welcome();
$welcome->msg1();
echo "<br>";
$welcome->msg2();