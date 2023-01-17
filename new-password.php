<?php require_once "controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
if ($email == false) {
    header('Location: login-user.php');
}
?>
<?php require_once "header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
        </div>

        <div class="col-sm-4">
            <form action="new-password.php" method="POST" autocomplete="" class="form-horizontal formx" role="form">
                <h2 class="text-center">Ubah Password</h2>
                <p class="text-center">Silahkan lengkapi form di bawah ini!</p>
                <form method="POST" autocomplete="off">
                    <?php
                    if (isset($_SESSION['info'])) {
                    ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if (count($errors) > 0) {
                    ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach ($errors as $showerror) {
                                echo $showerror;
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password Baru" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Konfirmasi Password Baru" required>
                    </div>
                    <div class="form-group">
                        <button class="form-control  btn btn-sm btn-primary" type="submit" name="change-password" style="border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-save (alias) faa-tada animated-hover"></i> Simpan</button>
                    </div>
                </form>
        </div>
    </div>
</div>
<?php require_once "footer.php"; ?>