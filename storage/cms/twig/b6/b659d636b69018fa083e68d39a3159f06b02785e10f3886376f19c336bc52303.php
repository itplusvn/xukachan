<?php

/* E:\xampp7\htdocs\xukachan/themes/shizuka/pages/blog/category.htm */
class __TwigTemplate_c84950b5f0a23e4a817a70b85bc509af502a4b9bac87f2a340ef4266fe5a55ed extends Twig_Template
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
        echo "<article>
";
        // line 2
        $context["posts"] = $this->getAttribute(($context["blogPosts"] ?? null), "posts", array());
        // line 3
        echo "

    <div class=\"tg-titleborder\">
        <span>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</span>
    </div>
    ";
        // line 8
        $context["posts"] = $this->getAttribute(($context["blogPosts"] ?? null), "posts", array());
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "    <div class=\"entry-content\">
        <div class=\"row\">
            <div class=\"col-sm-3\">
                ";
            // line 13
            if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                // line 14
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\">
                    <img data-src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "filename", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "description", array()), "html", null, true);
                echo "\">
                </a>
                ";
            } else {
                // line 18
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\">
                    <img  src=\"";
                // line 19
                echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/no-image.png");
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "\">
                </a>
                ";
            }
            // line 22
            echo "            </div>
            <div class=\"col-sm-8 excerpt\">
                <h3 class=\"entry-title\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a>
                </h3>
                <p>";
            // line 27
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", $this->getAttribute($context["post"], "content", array()), 200));
            echo "</p>
                <p class=\"moretag\"><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\"> Read more</a></p>
            </div>
        </div>

        </div>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "    <div class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "

    <!--Paging-->
    ";
        // line 40
        if (($this->getAttribute(($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 41
            echo "    <ul class=\"pagination\">
        ";
            // line 42
            if (($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 43
                echo "        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 45
            echo "
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 47
                echo "        <li class=\"page-item ";
                echo ((($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
            <a class=\"page-link\" href=\"";
                // line 48
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
        ";
            // line 52
            if (($this->getAttribute(($context["posts"] ?? null), "lastPage", array()) > $this->getAttribute(($context["posts"] ?? null), "currentPage", array()))) {
                // line 53
                echo "        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 55
            echo "    </ul>
    ";
        }
        // line 57
        echo "</article>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/pages/blog/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  166 => 55,  160 => 53,  158 => 52,  155 => 51,  144 => 48,  139 => 47,  135 => 46,  132 => 45,  126 => 43,  124 => 42,  121 => 41,  119 => 40,  114 => 37,  105 => 35,  93 => 28,  89 => 27,  82 => 25,  77 => 22,  69 => 19,  64 => 18,  54 => 15,  49 => 14,  47 => 13,  42 => 10,  36 => 9,  34 => 8,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article>
{% set posts = blogPosts.posts %}


    <div class=\"tg-titleborder\">
        <span>{{ this.page.title }}</span>
    </div>
    {% set posts = blogPosts.posts %}
    {% for post in posts %}
    <div class=\"entry-content\">
        <div class=\"row\">
            <div class=\"col-sm-3\">
                {% if post.featured_images.count %}
                <a href=\"{{ post.url }}\">
                    <img data-src=\"{{ post.featured_images[0].filename }}\" src=\"{{ post.featured_images[0].path }}\" alt=\"{{ post.featured_images[0].description }}\">
                </a>
                {% else %}
                <a href=\"{{ post.url }}\">
                    <img  src=\"{{'assets/images/no-image.png'|theme}}\" alt=\"{{ post.title }}\">
                </a>
                {% endif %}
            </div>
            <div class=\"col-sm-8 excerpt\">
                <h3 class=\"entry-title\">
                    <a href=\"{{ post.url }}\">{{ post.title }}</a>
                </h3>
                <p>{{ html_limit(post.content,200)|raw }}</p>
                <p class=\"moretag\"><a href=\"{{ post.url }}\"> Read more</a></p>
            </div>
        </div>

        </div>

    {% else %}
    <div class=\"no-data\">{{ noPostsMessage }}</div>
    {% endfor %}


    <!--Paging-->
    {% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
        <li class=\"page-item {{ posts.currentPage == page ? 'active' : null }}\">
            <a class=\"page-link\" href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
        </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
    {% endif %}
</article>", "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/pages/blog/category.htm", "");
    }
}
