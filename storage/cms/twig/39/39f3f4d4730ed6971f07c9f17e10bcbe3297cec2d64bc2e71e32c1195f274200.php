<?php

/* E:\xampp7\htdocs\xukachan/themes/shizuka/partials/footer.htm */
class __TwigTemplate_b678f8504ddd9d3b3db119b3327219628817a50e05afe5706e3cc82e8f638590 extends Twig_Template
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
        echo "<footer id=\"footer\" class=\"row-fluid\">
    <div id=\"footer-widgets\" class=\"container\">
        <div class=\"footer-widget span4 block1\">
            <div class=\"widget widget_latestpost\">
                <h3 class=\"title\"><span>Categories</span></h3>
                <div class=\"latest-posts widget\">
                
                ";
        // line 8
        if ($this->getAttribute(($context["blogCategories"] ?? null), "categories", array())) {
            // line 9
            echo "                    <ul class=\"category-list\">
                        ";
            // line 10
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categories'] = $this->getAttribute(            // line 11
($context["blogCategories"] ?? null), "categories", array())            ;
            $context['__cms_partial_params']['currentCategorySlug'] = $this->getAttribute(            // line 12
($context["blogCategories"] ?? null), "currentCategorySlug", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction((            // line 10
($context["blogCategories"] ?? null) . "::items")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "                    </ul>
                ";
        }
        // line 16
        echo "                
                </div>
            </div>
        </div>



        <div class=\"footer-widget span4 block3\">
            <div class=\"widget\">
                <h3 class=\"title\"><span>Tag Cloud</span></h3>
                <div class=\"tagcloud\">

            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blogTags"] ?? null), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 29
            echo "                  <a href='../tags/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["tag"], "posts", array())), "html", null, true);
            echo ")</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </div>
            </div>
        </div>

        <div class=\"footer-widget span4 block4\">
            <div class=\"widget\">
                <h3 class=\"title\"><span>About Me</span></h3>
                <div class=\"socmed clearfix\">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>



    </div><!-- footer-widgets -->


    <div id=\"site-info\" class=\"container\">

        <div id=\"footer-nav\" class=\"fr\">
            ";
        // line 52
        if ($this->getAttribute(($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 53
            echo "            <ul class=\"menu\">
                ";
            // line 54
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = $this->getAttribute(($context["staticMenu"] ?? null), "menuItems", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction((($context["staticMenu"] ?? null) . "::items")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 55
            echo "            </ul>
            ";
        }
        // line 57
        echo "        </div>

        <div id=\"credit\" class=\"fl\">
            <p>All Right Reserved by xukachan.com</p>
        </div>

    </div><!-- .site-info -->

</footer>

</div><!-- #wrapper -->

";
        // line 69
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("message"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 69,  114 => 57,  110 => 55,  105 => 54,  102 => 53,  100 => 52,  77 => 31,  64 => 29,  60 => 28,  46 => 16,  42 => 14,  39 => 10,  37 => 12,  35 => 11,  33 => 10,  30 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"footer\" class=\"row-fluid\">
    <div id=\"footer-widgets\" class=\"container\">
        <div class=\"footer-widget span4 block1\">
            <div class=\"widget widget_latestpost\">
                <h3 class=\"title\"><span>Categories</span></h3>
                <div class=\"latest-posts widget\">
                
                {% if blogCategories.categories %}
                    <ul class=\"category-list\">
                        {% partial blogCategories ~ \"::items\"
                            categories = blogCategories.categories
                            currentCategorySlug = blogCategories.currentCategorySlug
                        %}
                    </ul>
                {% endif %}
                
                </div>
            </div>
        </div>



        <div class=\"footer-widget span4 block3\">
            <div class=\"widget\">
                <h3 class=\"title\"><span>Tag Cloud</span></h3>
                <div class=\"tagcloud\">

            {% for tag in blogTags.tags %}
                  <a href='../tags/{{ tag.name }}'>{{ tag.name }} ({{ tag.posts|length }})</a>
            {% endfor %}
                </div>
            </div>
        </div>

        <div class=\"footer-widget span4 block4\">
            <div class=\"widget\">
                <h3 class=\"title\"><span>About Me</span></h3>
                <div class=\"socmed clearfix\">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>



    </div><!-- footer-widgets -->


    <div id=\"site-info\" class=\"container\">

        <div id=\"footer-nav\" class=\"fr\">
            {% if staticMenu.menuItems %}
            <ul class=\"menu\">
                {% partial staticMenu ~ \"::items\" items=staticMenu.menuItems %}
            </ul>
            {% endif %}
        </div>

        <div id=\"credit\" class=\"fl\">
            <p>All Right Reserved by xukachan.com</p>
        </div>

    </div><!-- .site-info -->

</footer>

</div><!-- #wrapper -->

{% component 'message' %}", "E:\\xampp7\\htdocs\\xukachan/themes/shizuka/partials/footer.htm", "");
    }
}
