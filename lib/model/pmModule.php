<?php

class pmModule extends BasepmModule
{
  public function __toString()
  {
    $modules_names = sfConfig::get('app_pm_module_loader_modules_names');

    return array_key_exists($this->getName(), $modules_names)?$modules_names[$this->getName()]:$this->getName();
  }
}
