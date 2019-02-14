<?php

namespace App\Http\Controllers;
use App\Charts\SampleChart;

use App\Member;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use ConsoleTVs\Charts\Facades\Charts;
use App\Charts\MemberChart;


class ChartsController extends Controller
{
    public function charts()
    {

//        $data = Member::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
//
//     dd($data);
//        $chart_iscritti = Charts::database($data, 'bar', 'highcharts')
//            ->title('Grafico iscritti')
//            ->elementLabel('Iscritti')
//            ->dimensions(1000, 300)
//            ->responsive(true)
//            ->groupByMonth(date('Y'), true);



//        $data = Member::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();

        $data = collect([]);

        $chart_iscritti = new MemberChart;
        $chart_iscritti->labels(['One', 'Two', 'Three', 'Four']);
       // $chart_iscritti->dataset('My dataset', 'line',$data);
        $chart_iscritti->labels(['One', 'Two', 'Three', 'Four']);
        $chart_iscritti->dataset('My dataset', 'line', [1, 2, 3, 4]);
        $chart_iscritti->dataset('My dataset 2', 'line', [4, 3, 2, 1]);

        //dd($chart_iscritti);
//        $chart_iscritti->labels(['One', 'Two', 'Three', 'Four']);
//        $chart_iscritti->dataset('My dataset', 'line', [1, 2, 3, 4]);
//        $chart_iscritti->dataset('My dataset 2', 'line', [4, 3, 2, 1]);

        return view('/home/report-stats', compact('chart_iscritti'));
    }
}