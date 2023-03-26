<header class="miri-ui-kit-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-on-scroll">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#miriUiKitNavbar"
                    aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="miriUiKitNavbar">
                    <div class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">About Us</span></a>
                            <div class="dropdown-menu dropdown-menu-right ">
                                <a href="{{route('staff')}}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-supervisor"></i>Staff</a>
                                <a href="{{route('roster')}}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-format-list-numbered"></i>ATC Roster</a>
                                <a href="{{route('joinus')}}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-tie-hat"></i>Join Us</a>
                             </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Airports Information</span></a>
                            <div class="dropdown-menu dropdown-menu-right ">
                                <a href="{{route('charts')}}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-clipboard-outline"></i>Charts</a>
                                <a href="{{route('scenery')}}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-download"></i>Scenery</a>
                                <a href="https://vats.im/vcl/vvts_cue_card" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-clipboard-list-outline"></i>VVTS Cue Card</a>
                             </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="https://cc.vclvacc.net/">Control Center</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://training.vclvacc.net/">Moodle</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logo_pack')}}">Logo Pack</a>
                        </li>

                        <li class="nav-item">

                            <a class="nav-link nav-icon icon-fb" href="https://www.facebook.com/profile.php?id=100064327587089"><i class="mdi mdi-facebook-box"></i></a>

                            <a class="nav-link nav-icon icon-twitter" href="https://vats.im/vcl/discord"><i class="mdi mdi-discord"></i></a>
 
                            
                        </li>
            
                    </div>
                </div>
            </div>
        </nav>
        <div class="miri-ui-kit-header-content text-center text-white d-flex flex-column justify-content-center align-items-center header-text">
            <h1 class="display-3 text-white">Vietnam - Cambodia - Laos vACC</h1>
            <p class="h3 font-weight-light text-white">Home to Ho Chi Minh, Hanoi, Phnom Penh and Vientiane FIRs on VATSIM</p>
            </div>
    </header>
