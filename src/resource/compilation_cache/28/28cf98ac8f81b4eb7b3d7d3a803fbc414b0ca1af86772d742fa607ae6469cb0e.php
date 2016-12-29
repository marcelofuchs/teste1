<?php

/* base.html.twig */
class __TwigTemplate_dc9175b578e20e635eb5e1e86600cdea9b242d6d481e1239c38e1522f657d7db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- base.html.twig -->
<!DOCTYPE html>
<html>
  <head>
      <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>   
      ";
        // line 6
        $this->displayBlock('style', $context, $blocks);
        echo "   
  </head>
  <body>
    ";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 10
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 11
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 12
        echo "  </body>
    ";
        // line 13
        $this->displayBlock('script', $context, $blocks);
        // line 14
        echo "</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_style($context, array $blocks = array())
    {
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
    }

    // line 11
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 13
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 13,  78 => 11,  73 => 10,  68 => 9,  63 => 6,  58 => 5,  54 => 14,  52 => 13,  49 => 12,  46 => 11,  43 => 10,  41 => 9,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/vagrant/src/app/views/base.html.twig");
    }
}
