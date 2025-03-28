<div class="partner-area wow fadeInUp" data-wow-delay="200ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partner-logo-slide owl-carousel">
                    <?php 
                    $partner_logos = [
                        '1.png',
                        '2.png',
                        '3.png',
                        '4.png',
                        '5.png'
                    ];
                    $delay = 100; // Initial delay time in ms
                    foreach ($partner_logos as $logo) : ?>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo wow fadeInUp" data-wow-delay="<?php echo $delay; ?>ms">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/core-img/<?php echo $logo; ?>" alt="">
                        </a>
                        <?php $delay += 200; // Increment delay for each logo ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
