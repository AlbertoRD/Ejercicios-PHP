<?php
header('Content-Type: text/html; charset=utf-8');

$euros = $_POST['txtEuros'];

$ptas = $euros * 166.386;
echo "$euros € = $ptas pesetas";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

