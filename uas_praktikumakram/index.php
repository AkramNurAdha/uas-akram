<?php
// File: index.php

require_once '../src/Post.php';

$postModel = new Post();
$posts = $postModel->getPosts(); // Mendapatkan semua artikel

include '../templates/header.php';
?>

<div class="container">
    <h1>Most Recent Posts</h1>
    <div class="posts">
        <?php foreach ($posts as $post): ?>
            <h2><?php echo $post['title']; ?></h2>
            <p><?php echo substr($post['content'], 0, 100) . '...'; ?></p>
            <a href="post.php?id=<?php echo $post['id']; ?>">Read More</a>
        <?php endforeach; ?>
    </div>
</div>

<?php include '../templates/footer.php'; ?>
