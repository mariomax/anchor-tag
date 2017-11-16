<!--
    <Contact (PHP form) section.
    <section class="contact section group" id="contact">
    <h2>Contact Anchor Tag Design:</h2> 
-->

    <?php foreach ($contacts as $row): ?>
        <div>
            <?php echo $row['greeting']; ?>
            <?php echo $row['paragraph']; ?>
            <?php echo $row['sign_off']; ?>
        </div>
    <?php endforeach; ?>
