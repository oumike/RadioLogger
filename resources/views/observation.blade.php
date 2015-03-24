@extends('layouts.master')

@section('head')
    @parent

    <script>

        $(document).ready(function() {

            $('#addObservation').click(function() {
                alert('hello')
            })

        })

    </script>
@stop

@section('content')



    <!-- List of observations from today here -->

    <form method="post">
        <label>Frequency: </label>{!! Form::text('frequency') !!}<br />
        <label>Station ID: </label>{!! Form::select('status_id', $stations) !!} <br />
        <label>Sechedule ID: </label><input name="schedule_id"><br />
        <label>Strength: </label><input name="strength"><br />
        <label>Description: </label><input name="description"><br />
        <label>Source: </label><input name="source"><br />
        <lable>Date/Time: </lable><input name="datetime"><br />

        {!! Form::hidden('_token', csrf_token()) !!}

    </form>

    <input type="button" value="Add" id="addObservation" name="addObservation" />

@stop