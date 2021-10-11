<?php include "../templates/include/header.php" ?>

<form action="email.php" method="POST">
    <h2>Contacto</h2>
    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" required>

        <label for="email">Email</label>
        <input type="text" name="email" required>
    </div>
    <br>
    <button type="submit" value="Enviar correo">Enviar Correo</button>
</form>


<?php include "../templates/include/footer.php" ?>