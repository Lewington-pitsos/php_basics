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
<ol>
  <?php foreach ($steps as $key => $value): ?>
    <li>
      <?php echo $value['instruction'] ?>
    </li>
  <?php endforeach ?>
</ol>

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
  <a href=<?php echo strtok($_SERVER['REQUEST_URI'], '?') . 'edit?' . $_SERVER['QUERY_STRING']; ?>>Edit</a>
  <form method="POST" action="/puzzle/delete/index.php">
    <div class="form-group">
      <input type="number" class="form-control" value=<?php echo $_GET['id'] ?: 0 ?> name="id" hidden>
    </div>
    <button type="submit" class="btn btn-primary">Delete</button>
  </form>
</div>
