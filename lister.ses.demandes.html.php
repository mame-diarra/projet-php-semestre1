
    <div class="conteneur">
        <h3>LISTE DES Auteurs</h3>
        <table>
            <tr>
                <th>Date</th>
                <th>INSCRIPTION</th>
                <th>MOTIF</th>
            </tr>
            <?php foreach ($auteurs as $val):  ?>
                        <tr>
                            <th><?php echo($val["date"]); ?> </th>
                            <th> <?php echo($val["inscription"]); ?></th>
                            <th><?php echo($val["motif"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>
