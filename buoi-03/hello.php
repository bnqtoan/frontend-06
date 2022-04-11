<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $data = [
            [
                'title' => 'Hello PHP',
                'summary' => 'Làm quen PHP'
            ],
            [
                'title' => 'Hello CSS',
                'summary' => 'Làm quen CSS'
            ]
        ];
    ?>

        <ul>
            <?php foreach($data as $item): ?>
                <li><?php echo $item['title']; ?></li>
            <?php endforeach; ?>
        </ul>

</body>
</html>