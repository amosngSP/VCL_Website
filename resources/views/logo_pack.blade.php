@extends('layouts.app')
@section('title','- Roster')
@section('content')



<div class="row">
  <div class="col">
    <h4>Logo Pack</h4>
  <p>We use two standard logos, one Colour Logo and one B&W Logo.</p>
  <a href="{{asset("images/logo1.png")}}" target="_blank">Colour Logo</a>
  <a href="{{asset("images/logo2.png")}}" target="_blank">Black and White Logo</a>
  </div>
</div>

@endsection