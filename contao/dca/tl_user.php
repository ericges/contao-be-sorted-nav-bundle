<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_user']['fields']['ges_beSortNav'] = [
    'exclude' => true,
    'filter' => true,
    'default' => '1',
    'inputType' => 'checkbox',
    'eval' => [
        'tl_class' => 'w50'
    ],
    'sql' => "char(1) NOT NULL default '1'"
];

PaletteManipulator::create()
    ->addField('ges_beSortNav', 'backend_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('admin', 'tl_user')
;
