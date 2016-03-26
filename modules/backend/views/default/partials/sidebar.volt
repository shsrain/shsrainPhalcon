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