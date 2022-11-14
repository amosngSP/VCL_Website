@extends('layouts.app')
@section('title','- Staff')
@section('content')



<div class="row">
  <div class="col">
    <h4>Staff</h4>
    <p>Meet the Team that is responsible for running the vACC! Not sure who to direct your query to? Send it to <a href="mailto:staff@vclvacc.net">staff@vclvacc.net</a>.</p>
    <div class="row" style="margin-bottom: 50px;">

      <div class="col- card staff-card">
        <img class="card-img-top" width="286" src="{{ asset('images/ACCVCL1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Vu Viet Phuong<br>ACCVCL1 - Director</h5>
          <p class="card-text">A flight simulator enthusiasm with decade of experience on VATSIM <a href="https://www.youtube.com/user/avemaria85" target="_blank">(and also has his own flight simulator at home)</a>, Phuong Vu is responsible for all activities of VCLvACC and ensures both pilots and controllers have fun while connected on the network. Say Hello if you see him around!</p>
          <a href="emailto:director@vclvacc.net" class="btn btn-primary">E-mail</a>
        </div>
      </div>

      <div class="col- card staff-card">
        <img class="card-img-top" width="286" src="{{ asset('images/ACCVCL2.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Duy Nguyen<br>ACCVCL2 - Deputy Director</h5>
          <p class="card-text">Duy is responsible for assisting with daily operations of VCLvACC. He likes surfing, hiking and playing games in his free time. Duy loves aviation. He is currently an Aerospace Engineering student and a flight instructor. Buy him Phở and he will give you a direct to your destination!</p>
          <a href="emailto:deputy.director@vclvacc.net" class="btn btn-primary">E-mail</a>
        </div>
      </div>

      <div class="col- card staff-card">
        <img class="card-img-top" width="286" src="{{asset('images/ACCVCL3.png')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">An Truong<br>ACCVCL3 - Training Director</h5>
          <p class="card-text">I am just an AvGeek who loves to go to outer space. Been dreaming of flying since the age of 6. Now working as a Safety System Engineer at Airbus. <br> <i><b>Quote: </b>"There are 3 types of people: the ones who can count, and the ones who cannot count."</i></p>
          <a href="emailto:training.director@vclvacc.net" class="btn btn-primary">E-mail</a>
        </div>
      </div>

    </div>
    <div class="row">

    <div class="col- card staff-card">
        <img class="card-img-top" width="286" src="{{ asset('images/ACCVCL4.jfif')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Amos Ng<br>ACCVCL4 - Operations Director</h5>
          <p class="card-text">Hailing from Singapore, he likes to dabble his time in watching anime, reading manga, and keeping up to date with the latest news. He's currently serving his National Service, in the Air Force no less! In the vACC, he is responsible for keeping the sector file up to date, and also assists to develop the lovely website you are looking at now! Say hello if you see him on the network, he won't bite, probably...</p>
          <a href="emailto:operations.director@vclvacc.net" class="btn btn-primary">E-mail</a>
        </div>
      </div>

      <div class="col- card staff-card">
        <img class="card-img-top" width="286" src="{{ asset('images/ACCVCL6.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nguyen Minh Hai<br>ACCVCL6 - Webmaster</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a href="emailto:webmaster@vclvacc.net" class="btn btn-primary">E-mail</a>
        </div>
      </div>


  </div>
  </div>
</div>

@endsection
