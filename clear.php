<?php

foreach ($_COOKIE as $key => $value) {
  setcookie($key, 'deleted', 1, '/', '.thecmg.info');
}
