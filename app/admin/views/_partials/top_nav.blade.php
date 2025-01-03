@if(AdminAuth::isLogged())
    <nav class="navbar navbar-top navbar-expand navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-brand">
                <a class="logo" href="{{ admin_url('dashboard') }}">
                    <i class="logo-svg">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                             width="32.000000pt" height="32.000000pt" viewBox="0 0 32.000000 32.000000"
                             preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,32.000000) scale(0.100000,-0.100000)"
                               fill="#000000" stroke="none">
                                <path d="M304 160 c0 -74 1 -105 3 -67 2 37 2 97 0 135 -2 37 -3 6 -3 -68z"/>
                                <path d="M120 145 l0 -105 59 0 c75 0 91 14 91 81 0 31 -4 48 -10 44 -5 -3
-10 -19 -10 -35 0 -51 -9 -60 -56 -60 l-44 0 0 75 c0 65 2 75 18 75 46 -1 57
-46 14 -65 -22 -10 -25 -26 -6 -32 6 -2 23 6 37 17 54 43 21 110 -53 110 l-40
0 0 -105z"/>
                                <path d="M67 187 c-4 -15 -3 -36 3 -47 5 -10 10 -31 10 -45 0 -20 -4 -26 -17
-23 -14 2 -19 15 -21 56 -4 67 -26 66 -30 -2 -4 -55 16 -86 54 -86 19 0 23 6
27 53 3 28 8 68 11 87 3 19 3 27 0 18 -3 -10 -9 -18 -14 -18 -5 0 -10 8 -12
18 -3 12 -6 9 -11 -11z"/>
                            </g>
                        </svg>
                    </i>
                </a>
            </div>

            <div class="page-title">
                <span>{!! Template::getHeading() !!}</span>
            </div>

            <div class="navbar navbar-right">
                <button
                    type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navSidebar"
                    aria-controls="navSidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                {!! $this->widgets['mainmenu']->render() !!}
            </div>
        </div>
    </nav>
@endif
