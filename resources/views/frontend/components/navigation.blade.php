<nav class="navbar navbar-expand-xl">
    <a class="navbar-brand" href="/">
    <img class="img-fluid" src="{{asset('imgs/logo.png')}}" alt="Logo of {{env('APP_NAME')}}">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <?php 
          $nav_items = [
           "know-christ"  =>  "Know Christ",
           "persecution-of-christians"  =>  "Perecutions of Christians",
           "donate-to-fight-christian-discrimination"  =>  "Donate to Fight Christian Persecution"
          ]  
        ?>
        @foreach ($nav_items as $route_path => $nav_item)
          <li class='nav-item {{Request::path() === $route_path ? "active" : "" }}'>
             <a class="nav-link" href="{{$route_path}}">{{$nav_item}}</a>
          </li>
        @endforeach

      </ul>

    </div>
  </nav>