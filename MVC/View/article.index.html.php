<!DOCTYPE html>
<html>
    <head>
        <title>Article\Index</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>Article\Index</p>
        <section>
            <article>
                <?php
                foreach ($allArticles as $article) {
                    echo '<p>' . $article['title'] . ' // ' . $article['content'] . ' => ' . $article['date'] . '<p>';
                }
                ?>
            </article>

        </section>

    </body>
</html>
