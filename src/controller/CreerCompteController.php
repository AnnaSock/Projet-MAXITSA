<?php
namespace Src\Controller;

use App\Core\Abstracts\AbstractController;

class CreerCompteController extends AbstractController{

    public  function index() {
               $this->renderHtml('creerCompte.html.php');
        }
        public  function create(){}
        public  function show(){}
        public  function edit(){}
        public  function destroy(){}
        public  function store(){}

}