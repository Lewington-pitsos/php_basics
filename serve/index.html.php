<h1>Actual Logic Puzzles</h1>
<br>
<h2>Welcome!</h2>

<p>
   Basically actuallogicpuzzles.com is a collection of logic puzzles that are actually logic puzzles rather than lateral-thinking riddles, really advanced maths in disguise or those stupid cross-reference grids. Every listed puzzle should be unambiguously solvable for laymen like us, and I only included the ones I actually found fun. Some of them <i>are</i> absurdly difficult though, so watch out.
</p>
<p>
   Otherwise, enjoy (the table can be sorted).
</p>
<p>
   If you know of a fun logic puzzle that you think should be listed but isn't, please feel free to let me know about it at: lewington@student.unumelb.edu.au
</p>
<table id="puzzlelist" class="tablesorter">

  <thead>
    <tr>
        <th class="first header">Puzzle</th>
        <th class="other header">Approval</th>
        <th class="other header headerSortDown">Difficulty</th>
    </tr>
  </thead>

  <tbody>
  <?php foreach($res as $row): ?>
    <tr>
      <td>
        <a href="#"><?php echo $row['name']; ?></a>
      </td>
      <td>
        <?php echo $row['approval']; ?>
      </td>
      <td>
        <?php echo $row['difficulty']; ?>
      </td>

    </tr>
    <?php endforeach; ?>
  </tbody>

</table>
