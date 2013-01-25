<?php

class kdtActions extends sfActions
{
  public function executeMemberSwitch(sfWebRequest $request)
  {
    $form = new opKdtMemberSelectForm();
    $form->bind($request->getParameter('member_select'));
    $this->forward404Unless($form->isValid());
    
    $this->getUser()->login($form->getValue('id'));

    $this->redirectToReferer($request);
  }

  public function executeMemberAdd(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    chdir(sfConfig::get('sf_root_dir'));
    $configuration = sfContext::getInstance()->getConfiguration();

    $task = new opKdtGenerateMemberTask($configuration->getEventDispatcher(), new sfFormatter());
    $task->setConfiguration($configuration);
    $task->run(array(), array('number' => $request['number']));

    $this->redirectToReferer($request);
  }

  protected function redirectToReferer(sfWebRequest $request)
  {
    $redirectUrl = $request->getReferer();
    if ('' === $redirectUrl || preg_match('#/member/login$#', $redirectUrl))
    {
      $redirectUrl = '@homepage';
    }
    $this->redirect($redirectUrl);
  }
}
