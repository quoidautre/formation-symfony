<h1>Category::Index</h1>
<section>
    <table class="table">
        <?php foreach ($category as $cat): ?> 
            <tr>
                <td>
                    <?php echo $cat->getId(); ?>
                <td>
                <td>
                    <a href="<?php echo \Lib\Application::WEB_ROOT; ?>?module=catalog&action=listcategory&id=<?php echo $cat->getId(); ?>">
                        <?php echo $cat->getTitle(); ?>
                    </a>
                <td>
            </tr>

        <?php endforeach; ?>
    </table>
</section>