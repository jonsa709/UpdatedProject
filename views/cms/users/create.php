<?php
    view('cms/includes/header.php');
    view('cms/includes/nav.php');
    ?>
    <!-- Main Content -->
    <main class="row">
        <div class="col-12 bg-white my-3">
            <div class="row">
                <div class="col-12">
                    <h1>Create User</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto">
                    <form action="<?php echo url('users/store')?>" method="post">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" name="middle_name" id="middle_name" class="form-control" required >
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control" required>"</textarea>
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

