<?php function menu(){ 
include("login/auth.php");
require 'config/config.php';
?>
<title>Spotamon</title>
<link rel="icon" href="static/img/favicon.ico" type="image/ico" sizes="16x16">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="./static/scripts/sweetalert2.min.js"></script>
<link rel="stylesheet" href="./static/scripts/sweetalert2.min.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css"><link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php if ($disablemotd == true) {} elseif ($motdalways == true) {?>
<script>swal({
  title: '<?php echo $motdtitle;?>',
  text: '<?php echo $motdtext;?>',
  imageUrl: '<?php echo $motdimage;?>'
})</script><?php } elseif ($motdalways == false){?>

<?php if(!isset($_SESSION["uname"])){?>
<script>swal({
  title: '<?php echo $motdtitle;?>',
  text: '<?php echo $motdtext;?>',
  imageUrl: '<?php echo $motdimage;?>'
})</script><?php }?><?php }?>
<nav class="navbar navbar-inverse" style="margin-bottom:0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" style="float:left; margin-left:10px;"class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  	<div class="spotlogo"><a href="./"><img src="header.png" alt="logo"></a></div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="./">Home</a></li>
	  <li class="divider"></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-plus"></span> Add spot
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="./submit-pokemon.php">Pokémon</a></li>
          <li><a href="./submit-raid.php">Raid</a></li>
          <li><a href="./submit-team.php">Team</a></li>
          <li><a href="./submit-egg.php">Egg</a></li>
          <li><a href="./submit-quest.php">Quest</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-search"></span> View spots
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="./pokemon.php">Pokémon</a></li>
          <li><a href="./raids.php">Raid</a></li>
          <li><a href="./eggs.php">Egg</a></li>
          <li><a href="./quests.php">Quest</a></li>
        </ul>
      </li>
	  <li class="divider"></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
	<?php
	if(isset($_SESSION["uname"])){
	?>
        <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['uname']; ?></a></li>
        <li><a href="/login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
	<?php } else {?>
        <li><a href="/login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="/login/registration.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
	<?php }?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</body>
<?php } ?>
