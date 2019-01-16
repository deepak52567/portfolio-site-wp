<section class="contact" id="contact">
    <div class="head">
        <h1>CONTACT</h1>
    </div>
    <?php $contact = get_field('contact'); ?>
    <div class="pro-con">
        <div class="pro-detail">
            <h1 class="sub-head">
                Location
            </h1>
            <p>
                <?php echo $contact['address']; ?>
            </p>
            <h1 class="sub-head">
                Phone
            </h1>
            <p>
                +1(919)<?php echo $contact['phone']; ?>
            </p>
            <h1 class="sub-head">
                Social
            </h1>
            <?php $social_links = get_field('social_links'); ?>
            <p class="social-con">
                <a href="<?php echo $social_links['facebook']; ?>" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="<?php echo $social_links['instagram']; ?>" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="<?php echo $social_links['skype']; ?>" target="_blank">
                    <i class="fab fa-linkedin"></i> 
                </a>
            </p>
        </div>
        <div class="img-con">
            <iframe src="<?php echo $contact['map']; ?>" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
</section>