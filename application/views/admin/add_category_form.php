<div class="box-content">
	<form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_category" method="post">
		<fieldset>
			<legend>Add Category</legend>
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
				<label class="control-label" for="typeahead">Category Name <em style="color:red">*</em></label>
				<div class="controls">
					<input type="text" class="span6 typeahead" name="category_name" id="category_name" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="textarea2">Description</label>
				<div class="controls">
					<textarea class="cleditor" name="category_description" id="textarea2" rows="3"></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="textarea2">Publication Status</label>
				<div class="controls">
					<select name="publication_status">
						<option>Select Option</option>
						<option value="1">Published</option>
						<option value="0">UnPublished</option>
					</select>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn btn-primary">Save changes</button>
				<button type="reset" class="btn">Cancel</button>
			</div>
		</fieldset>
	</form>
</div>