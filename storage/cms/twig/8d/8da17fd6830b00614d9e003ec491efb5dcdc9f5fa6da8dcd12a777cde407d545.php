<?php

/* E:\xampp7\htdocs\xukachan/plugins/kenshin/facebook/components/message/default.htm */
class __TwigTemplate_e900e9a2ccef69b7800f1c5176893f4dae4439861b3bc3b8bbd4e79b8a3a2cd3 extends Twig_Template
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
        echo "<!-- \$CHAT -->
<script language=\"javascript\">
    var base_url = window.location.origin;
    var f_chat_vs = \"Version 2.1\";
    var f_chat_domain =  base_url + \"xukachan\";
        var f_chat_name = \"Chatbox Online\";
    var f_chat_star_1 = \"Hello!\";
    var f_chat_star_2 = \"Can we help you?<br/><em>Sent a few seconds ago</em>\";
    var f_chat_star_3 = \"<a href='javascript:;' id='f_bt_start_chat' onclick='f_bt_start_chat()'>Start chatting</a>\";
    var f_chat_star_4 = \"Note: Before chat, you must be logged in <a href='http://facebook.com/' rel='nofollow' target='_blank'>Facebook</a> \";
    var f_chat_background_title = \"#F77213\";
    var f_chat_color_title = \"#fff\";
    var f_chat_cr_vs = 21; /* Version ID */
    var f_chat_vitri_manhinh = \"right:10px;\";
</script>
<link rel=\"stylesheet\" href=\"http://fontawesome.io/assets/font-awesome/css/font-awesome.css\" type=\"text/css\"/>
<!-- \$Chat HTML -->
<div id='fb-root'></div>
<a title='Mở hộp Chat' id='chat_f_b_smal' onclick='chat_f_show()' class='chat_f_vt'><i
        class='fa fa-comments title-f-chat-icon'></i> Chat</a>
<div id='b-c-facebook' class='chat_f_vt'>
    <div id='chat-f-b' onclick='b_f_chat()' class='chat-f-b'><i class='fa fa-comments title-f-chat-icon'></i><label
            id=\"f_chat_name\"></label><span id='fb_alert_num'>1</span>
        <div id='t_f_chat'><a href='javascript:;' onclick='chat_f_close()' id='chat_f_close' class='chat-left-5'>x</a>
        </div>
    </div>
    <div id='f-chat-conent' class='f-chat-conent'>
        <script>document.write(\"<div class='fb-page' data-tabs='messages' data-href='https://www.facebook.com/";
        // line 28
        echo twig_escape_filter($this->env, ($context["fanFace"] ?? null), "html", null, true);
        echo "' data-width='250' data-height='310' data-small-header='true' data-adapt-container-width='true' data-hide-cover='true' data-show-facepile='false' data-show-posts='true'></div>\");</script>
        <div id='fb_chat_start'>
            <div id='f_enter_1' class='msg_b fb_hide'></div>
            <div id='f_enter_2' class='msg_b fb_hide'></div>
            <br/>
            <p id='f_enter_3' class='fb_hide' align='center'><a href='javascript:;' onclick='f_bt_start_chat()'
                                                                id='f_bt_start_chat'>Start chatting</a></p><br/>
            <p id='f_enter_4' class='fb_hide' align='center'></p></div>
        <div id=\"f_chat_source\" class='chat-single'></div>
    </div>
</div>
<!-- #CHAT -->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7\\htdocs\\xukachan/plugins/kenshin/facebook/components/message/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 28,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- \$CHAT -->
<script language=\"javascript\">
    var base_url = window.location.origin;
    var f_chat_vs = \"Version 2.1\";
    var f_chat_domain =  base_url + \"xukachan\";
        var f_chat_name = \"Chatbox Online\";
    var f_chat_star_1 = \"Hello!\";
    var f_chat_star_2 = \"Can we help you?<br/><em>Sent a few seconds ago</em>\";
    var f_chat_star_3 = \"<a href='javascript:;' id='f_bt_start_chat' onclick='f_bt_start_chat()'>Start chatting</a>\";
    var f_chat_star_4 = \"Note: Before chat, you must be logged in <a href='http://facebook.com/' rel='nofollow' target='_blank'>Facebook</a> \";
    var f_chat_background_title = \"#F77213\";
    var f_chat_color_title = \"#fff\";
    var f_chat_cr_vs = 21; /* Version ID */
    var f_chat_vitri_manhinh = \"right:10px;\";
</script>
<link rel=\"stylesheet\" href=\"http://fontawesome.io/assets/font-awesome/css/font-awesome.css\" type=\"text/css\"/>
<!-- \$Chat HTML -->
<div id='fb-root'></div>
<a title='Mở hộp Chat' id='chat_f_b_smal' onclick='chat_f_show()' class='chat_f_vt'><i
        class='fa fa-comments title-f-chat-icon'></i> Chat</a>
<div id='b-c-facebook' class='chat_f_vt'>
    <div id='chat-f-b' onclick='b_f_chat()' class='chat-f-b'><i class='fa fa-comments title-f-chat-icon'></i><label
            id=\"f_chat_name\"></label><span id='fb_alert_num'>1</span>
        <div id='t_f_chat'><a href='javascript:;' onclick='chat_f_close()' id='chat_f_close' class='chat-left-5'>x</a>
        </div>
    </div>
    <div id='f-chat-conent' class='f-chat-conent'>
        <script>document.write(\"<div class='fb-page' data-tabs='messages' data-href='https://www.facebook.com/{{ fanFace }}' data-width='250' data-height='310' data-small-header='true' data-adapt-container-width='true' data-hide-cover='true' data-show-facepile='false' data-show-posts='true'></div>\");</script>
        <div id='fb_chat_start'>
            <div id='f_enter_1' class='msg_b fb_hide'></div>
            <div id='f_enter_2' class='msg_b fb_hide'></div>
            <br/>
            <p id='f_enter_3' class='fb_hide' align='center'><a href='javascript:;' onclick='f_bt_start_chat()'
                                                                id='f_bt_start_chat'>Start chatting</a></p><br/>
            <p id='f_enter_4' class='fb_hide' align='center'></p></div>
        <div id=\"f_chat_source\" class='chat-single'></div>
    </div>
</div>
<!-- #CHAT -->", "E:\\xampp7\\htdocs\\xukachan/plugins/kenshin/facebook/components/message/default.htm", "");
    }
}
