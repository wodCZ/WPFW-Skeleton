<?php
$postPresenter = new KT_WP_Post_Base_Presenter($post);
$postModel = $postPresenter->getModel();
get_header();
?>   

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <main>
                <header>
                    <h1><?php echo $postModel->getTitle(); ?></h1>
                </header>
                <?php
                if ($postModel->hasExcrept()) {
                    echo $postModel->getExcerpt();
                }
                echo $postModel->getContent();
                ?>
            </main>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php
get_footer();
