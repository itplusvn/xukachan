<?php

/* E:\xampp7\htdocs\xukachan/themes/shizuka/partials/header.htm */
class __TwigTemplate_8353a6f353f5364c59ba893759792524c2115c6b50701539eda6725fa48287ca extends Twig_Template
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
        echo "<div id=\"page\">

    <header id=\"header\" class=\"container\">
        <div id=\"mast-head\">
            <div id=\"logo\">
                <a href=\"/\" title=\"Magazine\" rel=\"home\"><img src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\" /></a>
            </div>
        </div>
        <nav class=\"navbar navbar-inverse clearfix nobot\">
            <a id=\"responsive-menu-button\" href=\"#swipe-menu\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class=\"nav-collapse\" id=\"swipe-menu-responsive\">

                ";
        // line 18
        if ($this->getAttribute(($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 19
            echo "                <ul class=\"nav\">
                    <li>
                    <span id=\"close-menu\">
                        <a href=\"#\" class=\"close-this-menu\">Close</a>
                            <script type=\"text/js\">
                                jQuery('a.sidr-class-close-this-menu').click(function(){
                                    jQuery('div.sidr').css({
                                        'right': '-476px'
                                    });
                                    jQuery('body').css({
                                        'right': '0'
                                    });
                                });
                            </script>

                    </span>
                    </li>
                    ";
            // line 36
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = $this->getAttribute(($context["staticMenu"] ?? null), "menuItems", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction((($context["staticMenu"] ?? null) . "::items")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 37
            echo "                </ul>
                ";
        }
        // line 39
        echo "            </div><!--/.nav-collapse -->

        </nav><!-- /.navbar -->

    </header><!-- #masthead -->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 39,  67 => 37,  62 => 36,  43 => 19,  41 => 18,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"page\">

    <header id=\"header\" class=\"container\">
        <div id=\"mast-head\">
            <div id=\"logo\">
                <a href=\"/\" title=\"Magazine\" rel=\"home\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"logo\" /></a>
            </div>
        </div>
        <nav class=\"navbar navbar-inverse clearfix nobot\">
            <a id=\"responsive-menu-button\" href=\"#swipe-menu\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class=\"nav-collapse\" id=\"swipe-menu-responsive\">

                {% if staticMenu.menuItems %}
                <ul class=\"nav\">
                    <li>
                    <span id=\"close-menu\">
                        <a href=\"#\" class=\"close-this-menu\">Close</a>
                            <script type=\"text/js\">
                                jQuery('a.sidr-class-close-this-menu').click(function(){
                                    jQuery('div.sidr').css({
                                        'right': '-476px'
                                    });
                                    jQuery('body').css({
                                        'right': '0'
                                    });
                                });
                            </script>

                    </span>
                    </li>
                    {% partial staticMenu ~ \"::items\" items=staticMenu.menuItems %}
                </ul>
                {% endif %}
            </div><!--/.nav-collapse -->

        </nav><!-- /.navbar -->

    </header><!-- #masthead -->", "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/partials/header.htm", "");
    }
}
