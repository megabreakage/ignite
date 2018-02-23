
<?php foreach ($news as $news_item): ?>
  <?php echo $news_item['title']; ?>
  <div class="main">
    <?php echo $news_item['text']; ?>
  </div>
  <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View Article</a></p>
<?php endforeach; ?>
