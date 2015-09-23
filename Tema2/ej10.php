<?php

header('Content-Type: text/html; charset=utf-8');

$megas = $_POST['txtMb'];

$kb = $megas * 1024;

echo "$megas Mb = $kb Kb";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

