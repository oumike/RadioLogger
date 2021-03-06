@extends('layouts.master')

@section('head')
    @parent

    <script>

        $(document).ready(function() {

            $('#addObservation').click(function() {
                $('#addObservationForm').submit()
            })

            $('#addRadioShow').click(function() {
                $('#addRadioShowForm').submit()
            })

            $('#addStation').click(function() {
                $('#addStationForm').submit()
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
        <label>Station: </label>{!! Form::select('station_id', $stations) !!}
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addStationModal">Add Station</button>
        <br />
        <label>Radio Show:</label>{!! Form::select('radioshow_id', $radioShows) !!}
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addRadioShowModal">Add Radio Show</button>
        <br />
        <label>Sechedule: </label>{!! Form::select('schedule_id', $schedules) !!}<br />
        <label>Strength: </label>{!! Form::select('strength', $strength) !!}<br />
        <label>Description: </label>{!! Form::textarea('description') !!}<br />
        <label>Destination: </label>{!! Form::select('destination', $destinations) !!}<br />
        <label>Source: </label>{!! Form::select('source', $sources) !!}<br />
        <lable>Date/Time: </lable>{!! Form::text('datetime', $now) !!} <input type="button" value="Now" id="getNow" name="getNow" /><br />

        {!! Form::hidden('_token', csrf_token()) !!}

    {!! Form::close() !!}

    <input type="button" value="Add" id="addObservation" name="addObservation" />

    <!-- Modal -->
    <div id="addRadioShowModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Radio Show</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(array('name' => 'addRadioShowForm', 'id' => 'addRadioShowForm', 'action' => 'ObservationController@addRadioShow')) !!}
                    <label>Name: </label>{!! Form::text('radioShowName', null) !!}<br />
                    <label>Description: </label>{!! Form::text('radioShowDescription', null) !!}<br />
                    {!! form::close() !!}
                    <input type="button" value="Add" id="addRadioShow" name="addRadioShow" />
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div id="addStationModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Station</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(array('name' => 'addStationForm', 'id' => 'addStationForm', 'action' => 'ObservationController@addStation')) !!}
                    <label>Name: </label>{!! Form::text('stationName') !!}<br />
                    <label>Description: </label>{!! Form::text('stationDescription') !!}<br />
                    {!! form::close() !!}
                    <input type="button" value="Add" id="addStation" name="addStation" />
                </div>
            </div>

        </div>
    </div>

@stop