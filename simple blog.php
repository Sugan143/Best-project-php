// Create a new PHP file (e.g., blog.php)
$posts = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $posts[] = array('title' => $title, 'content' => $content);
}
?>
<form method="POST" action="">
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="content" placeholder="Content" required></textarea>
    <button type="submit">Post</button>
</form>
<h2>Blog Posts</h2>
<?php foreach ($posts as $post) { ?>
    <h3><?php echo htmlspecialchars($post['title']); ?></h3>
    <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
<?php } ?>