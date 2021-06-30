<html>
  <head><title>test</title></head>
  <body>
<form  method="post">

<input type="text" name="s1" placeholder="string 1 " />

<input type="text" name="s2" placeholder="string 2" />

<input type="submit" name="submit" />
</form> 
  
<?php
if ( isset( $_POST['submit'] ) ) { 
  
$name1 = $_POST['s1'];
$name2 = $_POST['s2'];
if ( strcmp($name1, $name2) !== 0) {
    echo 'Both strings are not equallll';
}
else 
    echo 'Both strings are equal';
}
?>
</body>
  </html>