<html>
    <?php require 'Head.php' ?>
<body>
    <?php require 'Navbar.php' ?>
    <section class="section has-background-light app">
        <?php require 'Notifications.php' ?>
        <div class="box">
            <h2 class="subtitle">Lista de Ciudadanos</h2>
            <div class="table-container">
            <table class="table is-fullwidth is-striped">
                <thead>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Acciones</th>
                </thead>
            <?php
            foreach($this->ciudadanos as $ciudadano) {
                echo "<tr>";
                echo "<td>".$ciudadano->getApellido()."</td>";
                echo "<td>".$ciudadano->getNombre()."</td>";
                echo "<td>".$ciudadano->getDni()."</td>";
                echo "<td><a class='button is-info' href=''>Ver Centros donde coolabora</a></td>";
                echo "</tr>";
            }
            ?>
            </table>
            </div>
        </div>
    </section>
        <?php require 'Footer.php' ?>
</body>
</html>
