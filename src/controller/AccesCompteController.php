<?php
namespace Src\Controller;

use App\Core\Abstracts\AbstractController;



class AccesCompteController extends AbstractController{
     public  function index() {
               $this->renderHtml('accesCompte.html.php');
        }
        public  function create(){}
        public  function show(){}
        public  function edit(){}
        public  function destroy(){}
        public  function store(){}

}