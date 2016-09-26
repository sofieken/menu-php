
<!-- Så menuen kan se hvilken side den er på og den gør den pågældende side aktiv-->

<link rel="stylesheet" type="text/css" href="styles.css">


<nav>
 <ul>
  <li class="menulinje"><a href="home.php" <?php if ($curpage=='home.php') { echo 'class="active"';}?>>Home</a></li>
  <li class="menulinje"><a href="projects.php" <?php if ($curpage=='projects.php') { echo 'class="active"';}?>>Projects</a></li>
  <li class="menulinje"><a href="contact.php" <?php if ($curpage=='contact.php') { echo 'class="active"';}?>>Contact</a></li>
  </ul>
</nav>



