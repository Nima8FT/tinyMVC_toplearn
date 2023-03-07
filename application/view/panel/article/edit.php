<?php $this->include('panel.layouts.header') ?>

<form action="<?php $this->url('article/update/' . $article['id']) ?>" method="POST">
  <section class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" value="<?= $article['title'] ?>" id="title"
      placeholder="title ..." />
  </section>
  <section class="form-group">
    <label for="cat_id">Category</label>
    <select class="form-control" id="cat_id" name="cat_id">
      <?php foreach ($categories as $category) {
        if ($article['cat_id'] == $category['id']) { ?>
          <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
        <?php }
      } ?>
    </select>
  </section>
  <section class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" value="<?= $article['body'] ?>" id="body" name="body" rows="5"
      placeholder="body ..."></textarea>
  </section>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php $this->include('panel.layouts.footer') ?>