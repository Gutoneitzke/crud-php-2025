<?php
require_once __DIR__ . '/../models/User.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        $users = $this->userModel->getAll();
        require_once __DIR__ . '/../views/index.php';
    }

    public function show($id) {
        $user = $this->userModel->get($id);
        require_once __DIR__ . '/../views/show.php';
    }

    public function create() {
        require_once __DIR__ . '/../views/create.php';
    }

    public function store($data) {
        $this->userModel->create($data);
        header("Location: /");
    }

    public function edit($id) {
        $user = $this->userModel->get($id);
        require_once __DIR__ . '/../views/edit.php';
    }

    public function update($id, $data) {
        $this->userModel->update($id, $data);
        header("Location: /");
    }

    public function destroy($id) {
        $this->userModel->delete($id);
        header("Location: /");
    }
}