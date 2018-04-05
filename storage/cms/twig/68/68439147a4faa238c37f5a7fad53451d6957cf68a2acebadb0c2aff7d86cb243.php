<?php

/* E:\xampp7\htdocs\xukachan/plugins/rainlab/pages/components/staticmenu/items.htm */
class __TwigTemplate_f165676b6c6554e891291a5e55b223601609057c481997462906e2c3eca9707b extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !$this->getAttribute($this->getAttribute($context["item"], "viewBag", array()), "isHidden", array())) {
                // line 2
                echo "    <li role=\"presentation\" class=\"";
                echo (($this->getAttribute($context["item"], "isActive", array())) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute($context["item"], "isChildActive", array())) ? ("child-active") : (""));
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "viewBag", array()), "cssClass", array()), "html", null, true);
                echo "\">
        ";
                // line 3
                if ($this->getAttribute($context["item"], "url", array())) {
                    // line 4
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                    echo "\" ";
                    echo (($this->getAttribute($this->getAttribute($context["item"], "viewBag", array()), "isExternal", array())) ? ("target=\"_blank\"") : (""));
                    echo ">
                ";
                    // line 5
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "
            </a>
        ";
                } else {
                    // line 8
                    echo "            <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "</span>
        ";
                }
                // line 10
                echo "
        ";
                // line 11
                if ($this->getAttribute($context["item"], "items", array())) {
                    // line 12
                    echo "            <ul class=\"sub-menu dropdown-menu\">";
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['items'] = $this->getAttribute($context["item"], "items", array())                    ;
                    echo $this->env->getExtension('CMS')->partialFunction((($context["__SELF__"] ?? null) . "::items")                    , $context['__cms_partial_params']                    );
                    unset($context['__cms_partial_params']);
                    echo "</ul>
        ";
                }
                // line 14
                echo "    </li>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\xukachan/plugins/rainlab/pages/components/staticmenu/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  59 => 12,  57 => 11,  54 => 10,  48 => 8,  42 => 5,  35 => 4,  33 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for item in items if not item.viewBag.isHidden %}
    <li role=\"presentation\" class=\"{{ item.isActive ? 'active' : '' }} {{ item.isChildActive ? 'child-active' : '' }} {{ item.viewBag.cssClass }}\">
        {% if item.url %}
            <a href=\"{{ item.url }}\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}>
                {{ item.title }}
            </a>
        {% else %}
            <span>{{ item.title }}</span>
        {% endif %}

        {% if item.items %}
            <ul class=\"sub-menu dropdown-menu\">{% partial __SELF__ ~ \"::items\" items=item.items %}</ul>
        {% endif %}
    </li>
{% endfor %}", "E:\\xampp7\\htdocs\\xukachan/plugins/rainlab/pages/components/staticmenu/items.htm", "");
    }
}
