      </div>
      <div class="siteFooter">

        <div class="footerCta">
          <div class="container">
            <?= the_field('white_text', 'option'); ?> <span><?= the_field('bold_yellow_text', 'option'); ?></span>
          </div>
        </div>

        <div class="footer">
          <div class="container">
            <div class="footerInfo">
              <div class="grid">
                <div class="grid-2of4 grid-1of3--lap grid-1of1--palm">
                  <div class="footerLogo">
                    <a href="/"><img src="<?php bloginfo('template_url'); ?>/dist/img/nav-logo.png"></a>
                  </div>
                </div>
                <div class="grid-1of4 grid-1of3--lap grid-1of2--palm">
                  <div class="footerText u-bottom5 u-semiBold">Orillia – Head Quarters</div>
                  <div class="footerText u-bottom5">15 Progress Drive</div>
                  <div class="footerText u-bottom15">Orillia ON, L3V 0T7</div>

                  <div><a href="/contact-us#locations">Ottawa | USA</a></div>
                </div>
                <div class="grid-1of4 grid-1of3--lap grid-1of2--palm">
                  <div class="footerText u-bottom5">877.322.8968</div>
                  <div><a href="mailto:info@ediinc.ca">info@ediinc.ca</a></div>
                </div>
              </div>
            </div>
<!--             <div class="footerCertifications">
              <div class="footerCertification"><img src="<?php bloginfo('template_url'); ?>/dist/img/cert-iso-14001.png"></div>
              <div class="footerCertification"><img src="<?php bloginfo('template_url'); ?>/dist/img/cert-naid.png"></div>
              <div class="footerCertification"><img src="<?php bloginfo('template_url'); ?>/dist/img/cert-ohsas-18001.png"></div>
              <div class="footerCertification"><img src="<?php bloginfo('template_url'); ?>/dist/img/cert-r2.png"></div>
              <div class="footerCertification"><img src="<?php bloginfo('template_url'); ?>/dist/img/cert-controlled-goods.png"></div>
            </div> -->
            <div class="footerLegal">
              <div class="copyright">&copy; Electronic Distributors International Inc. <?php echo date("Y"); ?></div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
