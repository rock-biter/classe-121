<?php

include __DIR__ . '/../vars.php';
include_once __DIR__ . '/../utilities.php';
// var_dump(__DIR__);
// var_dump(__DIR__ . '/../vars.php');

?>
<header>
  <div class="container">
    <nav class="row">
      <div>
        <h2><?php echo $name; ?> <span><?php echo somma(10, 5); ?></span></h2>
      </div>
      <ul>
        <li>Menu</li>
      </ul>
    </nav>
  </div>
</header>