// Create a new PHP file (e.g., todo.php)
$tasks = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $_POST['task'];
    array_push($tasks, $task);
}
?>
<form method="POST" action="">
    <input type="text" name="task" placeholder="Enter task">
    <button type="submit">Add Task</button>
</form>
<ul>
    <?php foreach ($tasks as $task) { ?>
        <li><?php echo htmlspecialchars($task); ?></li>
    <?php } ?>
</ul>