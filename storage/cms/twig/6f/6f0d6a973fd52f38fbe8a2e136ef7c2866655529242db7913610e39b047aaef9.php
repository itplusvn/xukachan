<?php

/* E:\xampp7\htdocs\xukachan/themes/shizuka/pages/blog/post.htm */
class __TwigTemplate_c153e91ebc30088397a3218aae6cc98ed82b45c374eb6cfe40d74a9df0e1fa63 extends Twig_Template
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
        $context["post"] = $this->getAttribute(($context["blogPost"] ?? null), "post", array());
        // line 3
        echo "    <h2 class=\"entry-title\">
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "
    </h2>
    <div class=\"entry-meta row-fluid\">
            Posted
            ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "categories", array()), "count", array())) {
            echo " in
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "categories", array()));
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
                // line 10
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 11
                echo "            ";
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
            // line 12
            echo "            ";
        }
        // line 13
        echo "            on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "
    </div>
    <div class=\"entry-content\">
        <div class=\"content\">";
        // line 16
        echo $this->getAttribute(($context["post"] ?? null), "content_html", array());
        echo "</div>
    </div>
    <h2>Tag related posts</h2>
<ul>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blogRelated"] ?? null), "posts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["Post"]) {
            // line 21
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Post"], "url", array()), "html", null, true);
            echo "\"><li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Post"], "title", array()), "html", null, true);
            echo "</li></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>

    ";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("comment"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "    
</article>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 26,  114 => 25,  110 => 23,  99 => 21,  95 => 20,  88 => 16,  81 => 13,  78 => 12,  64 => 11,  55 => 10,  38 => 9,  34 => 8,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
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
    {% set post = blogPost.post %}
    <h2 class=\"entry-title\">
       {{ this.page.title }}
    </h2>
    <div class=\"entry-meta row-fluid\">
            Posted
            {% if post.categories.count %} in
            {% for category in post.categories %}
            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
            {% endfor %}
            {% endif %}
            on {{ post.published_at|date('M d, Y') }}
    </div>
    <div class=\"entry-content\">
        <div class=\"content\">{{ post.content_html|raw }}</div>
    </div>
    <h2>Tag related posts</h2>
<ul>
    {% for Post in blogRelated.posts %}
        <a href=\"{{Post.url}}\"><li>{{ Post.title }}</li></a>
    {% endfor %}
</ul>

    {% component 'comment' %}
    
</article>", "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/pages/blog/post.htm", "");
    }
}
