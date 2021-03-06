<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main class="layui-container main-body">
    <div class="layui-row layui-col-space15 main">
        <div class="map">
            <span class="layui-breadcrumb">
                <a href="<?php $this->options->siteUrl(); ?>"><i class="layui-icon">&#xe68e;</i>&nbsp;<?php $this->options->title(); ?></a>
                <?php $this->category(','); ?>
                <a><cite><?php $this->title() ?></cite></a>
            </span>
        </div>
        <div class="layui-col-md9 layui-col-lg9">
            <div class="title-article text-center">
                <h1><?php $this->title() ?></h1>
            </div>
            <div class="text" itemprop="articleBody">
                <?php $this->content(); ?>
            </div>
            <div class="comment-text layui-form">
                <?php $this->need('comments.php'); ?>
            </div>
        </div>
        
        <?php $this->need('sidebar.php'); ?>

    </div>
</main>

<?php $this->need('footer.php'); ?>