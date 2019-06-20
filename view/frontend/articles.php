
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
<div class="page_article">


    <div class="article">
    <section>
        <div class="ligne">
            <div class="col1">
                <h1>ARTICLES</h1>
            </div>
            <div class="col2">
            </div>
        </div>

        <div class="ligne-separatrice-titre">
        <h4 class="dernier_articles">Les derniers articles</h4>
        </div>
        <?php
            while ($data = $articles->fetch()) // $data = query des données depuis model.php
            {
        ?>
            <div class="ligne">
                <div class="col1"></div>
                <div class="col2"></div>
            </div>
                <div class="ligne">
                    <div class="col1">
                        <a href="index.php?action=article&id=<?= $data['id_article']?>"><h4 class="article_name"><?= $data['name'] ?></h4></a>
                        <h6><?= $data['category'] ?></h6>
                        <?= $data['description'] ?><br>
                        Le <?= $data['date'] ?>
                    </div>
                </div>
                <div class="ligne-separatrice-articles">
                </div>
            </section>
            
        <?php
            }
            $articles->closeCursor();
        ?>
        
    </div>
</div>
</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>