<html>
    <?php require 'Head.php' ?>
<body>
    <?php require 'Navbar.php' ?>
    <section class="section has-background-light app">
        <?php require 'Notifications.php' ?>
        <div class="box">
            <h2 class="subtitle">Lista de Centros en los que recolecta <strong><?php echo $this->ciudadano->getNombre()." ".$this->ciudadano->getApellido() ?></strong></h2>
            <div class="table-container">
            <table class="table is-fullwidth is-striped">
                <thead>
                    <th>ID</th>
                    <th>Sigla</th>
                    <th>Nombre</th>
                    <th>Nombre del Coordinador</th>
                </thead>
            <?php
            foreach($this->ciudadano->getCentrosRecolecta() as $centro) {
                echo "<tr>";
                echo "<td>".$centro->getId()."</td>";
                echo "<td>".$centro->getSigla()."</td>";
                echo "<td>".$centro->getNombre()."</td>";
                $coordinador = $centro->getCoordinador();
                echo "<td>".$coordinador->getNombre()." ".$coordinador->getApellido()."</td>";
                echo "</tr>";
            }
            ?>
            </table>
            </div>
            <div class="field">
            <a class="button is-link" href="<?php echo route('ciudadanos.lista') ?>">Volver</a>
            </div>
        </div>
    </section>
        <?php require 'Footer.php' ?>
</body>
</html>
