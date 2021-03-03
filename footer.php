<section class="footer">
      <div class="footer__content">
        <div class="footer__content--box">
        <fa-icon
            family="solid"
            icon="phone-square"
            role="presentation"
            aria-label="Display Icon"
            ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path
                d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM94 416c-7.033 0-13.057-4.873-14.616-11.627l-14.998-65a15 15 0 0 1 8.707-17.16l69.998-29.999a15 15 0 0 1 17.518 4.289l30.997 37.885c48.944-22.963 88.297-62.858 110.781-110.78l-37.886-30.997a15.001 15.001 0 0 1-4.289-17.518l30-69.998a15 15 0 0 1 17.16-8.707l65 14.998A14.997 14.997 0 0 1 384 126c0 160.292-129.945 290-290 290z"
              ></path></svg
          ></fa-icon>
        <?php
            if(is_active_sidebar('footer-quote-widget')){
            dynamic_sidebar('footer-quote-widget');
            }
            ?>
          
          <h3 class="footer__pillar-title">Get A Quote</h3>
          <span class="footer__pillar-q">Have questions?</span>
          <a href="tel:226-210-3990" class="footer__pillar-q">Call <?php echo do_shortcode('[company_phone]'); ?></a>
        </div>
        <div class="footer__content--image">
            <?php
            if(is_active_sidebar('footer-logo-widget')){
            dynamic_sidebar('footer-logo-widget');
            }
            ?>
          
        </div>
        <div class="footer__content--box">
          <fa-icon
            class="fa-icon"
            family="solid"
            icon="phone-square"
            role="presentation"
            aria-label="Display Icon"
            ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
              <path
                d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z"
              ></path></svg
          ></fa-icon>
          <h3 class="footer__pillar-title">Our Location</h3>
          <span class="footer__pillar-q"><?php echo do_shortcode('[company_address]'); ?></span>
          
        </div>
      </div>
    </section>
    
</body>
</html>