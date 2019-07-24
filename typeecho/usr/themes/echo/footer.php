<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="footer layui-col-md12">
    <div class="t-copy">
    <p>
        <span class="layui-breadcrumb" lay-separator="|">
            <span><a href="javascript:;">关于我们</a></span>
            <span class="layui-hide-xs">Poweed by <a href="http://typecho.org/" target="_blank" rel="nofollow">Typecho</a></span>
            <span>Theme by <a href="https://www.echo.so" target="_blank" rel="nofollow">Echo</a></span>
        </span>
    </p>
    <p>
        <span class="layui-breadcrumb" lay-separator="|">
            <span>Copyright © 2018-<?php echo date('Y'); ?> Powered by <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> 版权所有</span>
        </span>
    </p>
    </div>
</footer>

<?php $this->footer(); ?>
</body>
</html>
