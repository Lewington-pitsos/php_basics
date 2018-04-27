<?php
$all_puzzles = 'SELECT id, name, approval, difficulty FROM puzzles;';

function puzzle_info($id) {
  return "SELECT * FROM puzzles WHERE id = $id;";
}

function update_puzzle($params) {
  return "UPDATE puzzles SET notes = '$params[notes]', puzzle = '$params[puzzle]', scenario = '$params[scenario]', soloution_conclusion = '$params[soloution_conclusion]', name = '$params[name]' WHERE id = $params[id];";
}

function puzzle_steps($id) {
  return "SELECT instruction, step_number FROM steps WHERE puzzle_id = $id ORDER BY step_number ASC;";
}

function new_puzzle($params) {
  return "INSERT INTO puzzles (name, scenario, puzzle, soloution_conclusion, notes) VALUES ('$params[name]', '$params[scenario]', '$params[puzzle]', '$params[soloution_conclusion]', '$params[notes]');";
}

function delete_puzzle($id) {
  return "DELETE FROM puzzles WHERE id = $id";
}

//+------------------------------------------------------------------+
//                                STEPS
//+------------------------------------------------------------------+

function remove_steps($id) {
  return "DELETE FROM steps WHERE puzzle_id = $id;";
}

function insert_steps($instructions, $puzzle_id) {
  $inserts = all_inserts($instructions, $puzzle_id);
  return "INSERT INTO steps (step_number, instruction, puzzle_id) VALUES $inserts;";
}

function all_inserts($instructions, $puzzle) {
  $inserts = '';
  $number = 1;
  foreach ($instructions as $instruction) {
    $inserts .= row($number, $instruction, $puzzle);
    $number += 1;
  }
  $inserts = rtrim($inserts, ', ');
  return $inserts;
}

function row($number, $instruction, $puzzle) {
  $res = "(";
  $res .= $number;
  $res .= prepaired(stringified($instruction));
  $res .= prepaired($puzzle);
  $res .= "), ";
  return $res;
}

function prepaired($value) {
  return ', ' . $value;
}

function stringified($string) {
  return "'" . addslashes($string) . "'";
}
