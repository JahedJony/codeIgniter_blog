<div class="article">
  <h2><span><?php echo $blog_info->blog_title; ?></h2>
  <div class="clr"></div>
  <p>Posted by <a href="#"><?php echo $blog_info->author_name; ?></a> <span>&nbsp;&bull;&nbsp;</span> Filed under <a href="#"><?php echo $blog_info->category_name; ?></a></p>
  <p><?php echo $blog_info->blog_long_description; ?></p>
</div>
<div class="article">
  <h2><span>3</span> Responses</h2>
  <div class="clr"></div>
  <div class="comment"> <a href="#"><img src="<?php echo base_url();?>images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
	<p><a href="#">admin</a> Says:<br />
	  April 20th, 2009 at 2:17 pm</p>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.</p>
  </div>
  <div class="comment"> <a href="#"><img src="<?php echo base_url();?>images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
	<p><a href="#">Admin</a> Says:<br />
	  April 20th, 2009 at 3:21 pm</p>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</p>
  </div>
  <div class="comment"> <a href="#"><img src="<?php echo base_url();?>images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
	<p><a href="#">admin</a> Says:<br />
	  April 20th, 2009 at 2:17 pm</p>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.</p>
  </div>
</div>
<div class="article">
  <h2><span>Leave a</span> Reply</h2>
  <div class="clr"></div>
  <form action="#" method="post" id="leavereply">
	<ol>
	  <li>
		<label for="name">Name (required)</label>
		<input id="name" name="name" class="text" />
	  </li>
	  <li>
		<label for="email">Email Address (required)</label>
		<input id="email" name="email" class="text" />
	  </li>
	  <li>
		<label for="website">Website</label>
		<input id="website" name="website" class="text" />
	  </li>
	  <li>
		<label for="message">Your Message</label>
		<textarea id="message" name="message" rows="8" cols="50"></textarea>
	  </li>
	  <li>
		<input type="image" name="imageField" id="imageField" src="<?php echo base_url();?>images/submit.gif" class="send" />
		<div class="clr"></div>
	  </li>
	</ol>
  </form>
</div>