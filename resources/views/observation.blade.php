@extends('layouts.master')

@section('content')

    <form method="post">
        <label>Frequency: </label><input name="frequency"><br />
        <label>Station ID: </label><input name="station_id"><br />
        <label>Sechedule ID: </label><input name="schedule_id"><br />
        <label>Strength: </label><input name="strength"><br />
        <label>Description: </label><input name="description"><br />
        <label>Source: </label><input name="source"><br />
        <lable>Date/Time: </lable><input name="datetime"><br />

        <input type="submit" />

    </form>

@stop