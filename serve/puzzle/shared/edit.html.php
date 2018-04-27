<h1><?php echo $puzzle['name'] ?: 'New Puzzle' ?></h1>
<form method="POST" action="/puzzle/save/index.php">

  <div class="form-group">
    <input type="number" class="form-control" value=<?php echo $_GET['id'] ?: 0 ?> name="id" hidden>
  </div>

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" value="<?php echo $puzzle['name'] ?: 'choose a name' ?>" name="name">
  </div>

  <div class="form-group">
    <label for="scenario">Scenario</label>
    <textarea class="form-control" id="scenario" type="text" cols="50" rows="20" name="scenario"><?php echo $puzzle['scenario'] ?></textarea>
  </div>

  <div class="form-group">
    <label for="puzzle">Puzzle</label>
    <textarea class="form-control" id="puzzle" type="text" cols="50" rows="20" name="puzzle"><?php echo $puzzle['puzzle'] ?></textarea>
  </div>

  <label>Steps</label>
  <ol>
    <?php foreach ($steps as $key => $value): ?>
      <?php $step_number = "step[$value[step_number]]"?>
      <div class="form-group">
        <label for=<?php echo $step_number ?>><?php echo $step_number ?></label>
        <input type="text" class="form-control" value=<?php echo $value['instruction'] ?> name=<?php echo $step_number ?>>
      </div>
    <?php endforeach ?>
  </ol>

  <div class="form-group">
    <label for="soloution_conclusion">Soloution Concolusion</label>
    <textarea class="form-control" id="soloution_conclusion" type="text" cols="50" rows="20" name="soloution_conclusion"><?php echo $puzzle['soloution_conclusion'] ?></textarea>
  </div>

  <div class="form-group">
    <label for="notes">Notes</label>
    <textarea class="form-control" id="notes" type="text" cols="50" rows="20" name="notes"><?php echo $puzzle['notes'] ?></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

<div class='nav'>
  <a href='/'>Back</a>
</div>
