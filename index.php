<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/img/icon-main.png" rel="shortcut icon">
    <title>DOLE X - DILEEP Monitoring System</title>

    

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>        
    
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>   
    <main class="form-signin w-100 h-50 m-auto">
        <div class=" card-login card" style="border-top-right-radius: 0%;border-bottom-left-radius:0%;"">
            <div class="card-header text-sz">
                <img class="img-header" src="assets/img/icon-main.png" alt="">
                DOLE X - DILEEP MONITORING SYSTEM
            </div>
            <div class="card-body">
                <form action="pages/pfo-dash-main.php" method="post">
                    <h5>Hello User!</h5>
                    <hr>
                    <div class="col-12">
                        <div class="col-12">
                            <label for="">Username</label>
                            <br>
                            <input class="form-control" style="border-top-right-radius: 0%;border-bottom-left-radius:0%;" type="text" placeholder="Input username">
                        </div>
                        <br>
                        <div class="col-12">
                            <label for="">Password:</label>
                            <br>
                            <input class="form-control" style="border-top-right-radius: 0%;border-bottom-left-radius:0%;" type="text" placeholder="input password">
                        </div>
                        <br>
                        <div class="col-12">
                            <input type="submit" class="btn form-control btn-primary btn-custom-login" style="border-top-right-radius: 0%;border-bottom-left-radius:0%;" value="Login">
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="card-footer text-center text-muted">
                all rights reserved c 2022
            </div>
        </div>
    </main>   
</body>
</html>