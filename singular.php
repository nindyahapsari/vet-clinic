<?php get_header(); ?>


<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>


<div class="container blog-container">

    <div class="row">
        <div class="col-md-6">



            <div class="inner-blog m-5">

                <a href="<?php the_permalink();?>">
                    <h3><?php the_title();?></h3>
                </a>
                <p><?php the_time('F j, Yg:i a');?> by <a
                        href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>">
                        <?php the_author();?></a>
                </p>

                <?php if(has_post_thumbnail()) : ?>
                <div class="img-fluid blog-img mx-auto">
                    <?php the_post_thumbnail(); ?>

                </div>
                <?php endif; ?>

                <p><?php the_excerpt();?></p>
            </div>

        </div>
    </div>




</div>



<?php endwhile;  ?>
<?php else : ?>

<p><?php __('No Posts Found')?></p>
<?php endif; ?>

<div class="pagination">
    <?php echo paginate_links(); ?>
</div>


<?php get_footer(); ?>