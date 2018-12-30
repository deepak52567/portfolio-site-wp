<section class="profile-sec" id="about">
    <div class="head">
        <h1>ABOUT ME</h1>
    </div>
    <?php $about_me_page = get_field('about_me'); ?>
    <div class="pro-con">
        <div class="img-con">
            <img src="<?php echo $about_me_page['profile_image']; ?>" alt="">
        </div>
        <div class="pro-detail">
            <p>
                <?php echo $about_me_page['about']; ?>
            </p>
            <h1 class="sub-head">
                My Skills
            </h1>
            <p>
                <?php echo $about_me_page['skills']; ?>
            </p>
        </div>
    </div>
</section>
