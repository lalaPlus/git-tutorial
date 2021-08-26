<?php

 namespace Library;

 function e($super_globals) {
  return htmlspecialchars($super_globals, ENT_QUOTES | ENT_HTML5, 'UTF-8');
 };