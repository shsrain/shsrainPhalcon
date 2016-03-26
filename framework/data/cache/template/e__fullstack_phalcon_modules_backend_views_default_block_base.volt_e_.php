a:3:{i:0;s:8402:"
<!doctype html>
<html class="no-js fixed-layout">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>后台管理平台</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <?php echo $this->assets->outputCss('header'); ?>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>ABC</strong> <small>后台管理平台</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
          <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="#" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 400, height: 225}"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="admin-index.html"><span class="am-icon-home"></span> 首页</a></li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav-systemconfig'}"><span class="am-icon-file"></span> 系统设置 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav-systemconfig">
            <li><a href="<?php echo $this->url->get('admin/site/config');?>" class="am-cf"><span class="am-icon-check"></span> 站点配置<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
            <li><a href="<?php echo $this->url->get('admin/view/position/index');?>"><span class="am-icon-puzzle-piece"></span> 推荐位管理</a></li>
            <li><a href="<?php echo $this->url->get('admin/db/index');?>"><span class="am-icon-th"></span> 数据库管理<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
            <li><a href="admin-log.html"><span class="am-icon-calendar"></span> DB数据源</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 多语言管理</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 在线升级</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 类别管理</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 后台管理菜单</a></li>
          </ul>
        </li>
         <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav-content'}"><span class="am-icon-file"></span> 内容管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav-content">
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 栏目管理</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 模型管理</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 文章模型</a></li>
          </ul>
        </li>       
         <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav-mod'}"><span class="am-icon-file"></span> 模块管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav-mod">
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 友情链接</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 在线客服</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 在线支付</a></li>
          </ul>
        </li>
         <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav-user'}"><span class="am-icon-file"></span> 用户管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav-user">
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 会员资料管理</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 会员组管理</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 权限节点管理</a></li>
          </ul>
        </li>
         <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav-update'}"><span class="am-icon-file"></span> 网站更新 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav-update">
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 更新首页</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 更新内容</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 更新内容也url</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 生成网站地图</a></li>
          </ul>
        </li>
         <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav-template'}"><span class="am-icon-file"></span> 模板管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav-template">
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 模板管理</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 风格管理</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 碎片管理</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 幻灯片管理</a></li>
          </ul>
        </li>         
        <li><a href="#"><span class="am-icon-sign-out"></span> 注销</a></li>
      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          <p>时光静好，与君语；细水流年，与君同。—— Amaze UI</p>
        </div>
      </div>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> wiki</p>
          <p>Welcome to the Amaze UI wiki!</p>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">

    ";s:12:"adminContent";N;i:1;s:1227:"
    <footer>
      <hr>
      <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
    </footer>
  </div>
  <!-- content end -->

</div>


<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">Modal 标题
      <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
    </div>
    <div class="am-modal-bd">
      Modal 内容。本 Modal 无法通过遮罩层关闭。
    </div>
  </div>
</div>

<div class="am-popup" id="my-popup">
  <div class="am-popup-inner">
    <div class="am-popup-hd">
      <h4 class="am-popup-title">...</h4>
      <span data-am-modal-close
            class="am-close">&times;</span>
    </div>
    <div class="am-popup-bd">
      ...
    </div>
  </div>
</div>

<!--[if lt IE 9]>
<?php echo $this->assets->outputJs('lt IE 9'); ?>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<?php echo $this->assets->outputJs('gte IE 9'); ?>
<!--<![endif]-->
<?php echo $this->assets->outputJs('footer'); ?>
</body>
</html>";}