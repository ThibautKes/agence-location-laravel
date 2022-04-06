@extends('layouts.app')

@section('content')

<form>
    <label>dates
        <input type="date" name="date1">
        <input type="date" name="date2">
    </label>
    <label>temps
    <input type="time" name="temps1">
    <input type="time" name="temps2">
    </label>
</label>

    
    <input type="submit" value="submit">
</form>

@endsection