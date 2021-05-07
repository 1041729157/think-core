<?php
namespace Qscmf\Builder\FormType\Select;

use Qscmf\Builder\FormType\FormType;
use Think\View;

class Select implements FormType {

    public function build(array $form_type){
        $view = new View();
        $view->assign('form', $form_type);
        if($form_type['item_option']['read_only']){
            $content = $view->fetch(__DIR__ . '/select_read_only.html');
        }
        else{
            $content = $view->fetch(__DIR__ . '/select.html');
        }
        return $content;
    }
}