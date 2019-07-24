<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="footer layui-col-md12">
    <div class="t-copy">
        <p>
            <span class="layui-breadcrumb" lay-separator="|">
                <!--<span><a href="javascript:;">关于我们</a></span>-->
            </span>
        </p>
        <p>
            <span class="layui-breadcrumb" lay-separator="|">
                <span>Copyright © 2018-<?php echo date('Y'); ?> Powered by <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> 版权所有</span>
            </span>
        </p>
        <p>
            <span class="layui-breadcrumb">
                <span>
                    依据事物特征、数据挖掘、规律总结建立预测模型，用来指导个人发展、人生规划、企业发展战略
                </span>
            </span>
        </p>

    </div>
</footer>

<?php $this->footer(); ?>
</body>
</html>
