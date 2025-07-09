<?php
/*
Template Name: index
*/
?>

<?php get_header(); ?>

<div id="scroll_area">
    <div class="img-scroll ">
        <ul id="scrollslide1" class="scrollslide">
            <?php
            query_posts('&category_name=scrollslide1');
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>
                    <li>
                        <div class="inr">
                            <a href="<?php the_permalink(); ?>">
                                <span class="ico_new">NEW</span>
                                <div class="thum">

                                    <figure>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                        <figcaption><span class="inr"><?php the_title(); ?></span></figcaption>
                                    </figure>
                                </div>
                                <!-- thum -->
                            </a>
                        </div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

        </ul>
    </div>

    <h2 class="title">愛せるものしかつくらない。</h2>

    <div class="img-scroll">
        <ul id="scrollslide2" class="scrollslide">
            <?php
            query_posts('&category_name=scrollslide2');
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>
                    <li>
                        <div class="inr">
                            <a href="<?php the_permalink(); ?>">
                                <span class="ico_new">NEW</span>
                                <div class="thum">

                                    <figure>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                        <figcaption><span class="inr"><?php the_title(); ?></span></figcaption>
                                    </figure>
                                </div>
                                <!-- thum -->
                            </a>
                        </div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </ul>
    </div>
</div>
<!-- scroll_area -->


<div class="container">
    <section class="page_link">
        <div class="box fadebox animated btn_message">
            <a href="<?php echo esc_url(home_url('/')); ?>message">
                <h2>ごあいさつ<span>MESSAGE</span></h2>
                <p>多くの方々の<br class="sp_only">“想いの結晶”をつくる。</p>
            </a>
        </div>
        <!-- btn_message -->

        <div class="box fadebox animated btn_owner">
            <a href="<?php echo esc_url(home_url('/')); ?>owner">
                <h2>施主のみなさまへ<span>TO CUSTOMER</span></h2>
                <p>わたしたちが優先するのは、<br class="sp_only">自社の利益ではなく、<br class="sp_only">施主様のよろこびです。</p>
            </a>
        </div>
        <!-- btn_architect -->

        <div class="box fadebox animated btn_architect">
            <a href="<?php echo esc_url(home_url('/')); ?>architect">
                <h2>建築家のみなさまへ<span>TO ARCHITECT</span></h2>
                <p>建築家・設計士に選ばれる<br class="sp_only">職人でありたい。</p>
            </a>
        </div>
        <!-- btn_architect -->

    </section>
    <!-- page_link -->

    <section class="archives">
        <div class="archives_title fadebox animated">
            <h2>作品実績</h2>
        </div>
        <!-- archives_title -->

        <div class="archives_container">
            <h3 class="fadebox animated">2024-2023</h3>
            <ul>
                <?php
                query_posts('category_name=2024-2023&posts_per_page=6');
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>
                        <li class="fadebox animated">
                            <div class="inr">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="thum">
                                        <figure>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                            <figcaption><span class="inr"><?php the_title(); ?></span></figcaption>
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="btn_more fadebox animated">
                <a href="<?php echo esc_url(home_url('/')); ?>category/2024-2023/">2024-2023年の<br class="sp_only">作品実績一覧を見る</a>
            </div>
            <!-- btn_more -->
        </div>
        <!-- archives_container -->

        <div class="archives_container">
            <h3 class="fadebox animated">2022-2021</h3>
            <ul>
                <?php
                query_posts('category_name=2022-2021&posts_per_page=6');
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>
                        <li class="fadebox animated">
                            <div class="inr">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="thum">
                                        <figure>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                            <figcaption><span class="inr"><?php the_title(); ?></span></figcaption>
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="btn_more fadebox animated">
                <a href="<?php echo esc_url(home_url('/')); ?>category/2022-2021/">2022-2021年の<br class="sp_only">作品実績一覧を見る</a>
            </div>
            <!-- btn_more -->
        </div>
        <!-- archives_container -->

        <div class="archives_container">
            <h3 class="fadebox animated">2020-2019</h3>
            <ul>
                <?php
                query_posts('category_name=2020-2019&posts_per_page=6');
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>
                        <li class="fadebox animated">
                            <div class="inr">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="thum">
                                        <figure>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                            <figcaption><span class="inr"><?php the_title(); ?></span></figcaption>
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="btn_more fadebox animated">
                <a href="<?php echo esc_url(home_url('/')); ?>category/2020-2019/">2020-2019年の<br class="sp_only">作品実績一覧を見る</a>
            </div>
            <!-- btn_more -->
        </div>
        <!-- archives_container -->

        <div class="archives_container">
            <h3 class="fadebox animated">2018-2016</h3>
            <ul>
                <?php
                query_posts('category_name=2018-2016&posts_per_page=6');
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>
                        <li class="fadebox animated">
                            <div class="inr">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="thum">
                                        <figure>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                            <figcaption><span class="inr"><?php the_title(); ?></span></figcaption>
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="btn_more fadebox animated">
                <a href="<?php echo esc_url(home_url('/')); ?>category/2018-2016/">2018-2016年の<br class="sp_only">作品実績一覧を見る</a>
            </div>
            <!-- btn_more -->
        </div>
        <!-- archives_container -->

        <div class="archives_container">
            <h3 class="fadebox animated">2015-2011</h3>
            <ul>
                <?php
                query_posts('category_name=2015-2011&posts_per_page=6');
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>
                        <li class="fadebox animated">
                            <div class="inr">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="thum">
                                        <figure>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                            <figcaption><span class="inr"><?php the_title(); ?></span></figcaption>
                                        </figure>
                                    </div>
                                    <!-- thum -->
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="btn_more fadebox animated">
                <a href="<?php echo esc_url(home_url('/')); ?>category/2015-2011/">2015-2011年の<br class="sp_only">作品実績一覧を見る</a>
            </div>
            <!-- btn_more -->
        </div>
        <!-- archives_container -->

        <div class="archives_container">
            <h3 class="fadebox animated">2010-2006</h3>
            <ul>
                <?php
                query_posts('category_name=2010-2006&posts_per_page=6');
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>
                        <li class="fadebox animated">
                            <div class="inr">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="thum">
                                        <figure>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                            <figcaption><span class="inr"><?php the_title(); ?></span></figcaption>
                                        </figure>
                                    </div>
                                    <!-- thum -->
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="btn_more fadebox animated">
                <a href="<?php echo esc_url(home_url('/')); ?>category/2010-2006/">2010-2006年の<br class="sp_only">作品実績一覧を見る</a>
            </div>
            <!-- btn_more -->
        </div>
        <!-- archives_container -->

        <div class="archives_container">
            <h3 class="fadebox animated">2005-2001</h3>
            <ul>
                <?php
                query_posts('category_name=2005-2001&posts_per_page=6');
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>
                        <li class="fadebox animated">
                            <div class="inr">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="thum">
                                        <figure>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                            <figcaption><span class="inr"><?php the_title(); ?></span></figcaption>
                                        </figure>
                                    </div>
                                    <!-- thum -->
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="btn_more fadebox animated">
                <a href="<?php echo esc_url(home_url('/')); ?>category/2005-2001/">2005-2001年の<br class="sp_only">作品実績一覧を見る</a>
            </div>
            <!-- btn_more -->
        </div>
        <!-- archives_container -->

        <div class="archives_container">
            <h3 class="fadebox animated">2000-1990</h3>
            <ul>
                <?php
                query_posts('category_name=2000-1990&posts_per_page=6');
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>
                        <li class="fadebox animated">
                            <div class="inr">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="thum">
                                        <figure>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                            <figcaption><span class="inr"><?php the_title(); ?></span></figcaption>
                                        </figure>
                                    </div>
                                    <!-- thum -->
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="btn_more fadebox animated">
                <a href="<?php echo esc_url(home_url('/')); ?>category/2000-1990/">2000-1990年の作品実績一覧を見る</a>
            </div>
            <!-- btn_more -->
        </div>
        <!-- archives_container -->

    </section>
</div>
<!-- container -->

<?php get_footer(); ?>