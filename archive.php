<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
		</h3>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="post">
    			<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
    			<ul class="post-meta">
					<li><?php $this->date('F j, Y'); ?></li>
					<li class="comment-count"><a rel="nofollow" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?></a></li>
				</ul>
                <div class="post-content">
        			<?php $this->content('- 阅读更多 -'); ?>
                </div>
    		</article>
		<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('啊哦，没有找到您需要的内容٩(×̯×)۶'); ?></h2>
            </article>
        <?php endif; ?>
        <?php $this->pageNav('&laquo; Previous','Next &raquo;',10,'...');?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
