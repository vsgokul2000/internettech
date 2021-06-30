<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
<form  method="post">

<input type="text" name="s1" placeholder="Enter your string " />



<input type="submit" name="submit" />
</form> 
  
<?php
if ( isset( $_POST['submit'] ) ) { 
  
$s = $_POST['s1'];

$search = 'at';
if(preg_match("/{$search}/i", $s)) {
    echo ' Given string consists of word “at”<br> ';
    }
else
{
    echo ' Given string not have word “at” ';
}
if(preg_match("/^(at).*/", $s)) {
    echo '  Given string starts with “at”<br> ';}
else
{
    echo 'Given string not start with “at” <br> ';
}
if(preg_match('/^.*(at)$/', $s)) {
    echo '  Given string end with “at” <br>';}
else
{
    echo 'Given string not end with “at” <br>';
}
if(preg_match_all('/^(a).*/', $s)) {

    echo '        Given string contains words start  with “a” <br>';}
else
{
    echo 'Given string not contain any strings start with “a” <br> ';
}

}
    ?> 
  </body>
</html>