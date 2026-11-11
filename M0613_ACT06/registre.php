<?php
require_once 'config.php';
$titolPagina = 'Crea el teu compte';
require 'header.php';
?>
<h2>Crea el teu compte</h2>
<form action="processa.php" method="post">
    <div>
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required>
    </div>
    <div>
        <label for="cognoms">Cognoms</label>
        <input type="text" id="cognoms" name="cognoms" required>
    </div>
    <div>
        <label for="usuari">Nom d'usuari (mínim <?= MIN_USUARI ?> caràcters)</label>
        <input type="text" id="usuari" name="usuari" required minlength="<?= MIN_USUARI ?>">
    </div>
    <div>
        <label for="clau">Contrasenya (mínim <?= MIN_CLAU ?> caràcters)</label>
        <input type="password" id="clau" name="clau" required minlength="<?= MIN_CLAU ?>">
    </div>
    <div>
        <label for="correu">Correu electrònic</label>
        <input type="email" id="correu" name="correu" required>
    </div>
    <div>
        <label for="naixement">Data de naixement</label>
        <input type="date" id="naixement" name="naixement">
    </div>
    <div>
        <label for="cp">Codi postal</label>
        <input type="text" id="cp" name="cp" pattern="[0-9]{5}" maxlength="5">
    </div>
    <div>
        <label for="adreca">Adreça</label>
        <input type="text" id="adreca" name="adreca">
    </div>
    <div>
        <label for="origen">Com ens has conegut?</label>
        <select id="origen" name="origen">
            <option value="">-- Tria una opció --</option>
            <option value="xarxes">Xarxes socials</option>
            <option value="amics">Amics</option>
            <option value="publicitat">Publicitat</option>
            <option value="altres">Altres</option>
        </select>
    </div>
    <div>
        <label>
            <input type="checkbox" name="newsletter" value="1">
            Vull rebre el butlletí
        </label>
    </div>
    <div>
        <label>
            <input type="checkbox" name="condicions" value="1" required>
            Accepto les condicions d'ús
        </label>
    </div>
    <button type="submit">Registrar-me</button>
</form>
<?php
require 'footer.php';
