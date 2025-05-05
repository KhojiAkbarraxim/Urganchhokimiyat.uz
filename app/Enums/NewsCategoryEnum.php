<?php
namespace App\Enums;


enum NewsCategoryEnum:string
{
    case POLITICAL = 'siyosiy';
    case SOCIAL = 'ijtimoiy';
    case ECONIMIC = 'iqtisodiy';
    case HEALTH = 'salomatlik';
    case ECOLOGY ='ekologiya';
    case BUSINESS = 'biznes';
    case STATISTIC = 'statistika';
}