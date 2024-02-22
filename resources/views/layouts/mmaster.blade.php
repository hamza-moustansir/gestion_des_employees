<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion des employes</title>
</head>
<link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
<link rel="stylesheet" href="{{asset("css/theme.css")}}">
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url("accueil")}}">ABHOER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">empl</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url("point")}}">pointage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url("annonce")}}">annoncements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url("reunion")}}">reunion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url("conge")}}">congé</a>
        </li>
      </ul>
      <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
    </div>
  </div>
</nav>   
@yield("content")
 <script src="{{asset("assets/css/bootstrap.min.js")}}"></script>
</body>
</html>