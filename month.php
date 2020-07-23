<?php

function getMonth($value)
{
    try
    {
        switch ($value)
        {
            case '01':
                $month = 'Jan';
                break;
            case '02':
                $month = 'Fev';
                break;
            case '03':
                $month = 'Mar';
                break;
            case '04':
                $month = 'Abr';
                break;
            case '05':
                $month = 'Mai';
                break;
            case '06':
                $month = 'Jun';
                break;
            case '07':
                $month = 'Jul';
                break;
            case '08':
                $month = 'Ago';
                break;
            case '09':
                $month = 'Set';
                break;
            case '10':
                $month = 'Out';
                break;
            case '11':
                $month = 'Nov';
                break;
            case '12':
                $month = 'Dez';
                break; 
        }
        return $month;
    }
    catch (\Throwable $th)
    {
        //throw $th;
    }
}
function getMonthFullName($value)
{
    try
    {
        switch ($value)
        {
            case '01':
                $month = 'Janeiro';
                break;
            case '02':
                $month = 'Fevereiro';
                break;
            case '03':
                $month = 'Março';
                break;
            case '04':
                $month = 'Abril';
                break;
            case '05':
                $month = 'Maio';
                break;
            case '06':
                $month = 'Junho';
                break;
            case '07':
                $month = 'Julho';
                break;
            case '08':
                $month = 'Agosto';
                break;
            case '09':
                $month = 'Setembro';
                break;
            case '10':
                $month = 'Outubro';
                break;
            case '11':
                $month = 'Novembro'; 
                break; 
            case '12': 
                $month = 'Dezembro'; 
            break; 
        }
        return $month; 
    }
    catch (\Throwable $th)
    {
        //throw $th;
    }
} 