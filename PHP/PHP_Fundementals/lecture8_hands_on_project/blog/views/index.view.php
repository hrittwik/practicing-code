<h1>The Blog By <?= $name; ?> </h1>

<?php foreach ($posts as $post): ?>
    <article class="">
        <h2>
            <a href="single.php?id=<?= $post['id']; ?> ">
                <?= $post['title']; ?>
            </a>
        </h2>
        <div class="body">
            <?= $post['body']; ?>
        </div>
    </article>
<?php endforeach; ?>
