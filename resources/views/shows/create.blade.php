@extends('layouts.app')

@section('content')
   <a href="{{ url('shows') }}" class="btn btn-default">Back</a>

    <h1 class="page-title white">ADD A SHOW</h1>
   
    {!! Form::open(['method' => 'POST', 'route' => ['shows.store'], 'files' => true,]) !!}
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'TITLE', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('time', 'AIR-TIME', ['class' => 'control-label']) !!}
                    {!! Form::text('time', old('time'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('time'))
                        <p class="help-block">
                            {{ $errors->first('time') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('season', 'SEASON', ['class' => 'control-label']) !!}
                    {!! Form::text('season', old('season'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('season'))
                        <p class="help-block">
                            {{ $errors->first('season') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('color', 'NETWORK', ['class' => 'control-label']) !!}
                    {!! Form::select('color', $enum_color, old('color'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('color'))
                        <p class="help-block">
                            {{ $errors->first('color') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('day', 'AIR-DAY', ['class' => 'control-label']) !!}
                    {!! Form::select('day', $enum_color, old('day'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('day'))
                        <p class="help-block">
                            {{ $errors->first('day') }}
                        </p>
                    @endif
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('photo', 'IMAGE', ['class' => 'control-label']) !!}
                    {!! Form::file('photo', old('photo'), ['class' => 'form-control']) !!}
                    {!! Form::hidden('photo_max_size', 10) !!}
                    {!! Form::hidden('photo_max_width', 2000) !!}
                    {!! Form::hidden('photo_max_height', 2000) !!}
                    <p class="help-block"></p>
                    @if($errors->has('photo'))
                        <p class="help-block">
                            {{ $errors->first('photo') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('active', 'Active', ['class' => 'control-label']) !!}
                    {!! Form::hidden('active', 0) !!}
                    {!! Form::checkbox('active', 1, true, ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('active'))
                        <p class="help-block">
                            {{ $errors->first('active') }}
                        </p>
                    @endif
                </div>
            </div>


    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

    
@stop

