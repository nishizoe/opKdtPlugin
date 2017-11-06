<?php

/**
 * opKdtPlugin actions.
 *
 * @package    OpenPNE
 * @subpackage opKdtPlugin
 * @author     nishizoe <nishizoe@tejimaya.com>
 */
class opKdtPluginActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfWebRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new opKdtPluginConfigurationForm();

    if ($request->isMethod(sfRequest::POST))
    {
      $this->form->bind($request->getParameter($this->form->getName()));
      if ($this->form->isValid())
      {
        $this->form->save();

        $this->getUser()->setFlash('notice', 'Saved configuration successfully.');

        $this->redirect('opKdtPlugin/index');
      }
    }
  }
}
