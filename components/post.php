
<div class="row justify-content-center">
    <div class="col-md-10 blog-main mt-5">
        <div class="blog-post">
            <h1 class="blog-post-title"><?= decode($_GET['nombre']) ?></h1>
            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

            <p><?= show_post($_GET['nombre'])?></p>
        </div>
        <!-- /.blog-post -->

    </div>
    <!-- /.blog-main -->
</div>