<?php

class TreeController extends Controller
{
    public function actionCreate()
    {
        $this->render('create');
    }

    public function actionEdit()
    {
        $this->render('edit');
    }

    public function actionIndex()
    {
        $trees = Tree::model()->buildTreeArray(Tree::model()->findAll(array('order' => 'parent_id ASC')));
        $this->render('index', array('trees' => $this->createTreeView($trees, 0)));
    }

    function createTreeView($array, $currentParent, $currLevel = 0, $prevLevel = -1)
    {
        $ret = array();
        foreach ($array as $category) {
            $categoryId = $category['id'];
            if ($currentParent == $category['parent_id']) {
                if ($currLevel > $prevLevel) {
                    $ret[] = " <ul class='list-group-tree'> ";
                }
                if ($currLevel == $prevLevel) {
                    $ret[] = " </li> ";
                }
                $ret[] = '<li class="list-group-item-tree"> <label for="subfolder2">' . $category['label'] . '</label> <input type="checkbox" name="subfolder2"/>';
                if ($currLevel > $prevLevel) {
                    $prevLevel = $currLevel;
                }
                $currLevel++;
                $ret[] = implode(PHP_EOL,$this->createTreeView($array, $categoryId, $currLevel, $prevLevel));
                $currLevel--;
            }
        }
        if ($currLevel == $prevLevel) {
            $ret[] = '</li></ul>';
        }
        return $ret;
    }



    // Uncomment the following methods and override them if needed
    /*
    public function filters()
    {
        // return the filter configuration for this controller, e.g.:
        return array(
            '
}inlineFilterName',
            array(
                'class'=>'path.to.FilterClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }

    public function actions()
    {
        // return external action classes, e.g.:
        return array(
            'action1'=>'path.to.ActionClass',
            'action2'=>array(
                'class'=>'path.to.AnotherActionClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }
    */
}