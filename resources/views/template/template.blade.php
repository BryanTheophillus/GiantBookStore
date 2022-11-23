{{-- Bryan Theophilllus -2401953966
Kelas LL01 --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/template.css')}}">
    <link rel="icon" type="image/png" href="{{ URL::to('/storage/image/Logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="body">
    <header>
        <div class="Head d-flex justify-content-center align-items-center">Giant Book Supplier</div>
        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Category</a>
                    <div class="dropdown-menu">
                        @foreach ($catagories as $catagory)
                            <a class="d-head dropdown-item" href="/{{$catagory->id}}">{{$catagory->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/publisher">Publiser</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="/contact">Contact</a>
                </li>
            </ul>
        </nav>
    </header>



    @yield('content')

    <footer>
        <div class="Foot d-flex justify-content-center align-items-center fixed-bottom" >
            <span>&copy; Giant Book Supplier 2022 <br> Bryan Theophillus - 2410953966</span>
        </div>
    </footer>
</body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
