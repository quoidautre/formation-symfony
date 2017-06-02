<h1>Blog::Detail</h1>
<section>
    <p>  <?php echo $article->getId(); ?></p>

    <h4>  <?php echo $article->getTitle(); ?></h4> 

    <p  class="lead"> <?php echo $article->getContent(); ?></p> 

    <p>  <?php echo date('d/m/Y H:i:s', strtotime($article->getDate())); ?></p> 

    <p><?php echo '<img src="/images/' . $article->getImage() . '" class="img-responsive" alt="" class="img-rounded" width="100" height="100">'; ?></p> 

</section>