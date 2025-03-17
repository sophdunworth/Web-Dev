<?php 
session_start();
if(!isset($_SESSION['Active']) || $_SESSION['Active'] == false) {
    header("location: login.php");
    exit;
}
?>

<?php require_once '../template/header.php';?>
  
  <body>
      <h1>Status: You are logged in <?php echo $_SESSION['Username']; ?> </h1>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contacts.php">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">PHP Login exercise - About page</h3>
      </div>

        <div class="mainarea">
            <h1>Title </h1>
            <p class="lead">This is where we will put the logout button</p>

            <form action="logout.php" method="post">
    <button name="Submit" type="submit">Log out</button>
</form>

        </div>

      <div class="row marketing">
        <div>
          <h4>About page</h4>
          <p>Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. </p>

       </div>

          <?php require_once '../template/footer.php';?>
