<?php $this->include('panel.layouts.header') ?>

<form action="<?php $this->url('category/update/' . $category['id']) ?>" method="POST">
    <section class="form-group">
        <label for="name">Name</label>
        <input type="text" value="<?= $category['name'] ?>" class="form-control" name="name" id="name" placeholder="name ...">
    </section>
    <section class="form-group">
        <label for="description">Description</label>
        <input type="text" value="<?= $category['description'] ?>" name="description" class="form-control" id="description" placeholder="description ...">
    </section>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php $this->include('panel.layouts.footer') ?>