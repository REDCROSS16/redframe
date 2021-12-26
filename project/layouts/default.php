<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/project/webroot/style.css">
</head>
<body>
<header>
    <a href="/">Main</a>
    <a href="#">Special</a>
    <a href="#">Training</a>
    <a href="#">Login</a>
</header>
<div class="container">
    <aside class="sidebar left">
        левый сайдбар
    </aside>
    <main>
        <?= $content ?>
    </main>
    <aside class="sidebar right">
        правый сайдбар
    </aside>
</div>
<footer>
    <p>
        <span>TM Alex_RED_Cross </span><span id="current_year">2021</span>
    </p>
</footer>
</body>
</html>