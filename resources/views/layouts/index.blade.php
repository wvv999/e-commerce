<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield("title")</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"><img src="/icon.png"></a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <ul class="d-flex">
            @guest
                <li><a href="/login"><i class="ion-android-person"></i></a></li>
            @endguest
            @auth
                <li><a href="/list"><i class="ion-bag"></i></a></li>
                <li><a href="/car"><i class="ion-ios-cart"></i></a></li>
                <li><a href="/create"><i class="ion-social-usd"></i></a></li>
                <li><a href="/profile"><i class="ion-android-person"></i></a></li>
            @endauth
            
          </ul>
        </div>
        
    </nav>
    <div class="container-md p-5">

        @yield("content")
    </div>
</body>
</html>