<!-- 
    Process content section.
    <section class="process section group">
    <h2 id="process">The Mission &amp; The Process:</h2>
-->
    <?php foreach ($process as $row): ?>
        <div class="col span_3_of_12">
            <h4><?php echo $row['font_a']; ?></h4>
            <h3><?php echo $row['step']; ?></h3>
            <ul><?php echo $row['points']; ?></ul>
        </div>
    <?php endforeach; ?>