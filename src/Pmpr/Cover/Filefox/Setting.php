<?php

namespace Pmpr\Cover\Filefox;

use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass;
use Pmpr\Common\Foundation\Interfaces\IconInterface;

/**
 * Class Setting
 * @package Pmpr\Cover\Filefox
 */
class Setting extends BaseClass
{
    public function setProps()
    {
        $this->id = self::getRegisteredComponentName();
        $this->setArg(self::PARENT_SLUG, 'themes.php');

        parent::setProps();
    }

    public function setTranslatableProps()
    {
        $this->title = __('Cover Setting', PR__CVR__FILEFOX);
    }

    public function initForm()
    {
        $this->addSegment(
            self::getSegmentObject(self::GENERAL)
                ->setTitle(__('General', PR__CVR__FILEFOX))
                ->setIcon(IconInterface::ICON_FASM_GEAR)
                ->setDescription(__('General Configuration', PR__CVR__FILEFOX))

        );
        parent::initForm();
    }
}
