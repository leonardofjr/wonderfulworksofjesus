<html>
    <head>
        <title>@yield('title')</title>
        <meta name="description" content="@yield('meta-description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <header>
            @include('frontend.components.navigation')
        </header>
        <main>
            <!-- Full Cover Page Image will be set according to the corresponding request -->
                @if (Request::is('/'))
                   <section class="full-size-image" style='background-image: url("/imgs/jesus-crucified.jpg");'>

                    <div class="center-content">
                        <h1>{{Route::currentRouteName()}}</h1>
                        <p>Do not fear what you are about to suffer. Behold, the devil is about to throw some of you into prison, that you may be tested, and for ten days you will have tribulation. Be faithful unto death, and I will give you the crown of life. <br>- Revelations 2:10</p>
                        <a href="/donate-to-fight-christian-discrimination"><button class="btn btn-primary">Donate to Fight Christian Discrimination</button></a>
                    </div>
                @elseif(Request::is('know-christ'))
                      <section class="full-size-image" style='background-image: url("/imgs/jesus-whipped.jpg");'>

                     <div class="center-content">
                         <h1>{{Route::currentRouteName()}}</h1>
                         <p>Blessed are ye, when men shall revile you, and persecute you, and shall say all manner of evil against you falsely, for my sake. <br>- Matthew 5: 11</p>
                     </div>
                @elseif(Request::is('persecution-of-christians'))
                      <section class="full-size-image" style='background-image: url("/imgs/christian-discriminization.jpg");'>

                     <div class="center-content">
                         <h1>{{Route::currentRouteName()}}</h1>
                         <p>I saw underneath the altar the souls of those who had been slain because of the word of God, and because of the testimony which they had maintained. <br>– Revelation 6:9</p>
                     </div>
                @elseif(Request::is('donate-to-fight-christian-discrimination'))
                      <section class="full-size-image" style='background-image: url("/imgs/christian-arrested.jpg");'>

                     <div class="center-content">
                         <h1>{{Route::currentRouteName()}}</h1>
                         <p>And you will be hated by all for my name's sake. But the one who endures to the end will be saved. <br>- Matthew 10:22</p>
                     </div>
                @endif
                <div class="image-overlay">
        
                </div>
            </section>
            <section class="content">
                @yield('content')
            </section>
        </main>
        <footer>
            @if (!Request::is('/'))
                <div class="footer-info text-center">
                    <small> Copyright &copy; 2018 Wonderful Works Of Jesus</small>
                </div>
            @endif
        </footer>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>