<?php
namespace app\repositories;
use app\database\ConnectionFactory;

class AnimalRepository {
    private $conexao;

    public function __construct() {
        $this->conexao = ConnectionFactory::getConnection();
    }

    public function listarTodos() {
        $sql = "SELECT * FROM animais";
        return $this->conexao->query($sql)->fetchAll();
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM animais WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function buscarDuplicado($nome, $especie) {
        $sql = "SELECT id FROM animais WHERE nome = :nome AND especie = :especie";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':especie', $especie);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function salvar($a) {
        $sql = "INSERT INTO animais (nome, especie, raca, sexo, idade, porte, historico_saude, castrado, status) 
                VALUES (:nome, :especie, :raca, :sexo, :idade, :porte, :historico_saude, :castrado, :status)";
        $stmt = $this->conexao->prepare($sql);
        return $this->vincularCampos($stmt, $a)->execute();
    }

    public function atualizar($a) {
        $sql = "UPDATE animais SET nome=:nome, especie=:especie, raca=:raca, sexo=:sexo, idade=:idade, 
                porte=:porte, historico_saude=:historico_saude, castrado=:castrado, status=:status WHERE id=:id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $a->id);
        return $this->vincularCampos($stmt, $a)->execute();
    }

    public function excluir($id) {
        $stmt = $this->conexao->prepare("DELETE FROM animais WHERE id = :id");
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    private function vincularCampos($stmt, $a) {
        $stmt->bindValue(':nome', $a->nome);
        $stmt->bindValue(':especie', $a->especie);
        $stmt->bindValue(':raca', $a->raca);
        $stmt->bindValue(':sexo', $a->sexo);
        $stmt->bindValue(':idade', $a->idade);
        $stmt->bindValue(':porte', $a->porte);
        $stmt->bindValue(':historico_saude', $a->historico_saude);
        $stmt->bindValue(':castrado', $a->castrado);
        $stmt->bindValue(':status', $a->status);
        return $stmt;
    }
}