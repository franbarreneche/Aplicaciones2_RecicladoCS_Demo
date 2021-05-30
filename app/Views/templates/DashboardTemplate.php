<html>
    <?php require 'Head.php' ?>
<body>
    <?php require 'Navbar.php' ?>
    <section class="section has-background-light app">
        <?php require 'Notifications.php' ?>
        <div class="card mb-2">
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <span class="icon is-large">
                            <i class="fas fa-2x fa-address-card"></i>
                        </span>
                    </div>
                    <div class="media-content">
                        <p class="title is-4"><?php echo $usuario->getUsername() ?></p>
                        <p class="subtitle is-6"><?php echo $usuario->getEmail() ?></p>
                    </div>
                </div>
                <div class="content">
                    Bienvenido! Tu rol es <strong class="has-text-warning"><?php echo $usuario->getRol()->getNombre() ?></strong>
                    <br>
                    Recuerde lavarse las manos y protegerse del <em class="has-text-info">#COVID19</em>
                    <br>
                    <time><?php echo now()->format('d/m/Y') ?></time>
                    <time><?php echo now()->setTimezone('-3')->format('H:i') ?>hs</time>
                </div>
            </div>
        </div>
        <div class="box">
            <h2 class="subtitle">Acciones disponibles</h2>
            <?php if ($usuario->getRol()->getId() === 3) { ?>
                <div>
                    <a class="button is-large">
                        <span class="icon is-medium">
                            <i class="fas fa-users"></i>
                        </span>
                        <span>Ver Mi Centro</span>
                    </a>
                </div>
            <?php } ?>
            <?php if ($usuario->getRol()->getId() === 1 || $usuario->getRol()->getId() === 2) { ?>
                <div class="column">
                    <a class="button is-large">
                        <span class="icon is-medium">
                            <i class="fas fa-user-circle"></i>
                        </span>
                        <span>Usuarios</span>
                    </a>
                    <a class="button is-large" href="<?php echo route('centros.lista')?>">
                        <span class="icon is-medium">
                            <i class="fas fa-industry"></i>
                        </span>
                        <span>Centros</span>
                    </a>
                    <a class="button is-large" href="<?php echo route('ciudadanos.lista')?>">
                        <span class="icon is-medium">
                            <i class="fas fa-users"></i>
                        </span>
                        <span>Ciudadanos</span>
                    </a>
                </div>
            <?php } ?>
        </div>
    </section>
        <?php require 'Footer.php' ?>
</body>
</html>
