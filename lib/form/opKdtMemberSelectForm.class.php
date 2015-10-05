<?php

class opKdtMemberSelectForm extends sfForm
{
  public function configure()
  {
    $this->setWidget('id', new sfWidgetFormDoctrineChoice(array('model' => 'Member', 'add_empty' => '未ログイン')));
    $this->setValidator('id', new sfValidatorDoctrineChoice(array('model' => 'Member', 'required' => false)));

    $this->widgetSchema->setNameFormat('member_select[%s]');
  }
}
