<html>
    <head>
        @include('master.css')
        <style>
            .nav-link-space{
                /* font-weight:400; */
                color:black;
                text-decoration:none;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light z-depth-0">
            <div class="container">
                <a class="navbar-brand" href="#" style="font-weight:600">
                    SKP<span class="deep-orange-text">R</span>
                </a>
                <div>
                    <a class="mr-5 home nav-link-space" href="/">Home</a>
                    <a class="mr-3 services nav-link-space" href="/services">Services</a>
                    <a class="ml-3" style="font-weight:400">About</a>
                    <a class="ml-5" style='font-weight:400'>Contact Us</a>
                </div>
                <div>
                    <button type="button" class="btn btn-md deep-orange text-white z-depth-0 rounded-pill text-capitalize" style="font-weight:500" onclick="location.href='{{ route('looking_for_pr') }}';">
                        Looking for a PR ? <i class="fas fa-arrow-right ml-3"></i>
                    </button>
                </div>
            </div>
        </nav>
        @yield('content')
        @include('master.footer')



        <script>
            var pathname = window.location.pathname;
            if(pathname == '/') {
                $('.home').addClass('nav-active');
                $('.home').addClass('deep-orange-text');
            }
            else if(pathname == '/services') {
                $('.services').addClass('nav-active');
                $('.services').addClass('deep-orange-text');
            }
        </script>
        @include('master.js')
    </body>
</html>