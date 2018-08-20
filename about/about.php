<!--
    About content section.
    section class="about section group" id="about">
    <h2>About the Work:</h2> 
-->

<?php foreach ($about as $row): ?>
    <div class="col span_12_of_12">
        <?php echo $row['fa_icon']; ?>
        <h3><?php echo $row['title']; ?></h3>
        <p><?php echo $row['content']; ?></p>
    </div>
<?php endforeach; ?>
