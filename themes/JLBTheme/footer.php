      <footer class="footer">
        <section class="footer-top">
          <div class="footer-one">
            <h2><?=get_field('contact_header', 'option'); ?></h2>
            <p><?=get_field('contact_sub_header', 'option'); ?></p>
          </div>
          <div class="footer-inner" style="background-image: url(<?=get_field('footer_background', 'option'); ?>);">
            <div class="overlay"></div>
            <div class="footer-two">
              <div class="footer-links">
                <?php if(get_field('contact_links', 'option')): ?>
                <?php while( have_rows('contact_links', 'option') ): the_row();?>
                  <a href="<?=get_sub_field('link_url'); ?>"><?=get_sub_field('link_text'); ?></a>
                <?php endwhile; ?>
                <?php endif; ?>
              </div>
              <div class="footer-contact">
                <div class="contact-info">
                  <p><?=get_field('address', 'option'); ?></p>
                  <p><?=get_field('phone', 'option'); ?></p>
                </div>
                <div class="contact-logo">
                  <img src="<?=get_field('footer_logo', 'option'); ?>" alt="">
                  <div class="footer-socials">
                    <?php if(get_field('social_media', 'option') ): ?>
                    <?php while(have_rows('social_media', 'option') ): the_row();?>
                      <a href="<?=get_sub_field('link'); ?>"><i class="fab fa-<?=get_sub_field('platform'); ?>"></i></a>
                    <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="contact-disclaimers">
                  <p><?=get_field('contact_disclaimers', 'option'); ?></p>
                </div>
              </div>
            </div>
            <div class="footer-three">
              <?=get_field('contact_additional', 'option'); ?>
            </div>
          </div>
        </section>
        <section class="jlb">
          <p><a href="http://www.jlbworks.com/#latest-work">Web Design</a>, <a href="http://www.jlbworks.com/#services">Marketing</a> & <a href="http://www.jlbworks.com/#contact">Support</a> by <a href="http://www.jlbworks.com/#latest-work">JLB</a></p>
        </section>
        <?php wp_footer(); ?>
      </footer>
    </div> <!-- Closing Header Container -->
  </body>
</html>
