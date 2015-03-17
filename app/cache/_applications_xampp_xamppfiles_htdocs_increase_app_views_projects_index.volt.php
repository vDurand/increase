<h2>Mes projets</h2>

<?php echo $this->getContent(); ?>
<table>
<?php foreach ($projects as $project) { ?>
    <tr>
    <td style="width: 10%;"><?php echo $project->getNom(); ?></td>
    <td style="width: 40%;">
        <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $project->getAvancement(); ?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?php echo $project->getAvancement(); ?>%;">
                <?php echo $project->getAvancement(); ?>%
            </div>
        </div>
    </td>
    <td style="width: 10%;">reste <?php echo $project->getDayLeft(); ?></td>
    <td style="width: 10%;">oucrir</td>
    <br>
    </tr>
<?php } ?>
</table>