<?php
    view('cms/includes/header.php');
    view('cms/includes/nav.php');
    ?>
    <!-- Main Content -->
    <main class="row">
        <div class="col-12 bg-white my-3">
            <div class="row">
                <div class="col-12">
                    <h1>Change Password</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto">
                    <form action="<?php echo url('profile/change')?>" method="post">
                        <div class="form-group">
                            <label for="Old_password">Old Password</label>
                            <input type="password" name="Old_password" id="Old_password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
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

