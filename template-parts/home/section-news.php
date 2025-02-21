<section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-9">
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-lg-6">
              <img src="" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-lg-6">Text</div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-9">
            <div class="row">
              <?php for ($i=0; $i < 3 ; $i++) { ?>
                <div class="col-12 col-lg-4">Article 3</div>
              <?php } ?>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <?php get_template_part('template-parts/home/section', 'magazine')?>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3">3</div>
    </div>
  </div>
</section>