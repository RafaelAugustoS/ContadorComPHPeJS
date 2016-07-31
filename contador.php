<?php


$dia_hora_atual = strtotime(date("Y-m-d H:i:s"));
$dia_hora_evento = strtotime(date("2016-12-15 08:00:00"));

$diferenca = $dia_hora_evento - $dia_hora_atual;

$dias = intval($diferenca / 86400);
$marcador = $diferenca % 86400;
$hora = intval($marcador / 3600);
$marcador = $marcador % 3600;
$minuto = intval($marcador / 60);
$segundos = $marcador % 60;

echo "$dias dia(s) $hora hora(s) $minuto minuto(s) $segundos segundo(s)";
?>