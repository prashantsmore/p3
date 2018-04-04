@extends('layouts.master')

@section('title')
    Split The Bill
@endsection

@section('content')
    <h1>Split The Bill</h1>

    <form method='POST' action='/bill/calculate'>
        {{ csrf_field() }}

        <div class='details'>* Required fields</div>

        <label for='split'>* Split How Many Ways ?</label>
        <input type='text' name='split' id='split' value='{{ old('split') }}'>
        @include('modules.error-field', ['field' => 'split'])

        <label for='tab'>* How Much Was The Tab ?</label>
        <input type='text' maxlength='4' name='tab' id='tab' value='{{ old('tab') }}'>
        @include('modules.error-field', ['field' => 'tab'])


        <label for='tip'>* How Was The Service ? </label>
        <select name='tip' id='tip'>
            <option value='choose'>Choose One ...</option>
            <option value='18'>Good -18%</option>
            <option value='10'>OK - 10%</option>
            <option value='5'>Bad - 5%</option>
        </select>
        @include('modules.error-field', ['field' => 'tip'])

        <label >Do You Want To Open The Cookie ? <input  type='checkbox' name='fortuneCookie' value='Yes'/></label>

        <label> You can provide the optional food review below </label>
        <label><input type='radio'
                      name='food'
                      value='excel'> Excellent</label>
        <label><input type='radio'
                      name='food'
                      value='good'> Good</label>
        <label><input type='radio'
                      name='food'
                      value='bad'> Not Up To Mark</label>



        <input type='submit' value='Calculate' class='btn btn-primary'>
    </form>

    @include('modules.error-form')



@endsection