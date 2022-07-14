<!DOCTYPE html>
<html lang="en">

<head>
<title>Restauran</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>

<body>

        <div id="page-content-wrapper">
            <nav class="navbar py-1 px-3" id="navbar">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left text-white fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="text-white fs-2 m-0">Restaurant</h2>
                </div>
                <div class="ms-auto">
                    <a href="{{ route('signout') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Logout</a>
                </div>
            </nav>
            <div class="d-flex" id="wrapper">
                 @include('layout.section.sidebar')

                <div class="row w-100 p-5">
                    <div class="col-12">
                     @yield('content')
                    </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
</html>