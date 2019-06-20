<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
</head>
<body>
    <div class="page_article">
        <div class="article">
            <section>
                <div class="ligne">
                    <div class="col1">
                        <h4 class="article_name"><?= $article['name'] ?></h4></a>
                        <h6><?= $article['category'] ?></h6>
                        <?= $article['description'] ?><br>
                        Le <?= $article['date'] ?>
                    </div>
                    <div class="col2">
                        <img src="<?= $article['picture_url'] ?>" class="img_size" alt="">
                    </div>
                </div>
                <div class="ligne-separatrice-articles">
                </div>
            </section>
        </div> 
</div>
</body>
</html>