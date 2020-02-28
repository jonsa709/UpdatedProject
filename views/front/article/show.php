<?php
    view('front/includes/header.php');
    view('front/includes/nav.php');
?>

        <main class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 breaking-heading text-center my-3 font-weight-bold">
                        <?php echo $article->name; ?>
                    </div>
                    <?php if(!empty($article->featured_image)): ?>
                    <div class="col-12 image">
                        <img src="<?php echo url("assets/images/{$article->featured_image}"); ?>" class="img-fluid">
                    </div>
                    <?php endif; ?>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 text-center my-3">
                                <small class="text-muted font-italic">
                                    <i class="fas fa-clock mr-2"></i> <?php echo date('j M Y h:i A', strtotime($article->published_at)); ?>

                                </small>
                            </div>
                            <div class="col-12 text-justify">
                                <?php
                                    echo nl2br($article->content);


                                ?>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <hr>
                    </div>
                </div>

            </div>
        </main>
<?php view('front/includes/footer.php');?>