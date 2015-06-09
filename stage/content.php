<?php

  if (isset($_GET['index'])) {

    include ('../templates/index.php');

  } elseif (isset($_GET['404'])) {

    include ('../templates/404.php');

  } elseif (isset($_GET['article'])) {

    include ('../templates/article.php');

  } elseif (isset($_GET['blog'])) {

    include ('../templates/blog.php');

  } elseif (isset($_GET['cart'])) {

    include ('../templates/cart.php');

  } elseif (isset($_GET['collection'])) {

    include ('../templates/collection.php');

  } elseif (isset($_GET['list-collections'])) {

    include ('../templates/list-collections.php');

  } elseif (isset($_GET['page'])) {

    include ('../templates/page.php');

  } elseif (isset($_GET['product'])) {

    include ('../templates/product.php');

  } elseif (isset($_GET['search'])) {

    include ('../templates/search.php');

  } else {

    include ('../templates/index.php');

  }

?>