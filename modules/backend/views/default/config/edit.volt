{% extends "block/base.volt" %}
{% block adminContent %}

  <!-- content start -->

  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">表单</strong> / <small>form</small></div>
  </div>
<form class="am-form" action="<?php echo $this->url->get('admin/site/config/update');?>" method="post">
  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab2">基本配置</a></li>
      <li><a href="#tab3">SEO 选项</a></li>
    </ul>

    <div class="am-tabs-bd">

      <div class="am-tab-panel am-fade am-in am-active" id="tab2">

            {% for cnf in config %}
          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              {{ cnf.info }}
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input type="text" class="am-input-sm" name="varname[{{ cnf.varname }}]" value="{{ cnf.value }}">
            </div>
            <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
          </div>      
            {% endfor %}
      
          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              网站名称
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input type="text" class="am-input-sm" name="varname['site_name']">
            </div>
            <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
          </div>
          
          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              网站地址
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="text" class="am-input-sm" name="varname['site_url']">
            </div>
          </div>
          
          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              网站标题
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="text" class="am-input-sm" name="varname['site_title']">
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              网站关键词
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input type="text" class="am-input-sm" name="varname['site_keywords']">
            </div>
            <div class="am-hide-sm-only am-u-md-6">选填</div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              网站摘要
            </div>
            <div class="am-u-sm-12 am-u-md-10">
              <textarea name="content" rows="10" placeholder="请使用富文本编辑插件"></textarea>
            </div>
          </div>

      </div>

      <div class="am-tab-panel am-fade" id="tab3">

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 标题
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input type="text" class="am-input-sm">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 关键字
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input type="text" class="am-input-sm">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 描述
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <textarea rows="4"></textarea>
            </div>
          </div>

      </div>

    </div>
  </div>

  <div class="am-margin">
    <button type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
    <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
  </div>  
</form>  
  <!-- content end -->
<?php echo $this->assets->outputCss('editorcss'); ?>  
<?php echo $this->assets->outputJs('editorjs'); ?>
<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="content"]', {
					allowFileManager : true
				});
            });
</script>
{% endblock %}