<div class="article">
  <h2><span>Sign Up Now!</span></h2>
  <div class="clr"></div>
</div>
<div class="article">
  <h2><span>Provide the information below</span></h2>
  <div class="clr"></div>
  <form action="<?php echo base_url(); ?>welcome/save_user" method="post">
	<ol>
	  <li>
		<label for="name">Name (required)</label>
		<input id="user_name" name="user_name" type="text" class="text" required/>
	  </li>
	  <li>
		<label for="email">Email Address (required)</label>
		<input id="user_email" name="user_email" type="email" class="text" required/>
	  </li>
	  <li>
		<label for="website">Password</label>
		<input id="user_password" name="user_password" type="password" class="text" required/>
	  </li>
	  <li>
		<input type="image" name="imageField" id="imageField" src="<?php echo base_url();?>images/submit.gif" class="send" />
		<div class="clr"></div>
	  </li>
	</ol>
  </form>
</div>