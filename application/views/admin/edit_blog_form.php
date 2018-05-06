<div class="box-content">
	<form class="form-horizontal" name="edit_blog_form" action="<?php echo base_url(); ?>super_admin/update_blog" method="post">
		<fieldset>
			<legend>Edit Blog</legend>
			<h3 style="color:green">
				<?php
					$msg=$this->session->userdata('message');
					if($msg){
						echo $msg;
						$this->session->unset_userdata('message');
					}
				?>
			</h3>
			<div class="control-group">
				<label class="control-label" for="typeahead">Blog Title <em style="color:red">*</em></label>
				<div class="controls">
					<input type="text" class="span6 typeahead" name="blog_title" id="blog_title" value="<?php echo $blog_info->blog_title; ?>" required>
					<input type="hidden" name="blog_id" id="blog_id" value="<?php echo $blog_info->blog_id; ?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="typeahead">Category Name <em style="color:red">*</em></label>
				<div class="controls">
					<select name="category_id">
						<option>Select Category Name</option>
						<?php
						foreach($all_published_category as $p_category){
						?>
						<option value="<?php echo $p_category->category_id; ?>"><?php echo $p_category->category_name; ?></option>
						<?php
						}
						?>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="blog_short_description">Blog Short Description</label>
				<div class="controls">
					<textarea class="cleditor" name="blog_short_description" id="blog_short_description" rows="3"><?php echo $blog_info->blog_short_description; ?></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="blog_long_description">Blog Long Description</label>
				<div class="controls">
					<textarea class="cleditor" name="blog_long_description" id="blog_long_description" rows="3"><?php echo $blog_info->blog_long_description; ?></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="textarea2">Publication Status</label>
				<div class="controls">
					<select name="publication_status">
						<option>Select Publication Status</option>
						<option value="1">Published</option>
						<option value="0">UnPublished</option>
					</select>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn btn-primary">Update</button>
				<button type="reset" class="btn">Cancel</button>
			</div>
		</fieldset>
	</form>
</div>

<script>
	document.forms['edit_blog_form'].elements['publication_status'].value='<?php echo $blog_info->publication_status ?>';
	document.forms['edit_blog_form'].elements['category_id'].value='<?php echo $blog_info->category_id ?>';
</script>