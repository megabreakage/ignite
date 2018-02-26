
<div class="container">
  <div class="col-md-6 col-md-offset-3 text-center">
    <?php echo validation_errors(); ?>
  </div>
</div>

<?php echo form_open('news/create'); ?>
  <div class="container form-group">
    <div class="col-md-12 pt pb">
      <input type="input" name="title" class="form-control" placeholder="Title">
    </div>
    <div class="col-md-12 pb">
      <textarea name="text" rows="8" cols="80" class="form-control" placeholder="text"></textarea>
    </div>
    <div class="col-md-3">
      <input type="submit" name="submit" value="Create a News Item" class="btn btn-primary form-control">
    </div>
  </div>
</form>
