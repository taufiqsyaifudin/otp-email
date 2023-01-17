<?php require_once "controllerUserData.php"; ?>
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
            <form action="forgot-password.php" method="POST" autocomplete="" class="form-horizontal formx" role="form">
                <h2 class="text-center">Lupa Password?</h2>
                <p class="text-center">Silahkan lengkapi form di bawah ini!<br>Kami akan mengirimkan kode OTP ke email anda.</p>
                <?php
                if (count($errors) > 0) {
                ?>
                    <div class="alert alert-danger text-center">
                        <?php
                        foreach ($errors as $error) {
                            echo $error;
                        }
                        ?>
                    </div>
                <?php
                }
                ?>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Tuliskan Alamat Email Saat Registrasi" required value="<?php echo $email ?>">
                </div>
                <div class="form-group">
                    <Center>
                        <button class="btn btn-sm btn-primary" type="submit" name="check-email" style="width: 150px;border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-send (alias) faa-tada animated-hover"></i> Kirim</button>
                        <a href="login" class="btn btn-sm btn-success" style="width: 150px;border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-close faa-tada animated-hover"></i> Batal</a>
                    </Center>

                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once "footer.php"; ?>