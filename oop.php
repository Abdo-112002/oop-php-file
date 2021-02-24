<?php
class appleDevice {
    // Properties
    public   $ram;
    public   $color;
    public   $name;
    private  $password;
        // Methods
        public function changData($ra,$clr){
            $this-> ram    = $ra;
            $this-> color  = $clr;
        }
        public function changLock($pas){

            $this-> password = sha1($pas);

        }
        final public function sayWelcome($n){

            $this-> name = $n;
            echo $n . " welcome to samer ";

        }
}

// using Inheritance
class sony extends appleDevice {
    // Properties
    public $camera;
         // Methods
        public function changDataSony($ra,$clr,$cam){
            $this-> ram    = $ra;
            $this-> color  = $clr;
            $this-> camera = $cam;
        }
}
$iphone6plus =  new appleDevice();
$iphone6plus -> changData('6gb ',6 ,'red ');
$iphone6plus -> changLock("yousef 2020 ");
$iphone6plus -> sayWelcome(" yousef ");
$sony        =  new sony();
$sony        -> changDataSony('6gb',6,'red','20mpx ');
$sony        -> changLock("sony#@2020 ");   
$sony        -> sayWelcome("rizk "); 
echo '<pre>';
print_r($iphone6plus) . "\n" . print_r($sony);
echo '</pre>';

// using final keyword
final class Names {
    public $yousef ;
    public $rizk;
    public $mahmoud;
    public $tamer;
    public $fathey;
    public $ahmed ;
}
$names = new Names();
echo '<pre>';
print_r($names);
echo '</pre>';

// using final abstract
abstract class canNot {
    abstract function bye();
    abstract protected function test($pram);
}
class soony extends canNot {
    public $owner;
    public function bye(){
        echo " bye ";
    }
    public function test($pr){
        $this-> owner = $pr;
        echo $this->owner;
    }
}
$soooony     =  new soony();
$soooony     -> test(" fady ");
echo '<pre>';
print_r($soooony);
echo '</pre>';

// using final interface with implements 
interface mobile {
    public function click ();
}

class mob implements mobile {
    public function click()
    {
        echo "click here";
    }
}

class ipad implements mobile {
    public function click(){
        echo "dont click here";
    }
}
$mobile =  new mob ();
$mobile -> click();
echo '<pre>';
print_r($mobile);
echo '</pre>';
$ipad =  new ipad ();
$ipad -> click();
echo '<pre>';
print_r($ipad);
echo '</pre>';

// using Magic Methods
class samsung {
    public $note7;
    public $a51;
    // using construct to print method automatic
    public function __construct (){
        echo " welcome to magick methods" . "<br>";
    }
}
$Samsung = new samsung;

// Can be inherited from it
class samsung2 extends samsung {

}
$Samsung2 = new samsung2();

class samsung3 {
    public $type;
    public $a51;

    // using construct to print method automatic
    public function __construct ($arg){
        $this-> type = $arg;
        echo " the phone type is ==> " . $arg . "<br>";
    }
}
$Samsung = new samsung3("a71");

// using Magic Methods with call
class alert {

    //The call function is used to alert you when there is no method
    public function __call ($me ,$nn){
        echo " the method name ==> " . $me . " <== is not found <br>";
    }
}
$Alert =  new alert();
$Alert -> hey();

// using Magic Methods with get
class alert2 {

    //The call function is used to alert you when there is no method
    public function __get ($prop){
        echo " the Property name ==> " . $prop . " <== is not found <br>";
    }
}
$Alert2 =  new alert2();
echo $Alert2 -> hi;

// using Magic Methods with set
class alert3 {
    private $color;
    //The call function is used to alert you when there is no method
    public function __set ($prop,$value){
        echo "<br><br> this Property ==> " . $prop . " <== is not found <br>";
        echo " this value ==> " . $value . " <== is not found <br>";
    }
}
$Alert3 =  new alert3();
$Alert3 -> hi = " welcome";
$Alert3 -> color = "blue";

// using Magic Methods with clone 
class contact{
    public $phone;
    public $email;

    public function __construct($p,$e){
        $this-> phone =$p;
        $this-> email =$e;
    }
}
$contact =  new contact("010********","yousef_@gmail.com");
$copy    =  clone $contact;
$copy    -> phone = "01101215***";
echo '<pre>';
print_r($contact);
echo '</pre>';
echo '<pre>';
print_r($copy);
echo '</pre>';

// static properties
class PC{
    // without static
    public $os = "windows10";
    public $ram = "16GB";
    
    public function properties(){
        echo "hello";
    }
}
echo "<br> {<br> without static : <br><br>";
$pc = new PC();
echo $pc -> os . "<br>";
echo $pc -> ram . "<br>";
echo $pc -> properties() . "<br>";
echo "}<br>";

class PC1{
    // with static
    public static $os = "windows10";
    public static $ram = "16GB";

    public static function properties(){
        echo "hello";
    }
}
echo "<br> {<br> with static : <br><br>";
echo PC1::$os . "<br>";
echo PC1::$ram . "<br>";
echo PC1::properties() . "<br>";
echo "}<br>";

// methods 
class methods{
    public $name;
    public function one(){
        echo " welcome<br>";
        return $this;
    }
    public function two(){
        echo " hello<br>";
        return $this;
    }
}
$method = new methods();
$method -> one()->two();

//traits
trait myFuture1{
    public function future(){
        echo "hello from trait1<br>";
    }
}
trait myFuture2{
    public function future(){
        echo "hello from trait2<br>";
    }
}
class allFuture{
    use myFuture1,myFuture2{
        myFuture2:: future insteadof myFuture1;
        myFuture1:: future as yousef2;
    }
}
$all = new allFuture;
$all -> future();
$all -> yousef2();

/*
// namespace
namespace test1;
class testing{
    public $name;
    public $RAM;
}
namespace test2;
class testing{
    public $name;
    public $RAM;
}
namespace test3;
class testing{
    public $name;
    public $RAM;
}

$test = new test\testing();
echo '<pre>';
print_r($test);
echo '</pre>';
*/
?>
