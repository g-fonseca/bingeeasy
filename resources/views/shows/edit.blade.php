@extends('layouts.app')

@section('content')
   <a href="{{ url('shows') }}" class="btn btn-default btn-warning">Back</a>
    <h1 class="page-title">EDIT SHOW</h1>
    
    {!! Form::model($show, ['method' => 'PUT', 'route' => ['shows.update', $show->id], 'files' => true,]) !!}

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>

<!--             <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('time', 'AIR-TIME', ['class' => 'control-label']) !!}
                    {!! Form::text('time', $enum_time, old('time'), ['class' => 'form-control', 'placeholder' => '']) !!}
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
                    {!! Form::text('season', $enum_season, old('season'), ['class' => 'form-control', 'placeholder' => '']) !!}
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
                    {!! Form::label('network', 'NETWORK', ['class' => 'control-label']) !!}
                    {!! Form::select('network', $enum_network, old('network'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('network'))
                        <p class="help-block">
                            {{ $errors->first('network') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('day', 'AIR-DAY', ['class' => 'control-label']) !!}
                    {!! Form::select('day', $enum_day, old('day'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('day'))
                        <p class="help-block">
                            {{ $errors->first('day') }}
                        </p>
                    @endif
                </div>
            </div>
 -->
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('photo', 'Photo', ['class' => 'control-label']) !!}
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
                    {!! Form::checkbox('active', 1, $show->active == 1, ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('active'))
                        <p class="help-block">
                            {{ $errors->first('active') }}
                        </p>
                    @endif
                </div>
            </div>
            
    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}


@stop

