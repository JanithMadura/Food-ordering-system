<?php
    include_once 'dbh.php';
    session_start();
   
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="stylecat.css">
    <title>Category</title>
</head>
<body>
<form action="logout.php" method="POST">
    <button type="submit" class="float-right btn btn-sm bg-primary text-white" name="logout">Logout</button>
     </form>
<p class="float-right">Date/Time:
<?php echo(strftime("%m/%d/%Y %H:%M")); ?></p>


<?php

$sql = "SELECT * FROM logged ORDER BY indx DESC LIMIT 1;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)   {
  while ($row = mysqli_fetch_assoc($result)){
     $fname = $row['fname'];
     
  }}
echo  "

<p class='text-uppercase font-weight-bold'>HEY <span class='text-uppercase font-weight-bold'>$fname</span> !</p>
<div class='container'>
            <p class='text-danger text-center font-weight-bold'>YOU ARE WELCOME</p>
            </div>
            </br>
           
<div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel'>
  <ol class='carousel-indicators'>
    <li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li> 
    <li data-target='#carouselExampleIndicators' data-slide-to='1'></li>
    <li data-target='#carouselExampleIndicators' data-slide-to='2'></li>
  </ol>
<div class='carousel-inner'>
              <div class='carousel-item active'>
                <img class='d-block img-fluid  ml-2 mr-2' src='drinks.jpg' alt='BEVERAGES'  style='width: 1357px; height: 560px'>
                <div class='carousel-caption'>
                <button type='button' class='btn btn-light'>BEVERAGES</button>
                <p>Quench your thirst NOW !</p>
              </div>
                </div>
                <div class='carousel-item'>
                <img class='d-block img-fluid  ml-2 mr-2' src='vege.jpg' alt='VEGETABLES'  style='width: 1357px; height: 560px' >
                <div class='carousel-caption'>
                <button type='button' class='btn btn-dark'>VEGETABLES</button>
                <p>No more need to shopping We serve the best!</p>
              </div>
                </div>
                <div class='carousel-item'>
                <img class='d-block img-fluid  ml-2 mr-2' src='fruits.jpg' alt='FRUITS' style='width: 1357px; height: 560px'>
                <div class='carousel-caption'>
                <button type='button' class='btn btn-link'>FRUITS</button>
                <p>An apple a day keep doctors away!</p>
              </div>
                </div>
                </div>

                <a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-slide='prev'>
                  <span class='carousel-control-prev-icon'></span>
                <a class='carousel-control-next' href='#carouselExampleIndicators' role='button' data-slide='next'>
                  <span class='carousel-control-next-icon'></span>
               </a>
                </div>
               
                ";

   
            
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

