<h1><?php echo $puzzle['name'] ?></h1>

<h3>Scenario</h3>
<p>
  <?php echo $puzzle['scenario'] ?>
</p>

<h3>Puzzle</h3>
<p>
  <?php echo $puzzle['puzzle'] ?>
</p>

<h3>Soloution</h3>
<p>
  <?php echo $puzzle['soloution_conclusion'] ?>
</p>

<?php if ($puzzle['notes']): ?>
  <h3>Notes</h3>
  <p>
    <?php echo $puzzle['notes'] ?>
  </p>
<?php endif; ?>

<div class='nav'>
  <a href='/'>Back</a>
</div>
