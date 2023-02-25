<?php 
// incapulation 
trait A 
{
    public function display()
    {
        echo "vora"."<br>";
    }
}

trait B 
{
    public function display1()
    {
        echo "hiten"."<br>";
    }
}
class C 
{
         use A;
         use B;
    
}
$obj=new C;
$obj->display();
$obj->display1();

?>


<?php 
// incapulation is  1 pareant so many child 
//  A abstract class or when we create a class as abstract class we never create the object onf abstract .

class A 
{
    public function display()
    {
        echo "jax"."<br>";
    }
}

class B extends A
{
    public function display1()
    {
        echo "hiten"."<br>";
    }
}
class C extends B
{
    public function display3()
    {
        echo "aryan"."<br>";
    }
    
}

$obj=new C;
$obj->display();
$obj->display1();
$obj->display3();


?>
