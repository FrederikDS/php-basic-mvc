<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Simple Home Page</title>
  </head>
  <body class="bg-dark">
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-4 col-lg-4 col-sm">
              <form action="/userprofile/index/" method="post" class="border rounded p-4 bg-light">
                <label for="username" class="contol-label">User Name</label>
                <div class="form-group input-group">
                  <input type="text" class="form-control" id="username"  name="userName" placeholder="username" required>
                </div>
                <label for="email" class="control-label">Email</label>
                <div class="form-group input-group">
                  <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
                </div>
                <label for="password" class="control-label">Password</label>
                <div class="form-group input-group">
                  <input type="password" class="form-control" id="password" name="password" placeholder="password" minlength="6" required>
                </div>
                <button class="btn btn-secondary" type="submit" name="submit">Sign Up</button>
              </form>
            </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
  </body>
</html>