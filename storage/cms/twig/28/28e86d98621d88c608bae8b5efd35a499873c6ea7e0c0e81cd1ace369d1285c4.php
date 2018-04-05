<?php

/* E:\xampp7\htdocs\xukachan/plugins/kenshin/facebook/components/comment/default.htm */
class __TwigTemplate_14c5bb6043664785b3fc2daa2b55c091fd044095415c73babdc7e0bd09c8798f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"fb-comments\" data-href=\"\" data-numposts=\"";
        echo twig_escape_filter($this->env, ($context["numposts"] ?? null), "html", null, true);
        echo "\" data-width=\"100%\"></div>
<div id=\"fb-root\"></div>
<script>
    var url = window.location.href;
    \$('.fb-comments').attr('data-href',url);
</script>
";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\xukachan/plugins/kenshin/facebook/components/comment/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fb-comments\" data-href=\"\" data-numposts=\"{{ numposts }}\" data-width=\"100%\"></div>
<div id=\"fb-root\"></div>
<script>
    var url = window.location.href;
    \$('.fb-comments').attr('data-href',url);
</script>
", "E:\\xampp7\\htdocs\\xukachan/plugins/kenshin/facebook/components/comment/default.htm", "");
    }
}
