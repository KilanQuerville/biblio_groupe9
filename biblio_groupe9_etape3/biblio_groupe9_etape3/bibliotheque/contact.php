
    <body>
        <form method="post" action="receive.php">
            <fieldset>
                <legend>Informations sur le client</legend>
            <label for="name"> Nom:</label>
            <input type="text" id="name" name="client_name"><br>

            <input type="radio" id="part" name="client_type" value="Particulier">
            <label for="part">Particulier</label>
            <input type="radio" id="ent" name="client_type" value="Entreprise">
                <label for="ent">Entreprise</label>

            <br>

            <label for="mail"> Courriel:</label>
            <input type="mail" id="mail" name="client_mail"><br>
            </fieldset>
            <label for="objets">les raisons :</label>
        <select>
            <option value="1y">Développer un site web</option>
            <option value="2y" selected>Entretien d'embauche</option>
            <option value="5y">Cybersécurité</option>
        </select><br>
<label for="addreq">Demandes complémentaires:</label><br>
            <textarea id="addreq" name="message" placeholder="Entrez ici vos demandes"></textarea><br>

            <button type="submit">Envoyer</button><br>
        </form>
    </body>
</html>