<h1><?php echo $puzzle['name'] ?></h1>
<form method="POST" action="/puzzle/save?id=" <?php echo $_GET['id'] ?>>

  <div class="form-group">
    <label for="scenario">Scenario</label>
    <textarea class="form-control" id="scenario" type="text" cols="50" rows="20" name="scenaio"><?php echo $puzzle['scenario'] ?></textarea>
  </div>

  <div class="form-group">
    <label for="puzzle">Puzzle</label>
    <textarea class="form-control" id="puzzle" type="text" cols="50" rows="20" name="puzzle"><?php echo $puzzle['puzzle'] ?></textarea>
  </div>

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
