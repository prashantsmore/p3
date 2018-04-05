<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class BillSplitterController extends Controller
{
    //
    public function index()
    {
        return 'Display Form where User can input values';
    }

    /**
     * GET /bill/getData
     */
    public function getData()
    {
        return view('bill.index');
    }

    /**
     * GET /bill/calculate
     * Splits the Bill
     */
    public function calculate(Request $request)
    {
        $messages = [
            'numeric' => 'The :attribute should not contain any characters other than numbers',
        ];

        $this->validate($request, [
            'split' => 'required|numeric|min:2',
            'tab' => 'required|numeric|min:3',
            'tip' => 'required|numeric',
        ], $messages);

        $x = $request->input('tab');
        $y = $request->input('split');
        $z = $request->input('tip');
        $total = $x + $x * $z / 100;
        $final = $total / $y;

        $cookie = $request->input('fortuneCookie', null);
        $food = $request->input('food', null);

        Log::info('Tab Value ' . $request->input('tab'));
        Log::info('Individual Value ' . round($final, 2));
        Log::info('Ccokie Value ' . $cookie);
        Log::info('Food Value ' . $food);

        $json = file_get_contents(database_path('fortuneQuotes.json'));
        $clues = json_decode($json, true);
        $quote = array_rand($clues);
        $clue = $clues[$quote];

        Log::info('Clue ' . $clue);

        return view('bill.result')->with([
            'answer' => round($final, 2),
            'cookie' => $request->input('fortuneCookie', null),
            'food' => $request->input('food', null),
            'clue' => $clue,

        ]);
    }
}
