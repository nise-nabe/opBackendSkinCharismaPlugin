<?php

class sfWidgetFormSchemaFormatterCharisma extends sfWidgetFormSchemaFormatter
{
  protected
    $rowFormat = "<div class=\"control-group\">\n  %error%%label%\n  <div class=\"controls\">%field%%help%</div>\n%hidden_fields%</div>\n",
    $decoratorFormat = "<fieldset>\n  %content%</fieldset>",
    $helpFormat = "<p class=\"help-block\">%help%</p>",
    $errorFormat = "<span class=\"help-inline\">%error%</span>";

  public function generateLabel($name, $attributes = array())
  {
    $attributes = array_merge($attributes, array('class' => $attributes['class'].' control-label'));

    return parent::generateLabel($name, $attributes);
  }
}
