<?php $referencesPresenter = new KT_ZZZ_References_Presenter(); ?>

<div class="row">
    <section id="references" class="col-md-12 col-lg-12">
        <header><h2><?php _e("Reference", ZZZ_DOMAIN); ?></h2></header>
        <div class="row">
            <?php $referencesPresenter->theQuery(); ?>
        </div>
    </section>
</div>
