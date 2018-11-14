<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 10px;
            }

            .full-height {
                height: 100vh;
            }

            /* .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            } */

            /* .position-ref {
                position: relative;
            } */
            .top-left {
                position: absolute;
                top: 18px;
                left: 10px;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                margin-top: 70px;
            }

            .title {
                font-size: 44px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .link-table {
                width: 100%;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            @media (max-width: 768px) {
                
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                @auth
                    <div class="top-left links">
                        <a href="/submit">Submit</a>
                    </div>    
                @endauth
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <hr>
                <div class="title m-b-md">
                    Daily dose
                </div>

                <div class="links">
                    <table class="link-table" >
                        <tbody>
                            <tr>
                                @foreach ($links as $link)
                                    <td>
                                        <a href="{{$link->url}}">{{$link->title}}</a>
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                @foreach ($links as $link)
                                    <td>
                                        <p>
                                            {{$link->created_at}}
                                        </p>
                                    </td>
                                @endforeach                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
