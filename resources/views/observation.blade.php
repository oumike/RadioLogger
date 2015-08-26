@extends('layouts.master')

@section('head')
    @parent

    <script>

        $(document).ready(function() {

            $('#addObservation').click(function() {
                $('#addObservationForm').submit()
            })

            $('#getNow').click(function() {
                alert('this should populate the datetime with a now timestamp')
            })

        })

    </script>
@stop

@section('content')



    <!-- List of observations from today here -->
    {!! Form::open(array('name' => 'addObservationForm', 'id' => 'addObservationForm', 'action' => 'ObservationController@add')) !!}
        <label>Frequency: </label>{!! Form::text('frequency') !!}<br />
        <label>Station: </label>{!! Form::select('station_id', $stations) !!} <br />
        <label>Radio Show:</label>{!! Form::select('radioshow_id', $radioShows) !!}<br />
        <label>Sechedule: </label>{!! Form::select('schedule_id', $schedules) !!}<br />
        <label>Strength: </label>{!! Form::select('strength', $strength) !!}<br />
        <label>Description: </label>{!! Form::textarea('description') !!}<br />
        <label>Destination: </label>{!! Form::select('destination', $destinations) !!}<br />
        <label>Source: </label>{!! Form::select('source', $sources) !!}<br />
        <lable>Date/Time: </lable>{!! Form::text('datetime', $now) !!} <input type="button" value="Now" id="getNow" name="getNow" /><br />

        {!! Form::hidden('_token', csrf_token()) !!}

    {!! Form::close() !!}

    <input type="button" value="Add" id="addObservation" name="addObservation" />

@stop