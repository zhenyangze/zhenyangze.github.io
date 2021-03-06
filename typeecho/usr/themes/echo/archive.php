<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main class="layui-container main-body">
    <div class="layui-row layui-col-space15 main">
        <div class="map">
            <span class="layui-breadcrumb">
                <a href="<?php $this->options->siteUrl(); ?>"><i class="layui-icon">&#xe68e;</i>&nbsp;<?php $this->options->title(); ?></a>
                <a><cite>
                        <?php $this->archiveTitle(array(
                        'category'  =>  _t('%s'),
                        'search'    =>  _t('搜索 %s'),
                        'tag'       =>  _t('标签 %s'),
                        'author'    =>  _t('用户 %s')
                        ), '', ''); ?>
                    </cite></a>
            </span>
        </div>
        <div class="layui-col-md9 layui-col-lg9">
            <div class="column">
                <h3 class="title-sidebar"><i class="layui-icon"></i>栏目：<?php $this->archiveTitle(' &raquo; ','',''); ?></h3>
                <?php echo $this->getDescription(); ?>
            </div>
            <?php if ($this->have()): ?>
            <?php while($this->next()): ?>
            <div class="title-article list-card">
                <div class="list-pic"><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><img src="<?php echo thumb($this); ?>" alt="<?php $this->title() ?>" class="img-full"></a></div>
                <a href="<?php $this->permalink() ?>">
                    <h1><?php $this->title() ?></h1>
                    <p><?php $this->excerpt(200, '...'); ?></p>
                </a>
                <div class="title-msg">
                    <span><i class="layui-icon">&#xe705;</i> <?php $this->category(','); ?></span>
                    <span><i class="layui-icon">&#xe60e;</i> <?php $this->date('Y-m-d A'); ?> </span>
                    <span class="layui-hide-xs"><i class="layui-icon">&#xe62c;</i> <?php get_post_view($this); ?>次</span>
                    <span class="layui-hide-xs"><i class="layui-icon">&#xe63a;</i> <?php $this->commentsNum('%d'); ?>条</span>
                </div>
            </div>
            <?php endwhile; ?>
            <div class="page-navigator">
                <?php $this->pageNav('«', '»', 1, '...', array('wrapTag' => 'div', 'wrapClass' => 'layui-laypage layui-laypage-molv', 'itemTag' => '', 'currentClass' => 'current', )); ?>
            </div>
            <?php else: ?>
            <div class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </div>
            <?php endif; ?>
        </div>

        <?php $this->need('sidebar.php'); ?>

    </div>
</main>

<?php $this->need('footer.php'); ?>
