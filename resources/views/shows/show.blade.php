@extends('layouts.app')

@section('content')

    <a href="{{ url('shows') }}" class="btn btn-default btn-warning">Back</a>

        <div class="well">
            <h1>{{ $show->name }}</h1>
            <p>  
                Air-Time:<br>  
                {{ $show->time }}

                Season:<br>  
                {{ $show->season }}

                Network:<br>  
                {{ $show->network }}

                Air-Day:<br>  
                {{ $show->day }}

                Image: <br>    
                @if($show->photo != '')
                    <img src="{{ asset('uploads/thumb/'.$show->photo) }}">
                @endif

                On-Air:<br>  
                {{ $show->active == 1 ? 'Yes' : 'No' }}
            </p>
        </div>

@stop