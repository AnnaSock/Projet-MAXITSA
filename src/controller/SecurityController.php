<?php


namespace Src\Controller;

use App\Core\Abstracts\AbstractController;




class SecurityController extends AbstractController     {

        public  function index() {
               $this->renderHtml('connexion.html.php');
        }

        public function login(){
                header('location: http://localhost:8000/dashboard');
        }
        public  function create(){}
        public  function show(){}
        public  function edit(){}
        public  function destroy(){}
        public  function store(){}



}