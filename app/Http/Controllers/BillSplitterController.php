<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillSplitterController extends Controller
{
    //
    public function index() {
      return 'Display Form where User can input values';
    }

    public function getQuotes() {
        return 'Display Quotes';
    }

    public function calculateTipAndDisplayResults() {
        return 'calculateAnswerAndDisplayResults';
    }

}
