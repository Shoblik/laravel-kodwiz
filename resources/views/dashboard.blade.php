@extends('layouts.dashboard-layout')

@section('content')
<div class="welcome-container">
    <p>Welcome, {{$user->name}}</p>
    <button class="launch" onclick="window.open('http://195.234.214.189:8010/sap/bc/bsp/sap/yhh_app/yhh_app.do?sap-client=800&amp;sap-sessioncmd=open')" class="launch">Launch Application</button>
</div>

@endsection
