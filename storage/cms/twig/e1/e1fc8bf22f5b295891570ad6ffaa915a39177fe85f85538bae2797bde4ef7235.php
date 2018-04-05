<?php

/* E:\xampp7\htdocs\xukachan/themes/shizuka/layouts/default.htm */
class __TwigTemplate_29c7c7ede4293dd4cf3c0fb072a80dbb1be0a0f7e3a2f6c2886165c9d06c5d82 extends Twig_Template
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
        echo "<!--[if IE 7]>
<html class=\"ie ie7\" lang=\"en-US\">
<![endif]-->

<!--[if IE 8]>
<html class=\"ie ie8\" lang=\"en-US\">
<![endif]-->

<!--[if IE 9]>
<html class=\"ie ie9\" lang=\"en-US\">
<![endif]-->

<!--[if !(IE 7) | !(IE 8) | !(IE 9)  ]><!-->
<html lang=\"en-US\">
<!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo " - xukachan.com</title>
        <meta name=\"description\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">


        <link rel='stylesheet' id='swipemenu-css'  href=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/swipemenu.css");
        echo "\" type='text/css' media='all' />
        <link rel='stylesheet' id='flexslider-css'  href=\"";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/flexslider.css");
        echo "\" type='text/css' media='all' />
        <link rel='stylesheet' id='bootstrap-css'  href=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.css");
        echo "\" type='text/css' media='all' />
        <link rel='stylesheet' id='bootstrap-responsive-css'  href=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap-responsive.css");
        echo "\" type='text/css' media='all' />
        <link rel='stylesheet' id='simplyscroll-css'  href=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/jquery.simplyscroll.css");
        echo "\" type='text/css' media='all' />
        <link rel='stylesheet' id='ie-styles-css'  href=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/ie.css");
        echo "\" type='text/css' media='all' />
        <link rel='stylesheet' id='Roboto-css'  href='http://fonts.googleapis.com/css?family=Roboto' type='text/css' media='all' />
        <link rel='stylesheet' id='magz-style-css'  href=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" type='text/css' media='all' />
        ";
        // line 35
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 36
        echo "        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
        <script type='text/javascript' src=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/html5.js");
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/bootstrap.min.js");
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/jquery.flexslider.js");
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/jquery.flexslider.init.js");
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/jquery.bxslider.js");
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/jquery.rating.js");
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/jquery.bxslider.init.js");
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/jquery.idTabs.min.js");
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/jquery.simplyscroll.js");
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/fluidvids.min.js");
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/jquery.sidr.min.js");
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/jquery.touchSwipe.min.js");
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/jquery.swipemenu.init.js");
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 50
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/custom.js");
        echo "\"></script>
    </head>
    <body>

        <!-- Header -->
            ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "
        <!-- Content -->
        <div id=\"content\" class=\"container\">
            <div id=\"main\" class=\"row-fluid\">
                <div id=\"main-left\" class=\"span8\">
                    ";
        // line 61
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 62
        echo "                </div><!-- #main-left -->
                ";
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "            </div><!-- #main -->
        </div>

        <!-- Footer -->
            ";
        // line 68
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 69
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 70
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 70,  184 => 69,  180 => 68,  174 => 64,  170 => 63,  167 => 62,  165 => 61,  158 => 56,  154 => 55,  146 => 50,  142 => 49,  138 => 48,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  118 => 43,  114 => 42,  110 => 41,  106 => 40,  102 => 39,  98 => 38,  94 => 37,  91 => 36,  88 => 35,  84 => 34,  79 => 32,  75 => 31,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  53 => 24,  46 => 20,  42 => 19,  38 => 18,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--[if IE 7]>
<html class=\"ie ie7\" lang=\"en-US\">
<![endif]-->

<!--[if IE 8]>
<html class=\"ie ie8\" lang=\"en-US\">
<![endif]-->

<!--[if IE 9]>
<html class=\"ie ie9\" lang=\"en-US\">
<![endif]-->

<!--[if !(IE 7) | !(IE 8) | !(IE 9)  ]><!-->
<html lang=\"en-US\">
<!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <title>{{ this.page.title }} - xukachan.com</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">


        <link rel='stylesheet' id='swipemenu-css'  href=\"{{'assets/css/swipemenu.css'|theme }}\" type='text/css' media='all' />
        <link rel='stylesheet' id='flexslider-css'  href=\"{{'assets/css/flexslider.css'|theme }}\" type='text/css' media='all' />
        <link rel='stylesheet' id='bootstrap-css'  href=\"{{'assets/css/bootstrap.css'|theme }}\" type='text/css' media='all' />
        <link rel='stylesheet' id='bootstrap-responsive-css'  href=\"{{'assets/css/bootstrap-responsive.css'|theme }}\" type='text/css' media='all' />
        <link rel='stylesheet' id='simplyscroll-css'  href=\"{{'assets/css/jquery.simplyscroll.css'|theme }}\" type='text/css' media='all' />
        <link rel='stylesheet' id='ie-styles-css'  href=\"{{'assets/css/ie.css'|theme }}\" type='text/css' media='all' />
        <link rel='stylesheet' id='Roboto-css'  href='http://fonts.googleapis.com/css?family=Roboto' type='text/css' media='all' />
        <link rel='stylesheet' id='magz-style-css'  href=\"{{'assets/css/style.css'|theme }}\" type='text/css' media='all' />
        {% styles %}
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
        <script type='text/js' src=\"{{ 'assets/js/html5.js'|theme }}\"></script>
        <script type='text/js' src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
        <script type='text/js' src=\"{{ 'assets/js/jquery.flexslider.js'|theme }}\"></script>
        <script type='text/js' src=\"{{ 'assets/js/jquery.flexslider.init.js'|theme }}\"></script>
        <script type='text/js' src=\"{{ 'assets/js/jquery.bxslider.js'|theme }}\"></script>
        <script type='text/js' src=\"{{ 'assets/js/jquery.rating.js'|theme }}\"></script>
        <script type='text/js' src=\"{{ 'assets/js/jquery.bxslider.init.js'|theme }}\"></script>
        <script type='text/js' src=\"{{ 'assets/js/jquery.idTabs.min.js'|theme }}\"></script>
        <script type='text/js' src=\"{{ 'assets/js/jquery.simplyscroll.js'|theme }}\"></script>
        <script type='text/js' src=\"{{ 'assets/js/fluidvids.min.js'|theme }}\"></script>
        <script type='text/js' src=\"{{ 'assets/js/jquery.sidr.min.js'|theme }}\"></script>
        <script type='text/js' src=\"{{ 'assets/js/jquery.touchSwipe.min.js'|theme }}\"></script>
        <script type='text/js' src=\"{{ 'assets/js/jquery.swipemenu.init.js'|theme }}\"></script>
        <script type='text/js' src=\"{{ 'assets/js/custom.js'|theme }}\"></script>
    </head>
    <body>

        <!-- Header -->
            {% partial 'header' %}

        <!-- Content -->
        <div id=\"content\" class=\"container\">
            <div id=\"main\" class=\"row-fluid\">
                <div id=\"main-left\" class=\"span8\">
                    {% page %}
                </div><!-- #main-left -->
                {% partial 'sidebar' %}
            </div><!-- #main -->
        </div>

        <!-- Footer -->
            {% partial 'footer' %}
        {% scripts %}
    </body>
</html>", "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/layouts/default.htm", "");
    }
}
