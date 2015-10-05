<?php

class opKdtMemberSelectForm extends sfForm
{
  public function configure()
  {
    $currentUser = sfContext::getInstance()->getUser();
    $memberId = $currentUser->isSNSMember() ? $currentUser->getMemberId() : '';

    $this->setWidget('id', new sfWidgetFormDoctrineChoice(array('model' => 'Member', 'add_empty' => '未ログイン', 'default' => $memberId)));
    $this->setValidator('id', new sfValidatorDoctrineChoice(array('model' => 'Member', 'required' => false)));

    $this->widgetSchema->setNameFormat('member_select[%s]');
  }
}
