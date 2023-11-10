<?php get_header() ?>

<main>
    <?php $i = 1 ?>
    <div class="row">
        <div class="col-12"><hr style="color: #EFEFEF;"/> </div>
    </div>
    <div class="row mt-5 main-row">
        <div class="col-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row post">
                    <div class="<?php echo $i == 1 ?  'col-6' : 'col-4' ?>">
                        <figure>
                            <img src="<?php echo get_post_image(); ?>" alt="<?php echo the_title(); ?>">
                        </figure>
                    </div>
                    <div class="<?php echo $i == 1 ? 'col-6' : 'col-4' ?> ">
                        <?php $category = get_the_category(); ?>
                        <?php if (count($category)) : ?>
                            <span class="taxonomy-category">
                                <a href="<?php get_category_link( $category[0]->term_id ) ?>">
                                    <?php echo $category[0]->name ?>
                                </a>
                            </span>
                        <?php endif; ?>
                        <p class="title"><?php the_title(); ?></p>
                        <p class="summary"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <p class="author"><?php the_author() ?></p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="<?php echo $i == 1 ?  'col-12' : 'col-8' ?>">
                        <hr>
                    </div>
                </div>
                <?php if ($i == 1) $i++ ?>
            <?php endwhile; ?>
                <?php
                if ( get_next_posts_link() ) {
                    next_posts_link();
                }
                ?>
                <?php
                if ( get_previous_posts_link() ) {
                    previous_posts_link();
                }
                ?>
            <?php else: ?>
                <p>Nenhum post encontrado. :(</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>


