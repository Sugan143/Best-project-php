// Create a new PHP file (e.g., login.php)
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Hardcoded credentials for demonstration
    if ($username == "admin" && $password == "password") {
        $_SESSION['loggedin'] = true;
        header("Location: welcome.php");
    } else {
        echo "Invalid credentials.";
    }
}
?>
<form method="POST" action="">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>