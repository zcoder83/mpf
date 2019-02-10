<?php
/*
 * Template Name: Work Tamakuchen
 * Template Post Type: post, page, product
 */
get_header();
?>
<div class="tamakuchen-content">
    <div class="back-home clearfix"><a class="logo" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-b.png" alt="logo"></a><a class="go-front" href="<?php echo home_url(); ?>/work">BACK TO PROJECTS<span></span></a></div>
    <table class="pf-work">
        <tr>
            <td class="title right-100">YEAR</td>
            <td class="title right-150">DELIVERABLES</td>
            <td class="pf-th">TakaKuchen</td>
            
        </tr>
        <tr>
            <td class="desc right-100">2018</td>
            <td class="desc right-150">UX<br><br>Visual Design</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td class="pf-desc">We were asked by BASIC to help them develop a new look and feel for NERD Skincare. Working closely with the SD team we developed several concepts that covered the e-commerce platform, branded content, and tone of voice. We then created a suite of brand assets as a toolkit that could be used by the NERD marketing team in their communications.</td>
        </tr>
    </table>
    <div class="pf-img"><img src="<?php bloginfo('template_url'); ?>/img/tamakuchen.jpg" alt=""></div>
    <div class="work-img">
        <div class="work-wrapper">
            <img src="<?php bloginfo('template_url'); ?>/img/tamakuchen-work.png" alt="tamakuchen-work">
        </div>
    </div>
</div>
<footer class="ft-tamakuchen">
    <div class="footer">
        <div class="prev-project">
            <a href="<?php echo home_url('/Nisshin');?>" alt="prev"><span class="prev"></span>PREV PROJECT</a>
        </div>
        <div class="footer-work"><span>Work</span></div>
        <div class="next-project">
            <a href="<?php echo home_url('/izumi');?>" alt="next">NEXT PROJECT<span class="next"></span></a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>