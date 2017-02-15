<?php

foreach ($_COOKIE as $key => $value) {
  setcookie($key, 'deleted', 1, '/', '.thecmg.info');
}
?>
<html>
  <head>
    <title>Cookies Cleared</title>
  </head>
  <body>
    Cookies cleared.
  </body>
</html>
