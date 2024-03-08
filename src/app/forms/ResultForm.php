<?php
namespace app\forms;

use std, gui, framework, app;


class ResultForm extends AbstractForm
{

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null)
    {    
        // Redirect Button
    }

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $e = null)
    {    
        // Showing Result
        global $arch;
        $this->label->text = "{$arch}";
        
        
    }


}
