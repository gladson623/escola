<!DOCTYPE html>
        <html>
            
        <head>
            <title>Verificar</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
            <link rel="stylesheet" href="views/assets/css/login.css">
            <link rel="stylesheet" href="views/assets/css/message.css">
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
            <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="views/assets/js/form.js"></script>
            <script src="views/assets/js/utils.js"></script>
        </head>
        <body>
            <div class="container h-100">
                <div class="login_form_callback"> <?=flash();?></div>
                <div class="d-flex justify-content-center h-100" style="position: absolute;">
                    <div class="user_card">
                        <div class="d-flex justify-content-center">
                            <div class="brand_logo_container">
                                <img src="views/assets/images/logo.png" class="brand_logo" alt="Logo">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center form_container">
                            <form method="POST" action="<?= $router->route("auth.verify")?>">
                                <div class="input-group mb-2">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                                    </div>
                                    <input type="text" name="verify_code" class="form-control input_user" required placeholder="Código de verificação">
                                    <input type="hidden" name="email" value="<?= $user->Email; ?>">
                                </div>

                                <div class="d-flex justify-content-center mt-3 login_container">
                                     <button type="submit" name="button" class="btn login_btn btn-primary">Verificar</button>
                                </div>
                            </form>
                        </div>
                        
                        <div class="mt-4">
                            <div class="d-flex justify-content-center links">
                                Voltar? <a href="<?= $router->route("web.login")?>" class="ml-2">Entrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>