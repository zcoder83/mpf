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
        <div class="project-item">
            <a class="project-img" href="<?php permalink_link(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/project-img.png" alt=""></a>
            <h2><a href="<?php permalink_link(); ?>">Cebu IT Abroad</a></h2>
        </div>
        <?php 
        // the query
        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
        
        <?php if ( $wpb_all_query->have_posts() ) : ?>
        
        <ul>
        
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            <!-- end of the loop -->
        
        </ul>
        
            <?php wp_reset_postdata(); ?>
        
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>