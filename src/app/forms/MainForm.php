<?php
namespace app\forms;

use std, gui, framework, app;


class MainForm extends AbstractForm
{

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null)
    {    // First Point
        $asset_x = $this->edit->text;
        $asset_y = $this->editAlt->text;
        
        // Second Point
        $asset2_x = $this->edit3->text;
        $asset2_y = $this->edit4->text;
        
        // Result 
        global $arch;
        $arch = sqrt(pow($asset2_x - $asset_x, 2) + pow($asset2_y - $asset_y, 2));
    }

}
