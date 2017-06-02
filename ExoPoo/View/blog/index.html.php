<h1>Blog::Index</h1>
<section>
    <table class="table">
        <?php foreach ($article as $art): ?> 
            <tr>
                <td>
                    <?php echo $art->getId(); ?>
                <td>
                <td>
                    <a href="<?php echo \Lib\Application::WEB_ROOT; ?>?module=blog&action=detail&id=<?php echo $art->getId(); ?>">
                        <?php echo $art->getTitle(); ?>
                    </a>
                <td>
                <td>
                    <?php echo $art->getContent(); ?>
                <td>
                <td>
                    <?php echo date('d/m/Y H:i:s', strtotime($art->getDate())); ?>
                <td>
                <td>
                    <?php echo '<img src="/images/' . $art->getImage() . '" class="img-responsive" alt="" class="img-rounded" width="100" height="100">'; ?>
                <td>
            </tr>

        <?php endforeach; ?>
    </table>
</section>