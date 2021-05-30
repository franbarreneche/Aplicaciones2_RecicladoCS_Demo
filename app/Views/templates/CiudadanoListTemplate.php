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
                    <th>ID</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Acciones</th>
                </thead>
            <?php
            foreach($this->ciudadanos as $ciudadano) {
                echo "<tr>";
                echo "<td>".$ciudadano->getId()."</td>";
                echo "<td>".$ciudadano->getApellido()."</td>";
                echo "<td>".$ciudadano->getNombre()."</td>";
                echo "<td>".$ciudadano->getDni()."</td>";
                echo "<td><div class='buttons'>";
                echo "<button class='button is-info is-small' onclick='alert()'>Ver</button>";
                $verCentros = route('ciudadanos.centros',$ciudadano->getId());
                echo "<a class='button is-link is-small' href='$verCentros'>Centros</a>";
                echo "<button class='button is-danger is-small' onclick='alert()'>Ver</button>";
                echo "</div></td>";
                echo "</tr>";
            }
            ?>
            </table>
            </div>
            <div class="field">
            <button class="button is-primary" onclick="alert('No implementado')">Nuevo</button>
            </div>
        </div>
    </section>
        <?php require 'Footer.php' ?>
</body>
</html>
