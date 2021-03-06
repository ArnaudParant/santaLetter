<?php

$root = preg_replace("/\/+/", "/", $_SERVER['DOCUMENT_ROOT']);
$uri = str_replace($root, "", dirname(dirname(__FILE__)));

?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title> <?= $websiteName ?></title>
    <link href='<?= $uri ?>/css/font-awesome.min.css' rel='stylesheet' type='text/css' />
    <link href='<?= $uri ?>/css/entypo.css' rel='stylesheet' type='text/css' />
    <link href='<?= $template ?>' rel='stylesheet' type='text/css' />
    <link href='<?= $uri ?>/css/bootstrap.min.css' rel='stylesheet' type='text/css' />
    <link href='<?= $uri ?>/css/general.css' rel='stylesheet' type='text/css' />
    <link href='<?= $uri ?>/css/santa.css' rel='stylesheet' type='text/css' />
    <link href='<?= $uri ?>/css/user-list.css' rel='stylesheet' type='text/css' />

    <script src='<?= $uri ?>/js/jquery-2.1.4.js' type='text/javascript'></script>
    <script src='<?= $uri ?>/js/bootstrap.min.js' type='text/javascript'></script>
    <script src='<?= $uri ?>/models/funcs.js' type='text/javascript'></script>
  </head>
