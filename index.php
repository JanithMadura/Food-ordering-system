<?php
    session_start();
  ?>
<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
    <title>login or signup to get the service</title>
</head>
<body>

<p class="datetime">Date/Time:
<?php echo(strftime("%m/%d/%Y %H:%M")); ?></p>
<?php
echo "
</br>
<div class='container2'>
<h1 class='text-center text-uppercase'>helarasa</h1>
</div>
    <div class='container'>
    <form action='login.php' method='POST'>
        <p class='words'>User Id     
       <input type='text' class='box' name='userid' placeholder='User Id'></p>
        
        <p class='words'>Province
            <select name='province' class='box'>
                    <option value='CENTRAL' selected>CENTRAL</option>
                    <option value='WESTERN'>WESTERN</option>
                    <option value='SOUTH'>SOUTH</option>
                    <option value='UVA'>UVA</option>
                    <option value='NORTH'>NORTH</option>
                    <option value='NORTH-CENTRAL'>NORTH-CENTRAL</option>
                    <option value='EASTERN'>EASTERN</option>
                    <option value='WAYAMBA'>WAYAMBA</option>
                    <option value='SABARAGAMUAWA'>SABARAGAMUAWA</option> 
                    </select></p>
        <p class='words'>Password
            <input type='password' class='box' name='pwd' placeholder='Password'>  
            </p>
            <button type='submit' class='box' name='submitLogin'>login</button>
            </form>
            <form action='signup.php' method='POST'>
            <button type='submit'class='box' name='submitSignup'>signup</button>
            </form>
            </div>";
            ?>
        </body>
</html>