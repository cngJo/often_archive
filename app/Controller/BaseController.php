<?php

namespace App\Controller;

use Base;
use Prefab;
use Template;

class BaseController extends Prefab
{

    /**
     * @var Base
     */
    protected $f3;

    /**
     * BaseController constructor
     */
    public function __construct()
    {
        $this->f3 = Base::instance();
    }

    /**
     * Render a template
     */
    public function render(string $templateName) {
        $this->f3->set("GUI.template", $templateName);
        return Template::instance()->render("base.html.php");
    }

}