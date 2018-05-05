<?php 
foreach($all_published_blog as $d_blog){
?>
<div class="article">
  <h2><span><?php echo $d_blog->blog_title;?></h2>
  <p class="infopost">Posted by <a href="#"><?php echo $d_blog->author_name;?></a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#"><?php echo $d_blog->category_name;?></a> <a href="#" class="com">Comments <span>11</span></a></p>
  <div class="clr"></div>
  <div class="img"><img src="<?php echo base_url();?>images/img1.jpg" width="177" height="213" alt="" class="fl" /></div>
  <div class="post_content">
	<p><?php echo $d_blog->blog_short_description;?></p>
	<p class="spec"><a href="<?php echo base_url(); ?>/welcome/blog_details/<?php echo $d_blog->blog_id; ?>" class="rm">Read more &raquo;</a></p>
  </div>
  <div class="clr"></div>
</div>
<?php 
}
?>
<p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>