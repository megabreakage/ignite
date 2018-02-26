
<?php foreach ($news as $news_item): ?>
  <div class="container pt pb">
    <h4><strong><?php echo $news_item['title']; ?></strong></h4>
    <div class="col-md-10">
      <?php echo $news_item['text']; ?>
    </div>
    <div class="col-md-2 pt">
      <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View Article</a></p>
    </div>
  </div>

<?php endforeach; ?>
