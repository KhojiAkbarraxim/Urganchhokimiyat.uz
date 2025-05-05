<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCalendarController extends Controller
{
    public function GetYearMonth()
    {
        $current_date_time = Carbon::now()->format('Y-m');
        $date = new Carbon($current_date_time);
        $year = $date->year;
        $month = $date->month;

        $dt = Carbon::createFromDate($year, $month);

        $lastDayOfMonth = $dt->endOfMonth();
        $daysWithNews = [];

        for ($day = 1; $day <= $lastDayOfMonth->format('d'); $day++) {

            $currentDate = Carbon::createFromDate($year, $month, $day)->format("Y-m-d");

            $hasPost = Post::where('created_at', 'like', "%{$currentDate}%")->exists();

            $daysWithNews[$currentDate] = $hasPost;
        }

        return response()->json(
            [
                'Calendar' => $daysWithNews
            ]
        );
    }
}
