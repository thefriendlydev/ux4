      </div>
      <div class="siteFooter">
        <div class="section footer">
          <div class="footerPhone">
          <?= the_field('phone_number', 'option'); ?>
          </div>
          <div class="footerAddress">
          <?= the_field('address', 'option'); ?>
          </div>
          <div class="footerSocial">
            <a class="icon icon-facebook-square" target="_blank" href="<?= the_field('facebook_link', 'option'); ?>"></a>
            <a class="icon icon-twitter-square" target="_blank" href="<?= the_field('twitter_link', 'option'); ?>"></a>
            <a class="icon icon-linkedin-square" target="_blank" href="<?= the_field('linkedin_link', 'option'); ?>"></a>
          </div>
          <div class="footerLegal">
            <?= the_field('legal', 'option'); ?>
          </div>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
