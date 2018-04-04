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
     * GET /books/create
     */
    public function create()
    {
        return view('bill.create');
    }

    /**
     * POST /bill/calculate
     * @Todo: Add the code to actually add the book to the database
     */
    public function calculate(Request $request)
    {
        $this->validate($request, [
            'split' => 'required|numeric|min:3',
            'tab' => 'required|numeric|min:3',
            'tip' => 'required|numeric',
        ]);

        $x = $request->input('tab');
        $y = $request->input('split');
        $z = $request->input('tip');
        $total = $x + $x * $z / 100;
        $final = $total / $y;

        Log::info('TAB Value ' . $request->input('tab'));
        Log::info('Individual Value ' . round($final, 2));

        $cookie = $request->input('fortuneCookie', null);
        $food = $request->input('food', null);

        Log::info('ccokie Value ' . $request->input('tab') . $cookie);
        Log::info('food Value ' . $request->input('tab') . $food);

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

    public function getQuotes()
    {
        return 'Display Quotes';
    }

    public function calculateTipAndDisplayResults()
    {
        return 'calculateAnswerAndDisplayResults';
    }

}
