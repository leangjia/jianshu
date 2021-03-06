<?php
/**
 * 仿简书主题
 * 
 * @package JianShu
 * @author 绛木子
 * @version 1.1.0
 * @link http://lixianhua.com
 * ----------------------------------------
 * update log
 * ----------------------------------------
 * 2015.08.03
 * 导航单字添加设置项
 * 优化functions中方法
 * 添加AJAX支持（前端实现）
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>
<div id="main-container" class="main-container">
<?php while($this->next()): ?>
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
		<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <ul class="post-meta clearfix">
		    <li><?php _e('<i class="fa fa-book"></i> '); ?><?php $this->category(','); ?></li>
		    <li><?php _e('<i class="fa fa-clock-o"></i> '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php echo formatTime($this->created); ?></time></li>
			<li><?php _e('<i class="fa fa-eye"></i> 阅读 '); ?><?php $this->viewsNum(); ?></li>
			<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('<i class="fa fa-comments-o"> 评论 %d</i>'); ?></a></li>
		</ul>
        <?php if(!empty($this->options->viewMode)): ?>
    	<div class="post-content" itemprop="articleBody">
			<?php $this->content('- 阅读剩余部分 -'); ?>
		</div>
		<?php endif; ?>
    </article>
<?php endwhile; ?>
    <div id="ajax-page" class="page-navigator">
        <?php $this->pageLink('更多','next');?>
    </div>
</div>
<?php $this->need('footer.php'); ?>