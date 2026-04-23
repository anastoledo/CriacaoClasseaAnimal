<?php
namespace app\services;
use app\repositories\AnimalRepository;

class AnimalService {
    private $repo;

    public function __construct() {
        $this->repo = new AnimalRepository();
    }

    public function listar() { return $this->repo->listarTodos(); }
    public function buscar($id) { return $this->repo->buscarPorId($id); }

    public function criar($animal) {
        return $this->repo->salvar($animal);
    }

    public function atualizar($animal) { return $this->repo->atualizar($animal); }
    public function deletar($id) { return $this->repo->excluir($id); }
}