<div id="memberSwitchBox_<?php echo $gadget->id ?>" class="dparts memberSwitchBox"><div class="parts">

<?php echo $form->renderFormTag(url_for('kdt/memberSwitch'), array('style' => 'display: inline')) ?>
<?php echo $form->renderHiddenFields() ?>
<?php echo $form['id']->render(array('style' => 'width: 120px')) ?> 
<input type="submit" value="切替"/>
</form>

<?php $addMemberForm = new BaseForm() ?>
<?php echo $addMemberForm->renderFormTag(url_for('kdt/memberAdd'), array('style' => 'display: inline'))?>
<?php echo $addMemberForm->renderHiddenFields() ?>
<input type="submit" value="+10"/>
</form>

</div></div>
