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
                        <input type="file" name="featured_image" id="featured_image" class="form-control" accept="image/*" required>
                        <br><br>
                        <button type="submit">Submit</button>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category Id</label>
                        <input type="text" name="category_id" id="category_id" class="form-control" required>
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
                        <button type="submit" class="btn btn-outline-primary"><i class="fas fa-save mr2"></i>Save</button>
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

