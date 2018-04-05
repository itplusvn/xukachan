<?php

/* E:\xampp7\htdocs\xukachan/plugins/kenshin/facebook/components/fanpageface/default.htm */
class __TwigTemplate_08333e71f67171673b35144fcdbab43252ad7ca00870a66a28c6bf3a2a199308 extends Twig_Template
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
        echo "<div class=\"sidebar-item\" style=\"width: 100%\">
<div class=\"fb-page\"
     data-tabs=\"timeline,events,messages\"
     data-href=\"https://www.facebook.com/";
        // line 4
        echo twig_escape_filter($this->env, ($context["fanFace"] ?? null), "html", null, true);
        echo "\"
     data-width=\"380\"
     data-hide-cover=\"false\"></div>

</div>

<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1411450375798466';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\xukachan/plugins/kenshin/facebook/components/fanpageface/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar-item\" style=\"width: 100%\">
<div class=\"fb-page\"
     data-tabs=\"timeline,events,messages\"
     data-href=\"https://www.facebook.com/{{ fanFace }}\"
     data-width=\"380\"
     data-hide-cover=\"false\"></div>

</div>

<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1411450375798466';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
", "E:\\xampp7\\htdocs\\xukachan/plugins/kenshin/facebook/components/fanpageface/default.htm", "");
    }
}
