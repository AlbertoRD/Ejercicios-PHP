<?php
header('Content-Type: text/html; charset=utf-8');

$ptas = $_POST['txtPesetas'];

$euros = $ptas / 166.386;
$euros = round($euros, 2);
echo "$ptas pesetas = $euros €";

