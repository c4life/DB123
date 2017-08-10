
<?php
?>
<!DOCTYPE html>
<html>
<head>


</head>
<body>
  <script type = "text/javascript">
  var sel = document.createElement('select');
  sel.name = 'drop1';
  sel.id = 'Select1';

  var cars = [
    "volvo",
    "saab",
    "mercedes",
    "audi"
  ];

  var options_str = "";

  cars.forEach( function(car) {
    options_str += '<option value="' + car + '">' + car + '</option>';
  });

  sel.innerHTML = options_str;


  window.onload = function() {
    document.body.appendChild(sel);
  };
  </script>


</body>
</html>
