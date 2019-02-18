<?php
/*
 * Template Name: Work Nisshin
 * Template Post Type: post, page, product
 */
get_header();
?>
<div class="nisshin-content">
    <div class="back-home clearfix">
        <a class="logo" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/mie_logo.svg" alt="logo"></a>
        <a href="<?php echo home_url(); ?>/work" alt="back-work" class="back-work">
            <img class="back-1" id="back-1" onmouseover="backOn();" src="<?php bloginfo('template_url'); ?>/img/arrow.png" alt="back-btn">
            <img class="back-2" id="back-2" onmouseout="backOut();" src="<?php bloginfo('template_url'); ?>/img/arrow.png" alt="back-btn">
        </a>
        <a class="go-front" href="<?php echo home_url(); ?>/work" onmouseover="backOn();" onmouseout="backOut();">BACK TO PROJECTS</a>
    </div>
    <table class="pf-work">
        <tr>
            <td class="title right-100">YEAR</td>
            <td class="title right-150">DELIVERABLES</td>
            <td class="pf-th">NISSIN</td>
            
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
    <div class="pf-img"><img src="<?php bloginfo('template_url'); ?>/img/nisshin.jpg" alt=""></div>
    <div class="work-img">
        <div class="work-wrapper">
            <img src="<?php bloginfo('template_url'); ?>/img/nisshin-work.jpg" alt="nisshin-work">
        </div>
    </div>
</div>
<footer class="ft-nisshin">
    <div class="footer">
        <div class="prev-project">
            <a href="<?php echo home_url('/first-class');?>" alt="prev" class="pagenav-btn">
                <img class="left-1" id="left-1" onmouseover="mouseOn();" src="<?php bloginfo('template_url'); ?>/img/prev.png" alt="prev-btn">
                <img class="left-2" id="left-2" onmouseout="mouseOut();" src="<?php bloginfo('template_url'); ?>/img/prev.png" alt="prev-btn"></a>
            <a class="work-left" href="<?php echo home_url('/first-class');?>" alt="prev" onmouseover="mouseOn();" onmouseout="mouseOut();"><span>PREV PROJECT</span></a>
        </div>
        <div class="footer-work"><a class="work-link" href="<?php echo home_url(); ?>/work"><span>Work</span></a></div>
        <div class="next-project">
            <a class="work-right" href="<?php echo home_url('/tamakuchen');?>" alt="next" onmouseover="mouseOnR();" onmouseout="mouseOutR();"><span>NEXT PROJECT</span></a>
            <a href="<?php echo home_url('/tamakuchen');?>" alt="next" class="pagenav-btn">
                <img class="right-1" id="right-1" onmouseover="mouseOnR();" src="<?php bloginfo('template_url'); ?>/img/next.png" alt="next-btn">
                <img class="right-2" id="right-2" onmouseout="mouseOutR();" src="<?php bloginfo('template_url'); ?>/img/next.png" alt="next-btn">
            </a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>