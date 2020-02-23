<?php
view('cms/includes/header.php');
view('cms/includes/nav.php');
?>
<!-- Main Content -->
<main class="row">
    <div class="col-12 bg-white my-3">
        <div class="row">
            <div class="col-12">
                <h1>Create Article</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mx-auto">
                <form action="<?php echo url('articles/store')?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" class="form-control" required>"</textarea>
                    </div>

                    <div class="form-group">
                        <label for="featured_image">Featured Image</label>
                        <input type="file" name="featured_image" id="featured_image" class="form-control-file" accept="image/*" >
                        <div class="img-preview mt-3"></div>
                    </div>
                    <div class="form-group">
                        <label for="published_at">Published At</label>
                        <input type="text" name="published_at" id="published_at" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="Draft">Draft</option>
                            <option value="Published">Published</option>
                            <option value="Unpublished">Unpublished</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary"><i class="fas fa-save mr-2"></i>Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- Main Content -->
<?php
view('cms/includes/messages.php');
view('cms/includes/footer.php');
?>

