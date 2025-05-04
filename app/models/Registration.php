<?php
class Registration {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function save($name, $email) {
        $this->db->query("INSERT INTO registrations (name, email) VALUES (?, ?)");
        $this->db->execute([$name, $email]);
    }
}
