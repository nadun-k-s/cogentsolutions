<?php
class Registration {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function save($data)
    {
        $sql = "INSERT INTO registrationdetails 
                (first_name, last_name, job_title, company, phone, email, company_website_URL)
                VALUES (:first_name, :last_name, :job_title, :company, :phone, :email, :company_website_URL)";

        $this->db->query($sql);

        $this->db->execute([
            ':first_name' => $data['first_name'],
            ':last_name' => $data['last_name'],
            ':job_title' => $data['job_title'],
            ':company' => $data['company'],
            ':phone' => $data['phone'],
            ':email' => $data['email'],
            ':company_website_URL' => $data['company_website_URL'],
        ]);
    }
}
