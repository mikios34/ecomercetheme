<?php get_header();?>


<div class="content">
    <div class="container">

    <div class="row">
        <div class="col-lg-3">
            <div class="sticky-top" style="top:50px">
               
            </div>
            
        </div>
        <div class="col lg 9">
            
            <?php if(have_posts()) : while(have_posts()) : the_post();?>

            <div class="blog-post">
                <a href="<?php the_permalink();?>"><h1><?php the_title();?></h1></a>
                <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('post_image');?>"alt="<?php the_title()?>"class="img-fluid mb-5">
                <?php endif;?>
                <?php the_excerpt();?>
            </div>
            
            <?php endwhile; else: endif;?>
        </div>
    </div>
    

        
    </div>
    
</div>

<?php get_footer();?>