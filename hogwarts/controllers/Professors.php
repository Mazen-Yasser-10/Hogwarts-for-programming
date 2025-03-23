<?php
// require 'controllers/CoursesController.php';
class ProfessorsController extends CoursesController
{
    protected $db;
    public $header = 'Professors';
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function addProfessor()
    {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            http_response_code(405);
            echo "Method Not Allowed";
            return;
        }
        $email = trim($_POST["email"]);
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        $role = trim($_POST["role"]);
        if (empty($email) || empty($username) || empty($password) || empty($role)) {
            $_SESSION["error"] = "All fields are required!";
            header("Location: ../views/addProf.view.php");
            exit;
        }
        $stmt = $this->db->prepare("SELECT id FROM professors WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $_SESSION["error"] = "Username already exists!";
            header("Location: ../views/addProf.view.php");
            exit;
        }

        $stmt = $this->db->prepare("INSERT INTO professors (username,email,hashedPassword,role) VALUES (?,?,?,?)");
        $stmt->execute([$username, $email, password_hash($password, PASSWORD_DEFAULT), $role]);
        $_SESSION["username"] = $username;
        header("Location: ../views/login.view.php");
        exit;
    }
    public function updateCourseByAdmin($id)
    {
        if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "student") {
            $this->updateCourse($id);
        } else {
            http_response_code(403);
            echo "Forbidden";
        }
    }
}
