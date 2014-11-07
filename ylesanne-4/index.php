
 <?php $name = "arvestus";
  $value = "Cookie on olemas";
  $expire = time() + 20;

  setcookie($name, $value, $expire);
   ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 4 - Küpsised</title>
  </head>

  <body>
  <?php  $test = isset($_COOKIE["arvestus"]);
         echo $value; ?>
    
  </body>
</html>
