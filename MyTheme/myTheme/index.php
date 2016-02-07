<?php get_header(); ?>

<section id="about" class="s_about bg_silver">
    <div class="section_header">
        <h2>
            <?php echo get_cat_name( 2 ) ?>
        </h2>
        <div class="s_wrapper_descr">
            <div class="s_descr">
                <?php echo category_description( 2 ); ?>
            </div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
                <?php if ( have_posts() ) : query_posts('p=4');
                    while (have_posts()) : the_post(); ?>
                <div class="col-md-4 col-md-push-4 c_photo animated_1">
                    <h3>Фото</h3>
                    <div class="photo_container">
                        <?php if ( has_post_thumbnail()) : ?>
                            <a class="popup" href="<?php
                            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                            echo $large_image_url[0];
                            ?>" >
                                <?php the_post_thumbnail(); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-4 c_about animated_2">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
                    <? endwhile; endif; wp_reset_query(); ?>
                <div class="col-md-4 c_info animated_3">

                    <?php if ( have_posts() ) : query_posts('p=8');
                        while (have_posts()) : the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <ul>
                        <?php the_content(); ?>
                        <? endwhile; endif; wp_reset_query(); ?>
                    </ul>

                    <div class="social_wrap">
                        <ul>
                        <?php if ( have_posts() ) : query_posts('cat=3');
                            while (have_posts()) : the_post(); ?>
                            <li>
                                <a href="<?php echo get_post_meta($post->ID, 'soc_url', true) ?>" class="btn btn-block btn-social btn-<?php echo get_post_meta($post->ID, 'icon', true) ?>" target="_blank">
                                    <span class="fa fa-<?php echo get_post_meta($post->ID, 'icon', true) ?>"></span><?php echo get_post_meta($post->ID, 'descr', true) ?>
                                </a>
                            </li>

                            <? endwhile; endif; wp_reset_query(); ?>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<section id="resume" class="s_resume bg_light">
    <div class="section_header">
        <h2><?php echo get_cat_name( 4 ) ?></h2>
        <div class="s_wrapper_descr">
            <div class="s_descr">
                <?php echo category_description( 4 ); ?>
            </div>
        </div>
    </div>
    <div class="section_content resume_content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-sm-6 left">
                    <div class="left_content_1">
                        <h3><?php echo get_cat_name( 5 ) ?></h3>
                        <div class="resume_icon"><i class="icon-basic-case"></i></div>
                        <?php if ( have_posts() ) : query_posts('cat=5');
                            while (have_posts()) : the_post(); ?>
                        <div class="year"><?php echo get_post_meta($post->ID, 'years', true) ?></div>
                        <div class="place"><?php echo get_post_meta($post->ID, 'work_place', true) ?> <strong><?php the_title(); ?></strong></div>
                        <?php the_content(); ?>
                        <? endwhile; endif; wp_reset_query(); ?>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 right">
                    <div class="right_content_1">
                        <h3><?php echo get_cat_name( 6 ) ?></h3>
                        <div class="resume_icon"><i class="icon-basic-book-pen"></i></div>
                        <?php if ( have_posts() ) : query_posts('cat=6');
                            while (have_posts()) : the_post(); ?>
                        <div class="year"><?php echo get_post_meta($post->ID, 'years', true) ?></div>
                        <div class="place"><strong><?php the_title(); ?></strong> <?php echo get_post_meta($post->ID, 'study_place', true) ?></div>
                                <?php the_content(); ?>
                            <? endwhile; endif; wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="s_portfolio bg_dark">
    <div class="section_header">
        <h2><?php echo get_cat_name( 9 ) ?></h2>
        <div class="s_wrapper_descr">
            <div class="s_descr">
                <?php echo category_description( 4 ); ?>
            </div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
                <div class="filter_div controls">
                    <ul>
                        <li class="filter active" data-filter="all">Все работы</li>
                        <li class="filter" data-filter=".sites">Сайты</li>
                        <li class="filter" data-filter=".logo">Логотипы</li>
                    </ul>
                </div>
                <div id="filter_container">

                    <?php if ( have_posts() ) : query_posts('cat=9');
                        while (have_posts()) : the_post(); ?>

                            <div class="mix col-xs-6 col-sm-6 col-md-3  portfolio_item <?php
                            $tags = wp_get_post_tags($post->ID);
                            if ($tags) {
                                foreach($tags as $tag) {
                                    echo ' ' . $tag->name;
                                }
                            }
                            ?>">
                                <?php the_post_thumbnail(array(400, 300)); ?>
                                <div class="protfolio_descr">
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_excerpt(); ?>
                                    <a class="btn view">Посмотреть</a>
                                </div>
                                <div class="hidden">
                                    <div class="port_descr">
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                        <img src="<?php
                                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                                        echo $large_image_url[0];
                                        ?>" alt="">
                                    </div>
                                </div>
                            </div>

                        <? endwhile; endif; wp_reset_query(); ?>



                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="s_contac bg_silver">
    <div class="section_header">
        <h2>Контакты</h2>
        <div class="s_wrapper_descr">
            <div class="s_descr">
                Оставте ваше сообщение
            </div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact_box">
                        <i class="icon-basic-geolocalize-05"></i>
                        <h3>Адрес:</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="contact_box">
                        <i class="icon-basic-smartphone"></i>
                        <h3>Телефон:</h3>
                        <p>+380-95-941-21-00</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <form novalidate action="http://formspree.io/flamefower@gmail.com" method="POST" target="_blank">
                        <div class="form-group control-group">
                            <label class="control-label" for="exampleInputEmail1">Имя</label>
                            <div class="controls">
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Введите имя" required data-validation-required-message="Вы не ввели имя" />
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="form-group control-group">
                            <label class="control-label" for="exampleInputPassword1">Email</label>
                            <div class="controls">
                                <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш Email" data-validation-email-message="Введен некорректный E-mail" data-validation-required-message="Вы не ввели Email" required />
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="form-group control-group">
                            <div class="controls">
								<textarea name="message" class="form-control" rows="3" required data-validation-required-message="Вы не ввели сообщение"></textarea>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <button class="btn btn-default">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
</section>
<?php get_footer();?>