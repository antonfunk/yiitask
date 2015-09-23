<?php
Yii::import('zii.widgets.CPortlet');
class MainMenu extends CPortlet
{
    public $title;
    public $menu;

    public function init()
    {
        $this->hideOnEmpty = true;
        $controllerId = Yii::app()->controller;
        if (method_exists($controllerId, 'getMainMenu')) {
            $this->menu = $controllerId->getMainMenu();
        }


        for ($i = 1; $i<= 3; $i++) {
            $dataReader[] =array('label'=>'Example-'.$i, 'url'=>array('#'));
        }
        $dataReader[] =array('label'=>'Home', 'url'=>array('/site/index'));
        $dataReader[] =   array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'));
        $dataReader[] =   array('label'=>'Contact', 'url'=>array('/site/contact'));


        foreach ($dataReader as $row) {
            $this->menu[] = array('label' => $row['label'], 'url' => $row['url']);
        }
        parent::init();
    }

    protected function renderContent()
    {
        if (isset ($this->menu)) {
            $theme = 'webroot.themes.' . Yii::app()->theme->name . '.views.menu.mainmenu';
            $this->render($theme, array('menu' => $this->menu));
        }
    }
}