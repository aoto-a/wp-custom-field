<?php get_header(); ?>

<main>
    <h2><?php the_archive_title(); ?></h2>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article>
        <div class="post-contents">
            <div class="post-archive-flexbox"><!-- アイキャッチ画像と抜粋文を横並びにするためのBOX -->
                <div class="">
                    <?php if(has_post_thumbnail()): the_post_thumbnail('thumbnail'); else: ?><!-- サムネサイズのアイキャッチ画像を表示 -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/post-thumb150.jpg" alt=""><!-- アイキャッチ画像が登録されていないとき用の画像（imagesフォルダに用意しておく） -->
                    <?php endif; ?>
                </div>
                <div>
                    <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><!-- 投稿のタイトルとリンク --></h1>
                    <?php the_excerpt(); ?><!-- 投稿の本文の抜粋 -->
                </div>
            </div>
        </div>
    </article>
    <?php endwhile; else: ?>
        <p>該当する投稿はありません。
        </p>
    <?php endif; ?>
</main>

<?php get_footer();//誤動作を防ぐため最終行には閉じタグを書かない