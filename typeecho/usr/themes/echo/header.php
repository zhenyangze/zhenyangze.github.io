<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('搜索 %s 的结果'),
            'tag'       =>  _t('%s'),
            'author'    =>  _t('%s 发布的文章')
        ), '', '-'); ?><?php if($this->is('index')) { 
        echo '数据预测模型助力个人发展,企业策划-';
 } ?><?php $this->options->title(); ?></title>
    <?php $this->header('generator&template'); ?>
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('img/favicon.png'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('layui/css/layui.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>?t=<?php echo time(); ?>">
    <script src="<?php $this->options->themeUrl('layui/layui.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<header class="layui-header header">
    <div class="layui-main">
        <?php if ($this->options->logoUrl): ?>
            <a class="logo" href="<?php $this->options->siteUrl(); ?>">
                <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
            </a>
        <?php else: ?>
            <a class="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
        <?php endif; ?>
        
        <ul class="layui-nav">
            <li class="layui-nav-item layui-hide-xs <?php if($this->is('index')): ?>layui-this<?php endif; ?>">
                <a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a> 
            </li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
            <li class="layui-nav-item layui-hide-xs <?php if($this->is('page', $pages->slug)): ?>layui-this<?php endif; ?>">
                <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a> 
            </li>
            <?php endwhile; ?>
            
            <li class="layui-nav-item nav-btn layui-hide-sm">
                <a href="javascript:;"><i class='layui-icon layui-icon-more'></i></a>
                <dl class="layui-nav-child">
                    <?php while($pages->next()): ?>
                        <dd><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></dd>
                    <?php endwhile; ?>
                </dl>
            </li>
        </ul>
    </div>
</header>