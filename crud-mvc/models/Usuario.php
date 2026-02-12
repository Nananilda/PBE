<?php
    require_once __DIR__ . '/../app/config/conexao.php';
    class Usuario{
        public function listar(){
            global $pdo;
            return $pdo->query("SELECT * FROM usuarios")->fetchAll(PDO::FETCH_ASSOC);
        }
        public function criar($nome, $email){
            global $pdo;
            $stmt = $pdo->prepare("INSERT INTO usuarios (nome,email) VALUES (?,?)");
            return $stmt->execute([$nome, $email]);
        }
        public function buscar($id){
            global $pdo;
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id=?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public function atualizar($id, $nome, $email){
            global $pdo;
            $stmt = $pdo->prepare("UPDATE usuarios SET nome=?, email=? WHERE id=?");
            return $stmt->execute([$nome, $email, $id]);
        }
        public function excluir($id){
            global $pdo;
            $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id=?");
            return $stmt->execute([$id]);
        }
    }

