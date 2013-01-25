<?php

class opKdtMemberSelectForm extends sfForm
{
  public function configure()
  {
    $this->setWidget('id', new sfWidgetFormDoctrineChoice(array('model' => 'Member', 'add_empty' => false)));
    $this->setValidator('id', new sfValidatorDoctrineChoice(array('model' => 'Member')));

    $this->widgetSchema->setNameFormat('member_select[%s]');
  }
}
