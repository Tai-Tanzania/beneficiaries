<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }}</title>

    <!-- Primary Meta Tags -->
<meta name="title" content="Tai - Beneficiaries">
<meta name="description" content="Tai - Site for Tai">
{{-- 
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://uideck.com/play/">
<meta property="og:title" content="Play - Free Open Source HTML Bootstrap Template by UIdeck">
<meta property="og:description" content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team">
<meta property="og:image" content="https://uideck.com/wp-content/uploads/2021/09/play-meta-bs.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://uideck.com/play/">
<meta property="twitter:title" content="Play - Free Open Source HTML Bootstrap Template by UIdeck">
<meta property="twitter:description" content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team">
<meta property="twitter:image" content="https://uideck.com/wp-content/uploads/2021/09/play-meta-bs.jpg"> --}}

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="{{ asset('assets/images/tai-favicon.png') }}"
      type="image/svg"
    />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ud-styles.css') }}" />
    <style>
        body{
            position: relative;
            z-index: 1;
            padding-bottom: 100px;   
        }

        body::before{
            background-image: url({{ url('soaring-eagles-faint.jpeg') }});
            background-size: cover;
            background-repeat: repeat;
            content: "";
            position: absolute;
            top: 0; 
            left: 0;
            width: 100%; 
            height: 100%;  
            opacity: .7; 
            z-index: -1;
        }

        .circle{
            border-radius:100px;
            width:100px;
            height:100px;
            text-align:center;
        }

      .lni {
          color:white;
          line-height:100px;
      }

    </style>
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
              <img src="{{ asset('assets/images/Tai Logo - white.png') }}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="/">
                    Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="/videos">
                    Watch
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="/articles">
                    Learn
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="/characters">
                    Characters
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white" href="#">
                    About
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    {{ $slot }}

    <!-- ====== All Javascript Files ====== -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
  </body>
</html>
