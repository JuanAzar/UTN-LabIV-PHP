<!DOCTYPE html>
<html>
    <head>
        <title>HTML fundamentals</title>
    </head>
    <body>
        <form action="action.php" method="get">
          <input type="text" name="user" placeholder="Your Username">
          <input type="password" name="password" placeholder="Your Password">  
          <button type="submit">Send using GET</button>        
        </form>
        <br><br>
        <form action="action.php" method="post">
          <input type="text" name="user" placeholder="Your Username">
          <input type="password" name="password" placeholder="Your Password">
          <button type="submit">Send using POST</button>
        </form>
    </body>
</html>