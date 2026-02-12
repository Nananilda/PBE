<?php
    require_once __DIR__ . '/../models/Usuario.php';
    class UsuarioController {
        private $model;
        public function __construct(){
            $this->model = new Usuario();
        }
        public function listar(){
            $usuarios = $this->model->listar();
            include 'views/listar.php';
        }
        public function criar(){
            include 'views/criar.php';
        }
        public function salvar($nome,$email){
            $this->model->criar($nome, $email);
            header("Location: index.php");
        }
        public function editar($id){
            $usuario = $this->model->buscar($id);
            include 'views/editar.php';
        }
        public function atualizar($id, $nome, $email){
            $this->model->atualizar($id, $nome, $email);
            header("Location: index.php");
        }
        public function excluir($id){
            $this->model->excluir($id);
            header("Location: index.php");
        }
    }