<?php
    
    class DashboardController
    {
        private $db;
        public function __construct($db)
        {
            $this->db = $db;
        }
        public function getDashboard()
        {
            if (!isset($_SESSION["username"])) {
                header("Location: ../views/login.view.php");
                exit;
            }

            $header = 'Dashboard';
            $students = $this->db->query('SELECT * FROM students s 
                join Wands W ON s.wand_id = W.id 
                join Houses H ON s.house_id = H.id')->fetchAll(PDO::FETCH_OBJ);

            return require 'views/dashboard.view.php';
        }
    }