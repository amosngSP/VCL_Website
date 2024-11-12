@extends('layouts.app')
@section('title','- Staff')
@section('content')



<div class="row">
  <div class="col">
    <h4>Staff</h4>
    <p>Meet the Team that is responsible for running the vACC! For all queries, please contact us via VATSEA HQ at <a href="https://hq.vat-sea.com/">https://hq.vat-sea.com/</a>.</p>
    <div class="row" style="margin-bottom: 50px;">

      <div class="col- card staff-card">
        <img class="card-img-top" width="286" src="{{ asset('images/ACCVCL1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Vu Viet Phuong<br>ACCVCL1 - Director<br>ACCVCL3 - Training Director<br>ACCVCL6 - Events Director</h5>
          <p class="card-text">A flight simulator enthusiasm with decade of experience on VATSIM <a href="https://www.youtube.com/user/avemaria85" target="_blank">(and also has his own flight simulator at home)</a>, Phuong Vu is responsible for all activities of VCLvACC and ensures both pilots and controllers have fun while connected on the network. Say Hello if you see him around!</p>
        </div>
      </div>

      <div class="col- card staff-card">
        <img class="card-img-top" width="286" src="{{ asset('images/ACCVCL2.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Duy Nguyen<br>ACCVCL2 - Deputy Director</h5>
          <p class="card-text">Duy is responsible for assisting with daily operations of VCLvACC. He likes surfing, hiking and playing games in his free time. Duy loves aviation. He is currently an Aerospace Engineering student and a flight instructor. Buy him Phở and he will give you a direct to your destination!</p>
        </div>
      </div>

        <div class="col- card staff-card">
        <img class="card-img-top" width="286" src="{{ asset('images/ACCVCL4.jfif')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Amos Ng<br>ACCVCL5 - Facilities Director</h5>
          <p class="card-text">Hailing from Singapore, he likes to dabble his time in watching anime, reading manga, and keeping up to date with the latest news. He's currently serving his National Service, in the Air Force no less! In the vACC, he is responsible for keeping the sector file up to date, and also assists to develop the lovely website you are looking at now! Say hello if you see him on the network, he won't bite, probably...</p>
        </div>
      </div>

    </div>
    <div class="row">

    

      <div class="col- card staff-card">
        <img class="card-img-top" width="286" src="{{ asset('images/ACCVCL7.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Duc Nguyen<br>ACCVCL5A - Facilities Deputy Director</h5>
          <p class="card-text">Hello. I’m Duc from Hanoi. Just a 16 year-old boy and I love to fly and have a dream to become a pilot. I’m here to help our handsome ACCVCL 4. If you come to Hanoi, give me a call (I’ll bring you around, trust me)
<br><i>PS: I have no girl friend… Let me know if u love me…….. (jk)</i>
</p>
        </div>
      </div>
<div class="col- card staff-card">
        <img class="card-img-top" width="286" src="{{ asset('images/ACCVCL10.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Hyeonseok Lee<br>ACCVCL10 - Webmaster</h5>
          <p class="card-text">Hello, I'm from Korea and I'm an aviation enthusiast who loves flying and ATC. I will develop and maintain the website and Discord bot for VCLvACC. If you encounter any errors with the website or Discord bot, please contact us anytime. If you see me on the network, say Hello!
</p>
        </div>
      </div>
  </div>
  </div>
</div>

@endsection
