<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body style="background:#CDCDCD">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-6 col-md-3 mt-5">
      <form class="form-container" action="{{ route('login') }}" method="POST">
        @csrf
        <img src="img/bg2.jpg" class="mx-auto d-block">
        <center><h1>LOGIN</h1></center>
          <div class="form-group">
            <input class="form-control mb-3" placeholder="Email" type="text" name="email" autofocus required>
          </div>
          <div class="form-group">
            <input class="form-control mb-3" placeholder="Password" type="password" name="password" required>
          </div>
          <button type="submit" name="login" class="btn btn-lg btn-white fw-bold col-md-12" style="background:#6D7973">Login</button>           
      </form>  
    </div>   
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>