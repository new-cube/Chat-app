<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body> 
    <h1>chat app i guess</h1>
    <p>updates every second</p>
    <form action="https://testchat.ddns.net/index.php" method="POST">
      <label for="user">Nickname</label><br>
      <input type="text" id="nick" name="nick"><br>
      <label for="nick">Your text:</label><br>
      <input type="text" id="text" name="text">
      <input type="submit" value="Submit">
    </form>
    <?php 
    $user = htmlspecialchars($_POST['nick']);
    $pass = htmlspecialchars($_POST['text']);
    echo $user;
    echo "
    ";
    echo $pass;
    ?>
  </body>
</html>