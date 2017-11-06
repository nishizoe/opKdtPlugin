<h2><?php echo __('Kdt Plugin Configuration') ?></h2>

<form action="<?php echo url_for('opKdtPlugin/index') ?>" method="post">
  <table>
    <?php echo $form ?>
    <tr>
      <td colspan="2"><input type="submit" value="<?php echo __('Save') ?>" /></td>
    </tr>
  </table>
</form>
