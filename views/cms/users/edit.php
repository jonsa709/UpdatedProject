<?php
    view('cms/includes/header.php');
    view('cms/includes/nav.php');
    ?>
    <!-- Main Content -->
    <main class="row">
        <div class="col-12 bg-white my-3">
            <div class="row">
                <div class="col-12">
                    <h1>Edit User</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto">
                    <form action="<?php echo url('users/update/'.$user->id); ?>" method="post">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $user->first_name;?>" required>
                        </div>
                        <div class="form-group">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" name="middle_name" id="middle_name" class="form-control" value="<?php echo $user->middle_name;?>"required >
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo $user->last_name;?>"required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $user->email;?>"required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" <?php echo $user->phone;?>"required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control" required>" <?php echo $user->address;?>"</textarea>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="Active" <?php echo $user->status == 'Active' ? 'selected' : ''; ?>>Active</option>
                                <option value="Inactive" <?php echo $user->status == 'Inactive' ? 'selected' : ''; ?>>Inactive</option>
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

