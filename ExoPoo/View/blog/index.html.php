<h1>Blog::Index</h1>
<section>
    <table class="table">
        <?php foreach ($article as $art): ?>        
            <?php
            echo '<tr>';
            echo '<td>';
            echo $art->getId();
            echo '<td>';
            echo '<td>';
            echo $art->getTitle();
            echo '<td>';
            echo '<td>';
            echo $art->getContent();
            echo '<td>';
            echo '<td>';
            echo date('d/m/Y H:i:s', strtotime($art->getDate()));
            echo '<td>';
            echo '<td>';
            echo '<img src="/images/' . $art->getImage() . '" class="img-responsive" alt="" class="img-rounded" width="100" height="100">';
            echo '<td>';
            echo '</tr>';
            ?>
        <?php endforeach; ?>
    </table>
</section>