<?php
$all_puzzles = 'SELECT id, name, approval, difficulty FROM puzzles;';

function puzzle_info($id) {
  return "SELECT * FROM puzzles WHERE id = $id;";
}

function update_puzzle($params) {
  return "UPDATE puzzles SET notes = '$params[notes]', puzzle = '$params[puzzle]', scenario = '$params[scenario]', soloution_conclusion = '$params[soloution_conclusion]', name = '$params[name]' WHERE id = $params[id];";
}

function puzzle_steps($id) {
  return "SELECT instruction FROM steps WHERE puzzle_id = $id ORDER BY step_number ASC;";
}
