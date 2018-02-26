
<?php echo validation_errors(); ?>
<?php echo form_open('news/create'); ?>
  <div class="container" class="form-group">
    <label for="title" class="form-control">Title</label>
    <input class="" type="input" class="form-control" name="title"> <br />

    <label for="text" class="form-control">Text</label>
    <textarea name="text" rows="8" cols="80" class="form-control"></textarea><br />

    <input type="submit" name="submit" value="Create news Item">
  </div>
</form>
