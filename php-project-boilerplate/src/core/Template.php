<?php
class Template
{
  public function load($template, $variables=[])
  {
    ob_start();
    include ROOT."/src/templates/".$template.".php";
    ob_end_flush();
  }
}
