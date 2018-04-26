<?php
$all_puzzles = 'SELECT id, name, approval, difficulty FROM puzzles;';

function puzzle_info($id) {
  return "SELECT * FROM puzzles WHERE id = $id;";
}
