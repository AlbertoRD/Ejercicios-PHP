<?php

header('Content-Type: text/html; charset=utf-8');

$kb = $_POST['txtKb'];

$mb = $kb / 1024;

echo "$kb Kb = $mb Mb";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

