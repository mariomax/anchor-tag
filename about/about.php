<!--
    About content section.
    section class="about section group" id="about">
    <h2>About the Work:</h2> 
-->

    <?php foreach ($about as $row): ?>
        <div class="col span_9_of_12">
            <p><?php echo $row['content']; ?></p>
        </div>
        <div class="col span_3_of_12">
            <img src="<?php echo ($row['image']); ?>" alt="image and hello world">
        </div>
    <?php endforeach; ?>
