<?php
    const dias_por_ano = 365;
    const minutos_perdidos = 11;
    
    $anos_fumando = 3;
    $dias = $anos_fumando * dias_por_ano;  
    $cigarros_ao_dia = 10;
    $total_de_cigarros = $cigarros_ao_dia * $dias;
    $total_minutos_perdidos = minutos_perdidos * $total_de_cigarros;
    
    $total_horas_fumando = intdiv($total_minutos_perdidos, 60);
    $minutos_fumando = $total_minutos_perdidos - (60 * intdiv($total_minutos_perdidos, 60));

    $total_dias_fumando = intdiv($total_horas_fumando, 24);
    $horas_fumando = $total_horas_fumando - (24 * intdiv($total_horas_fumando, 24));

    $meses_fumando = intdiv($total_dias_fumando, 30);
    $dias_fumando = $total_dias_fumando - (30 * intdiv($total_dias_fumando, 30));

    $resultado = 
    "<p> Fumando 10 vezes ao dia, ao longo de 3 anos, uma pessoa perderia:</p>
     <p> {$meses_fumando} meses, {$dias_fumando} dias, {$horas_fumando} horas e {$minutos_fumando} minutos de vida </p>";
     
     
   		print $resultado;