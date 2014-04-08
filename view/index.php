view index loaded <br>
<table border="1">
  <?php foreach ($DATA['table'] as $row):?>
    <tr>
    <?php foreach ($row as $item): ?>
      <td><?php echo $item;?></td>
    <?php endforeach; ?>
    </tr>
  <?php endforeach;?>
</table>