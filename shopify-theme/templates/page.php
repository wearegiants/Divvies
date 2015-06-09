<?php

  if (isset($_GET['index'])) {

    include ('../templates/page.default.php');

  } elseif (isset($_GET['about-us'])) {

    include ('../templates/page.about-us.php');

  } elseif (isset($_GET['find-us'])) {

    include ('../templates/page.find-us.php');

  } elseif (isset($_GET['contact-us'])) {

    include ('../templates/page.contact-us.php');

  } elseif (isset($_GET['faq'])) {

    include ('../templates/page.faq.php');

  } else {

    include ('../templates/page.default.php');

  }

?>