<?php

class RegisterController extends Controller {
    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];

            $model = $this->model('Registration');
            $model->save($name, $email);

            echo json_encode(['success' => true]);
        }
    }
}
