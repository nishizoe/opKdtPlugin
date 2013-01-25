<?php

class kdtComponents extends sfComponents
{
  public function executeMemberSwitchBox(sfWebRequest $request)
  {
    $this->form = new opKdtMemberSelectForm();
  }
}
