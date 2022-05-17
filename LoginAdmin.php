<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- <meta charset="UTF-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Login Admin</title>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 140px;margin-left:450px ">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                           <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">LOGIN ADMIN</h4>
                                    </div>
                                    <form action="TraitementLogin.php" method="post" class="user">
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp"  name="Email" placeholder="email"></div>
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="password" id="exampleInputPassword" name="motdepasse" placeholder="mot de Passe"></div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn btn-primary btn-block text-white btn-user" type="submit">Connecter</button>
                                    </form>
                                   
                                    
                                </div>
                            </div>
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>

