
    <div class="conteneur">
        <h3>LISTE DES CLASSES</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Litterature</th>
                <th>Histoire</th>
                <th>Geographie</th>
            </tr>
            <?php foreach ($ouvrage as $val):  ?>
                        <tr>
                            <th><?php echo($val["id"]); ?> </th>
                            <th> <?php echo($val["litterature"]); ?></th>
                            <th><?php echo($val["histoire"]); ?></th>
                            <th><?php echo($val["geographie"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>
