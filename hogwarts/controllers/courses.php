<?php

    class CoursesController
    {
        private $db;
        
        public function __construct($db)
        {
            $this->db = $db;
        }
        public function getCourses()
        {
            if (!isset($_SESSION["username"])) {
                header("Location: ../views/login.view.php");
                exit;
            }
            $header = 'Courses';
            $courses = $this->db->query('SELECT * FROM courses')->fetchAll(PDO::FETCH_OBJ);
            return require 'views/courses.view.php';
        }
        public function addCourse($id)
        {
            return require 'views/course.view.php';
        }
    }