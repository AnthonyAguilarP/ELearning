<?php
    $navName=match ($pageName) {
        'index' => 'create-2',
        'wiki' => 'book-2',
        'wiki_article' => 'book-2',
        'wiki_create' => 'book-1',
        'courses' => 'create-4',
        default => '',
    };
    $navHref=match ($pageName) {
        'index' => '#',
        'wiki' => '"wiki_create.php"',
        'wiki_article' => '"wiki_create.php"',
        'wiki_create' => '"wiki.php"',
        'courses' => 'course_create.php',
        default => '',
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <?php echo styles ?>
</head>
<body>
    <header class="row">
        <div class="col-1 height center column">
            <div class="height-1 col center">
                <a href="index.php" class="text-decoration-1 c-1">
                    <h1>
                        E-learning
                    </h1>
                </a>
            </div>
            <div class="height-1 col center">
                <a href="index.php" class="text-decoration-1 c-1">
                    <h2>
                        Plataform
                    </h2>
                </a>
            </div>
        </div>
        <div class="col-2 height row">
            <form action="" class="col-1 height center">
                <img <?php getIcon('search-2.svg'); ?> alt="icon-search" class="icon-2">
                <input type="text" placeholder="search" class="col-4">
            </form>
            <div class="col-5 height center">
                <div class="icon-1 bg-1 border-radius-2 center">
                    <img <?php getIcon('error-1.svg'); ?> alt="" class="icon-2">
                </div>
            </div>
            <div class="col-5 height center">
                <a href=<?php echo $navHref; ?> >
                    <img <?php getIcon($navName.'.svg'); ?> alt="" class="icon-1">
                </a>
            </div>
            <div class="col-5 height center">
                <img <?php getIcon('setting-2.svg'); ?> alt="" class="icon-1">
            </div>
            <div class="col-3 height center"></div>
        </div>
    </header>
    <?php echo $pageContent; ?>
</body>
</html>