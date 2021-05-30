<html>
    <?php require 'Head.php' ?>
<body>
    <?php require 'Navbar.php' ?>
    <section class="section has-background-light app">
        <?php require 'Notifications.php' ?>
        <div class="box">
            <h2 class="subtitle">Lista de Reciclados en el centro <strong><?php echo $this->centro->getNombre() ?></strong></h2>
            <div class="table-container">
            <table class="table is-fullwidth is-striped">
                <thead>
                    <th>ID</th>
                    <th>Datos Ciudadano</th>
                    <th>Objeto</th>
                    <th>Fecha Contacto</th>
                    <th>Fecha Recolección</th>
                    <th>Transporte</th>
                    <th>Datos Recolector</th>
                </thead>
            <?php
            foreach($this->centro->getReciclados() as $reciclado) {
                echo "<tr>";
                echo "<td>".$reciclado->getId()."</td>";
                echo "<td>".$reciclado->getCiudadano()->getNombre()." ".$reciclado->getCiudadano()->getApellido()." (".$reciclado->getCiudadano()->getDni().")</td>";
                echo "<td>".$reciclado->getObjeto()."</td>";
                echo "<td>".$reciclado->getFechaContacto()."</td>";
                echo "<td>".$reciclado->getFechaRecoleccion()."</td>";
                echo "<td>".$reciclado->getTransporte()."</td>";
                echo "<td>".$reciclado->getRecolector()->getNombre()." ".$reciclado->getRecolector()->getApellido()." (".$reciclado->getRecolector()->getTelefono().")</td>";
                echo "</tr>";
            }
            ?>
            </table>
            </div>
            <div class="field">
            <a class="button is-link" href="<?php echo route('centros.lista') ?>">Volver</a>
            </div>
        </div>
    </section>
        <?php require 'Footer.php' ?>
</body>
</html>
