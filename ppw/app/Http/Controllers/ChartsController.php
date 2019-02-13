<?php

namespace App\Http\Controllers;

use App\Member;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts\Facades\Charts;



class ChartsController extends Controller
{
    public function charts()
    {

        $data = Member::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();


        $chart_iscritti = Charts::database($data, 'bar', 'highcharts')
            ->title('Grafico iscritti')
            ->elementLabel('Iscritti')
            ->dimensions(1000, 300)
            ->responsive(true)
            ->groupByMonth(date('Y'), true);

   //   ENTRATE

        $data_entrate =

            /*Transaction::select(DB::raw("SUM(importo) as count"))
                ->orderBy("created_at")
                ->groupBy(DB::raw("year(created_at)"))
                ->get();
              */


            Transaction::
            select(DB::raw("sum(importo) as sumSoda"))->
            where('tipo_transazione','=','entrata')->
            where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();

        $chart_entrate = Charts::database($data_entrate, 'bar', 'highcharts')
            ->title('Grafico entrate')
            ->elementLabel('Entrate')
            ->dimensions(1000, 300)
            ->responsive(true)
            ->groupByMonth(date('Y'), true);


        return view('/home/report-stats', compact('chart_iscritti','chart_entrate'));
    }
}