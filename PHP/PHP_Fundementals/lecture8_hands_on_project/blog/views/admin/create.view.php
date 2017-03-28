<h1>Create A New Post</h1>

<form class="" action="" method="post">
    <ul>
        <li>
            <label for="title">Title: </label>
            <input type="text" name="title" id="title">
        </li>
        <li>
            <label for="body">Body: </label>
            <textarea name="body" id="body"></textarea>
        </li>
        <li>
            <input type="submit" name="" value="Create Post">
        </li>

        <?php if(isset($status)): ?>
            <p> <?= $status; ?> </p>
        <?php endif; ?>

    </ul>
</form>
