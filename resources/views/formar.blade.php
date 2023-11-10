<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firma s.r.o.</title>
    <script>
        function presmeruj() {
            window.location.href = '/formular'; 
        }
    </script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: left;
            padding: 20px;
            background-color: #f8f8f8;
        }
        .content {
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            font-size: 2em;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h3>Firma s.r.o.</h3>
        <div class="login">
            <a href="login" class="btn btn-primary"> Prihlásenie</a>

            <a href="register" class="btn btn-primary"> Registracia</a>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="content">
                    <h1>Pred nahlasenim sa musite prihlasit albo si vytvorit konto</h1>

                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Vaše meno a priezvisko">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Váš email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="tenant_name" placeholder="Nazov firmy pre ktoru pracujete">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Zadajte heslo pod ktorym sa budete prihlasovat">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Zopakujte prosim svoje heslo">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="suhlas" id="suhlas">
                                <label class="form-check-label" for="suhlas">Súhlasím s vytvorenim účtu a spracovaním osobných údajov</label>
                            </div>
                        </div>
                        <button type="submit" onclick="presmeruj()" class="btn btn-primary">Odoslať formulár </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Pridaný Bootstrap JS a Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>