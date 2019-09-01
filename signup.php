<?php
    session_start();
    include_once 'dbh.php';
  ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylee.css">
    <title>Signup First</title>
</head>
<body>
<p class="datetime">Date/Time:
<?php echo(strftime("%m/%d/%Y %H:%M")); ?></p>

<?php
    echo  "
    <form action='submitsignup.php' method='POST'>
        <div class='container'>
        <p class='words'>First Name
            <input type='text' class='box' name='fname' placeholder='First Name'>
        </p>
            <p class='words'>Last Name
            <input type='text' class='box' name='lname' placeholder='Last Name'>
        </p>
            <p class='words'>Age
            <input type='text' class='box' name='age' placeholder='years'>
        </p>
            <p class='words'>Province
            <select name='province' class='box'>
                    <option value='central' selected>central</option>
                    <option value='western'>western</option>
                    <option value='south'>south</option>
                    <option value='uva'>uva</option>
                    <option value='north'>north</option>
                    <option value='north-central'>north-central</option>
                    <option value='eastern'>eastern</option>
                    <option value='wayamba'>wayamba</option>
                    <option value='sabaragamuwa'>sabaragamuwa</option> 
                    </select>
        </p>
            <p class='words'>Password
            <input type='password' class='box' name='pwd' placeholder='Password'>  
            
        </p>
    
    <button type='submit'  class='box' name='submitSignup'>signup</button>
    </form>

</div>";
?>


</body>
</html>

