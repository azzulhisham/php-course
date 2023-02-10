<?php

var_dump($_SERVER);

/* --- $_GET & $_POST Superglobals -- */
var_dump($_GET);
var_dump($_POST);

if (isset($_GET['name'])) {
    echo '<h3>' . $_GET['name'] . '</h3>';
}

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST['submit'])) {
  // echo '<h3>' . $GET['username'] . '</h3>';
  echo '<h3>' . $_POST['name'] . '</h3>';
} 

?>

<!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad">Link</a>


<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>