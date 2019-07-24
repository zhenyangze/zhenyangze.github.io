<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main class="layui-container main-body">
    <div class="layui-row layui-col-space15 main">
        <div class="map">
            <span class="layui-breadcrumb">
                <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
                <?php $this->category(','); ?>
                <a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><cite><?php $this->title() ?></cite></a>
            </span>
        </div>
        <div class="layui-col-md9 layui-col-lg9">
            <div class="title-article">
                <h1><?php $this->title() ?></h1>
                <div class="title-msg">
                    <span><i class="layui-icon">&#xe612;</i> <?php $this->author(); ?></span>
                    <span><i class="layui-icon">&#xe60e;</i> <?php $this->date('Y-m-d A'); ?> </span>
                    <span><i class="layui-icon">&#xe62c;</i> <?php get_post_view($this); ?>℃</span>
                    <span><i class="layui-icon">&#xe63a;</i> <?php $this->commentsNum('%d'); ?>条</span>
                </div>
            </div>
            <div class="text" itemprop="articleBody">
                <?php $this->content(); ?>
            </div>
            <div class="tags-text">
                <i class="layui-icon">&#xe66e;</i><?php _e('标签: '); ?><?php $this->tags(', ', true, ''); ?>
            </div>
            <div class="copy-text">
                <div>
<p>文章标题：《<a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->title() ?></a>》</p>
<p>版权声明：本站原创文章于<?php $this->date('Y-m-d H:i'); ?>，由<?php $this->author(); ?>发表，共<?php echo mb_strlen(strip_tags('')); ?>个字。</p>
                    <p class="hidden-xs">转载请注明：<a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a> </p>
                </div>
            </div>
            <div class="page-text">
                <div>
                    <span class="layui-badge layui-bg-gray">上一篇</span>
                    <?php $this->thePrev('%s','没有了'); ?>
                </div>
                <div>
                    <span class="layui-badge layui-bg-gray">下一篇</span>
                    <?php $this->theNext('%s','没有了'); ?>
                </div>
            </div>
            <?php $this->related(4)->to($relatedPosts); ?>
            <?php if ($relatedPosts->length > 0) {?>
            <div class="page-image">
                <h4>相关推荐</h4>
                <div class="layui-row layui-col-space15">
                    <?php while ($relatedPosts->next()): ?>
                    <div class="layui-col-md3">
                        <div class="image">
                            <a href="<?php $relatedPosts->permalink(); ?>" alt="<?php $relatedPosts->title(); ?>">
                            <img src="<?php echo thumb($this); ?>">
                            </a>
                        </div>
                        <div class="related-title">
                            <a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php } ?>
            <div class="comment-text layui-form">
                <?php $this->need('comments.php'); ?>
            </div>
        </div>
        
        <?php $this->need('sidebar.php'); ?>

    </div>
</main>

<?php $this->need('footer.php'); ?>
