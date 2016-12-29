<?php

/* index.html.twig */
class __TwigTemplate_011de081e114f711d8e233817352378c06883150a930a03a73a4ec1e6f385f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo " Microblog
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "  <h1>Title</h1>
";
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "  <p>My first page</p>
";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        // line 16
        echo "  <footer>Credits & copyright</footer>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  55 => 15,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/vagrant/src/app/views/index.html.twig");
    }
}
