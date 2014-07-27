<?php
session_start();

// Connecting, selecting database
$link = mysql_connect('localhost', 'jngierke', '05Drpepper')
    or die('Could not connect: ' . mysql_error());
mysql_select_db('jngierke_EREL') or die('Could not select database');

