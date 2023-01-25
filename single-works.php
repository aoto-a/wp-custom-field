<?php get_header(); ?>

<main>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article class="works_custom-field">
        <div class="post-contents">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <div class="">
                <?php
                if(has_post_thumbnail()):
                    the_post_thumbnail('large');// パラメータの中身は任意の画像サイズ（thumbnail/medium/large/空のときはオリジナルサイズが表示される）
                endif; ?>
            </div>
            <div class="works-content">
                <dl>
                    <dt>施工内容</dt>
                    <?php if(post_custom('施工内容')): ?><!-- カスタムフィールドを出力 -->
                    <dd><?php echo esc_html(post_custom('施工内容')); ?></dd><!-- 出力内容をエスケープ処理して表示 -->
                    <?php endif; ?>
                </dl>
                <dl>
                    <dt>施工場所</dt>
                    <?php if(post_custom('施工場所')): ?><!-- カスタムフィールドを出力 -->
                    <dd><?php echo esc_html(post_custom('施工場所')); ?></dd><!-- 出力内容をエスケープ処理して表示 -->
                    <?php endif; ?>
                </dl>
                <dl>
                    <dt>完成</dt>
                    <?php if(post_custom('完成')): ?><!-- カスタムフィールドを出力 -->
                    <dd><?php echo esc_html(post_custom('完成')); ?></dd><!-- 出力内容をエスケープ処理して表示 -->
                    <?php endif; ?>
                </dl>
            </div>
        </div>
    </article>
    <?php endwhile; else: ?>
    <?php endif; ?>
</main>

<?php get_footer();