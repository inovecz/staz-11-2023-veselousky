<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firma s.r.o.</title>
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
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="content">
                    <h1>Formulár nahlasenia</h1>
                    <form method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input type="text" class="form-control" name="messague_subject" placeholder="Uvedte predmet nahlasenia">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="messague_specs" placeholder="Uvedte blizsi popis nahlasenia">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="messague_attachment" placeholder="Tu mozte prilozit subor nahlasenia">
                    </div>
                    <button type="submit" class="btn btn-primary">Odoslat hlasenie</button>
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
</html><?php /**PATH C:\Users\PC\erasmus\whistleblower\whistleblower\resources\views/clients/nahlasenie.blade.php ENDPATH**/ ?>