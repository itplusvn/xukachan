<?php

/* E:\xampp7\htdocs\xukachan/themes/shizuka/partials/slider.htm */
class __TwigTemplate_26125453cf139f2e5cea35440bb8a7621bf45286a2fe3f514f7cc84fb838601b extends Twig_Template
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
        echo "<div id=\"slider\" class=\"clearfix\">
    <div id=\"slide\" class=\"flexslider\">


        ";
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["slideshow"] ?? null), "slideshow", array()), "slides", array())) {
            // line 6
            echo "        <ul class=\"slides\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["slideshow"] ?? null), "slideshow", array()), "slides", array()));
            foreach ($context['_seq'] as $context["i"] => $context["slide"]) {
                // line 8
                echo "                <li>
                    <a href=\"#\" title=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "image", array()), "title", array()), "html", null, true);
                echo "\"
                       rel=\"bookmark\">
                        <img width=\"770\" height=\"364\"
                             src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "image", array()), "path", array()), "html", null, true);
                echo "\"
                             alt=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "image", array()), "title", array()), "html", null, true);
                echo "\"/>
                    </a>
                    <div class=\"entry\">
                        ";
                // line 16
                if ($this->getAttribute($context["slide"], "name", array())) {
                    echo "<h4>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "name", array()), "html", null, true);
                    echo "</h4>";
                }
                // line 17
                echo "                        ";
                if ($this->getAttribute($context["slide"], "description", array())) {
                    echo "<p>";
                    echo $this->getAttribute($context["slide"], "description", array());
                    echo "</p>";
                }
                // line 18
                echo "                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
        ";
        }
        // line 23
        echo "







    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/partials/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  74 => 21,  66 => 18,  59 => 17,  53 => 16,  47 => 13,  43 => 12,  37 => 9,  34 => 8,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"slider\" class=\"clearfix\">
    <div id=\"slide\" class=\"flexslider\">


        {% if slideshow.slideshow.slides %}
        <ul class=\"slides\">
            {% for i, slide in slideshow.slideshow.slides %}
                <li>
                    <a href=\"#\" title=\"{{ slide.image.title }}\"
                       rel=\"bookmark\">
                        <img width=\"770\" height=\"364\"
                             src=\"{{ slide.image.path }}\"
                             alt=\"{{ slide.image.title }}\"/>
                    </a>
                    <div class=\"entry\">
                        {% if slide.name %}<h4>{{ slide.name }}</h4>{% endif %}
                        {% if slide.description %}<p>{{ slide.description|raw }}</p>{% endif %}
                    </div>
                </li>
            {% endfor %}
        </ul>
        {% endif %}








    </div>
</div>", "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/partials/slider.htm", "");
    }
}
