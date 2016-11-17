@extends('layouts.app')

@section('content')

<div class="row homefull">
    <div class="col-xs-12">
      <h1 class="page-title white">MY SHOWS</h1> 

      <button class="btn btn-primary" data-toggle="modal" data-target="#myModalHorizontal">
        ADD SHOW
      </button>
<!-- ________Modal starts_________-->
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    ADD A SHOW
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                {!! Form::open(['method' => 'POST', 'route' => ['shows.store'], 'files' => true,]) !!}
                
                <div class=" col-xs-12 form-group">
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>

             <div class="row">
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


              
                <div class="col-xs-12 form-group">
                    {!! Form::label('photo', 'Image:', ['class' => 'control-label']) !!}
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
                <div class="col-xs-12 form-group">
                    {!! Form::label('active', 'ON-AIR', ['class' => 'control-label']) !!}
                    {!! Form::hidden('active', 0) !!}
                    {!! Form::checkbox('active', 1, true, ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('active'))
                        <p class="help-block">
                            {{ $errors->first('active') }}
                        </p>
                    @endif
                </div>
                {!! Form::submit('Save', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
            </div><!-- Modal Body Ends-->
        </div><!-- modal-content ends -->
    </div> <!-- modal-dialog ends -->
</div>
<!-- ________Modal Ends______-->

<!-- ________DAY__TABS______ -->
      <div class="row ">
          <ul class="nav nav-pills nav-justified">
            <li class="active"><a data-toggle="tab" href="#home">MONDAY</a></li>
            <li><a data-toggle="pill" href="#menu1">TUESDAY</a></li>
            <li><a data-toggle="pill" href="#menu2">WEDNESDAY</a></li>
            <li><a data-toggle="pill" href="#menu3">THURSDAY</a></li>
            <li><a data-toggle="pill" href="#menu4">FRIDAY</a></li>
            <li><a data-toggle="pill" href="#menu5">SATURDAY</a></li>
            <li><a data-toggle="pill" href="#menu6">SUNDAY</a></li>
          </ul>

          <div class="pill-content">
            <div id="home" class="pill-pane fade in active">
                @if (count($monday_shows) > 0)
                    @foreach ($monday_shows as $show)
                        <div class="well">
                            <h3>{{ $show->name }}</h3>
                            <p>  
                                Air-Time:<br>  
                                {{ $show->time }}

                                Season:<br>  
                                {{ $show->season }}

                                Network:<br>  
                                {{ $show->network }}

                                Image: <br>    
                                @if($show->photo != '')
                                    <img src="{{ asset('uploads/thumb/'.$show->photo) }}">
                                @endif

                                On-Air:<br>  
                                {{ $show->active == 1 ? 'Yes' : 'No' }}
                            </p>
                            <a href="{{ route('shows.show',[$show->id]) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('shows.edit',[$show->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(array(
                                    'style' => 'display: inline-block;',
                                    'method' => 'DELETE',
                                    'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                                    'route' => ['shows.destroy', $show->id])) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-primary')) !!}
                            {!! Form::close() !!}

                    </div>
                    @endforeach
                @else
                <h2>Yo you got no shows. Maybe you should make one...</h2>
                          
                @endif


            </div>
            <div id="menu1" class="pill-pane fade">
               @if (count($tuesday_shows) > 0)
                    @foreach ($tuesday_shows as $show)
                        <div class="well">
                            <h3>{{ $show->name }}</h3>
                            <p>  
                                Air-Time:<br>  
                                {{ $show->time }}

                                Season:<br>  
                                {{ $show->season }}

                                Network:<br>  
                                {{ $show->network }}

                                Image: <br>    
                                @if($show->photo != '')
                                    <img src="{{ asset('uploads/thumb/'.$show->photo) }}">
                                @endif

                                On-Air:<br>  
                                {{ $show->active == 1 ? 'Yes' : 'No' }}
                            </p>
                            <a href="{{ route('shows.show',[$show->id]) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('shows.edit',[$show->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(array(
                                    'style' => 'display: inline-block;',
                                    'method' => 'DELETE',
                                    'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                                    'route' => ['shows.destroy', $show->id])) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-primary')) !!}
                            {!! Form::close() !!}

                        </div>
                    @endforeach
                @else
                    <h2>Yo you got no shows. Maybe you should make one...</h2>
                @endif
            </div>

            <div id="menu2" class="pill-pane fade">
               @if (count($wednesday_shows) > 0)
                    @foreach ($wednesday_shows as $show)
                        <div class="col-xs-12">
                            <div class="well">
                                <h3>{{ $show->name }}</h3>
                                <p>  
                                    Air-Time:<br>  
                                    {{ $show->time }}

                                    Season:<br>  
                                    {{ $show->season }}

                                    Network:<br>  
                                    {{ $show->network }}

                                    Image: <br>    
                                    @if($show->photo != '')
                                        <img src="{{ asset('uploads/thumb/'.$show->photo) }}">
                                    @endif

                                    On-Air:<br>  
                                    {{ $show->active == 1 ? 'Yes' : 'No' }}
                                </p>
                                <a href="{{ route('shows.show',[$show->id]) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('shows.edit',[$show->id]) }}" class="btn btn-primary">Edit</a>
                                {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                                        'route' => ['shows.destroy', $show->id])) !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-primary')) !!}
                                {!! Form::close() !!}

                            </div>
                        </div>
                    @endforeach
                @else
                <h2>Yo you got no shows. Maybe you should make one...</h2>
                          
                @endif
            </div>
            <div id="menu3" class="pill-pane fade">
              <p>No Shows for Thursday</p>
            </div>
            <div id="menu4" class="pill-pane fade">
              <p>No Shows for Friday</p>
            </div>
            <div id="menu5" class="pill-pane fade">
              <p>No Shows for Saturday</p>
            </div>
            <div id="menu6" class="pill-pane fade">
              <p>No Shows for Sunday</p>
            </div>

          </div>
      </div>
       

    </div>
</div>
@stop


