<?php

/* E:\xampp7\htdocs\xukachan/themes/shizuka/pages/blog/tags.htm */
class __TwigTemplate_d57965dfa715c10554ed689cc95c6ac599ab0ff4e4e3f870444e661bc397d959 extends Twig_Template
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

    <div class=\"tg-titleborder\">
        <span>Search results for \"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["blogTagSearch"] ?? null), "tag", array()), "name", array()), "html", null, true);
        echo "\"</span>
    </div>

";
        // line 7
        if ($this->getAttribute(($context["blogTagSearch"] ?? null), "posts", array())) {
            // line 8
            echo "    <ul>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["blogTagSearch"] ?? null), "tag", array()), "posts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["Post"]) {
                // line 10
                echo "

        <div class=\"entry-content\">
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    ";
                // line 15
                if ($this->getAttribute($this->getAttribute($context["Post"], "featured_images", array()), "count", array())) {
                    // line 16
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Post"], "url", array()), "html", null, true);
                    echo "\">
                        <img data-src=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["Post"], "featured_images", array()), 0, array(), "array"), "filename", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["Post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["Post"], "featured_images", array()), 0, array(), "array"), "description", array()), "html", null, true);
                    echo "\">
                    </a>
                    ";
                } else {
                    // line 20
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Post"], "url", array()), "html", null, true);
                    echo "\">
                        <img  src=\"";
                    // line 21
                    echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/no-image.png");
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Post"], "title", array()), "html", null, true);
                    echo "\">
                    </a>
                    ";
                }
                // line 24
                echo "                </div>
                <div class=\"col-sm-8 excerpt\">
                    <h3 class=\"entry-title\">
                        <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["Post"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Post"], "title", array()), "html", null, true);
                echo "</a>
                    </h3>
                    ";
                // line 29
                if ($this->getAttribute($context["Post"], "categories", array())) {
                    // line 30
                    echo "                    - published in
                    ";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["Post"], "categories", array()));
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
                        // line 32
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                        echo "</a>";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            echo ", ";
                        }
                        // line 33
                        echo "                    ";
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
                    // line 34
                    echo "                    ";
                }
                // line 35
                echo "
                    <p>";
                // line 36
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", $this->getAttribute($context["Post"], "content", array()), 200));
                echo "</p>
                    <p class=\"moretag\"><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["Post"], "url", array()), "html", null, true);
                echo "\"> Read more</a></p>
                </div>
            </div>

        </div>


        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    </ul>
";
        } else {
            // line 47
            echo "    No posts found.
";
        }
        // line 49
        echo "





</article>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/pages/blog/tags.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 49,  161 => 47,  157 => 45,  143 => 37,  139 => 36,  136 => 35,  133 => 34,  119 => 33,  110 => 32,  93 => 31,  90 => 30,  88 => 29,  81 => 27,  76 => 24,  68 => 21,  63 => 20,  53 => 17,  48 => 16,  46 => 15,  39 => 10,  35 => 9,  32 => 8,  30 => 7,  24 => 4,  19 => 1,);
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

    <div class=\"tg-titleborder\">
        <span>Search results for \"{{ blogTagSearch.tag.name }}\"</span>
    </div>

{% if blogTagSearch.posts %}
    <ul>
        {% for Post in blogTagSearch.tag.posts %}


        <div class=\"entry-content\">
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    {% if Post.featured_images.count %}
                    <a href=\"{{ Post.url }}\">
                        <img data-src=\"{{ Post.featured_images[0].filename }}\" src=\"{{ Post.featured_images[0].path }}\" alt=\"{{ Post.featured_images[0].description }}\">
                    </a>
                    {% else %}
                    <a href=\"{{ Post.url }}\">
                        <img  src=\"{{'assets/images/no-image.png'|theme}}\" alt=\"{{ Post.title }}\">
                    </a>
                    {% endif %}
                </div>
                <div class=\"col-sm-8 excerpt\">
                    <h3 class=\"entry-title\">
                        <a href=\"{{ Post.url }}\">{{ Post.title }}</a>
                    </h3>
                    {% if Post.categories %}
                    - published in
                    {% for category in Post.categories %}
                    <a href=\"{{category.url|e}}\">{{category.name}}</a>{% if not loop.last %}, {% endif %}
                    {% endfor %}
                    {% endif %}

                    <p>{{ html_limit(Post.content,200)|raw }}</p>
                    <p class=\"moretag\"><a href=\"{{ Post.url }}\"> Read more</a></p>
                </div>
            </div>

        </div>


        {% endfor %}
    </ul>
{% else %}
    No posts found.
{% endif %}






</article>", "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/pages/blog/tags.htm", "");
    }
}
