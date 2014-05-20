		</div>
    </div>
</div>
<footer id="footer">
	<div class="container">
		<div id="quotes" style="padding-top: 10px;padding-bottom: 20px;"><?php include(dirname(__file__)."/quotes.php");quotes(); ?></div>
		&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
		<?php _e('0.34 Powered by <a href="http://sae.sina.com.cn/">SAE</a>'); ?>.
	</div>
	<div style="display:none">
	<script src="http://v1.cnzz.com/z_stat.php?id=1000391560&web_id=1000391560" language="JavaScript"></script>
	</div>
</footer>
<?php $this->footer(); ?>
</body>
</html>
