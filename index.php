<?php
  // Load the functions
  require_once('functions.php');

  // Process the form request
  if( isset($_POST['submit']) )
  {
      $thePizza = htmlentities($_POST['pizza']);
      $thePizza = strtolower($thePizza); // Lowercase form submission
      $pizza = makePizza($thePizza);
  } else {
    // User hasn't entered a value
    $thePizza = '';
    $pizza = '';
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Functional Pizza</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body class="bg-faded">
    <main class="container py-4">
      <h1 class="pb-4 font-weight-bold text-center">Types of Pizza</h1>
      <form class="form-group" action="" method="post">
        <label for="pizza" class="sr-only">Pizza</label>
        <input class="form-control form-control-lg mr-sm-2" type="text" value="<?php echo ( $thePizza ? $thePizza : '' );?>" placeholder="What will you eat?" name="pizza" id="pizza">
        <button class="btn btn-primary sr-only" name="submit" type="submit">Search</button>
      </form>
      <?php 
        if($pizza){
           echo $pizza;
        }
      ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>