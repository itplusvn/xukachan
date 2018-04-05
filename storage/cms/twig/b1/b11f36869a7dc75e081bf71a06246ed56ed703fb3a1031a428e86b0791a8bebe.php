<?php

/* E:\xampp7\htdocs\xukachan/themes/shizuka/pages/home.htm */
class __TwigTemplate_bc3eb74d9d0c230345c99df5b7fd673c0f722887fa6e5833e29c13c7725d3aa4 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("slider"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
";
        // line 3
        $context["posts"] = $this->getAttribute(($context["blogPosts"] ?? null), "posts", array());
        // line 4
        echo "
        <div id=\"home-middle\" class=\"clearfix\">
            <div class=\"left span6\">
                <h3 class=\"title\"><a href=\"#\" title=\"Game News\"><span>Java</span></a></h3>
                <div class=\"row-fluid\">
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["post"]) {
            // line 10
            echo "                        ";
            if (($context["key"] == 0)) {
                // line 11
                echo "                            <article class=\"post\">
                                ";
                // line 12
                if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                    // line 13
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                    echo "\" class=\"image_thumb_zoom\">
                                        <img data-src=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "filename", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "description", array()), "html", null, true);
                    echo "\">
                                    </a>
                                ";
                } else {
                    // line 17
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                    echo "\">
                                        <img  src=\"";
                    // line 18
                    echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/no-image.png");
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                    echo "\">
                                    </a>
                                ";
                }
                // line 21
                echo "
                                <h4 class=\"post-title\">
                                    <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "\"
                                       rel=\"bookmark\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a>
                                </h4>
                                ";
                // line 26
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", $this->getAttribute($context["post"], "content_html", array()), 100));
                echo "
                            </article>
                        ";
            } else {
                // line 29
                echo "                            <article class=\"post\">
                                <div class=\"entry clearfix\">
                                    <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "\" rel=\"bookmark\">
                                        ";
                // line 32
                if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                    // line 33
                    echo "                                                <img class=\"thumb\" data-src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "filename", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "description", array()), "html", null, true);
                    echo "\">
                                        ";
                } else {
                    // line 35
                    echo "                                                <img class=\"thumb\" src=\"";
                    echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/no-image.png");
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                    echo "\">
                                        ";
                }
                // line 37
                echo "                                        <h4 class=\"post-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</h4>
                                    </a>
                                    <p>";
                // line 39
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", $this->getAttribute($context["post"], "content_html", array()), 40));
                echo "</p>
                                </div>
                            </article>
                        ";
            }
            // line 43
            echo "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "                            <div class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    <div class=\"clearfix\"></div>
                </div>
            </div>

            <div class=\"right span6\">
                <h3 class=\"title\"><a title=\"October CMS\"><span>October CMS</span></a></h3>
                <div class=\"row-fluid\">
                ";
        // line 53
        $context["posts"] = $this->getAttribute(($context["blogPosts2"] ?? null), "posts", array());
        // line 54
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["post"]) {
            // line 55
            echo "                    ";
            if (($context["key"] == 0)) {
                // line 56
                echo "                    <article class=\"post\">
                        ";
                // line 57
                if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                    // line 58
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                    echo "\" class=\"image_thumb_zoom\">
                            <img data-src=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "filename", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "description", array()), "html", null, true);
                    echo "\">
                        </a>
                        ";
                } else {
                    // line 62
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                    echo "\">
                            <img  src=\"";
                    // line 63
                    echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/no-image.png");
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                    echo "\">
                        </a>
                        ";
                }
                // line 66
                echo "
                        <h4 class=\"post-title\">
                            <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "\"
                               rel=\"bookmark\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a>
                        </h4>
                        ";
                // line 71
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", $this->getAttribute($context["post"], "content_html", array()), 100));
                echo "
                    </article>
                    ";
            } else {
                // line 74
                echo "                    <article class=\"post\">
                        <div class=\"entry clearfix\">
                            <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "\" rel=\"bookmark\">
                                ";
                // line 77
                if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                    // line 78
                    echo "                                <img class=\"thumb\" data-src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "filename", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "description", array()), "html", null, true);
                    echo "\">
                                ";
                } else {
                    // line 80
                    echo "                                <img class=\"thumb\" src=\"";
                    echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/no-image.png");
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                    echo "\">
                                ";
                }
                // line 82
                echo "                                <h4 class=\"post-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</h4>
                            </a>
                            ";
                // line 84
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", $this->getAttribute($context["post"], "content_html", array()), 40));
                echo "
                        </div>
                    </article>
                    ";
            }
            // line 88
            echo "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 89
            echo "                    <div class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                    <div class=\"clearfix\"></div>

                </div>
            </div>

        </div>

        <div id=\"home-bottom\" class=\"clearfix\">
            <h3 class=\"title\"><a title=\"Nodejs\"><span>Nodejs</span></a></h3>
            <div class=\"row-fluid\">
            ";
        // line 101
        $context["posts"] = $this->getAttribute(($context["blogPosts3"] ?? null), "posts", array());
        // line 102
        echo "
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["post"]) {
            // line 104
            echo "                    ";
            if (($context["key"] == 0)) {
                // line 105
                echo "                        <div class=\"span6\">
                            <article class=\"post\">
                                ";
                // line 107
                if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                    // line 108
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                    echo "\" class=\"image_thumb_zoom\">
                                    <img data-src=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "filename", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "description", array()), "html", null, true);
                    echo "\">
                                </a>
                                ";
                } else {
                    // line 112
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                    echo "\">
                                    <img  src=\"";
                    // line 113
                    echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/no-image.png");
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                    echo "\">
                                </a>
                                ";
                }
                // line 116
                echo "                                <h4 class=\"post-title\">
                                    <a href=\"#\" title=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "\"
                                       rel=\"bookmark\">";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a>
                                </h4>
                                ";
                // line 120
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", $this->getAttribute($context["post"], "content_html", array()), 100));
                echo "
                            </article>
                        </div>
                    ";
            }
            // line 124
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 125
            echo "                <div class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "

                <div class=\"span6\">
                    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["post"]) {
            // line 131
            echo "                        ";
            if (($context["key"] > 0)) {
                // line 132
                echo "                            <article class=\"post\">
                                <div class=\"entry clearfix\">
                                    <a href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\" rel=\"bookmark\">
                                        ";
                // line 135
                if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                    // line 136
                    echo "                                            <img class=\"thumb\" data-src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "filename", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), 0, array(), "array"), "description", array()), "html", null, true);
                    echo "\">
                                        ";
                } else {
                    // line 138
                    echo "                                            <img class=\"thumb\" src=\"";
                    echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/no-image.png");
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                    echo "\">
                                        ";
                }
                // line 140
                echo "                                        <h4 class=\"post-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</h4>
                                    </a>
                                    ";
                // line 142
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", $this->getAttribute($context["post"], "content_html", array()), 40));
                echo "
                                </div>
                            </article>
                        ";
            }
            // line 146
            echo "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 147
            echo "                    <div class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 149,  436 => 147,  431 => 146,  424 => 142,  418 => 140,  410 => 138,  400 => 136,  398 => 135,  394 => 134,  390 => 132,  387 => 131,  382 => 130,  377 => 127,  368 => 125,  363 => 124,  356 => 120,  351 => 118,  347 => 117,  344 => 116,  336 => 113,  331 => 112,  321 => 109,  316 => 108,  314 => 107,  310 => 105,  307 => 104,  302 => 103,  299 => 102,  297 => 101,  285 => 91,  276 => 89,  271 => 88,  264 => 84,  258 => 82,  250 => 80,  240 => 78,  238 => 77,  232 => 76,  228 => 74,  222 => 71,  217 => 69,  211 => 68,  207 => 66,  199 => 63,  194 => 62,  184 => 59,  179 => 58,  177 => 57,  174 => 56,  171 => 55,  165 => 54,  163 => 53,  154 => 46,  145 => 44,  140 => 43,  133 => 39,  127 => 37,  119 => 35,  109 => 33,  107 => 32,  101 => 31,  97 => 29,  91 => 26,  86 => 24,  80 => 23,  76 => 21,  68 => 18,  63 => 17,  53 => 14,  48 => 13,  46 => 12,  43 => 11,  40 => 10,  35 => 9,  28 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'slider' %}

{% set posts = blogPosts.posts %}

        <div id=\"home-middle\" class=\"clearfix\">
            <div class=\"left span6\">
                <h3 class=\"title\"><a href=\"#\" title=\"Game News\"><span>Java</span></a></h3>
                <div class=\"row-fluid\">
                    {% for key, post in posts %}
                        {% if key == 0 %}
                            <article class=\"post\">
                                {% if post.featured_images.count %}
                                    <a href=\"{{ post.url }}\" class=\"image_thumb_zoom\">
                                        <img data-src=\"{{ post.featured_images[0].filename }}\" src=\"{{ post.featured_images[0].path }}\" alt=\"{{ post.featured_images[0].description }}\">
                                    </a>
                                {% else %}
                                    <a href=\"{{ post.url }}\">
                                        <img  src=\"{{'assets/images/no-image.png'|theme}}\" alt=\"{{ post.title }}\">
                                    </a>
                                {% endif %}

                                <h4 class=\"post-title\">
                                    <a href=\"{{ post.url }}\" title=\"{{ post.title }}\"
                                       rel=\"bookmark\">{{ post.title }}</a>
                                </h4>
                                {{ html_limit(post.content_html,100)|raw }}
                            </article>
                        {% else %}
                            <article class=\"post\">
                                <div class=\"entry clearfix\">
                                    <a href=\"{{ post.url }}\" title=\"{{ post.title }}\" rel=\"bookmark\">
                                        {% if post.featured_images.count %}
                                                <img class=\"thumb\" data-src=\"{{ post.featured_images[0].filename }}\" src=\"{{ post.featured_images[0].path }}\" alt=\"{{ post.featured_images[0].description }}\">
                                        {% else %}
                                                <img class=\"thumb\" src=\"{{'assets/images/no-image.png'|theme}}\" alt=\"{{ post.title }}\">
                                        {% endif %}
                                        <h4 class=\"post-title\">{{ post.title }}</h4>
                                    </a>
                                    <p>{{ html_limit(post.content_html,40)|raw }}</p>
                                </div>
                            </article>
                        {% endif %}
                    {% else %}
                            <div class=\"no-data\">{{ noPostsMessage }}</div>
                    {% endfor %}
                    <div class=\"clearfix\"></div>
                </div>
            </div>

            <div class=\"right span6\">
                <h3 class=\"title\"><a title=\"October CMS\"><span>October CMS</span></a></h3>
                <div class=\"row-fluid\">
                {% set posts = blogPosts2.posts %}
                    {% for key, post in posts %}
                    {% if key == 0 %}
                    <article class=\"post\">
                        {% if post.featured_images.count %}
                        <a href=\"{{ post.url }}\" class=\"image_thumb_zoom\">
                            <img data-src=\"{{ post.featured_images[0].filename }}\" src=\"{{ post.featured_images[0].path }}\" alt=\"{{ post.featured_images[0].description }}\">
                        </a>
                        {% else %}
                        <a href=\"{{ post.url }}\">
                            <img  src=\"{{'assets/images/no-image.png'|theme}}\" alt=\"{{ post.title }}\">
                        </a>
                        {% endif %}

                        <h4 class=\"post-title\">
                            <a href=\"{{ post.url }}\" title=\"{{ post.title }}\"
                               rel=\"bookmark\">{{ post.title }}</a>
                        </h4>
                        {{ html_limit(post.content_html,100)|raw }}
                    </article>
                    {% else %}
                    <article class=\"post\">
                        <div class=\"entry clearfix\">
                            <a href=\"{{ post.url }}\" title=\"{{ post.title }}\" rel=\"bookmark\">
                                {% if post.featured_images.count %}
                                <img class=\"thumb\" data-src=\"{{ post.featured_images[0].filename }}\" src=\"{{ post.featured_images[0].path }}\" alt=\"{{ post.featured_images[0].description }}\">
                                {% else %}
                                <img class=\"thumb\" src=\"{{'assets/images/no-image.png'|theme}}\" alt=\"{{ post.title }}\">
                                {% endif %}
                                <h4 class=\"post-title\">{{ post.title }}</h4>
                            </a>
                            {{ html_limit(post.content_html,40)|raw }}
                        </div>
                    </article>
                    {% endif %}
                    {% else %}
                    <div class=\"no-data\">{{ noPostsMessage }}</div>
                    {% endfor %}
                    <div class=\"clearfix\"></div>

                </div>
            </div>

        </div>

        <div id=\"home-bottom\" class=\"clearfix\">
            <h3 class=\"title\"><a title=\"Nodejs\"><span>Nodejs</span></a></h3>
            <div class=\"row-fluid\">
            {% set posts = blogPosts3.posts %}

                {% for key, post in posts %}
                    {% if key == 0 %}
                        <div class=\"span6\">
                            <article class=\"post\">
                                {% if post.featured_images.count %}
                                <a href=\"{{ post.url }}\" class=\"image_thumb_zoom\">
                                    <img data-src=\"{{ post.featured_images[0].filename }}\" src=\"{{ post.featured_images[0].path }}\" alt=\"{{ post.featured_images[0].description }}\">
                                </a>
                                {% else %}
                                <a href=\"{{ post.url }}\">
                                    <img  src=\"{{'assets/images/no-image.png'|theme}}\" alt=\"{{ post.title }}\">
                                </a>
                                {% endif %}
                                <h4 class=\"post-title\">
                                    <a href=\"#\" title=\"{{ post.title }}\"
                                       rel=\"bookmark\">{{ post.title }}</a>
                                </h4>
                                {{ html_limit(post.content_html,100)|raw }}
                            </article>
                        </div>
                    {% endif %}
                {% else %}
                <div class=\"no-data\">{{ noPostsMessage }}</div>
                {% endfor %}


                <div class=\"span6\">
                    {% for key, post in posts %}
                        {% if key > 0 %}
                            <article class=\"post\">
                                <div class=\"entry clearfix\">
                                    <a href=\"{{ post.url }}\" rel=\"bookmark\">
                                        {% if post.featured_images.count %}
                                            <img class=\"thumb\" data-src=\"{{ post.featured_images[0].filename }}\" src=\"{{ post.featured_images[0].path }}\" alt=\"{{ post.featured_images[0].description }}\">
                                        {% else %}
                                            <img class=\"thumb\" src=\"{{'assets/images/no-image.png'|theme}}\" alt=\"{{ post.title }}\">
                                        {% endif %}
                                        <h4 class=\"post-title\">{{ post.title }}</h4>
                                    </a>
                                    {{ html_limit(post.content_html,40)|raw }}
                                </div>
                            </article>
                        {% endif %}
                    {% else %}
                    <div class=\"no-data\">{{ noPostsMessage }}</div>
                    {% endfor %}

                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>", "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/pages/home.htm", "");
    }
}
