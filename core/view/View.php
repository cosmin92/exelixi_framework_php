<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 21/01/2019
 * File: routes.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */

namespace exelixi\view;


class View
{
    private $layout;
    private $controller_name;

    public function __construct(string $controller_name)
    {
        $this->controller_name = str_replace("Controller","", $controller_name);
    }

    public function render($view, array $data = null)
    {
        if (!is_null($data)) {
            extract($data);
        }

        $view_path = ROOT . "app/views/" . $this->controller_name . "/";

        if (!file_exists($view_path . $view . '.php')) {
            if (ENV == DEVELOPMENT) {
                $title = "View Not Found!";
                $content = <<<HTML
<div class="content">
    <h4>How to fix?</h4>
    <p>
    Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.
</p>
</div>
HTML;
                require_once ROOT . "core/utilities/error.php";
                exit();
            } else {
                header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);
                exit();
            }
        }

        ob_start();
        require_once $view_path . $view . '.php';
        $yield = ob_get_clean();

        $layout_path = ROOT . "app/views/layouts/";
        if(!file_exists($layout_path . $this->layout . '.php')){
            if (ENV == DEVELOPMENT) {
                $title = "Layout Not Found!";
                $content = <<<HTML
<div class="content">
    <h4>How to fix?</h4>
    <p>
    Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri trasferibili “Letraset”, che contenevano passaggi del Lorem Ipsum, e più recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem Ipsum.
</p>
</div>
HTML;
                require_once ROOT . "core/utilities/error.php";
                exit();
            } else {
                header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found", true, 404);
                exit();
            }
        }
        require_once $layout_path . $this->layout . '.php';
    }

    /**
     * @param mixed $layout
     */
    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }
}