 <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>            
        </div>


        <a class="navbar-logo" >
              <img class="logo d-xs-block" >
              <h2 style="text-align: center;"><b>{{config('app.name')}}</b></h2>
            {{-- <img class="logo-mobile d-block d-xs-none" src="{{asset('img/carousel-1.jpg')}}">  --}}
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
            <span class="name">{{Auth::user()->first_name}}</span>
                    <span>
                        <img alt="Profile Picture" src="{{asset('img/logo.jpg')}}" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">                    
                    <a class="dropdown-item" href="{{url('settings')}}">Settings</a>
                    <a class="dropdown-item" href="{{url('logout')}} ">Sign out</a>
                </div>
            </div>
        </div>
    </nav>
