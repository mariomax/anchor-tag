<!--
    <Contact (PHP form) section.
    <section class="contact section group" id="contact">
    <h2>Contact Anchor Tag Design:</h2> 
-->

<?php foreach ($contacts as $row): ?>
    <div class="col span_12_of_12">
        <?php echo $row['greeting']; ?>
    </div>
    <div class="col span_8_of_12">
        <?php echo $row['paragraph']; ?>
    </div>
    <?php endforeach; ?>
    <div class="col span_4_of_12">
        <img src="<?php echo ($row['image']); ?>" alt="image and hello world">
    </div>