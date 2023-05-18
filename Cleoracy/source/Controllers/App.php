<?php

namespace Source\Controllers;
use Source\Models\User;
use stdClass;

class App extends Controller {

    protected $user;

    public function __construct($router) {
        
        parent::__construct($router);

        if(empty($_SESSION["user"]) || !$this->user = (new User())->findById($_SESSION["user"])) {
            unset($_SESSION["user"]);
            flash("error", "Acesso negado! Por favor logue-se.");

            $this->router->redirect("web.login");
    
        }

    }

    public function home(): void {
        $head = $this->seo->optimize("Bem vindo(a) {$this->user->Username} | ".site("name"), site("desc"), $this->router->route("app.home"), routeImage("Conta de {$this->user->Username}"))->render();
    
    
        echo $this->view->render("theme/home", [
            "head" => $head,
            "user" => $this->user
        ]);
    }

    public function logoff(): void {

        unset($_SESSION["user"]);

        $this->router->redirect("web.login");

    }

}