<?php 
/* Template Name: Work template */ 
get_header(); ?>
    <div class="align-center"> 
        <h1 class="work">WORK</h1>
        <p class="work-desc">
        Hello, I'm Mie, a Japanese, currently based in Toronro, Canada.<br><br> 
as a web designer, my goal is to create well thought & beautiful interfaces to offer the best user experience. 
        </p>
    </div>
    <div class="projects">
        <p class="select-p">SELECT PROJECTS</p>
        <span>/</span>
        <?php 
        // the query
        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
        
        <?php if ( $wpb_all_query->have_posts() ) : ?>
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <div class="project-item">
            <a class="project-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
            <h2><a href="<?php permalink_link(); ?>"><?php the_title(); ?></a></a></h2>
            
            </div>
            <?php endwhile; ?>
            <!-- end of the loop -->
        
            <?php wp_reset_postdata(); ?>
        
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>