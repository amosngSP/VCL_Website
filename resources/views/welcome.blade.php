@extends('layouts.app')
@section('title','- Welcome!')
@section('content')



<div class="row">
  <div class="col">
    <h4>Welcome to VCL vACC!</h4>
    <!--Events Carousel-->
    <div class="bd-example">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators"> 
          @foreach ($events as $event) 
          @if ($loop->count==1)
          <li data-target="#carouselExampleCaptions" data-slide-to="{{($loop->iteration)-1}}" class="active"></li> 
          <li data-target="#carouselExampleCaptions" data-slide-to="{{($loop->iteration)}}"></li> 
          @elseif ($loop->first) 
          <li data-target="#carouselExampleCaptions" data-slide-to="{{($loop->iteration)-1}}" class="active"></li> 
          @else 
          <li data-target="#carouselExampleCaptions" data-slide-to="{{($loop->iteration)-1}}"></li> 
          @endif 
          @endforeach 
        </ol>
        <div class="carousel-inner"> 
          @foreach ($events as $event) 
          @if ($loop->count==1)
          <div class="carousel-item active">
            <img src="{{$event['banner']}}" width="730" height="411" class="d-block w-100" alt="{{$event['name']}}">
            <div class="carousel-caption d-none d-md-block">
              <h5><a href="{{$event['link']}}" target="_blank">{{$event['name']}}</a></h5>
              <p>{{date('d/M/Y',strtotime($event['start_time']))}} {{date('H:i',strtotime($event['start_time']))}}z - {{date('H:i',strtotime($event['end_time']))}}z</p>
            </div>
          </div> 
          <div class="carousel-item">
            <img src="{{$event['banner']}}" width="730" height="411" class="d-block w-100" alt="{{$event['name']}}">
            <div class="carousel-caption d-none d-md-block">
            <h5><a href="{{$event['link']}}" target="_blank">{{$event['name']}}</a></h5>
            <p>{{date('d/M/Y',strtotime($event['start_time']))}} {{date('H:i',strtotime($event['start_time']))}}z - {{date('H:i',strtotime($event['end_time']))}}z</p>  </div>
          </div> 
          @elseif ($loop->first) 
          <div class="carousel-item active">
            <img src="{{$event['banner']}}" width="730" height="411" class="d-block w-100" alt="{{$event['name']}}">
            <div class="carousel-caption d-none d-md-block">
            <h5><a href="{{$event['link']}}" target="_blank">{{$event['name']}}</a></h5>
            <p>{{date('d/M/Y',strtotime($event['start_time']))}} {{date('H:i',strtotime($event['start_time']))}}z - {{date('H:i',strtotime($event['end_time']))}}z</p>
          </div>
          </div> 
          @else 
          <div class="carousel-item">
            <img src="{{$event['banner']}}" width="730" height="411" class="d-block w-100" alt="{{$event['name']}}">
            <div class="carousel-caption d-none d-md-block">
            <h5><a href="{{$event['link']}}" target="_blank">{{$event['name']}}</a></h5>
            <p>{{date('d/M/Y',strtotime($event['start_time']))}} {{date('H:i',strtotime($event['start_time']))}}z - {{date('H:i',strtotime($event['end_time']))}}z</p>
          </div>
          </div> 
          @endif 
          @endforeach 
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  </div>
  <div class="col-md-4 ms-auto">
    <div class="card">
      <div class="card-header">
        <p style="font-size:20px;">
          <i class="mdi mdi-information-outline"></i> Online Controllers
        </p>
      </div>
      <ul class="list-group list-group-flush"> @if ($online_controllers) @forelse ($online_controllers as $controller) <li style="font-size:14px;" class="list-group-item">
          <i class="mdi mdi-radar"></i> {{$controller['callsign']}}
          <br>{{ (is_numeric($controller['realname']) ? $controller['cid']  : $controller['realname']." - ".$controller['cid']) }}
        </li> @empty <li style="font-size:14px;" class="list-group-item">There is no ATC online</li> @endforelse @else <li style="font-size:14px;" class="list-group-item">There is no ATC online</li> @endif </ul>
    </div>
    <div class="card" style="margin-top:25px;">
      <div class="card-header">
        <p style="font-size:20px;">
          <i class="mdi mdi-information-outline"></i> ATC Bookings
        </p>
      </div>
      <ul class="list-group list-group-flush"> @if ($bookings) @forelse ($bookings as $booking) <li style="font-size:14px;" class="list-group-item">
          <i class="mdi mdi-radar"></i> {{$booking['callsign']}}
          <br>{{date('d/M/Y',strtotime($booking['start']))}} {{date('H:i',strtotime($booking['start']))}}z - {{date('H:i',strtotime($booking['end']))}}z
        </li> @empty <li style="font-size:14px;" class="list-group-item">There is no Bookings</li> @endforelse @else <li style="font-size:14px;" class="list-group-item">There is no Bookings</li> @endif </ul>
    </div>
  </div>
</div>

@endsection