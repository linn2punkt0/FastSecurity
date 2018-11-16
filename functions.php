<?php
declare(strict_types=1);



function trans($key1, $key2) {
  $language= $_COOKIE['lang'];

  $locale = $language ?? 'en';

  $translations = require __DIR__.'/lang/'.$locale.'.php';

  return $Content[$key1][$key2];
};
