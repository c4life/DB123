<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" href="../css/style.css" type="text/css" /> -->
</head>
<body>
<div id="page">
<?php include ('../header.php'); ?>
</div>
<div id="content">
<?php
include_once('msg.php');
$users=$_POST['username'];
echo $users;
class msbrd extends db {
var $messages = array();

  function __construct(){
    parent::__construct();
    $this->receivemessage();
    $this->loaddata();
    $this->showallmessages();
    $this->showform();
    }
  function receivemessage(){
      if(count($_POST) != 0 ){
        $this->savedata($_POST['topics'], date("y-m-d h:i:s",time()), $_POST['content']);
            }
  }
  function savedata($o,$t,$c){
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="msgbrd";
  $conn = new mysqli($servername, $username, $password, $dbname);
  $query="INSERT INTO `message` (`user_id`,`date`,`topic_id`,`message_text`) VALUES (1,'".$t."','".$o."','".$c."')";
  mysqli_query($conn,$query);
    }


    function loaddata(){
      $servername="localhost";
      $username="root";
      $password="";
      $dbname="msgbrd";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $query1= "SELECT * FROM `message`,`topics` where topics.topic_id = message.topic_id";
    $result = $conn->query($query1);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc())
        { $temp =new Message($row['topic'],$row['date'],$row['message_text']);
          array_push($this->messages,$temp);}

  }
}
  function showallmessages(){
    foreach($this->messages as $m){
      $m->show();

    }

  }
  function showform(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="msgbrd";

  $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    echo "<form id='msgform' action='' method= 'POST' >";
    echo "Name:"."<select name='topics' >"."<option value=''>"."Select topic"."</option>";
    $s2="SELECT * FROM topics";
    $result2 = $conn->query($s2);
    if ($result2->num_rows > 0) {

    while($rw2=$result2->fetch_assoc())
    {
    echo "<option value='";
    echo $rw2['topic_id'];
    echo "'>";
    echo $rw2['topic'];
    echo "</option>";
  }
}
  echo "</select>";
  echo "Content:"."<input type='text' name='content'>"."<br>";
  echo "<input type='submit'>";
  echo "</form>";
  }
}
//implemnt
$mb =new msbrd();
 ?>
     </div>
</body>
</html>
