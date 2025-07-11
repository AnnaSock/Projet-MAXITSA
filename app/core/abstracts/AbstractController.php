<?php
namespace App\Core\Abstracts;
abstract class AbstractController{

        protected $session;
        protected string $layout;
        // public function __construct(){
        //     $this->layout="base.layout.php";
        // }
        public abstract function index();
        public abstract function create();
        public abstract function show();
        public abstract function edit();
        public abstract function destroy();
        public abstract function store();

        // $data aussi pour renderHtml
        public  function renderHtml(string $view){
            ob_start();
            require_once "../templates/$view";
            // $contentForLayout=ob_get_clean();
            // require_once "../template/layout/$this->layout";
        }

}