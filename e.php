<?php
  function e($super_globals) {
   htmlspecialchars($super_globals, ENT_QUOTES | ENT_HTML5, 'UTF-8');
  }