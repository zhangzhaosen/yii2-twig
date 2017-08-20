<?php

namespace yii\twig\html;

class CssStyle_TokenParser extends BaseCss_TokenParser
{
    public function getNodeClass()
    {
        return '\yii\twig\html\StyleClassNode';
    }

    public function getTag()
    {
        return 'css_style';
    }
}
