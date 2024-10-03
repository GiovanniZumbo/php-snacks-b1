<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],

    '23/05/2019' => [
        [
            'title' => 'Post 7',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 7'
        ],
        [
            'title' => 'Post 8',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 8'
        ],
        [
            'title' => 'Post 9',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 9'
        ]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <div class="container">
        <div>
            <ul>
                <?php foreach ($posts as $day => $postInDay) { ?>
                    <h3> Giorno: <?= $day ?> </h3>
                    <ul>
                        <?php foreach ($postInDay as $post) { ?>
                            <li> Titolo: <?= $post['title']; ?> </li>
                            <li> Autore: <?= $post['author']; ?></li>
                            <li> Testo: <?= $post['text']; ?></li>
                            <hr>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </ul>
        </div>
    </div>

</body>

</html>