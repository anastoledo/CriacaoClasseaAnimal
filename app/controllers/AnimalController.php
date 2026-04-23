<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Animal;
use app\services\AnimalService;

class AnimalController extends Controller {
    private $service;

    public function __construct() {
        $this->service = new AnimalService();
    }

    
    public function index() {
        $data['animais'] = $this->service->listar();
        $this->view('animais/animal_list', $data);
    }

    
    public function visualizar() {
        $data['animal'] = $this->service->buscar($_GET['id']);
        $this->view('animais/animal_view', $data);
    }

    
    public function cadastrar() {
        $this->view('animais/animal_create');
    }

    public function salvar() {
        if (empty($_POST['nome']) || empty($_POST['especie'])) {
            $data['erro'] = "Nome e espécie são obrigatórios.";
            $this->view('animais/animal_create', $data);
            return;
        }
        $animal = new Animal($_POST);
        if ($this->service->criar($animal)) {
            $this->redirect(URL_BASE . '/animais');
        } else {
            $data['erro'] = "Erro: Este animal já está cadastrado!";
            $this->view('animais/animal_create', $data);
        }
    }

    public function editar() {
        $data['animal'] = $this->service->buscar($_GET['id']);
        $this->view('animais/animal_edit', $data);
    }

    public function atualizar() {
        if (empty($_POST['nome']) || empty($_POST['especie'])) {
            $data['erro'] = "Nome e espécie são obrigatórios.";
            $data['animal'] = $_POST; // to refill form
            $this->view('animais/animal_edit', $data);
            return;
        }
        $animal = new Animal($_POST);
        $this->service->atualizar($animal);
        $this->redirect(URL_BASE . '/animais');
    }

    public function excluir() {
        $animal = $this->service->buscar($_GET['id']);
        if ($animal['status'] == 'adotado') {
            $data['erro'] = "Erro: Não é possível excluir um animal adotado.";
            $data['animais'] = $this->service->listar();
            $this->view('animais/animal_list', $data);
        } else {
            $this->service->deletar($_GET['id']);
            $this->redirect(URL_BASE . '/animais');
        }
    }
}