<?php

echo KService::get('mod://site/wufoo.html')
    ->module($module)
    ->attribs($attribs)
    ->display();