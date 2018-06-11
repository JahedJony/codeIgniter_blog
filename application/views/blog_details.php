<div class="article">
	<h2><span><?php echo $blog_info->blog_title; ?></h2>
	<div class="clr"></div>
	<p>Posted by <a href="#"><?php echo $blog_info->author_name; ?></a> <span>&nbsp;&bull;&nbsp;</span> Filed under <a href="#"><?php echo $blog_info->category_name; ?></a></p>
	<p><?php echo $blog_info->blog_long_description; ?></p>
</div>
<div class="article">
	<h2><span><?php echo count($comments_by_blog_id); ?></span> Responses</h2>
	<div class="clr"></div>
	<?php 
	foreach($comments_by_blog_id as $d_comments){
	?>	
	<div class="comment"> <a href="#"><img src="<?php echo base_url();?>images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
		<p><a href="#"><?php echo $d_comments->author_name; ?></a> Says:<br />
			<?php echo $d_comments->date_time; ?></p>
		<p><?php echo $d_comments->comments; ?></p>
	</div>
	<?php 
	}
	?>
  
</div>

<h3 style="color:green">
	<?php
		$msg=$this->session->userdata('message');
		if($msg){
			echo $msg;
			$this->session->unset_userdata('message');
		}
	?>
</h3>

<?php
$user_id = $this->session->userdata('user_id'); 
if($user_id != NULL){	
?>
<div class="article">
  <h2><span>Leave a</span> Reply</h2>
  <div class="clr"></div>
  <form action="<?php echo base_url(); ?>welcome/post_comments" method="post">
	<ol>
	  <li>
		<label for="comments">Your Message</label>
		<input type="hidden" name="blog_id" value="<?php echo $blog_info->blog_id; ?>" />
		<textarea id="comments" name="comments" rows="8" cols="50"></textarea>
	  </li>
	  <li>
		<input type="submit" name="btnSubmit" value="Post Comments" class="send" />
		<div class="clr"></div>
	  </li>
	</ol>
  </form>
</div>
<?php
} 
?>