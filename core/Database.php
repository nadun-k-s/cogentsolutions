<?php
require_once __DIR__ . '/../config/config.php';

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    protected $dbh;
    protected $stmt;

    public function __construct() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $this->dbh = new PDO($dsn, $this->user, $this->pass);
    }

    public function query($sql) {
        $this->stmt = $this->dbh->prepare($sql);
    }

    public function execute($params = []) {
        return $this->stmt->execute($params);
    }

    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
