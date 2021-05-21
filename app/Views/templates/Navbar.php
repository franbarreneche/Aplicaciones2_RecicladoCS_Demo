<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img src="<?php echo asset('img/logo-white.svg') ?>" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="/">
                Home
            </a>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <?php if ($usuario) { ?>
                        <form action="<?php echo route('logout') ?>" method="POST">
                            <a class="button is-link is-light">
                                <span class="icon is-small">
                                    <i class="far fa-user"></i>
                                </span>
                                <span>
                                    <?php echo $usuario->getUsername() ?>
                                </span>
                            </a>
                            <button type="submit" class="button is-danger">
                                Salir
                            </button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</nav>
