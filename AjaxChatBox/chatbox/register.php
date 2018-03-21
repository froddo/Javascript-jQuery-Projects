<?php include "inc/header.php"; ?>
    <div class="container">
        <?php include "inc/navbar.php"; ?>
        <?php if (isset($_GET['error'])) : ?>
            <br>
            <div class="card-panel white-text red lighten-2">
                <?php echo $_GET['error']; ?>
            </div>
        <?php endif; ?>
        <?php if (isset($_GET['success'])) : ?>
            <br>
            <div class="card-panel white-text teal lighten-2">
                <?php echo $_GET['success']; ?>
            </div>
        <?php endif; ?>
        <h2 class="white-text">Register</h2>
        <div class="progress">
            <div class="determinate" style="width: 70%"></div>
        </div>

        <form action="db_register.php" method="post">
            <div class="input-field">
                <input type="text" name="name" id="name" class="white-text">
                <label class="active" for="name">Name</label>
            </div>
            <div class="input-field">
                <input type="email" name="email" id="email" class="white-text validate">
                <label class="active" for="email">Email</label>
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password" class="white-text">
                <label class="active" for="password">Password</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
<?php include "inc/footer.php"; ?>