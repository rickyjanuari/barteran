<header>
  <div class="row">
    <div class="column7" id="header-nav">
      <a href="index.html"><img src="images/logo.png" <?php if (isset($align_logo)) { ?> class="al"<?php } ?>></a>
    </div>

    <div class="column5">
      <ul>
        
        <?php
          $_SESSION['client_id'] = '1';
          if (!isset($_SESSION['client_id'])) {
        ?>
        
        <li><a href="/login">Login Here</a>
        </li>
        
        <?php } else { ?>
          <li class="important-link"><a href="/login">Edit My Barter</a></li>
        <li><a href="/login">My Account</a></li>
        <li><a href="/login">Log Out</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</header>