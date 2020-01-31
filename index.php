<?php

/**
 * @param string $dir
 * @param string|null $filterRegExp
 * @return array
 */
function scanDirectory(string $dir, ?string $filterRegExp = null) : array
{
    $elements = scandir($dir);
    if (!$filterRegExp) {
        return $elements;
    }

    return array_filter($elements, function (string $item) use ($filterRegExp) : bool {
        return (bool)preg_match($filterRegExp, $item);
    });
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MainACAD Group 001</title>
</head>
<body>
    <h1>HELLO!</h1>
    <ul>
        <?php foreach (scanDirectory(__DIR__, '/^l\d{2}$/') as $directory) : ?>
        <li>
            <?= strtoupper($directory) ?>
            <ul>
                <?php foreach (scanDirectory(__DIR__ . "/{$directory}", '/.*\.php$/') as $file) : ?>
                <li><a href="<?= "/{$directory}/{$file}" ?>"><?= $file ?></a></li>
                <?php endforeach ?>
            </ul>
        </li>
        <?php endforeach ?>
    </ul>
</body>
</html>
