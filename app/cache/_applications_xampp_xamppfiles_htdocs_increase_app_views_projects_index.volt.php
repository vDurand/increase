<h2>Mes projets</h2>

<?php echo $this->getContent(); ?>
<?php $i = 0; ?>
<table>
<?php foreach ($projects as $project) { ?>
    <tr>
    <td style="width: 10%;"><?php echo $project->getNom(); ?></td>
    <td style="width: 40%;">
        <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $avancement[$i]; ?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?php echo $avancement[$i]; ?>%;">
                <?php echo $avancement[$i]; ?>%
            </div>
        </div>
    </td>
    <td style="width: 10%;">reste</td>
    <td style="width: 10%;">oucrir</td>
    <br>
    <?php $i += 1; ?>
    </tr>
<?php } ?>
</table>