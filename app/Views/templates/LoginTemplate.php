<html>

<head>
    <?php require 'Head.php' ?>
</head>

<body>
    <?php require 'Navbar.php' ?>
    <section class="section has-background-light app">
        <?php require 'Notifications.php' ?>
        <div class="box">
            <form method="POST" action="/login">
                <div class="field">
                    <label class="label">Email</label>
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" type="email" name="email" value="<?php echo old('email') ?>" autofocus />
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <label class="label">Contraseña</label>
                    <p class="control has-icons-left">
                        <input class="input" type="password" name="password" />
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </p>
                </div>

                <div>
                    <button type="submit" class="button is-info">Entrar</button>
                </div>
            </form>
        </div>
    </section>
    <?php require 'Footer.php' ?>
</body>

</html>
