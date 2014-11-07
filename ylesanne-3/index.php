 <?php require("result.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 2 - POST päring</title>
  <style>

  </style>
  </head>

  <body>
    <form action="result.php" method="post">
      <div class="form-field">
        <?php if ($isSubmitted) {echo $usernameMessage;}?>
        <input type="text" name="username" placeholder="Kasutajanimi">
      </div>

      <div class="form-field">
        <?php if ($isSubmitted) {echo $sexMessage;}?>
        <input id="sex-1" type="radio" name="sex" value="mees">
        <label for="sex-1">Mees</label>
      </div>

      <div class="form-field">
        <?php if ($isSubmitted) {echo $sexMessage;}?>
        <input id="sex-2" type="radio" name="sex" value="naine">
        <label for="sex-2">Naine</label>
      </div>

      <div class="form-field">
        <input type="submit" value="submit">
      </div>
    </form>
  </body>
</html>
