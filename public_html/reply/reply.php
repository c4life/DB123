<?php
function showform()
{
print <<< Form
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
  <form method="Post" action="">
    您好<input type="text" name="name" placeholder="顾客姓名">，感谢您选择LFR营养餐，跟您核对一下订单信息，您订的是健康营养餐
    <br>
    <select name="lv" placeholder="等级">
    <option value="LV1">LV1</option>
    <option value="LV2">LV2</option>
    <option value="LV3">LV3</option>
    <option value="LV4">LV4</option>
    </select>
    <select name ="sex" placeholder="性别">
    <option value="男生">男</option>
    <option value="女生">女</option>
    </select>
    ,为期
    <input type="number" name="day"  min="1" max="24" placeholder="多少">
    <select name="period">
    <option value="天">天</option>
    <option value="周">周</option>
    </select>
<br>
    (从
    <input type="date" name="date" placeholder="日期">
    至
    <input type="date" name="date2" placeholder="日期">）
<br>    共计消费++元（原价
    <input type="number" name="amount" value="" placeholder="多少">GST++元，配送费
    <input type="number" name="deliver" value=" placeholder="配送费"> 元），您的联系方式是
<br>
    <input type="text" name="phone" placeholder="电话">，您的配送地址是
    <input type="text" name="add" placeholder="地址">，如果以上信息核对无误，
    <br>我们会在
    <input type="date" name="date3" placeholder="日期">）
    <select name="time">
    <option value="早上8-11点">早上8-11点</option>
    <option value="晚上7-10点">晚上7-10点</option>为您配送到家，谢谢您.
    <br>
    <input type="submit" value="Submit"name='submit'>
  </form>
<br>


</body>
</html>
Form;
}


if (!empty($_POST)){
  $name=$_POST['name'];
  $lv=$_POST['lv'];
  $day=$_POST['day'];
  $date=$_POST['date'];
  $amount=$_POST['amount'];
  $deliver=$_POST['deliver'];
  $phone=$_POST['phone'];
  $sex= $_POST['sex'];
  $add=$_POST['add'];
  $time=$_POST['time'];
  $period=$_POST['period'];
  $total=$amount * 1.05 +$deliver;
  $gst = $amount * 0.05;
  $date2=$_POST['date2'];
  $date3=$_POST['date3'];

  showform();
  echo '您好' ;
  echo $name;
  echo ',感谢您选择LFR营养餐，跟您核对一下订单信息，您订的是健康营养餐';
  echo $lv;
  echo $sex;
  echo ',为期';
  echo $day;
  echo $period;
  echo '(从';
  echo $date;
  echo '至';
  echo $date2;
  echo '）共计消费';
  echo $total ;
  echo '元（原价';
  echo $amount;
  echo '元，GST';
  echo $gst ;
  echo '元，配送费';
  echo $deliver;
  echo '，您的联系方式是';
  echo $phone;
  echo '，您的配送地址是';
  echo $add;
  echo '如果以上信息核对无误，我们会在';
  echo $date3."的，";
  echo $time;
  echo '为您配送到家，谢谢您';
}
else {
  showform();


}
?>
