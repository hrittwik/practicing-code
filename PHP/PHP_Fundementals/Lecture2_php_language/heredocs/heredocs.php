<?php

    $post = [
        'author'        => 'Hrittwik',
        'title'         => 'My awesome post',
        'body'          => 'here is the body',
        'publish-date'  => '18-02-2017'
    ];


    extract($post);
    // $email = "<h1> {$post['title']} </h1>";
    // $email .= "<p>By: {$post['author']} </p>";
    // $email .= "<div> {$post['body']} </div>";

    $email = <<<EOT
        <h1> $title </h1>
        <p>By: $author </p>

        <div>
            $body
        </div>
EOT;

    echo $email;
?>
