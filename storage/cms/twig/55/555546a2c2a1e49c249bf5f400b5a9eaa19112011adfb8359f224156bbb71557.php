<?php

/* E:\xampp7\htdocs\xukachan/themes/shizuka/partials/sidebar.htm */
class __TwigTemplate_d2fa1b9ce6c276ce88c4d00f30bc44c7fc4d1a8363edce70398563e3598d9e7c extends Twig_Template
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
        echo "<div id=\"sidebar\" class=\"span4\">


";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("fanpageFacebook"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "
    <div id=\"tabwidget\" class=\"widget tab-container\">
        <ul id=\"tabnav\" class=\"clearfix\">
            <li><h3><a href=\"#tab1\"><img src=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/view-white-bg.png");
        echo "\" alt=\"Recent\">Recent</a>
            </h3></li>
        </ul>
        <div id=\"tab-content\">
            <div id=\"tab1\" style=\"display: block; \">
                ";
        // line 13
        $context["posts"] = $this->getAttribute(($context["blogPosts"] ?? null), "posts", array());
        // line 14
        echo "                <ul id=\"itemContainer\" class=\"recent-tab\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 16
            echo "                        <li>
                            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">
                                ";
            // line 18
            if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                // line 19
                echo "                                <img class=\"thumb\" data-src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "filename", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "description", array()), "html", null, true);
                echo "\">
                                ";
            } else {
                // line 21
                echo "                                <img class=\"thumb\" src=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/no-image.png");
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "\">
                                ";
            }
            // line 23
            echo "                            </a>
                            <h4 class=\"post-title\"><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h4>
                            <p class=\"info\">
                                 Posted ";
            // line 26
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 27
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 28
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 29
                echo "                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "
                            </p>
                            <div class=\"clearfix\"></div>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </ul>
                <div class=\"clear\"></div>
                <!-- End most viewed post -->
            </div>
        </div><!-- /#tab-content -->

    </div><!-- /#tab-widget -->

</div><!-- sidebar -->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/partials/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 37,  142 => 35,  133 => 30,  119 => 29,  110 => 28,  92 => 27,  88 => 26,  81 => 24,  78 => 23,  70 => 21,  60 => 19,  58 => 18,  54 => 17,  51 => 16,  46 => 15,  43 => 14,  41 => 13,  33 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sidebar\" class=\"span4\">


{% component 'fanpageFacebook' %}

    <div id=\"tabwidget\" class=\"widget tab-container\">
        <ul id=\"tabnav\" class=\"clearfix\">
            <li><h3><a href=\"#tab1\"><img src=\"{{ 'assets/images/view-white-bg.png'|theme }}\" alt=\"Recent\">Recent</a>
            </h3></li>
        </ul>
        <div id=\"tab-content\">
            <div id=\"tab1\" style=\"display: block; \">
                {% set posts = blogPosts.posts %}
                <ul id=\"itemContainer\" class=\"recent-tab\">
                    {% for post in posts %}
                        <li>
                            <a href=\"{{ post.url }}\">
                                {% if post.featured_images.count %}
                                <img class=\"thumb\" data-src=\"{{ post.featured_images[0].filename }}\" src=\"{{ post.featured_images[0].path }}\" alt=\"{{ post.featured_images[0].description }}\">
                                {% else %}
                                <img class=\"thumb\" src=\"{{'assets/images/no-image.png'|theme}}\" alt=\"{{ post.title }}\">
                                {% endif %}
                            </a>
                            <h4 class=\"post-title\"><a href=\"{{ post.url }}\">{{ post.title }}</a></h4>
                            <p class=\"info\">
                                 Posted {% if post.categories.count %} in {% endif %}
                                    {% for category in post.categories %}
                                        <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                                    {% endfor %}

                            </p>
                            <div class=\"clearfix\"></div>
                        </li>
                    {% else %}
                        <li class=\"no-data\">{{ noPostsMessage }}</li>
                    {% endfor %}
                </ul>
                <div class=\"clear\"></div>
                <!-- End most viewed post -->
            </div>
        </div><!-- /#tab-content -->

    </div><!-- /#tab-widget -->

</div><!-- sidebar -->", "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/partials/sidebar.htm", "");
    }
}
