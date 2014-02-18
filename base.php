<?php

// Connecting, selecting database
$link = mysql_connect('127.0.0.1', 'root', 'password')
    or die('Could not connect: ' . mysql_error());
mysql_select_db('garces-vent1') or die('Could not select database');
