<html>
    <?php require 'Head.php' ?>
<body>
    <?php require 'Navbar.php' ?>
    <section class="section has-background-light app">
        <?php require 'Notifications.php' ?>
        <div class="box">
            <h2 class="subtitle">Lista de Centro</h2>
            <div class="table-container">
            <table class="table is-fullwidth is-striped">
                <thead>
                    <th width="10px">ID</th>
                    <th width="20px">Sigla</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </thead>
            <?php
            foreach($this->centros as $centro) {
                echo "<tr>";
                echo "<td>".$centro->getId()."</td>";
                echo "<td>".$centro->getSigla()."</td>";
                echo "<td>".$centro->getNombre()."</td>";
                echo "<td>";
                echo "<div class='buttons'>";
                $verReciclados = route('centros.reciclados',$centro->getId());
                echo "<a class='button is-info is-small' href='$verReciclados'>Reciclados</a>";
                echo "<button class='button is-danger is-small' onclick='alert()'>Borrar</button>";
                echo "</div>";
                echo "</td>";
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
