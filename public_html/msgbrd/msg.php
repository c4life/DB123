
<?php
echo "";
class message{
var $topic;
var $time;
var $content;

function __construct ($o,$t,$c){
  $this->topic = $o;
  $this->time = $t;
  $this->content = $c;
  }
function show(){

  echo "<div id='topic'>"."Topic:".$this->topic."</h2>"."</div>";
  echo "Time:".$this->time."<br>";
  echo "content:".$this->content."<br>";
  echo "================================"."<br>";
  }
}
class DB{
  var $database =null;
  function __construct() {
    //Connect
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="msgbrd";
    $this-> database= mysqli_connect ($servername,$username,$password,$dbname);
        if($this->database){
          // echo"Connect successfully";
          }
          else{
            echo"coonect fail";
          }
      }
      function __desturct(){
      //  disconnect
        mysql_close($this-> database);
      }
 }
//Implement
//$m= new message("Ian","2017-07-18","hello");
//$m->show();
// $db = new DB;
//var_dump($m);
?>
