<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * opDiaryPluginConfigurationForm
 *
 * @package    OpenPNE
 * @subpackage opKdtPlugin
 * @author     nishizoe <nishizoe@tejimaya.com>
 */
class opKdtPluginConfigurationForm extends BaseForm
{
  public function configure()
  {
    $this->setWidget('email_domain', new sfWidgetFormInput());
    $this->setValidator('email_domain', new sfValidatorString(array('max_length' => 255, 'required' => true)));
    $this->setDefault('email_domain', Doctrine::getTable('SnsConfig')->get('op_kdt_plugin_email_domain', 'example.com'));
    $this->widgetSchema->setHelp('email_domain', 'Please input the email domain for dummy members.\'@\' Is unnecessary.');

    $this->widgetSchema->setNameFormat('op_kdt_plugin[%s]');
  }

  public function save()
  {
    $names = array('email_domain');

    foreach ($names as $name)
    {
      Doctrine::getTable('SnsConfig')->set('op_kdt_plugin_'.$name, $this->getValue($name));
    }
  }
}
