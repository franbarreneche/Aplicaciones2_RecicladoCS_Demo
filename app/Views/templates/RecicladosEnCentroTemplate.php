<html>
    <?php require 'Head.php' ?>
<body>
    <?php require 'Navbar.php' ?>
    <section class="section has-background-light app">
        <?php require 'Notifications.php' ?>
        <div class="box">
            <h2 class="subtitle">Lista de Reciclados En Centro <?php echo $this->centro->getId() ?></h2>
            <div class="field">
                <label class="label">Sigla del Centro:</label>
                <input class="input" type="text" value="<?php echo $this->centro->getSigla() ?>" disabled>
            </div>
            <div class="field">
                <label class="label">Nombre del Centro:</label>
                <input class="input" type="text" value="<?php echo $this->centro->getNombre() ?>" disabled>
            </div>
            <div class="table-container">
            <div class="field">
                <label class="label">Lista de Reciclados:</label>
            </div>
            <table class="table is-fullwidth is-striped">
                <thead>
                    <th width="10px">ID</th>
                    <th>Nombre Ciudadano</th>
                    <th>DNI Ciudadano</th>
                    <th>Objeto</th>
                    <th>Fecha Contacto</th>
                    <th>Fecha Recolección</th>
                    <th>Transporte</th>
                    <th>Nombre Recolector</th>
                    <th>Tel. Recolector</th>
                </thead>
            <?php
            foreach($this->centro->getReciclados() as $reciclado) {
                echo "<tr>";
                echo "<td>".$reciclado->getId()."</td>";
                echo "<td>".$reciclado->getCiudadano()->getNombre()." ".$reciclado->getCiudadano()->getApellido()."</td>";
                echo "<td>".$reciclado->getCiudadano()->getDni()."</td>";
                echo "<td>".$reciclado->getObjeto()."</td>";
                echo "<td>".Carbon\Carbon::parse($reciclado->getFechaContacto())->format('d-m-Y')."</td>";
                echo "<td>".Carbon\Carbon::parse($reciclado->getFechaRecoleccion())->format('d-m-Y')."</td>";
                echo "<td>".$reciclado->getTransporte()."</td>";
                echo "<td>".$reciclado->getRecolector()->getNombre()." ".$reciclado->getRecolector()->getApellido()."</td>";
                echo "<td>".$reciclado->getRecolector()->getTelefono()."</td>";
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
