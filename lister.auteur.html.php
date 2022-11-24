
    <div class="conteneur">
        <h3>LISTE DES Auteurs</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Profession</th>
            </tr>
            <?php foreach ($auteurs as $val):  ?>
                        <tr>
                            <th><?php echo($val["id"]); ?> </th>
                            <th> <?php echo($val["nom"]); ?></th>
                            <th><?php echo($val["prenom"]); ?></th>
                            <th><?php echo($val["profession"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>
