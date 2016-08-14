<?php

/* navbar_footer.html */
class __TwigTemplate_a5113514defa65c233c17833cbfc79eacd3706f897200f591f6879e4404177fe extends Twig_Template
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
        echo "<nav role=\"navigation\">
\t<ul id=\"nav-footer\" class=\"linklist\" role=\"menubar\">
\t\t<li class=\"small-icon breadcrumbs\">
\t\t\t";
        // line 4
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 5
        echo "\t\t\t";
        // line 6
        echo "\t\t\t<span class=\"crumb\"><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" data-navbar-reference=\"index\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t";
        // line 7
        // line 8
        echo "\t\t</li>

\t\t";
        // line 10
        if (((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo "<li class=\"small-icon icon-";
            if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
            echo "\" title=\"";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
            if ( !(isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-toggle-text=\"";
            echo (isset($context["S_WATCH_FORUM_TOGGLE"]) ? $context["S_WATCH_FORUM_TOGGLE"] : null);
            echo "\" data-toggle-url=\"";
            echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
            echo "\">";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "</a></li>";
        }
        // line 11
        echo "\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<li class=\"small-icon\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 12
        echo "\t\t";
        if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
            echo "<li class=\"small-icon\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 13
        echo "
\t\t";
        // line 14
        // line 15
        echo "\t\t";
        // line 16
        echo "
\t\t";
        // line 17
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo "<li class=\"small-icon\"><a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>";
        }
        // line 18
        echo "
\t\t";
        // line 19
        // line 20
        echo "\t\t<li>";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "</li>
\t\t";
        // line 21
        // line 22
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 22,  118 => 21,  113 => 20,  112 => 19,  109 => 18,  101 => 17,  98 => 16,  96 => 15,  95 => 14,  92 => 13,  83 => 12,  72 => 11,  46 => 10,  42 => 8,  41 => 7,  34 => 6,  32 => 5,  24 => 4,  19 => 1,);
    }
}
/* <nav role="navigation">*/
/* 	<ul id="nav-footer" class="linklist" role="menubar">*/
/* 		<li class="small-icon breadcrumbs">*/
/* 			<!-- IF U_SITE_HOME --><span class="crumb"><a href="{U_SITE_HOME}" data-navbar-reference="home">{L_SITE_HOME}</a></span><!-- ENDIF -->*/
/* 			<!-- EVENT overall_footer_breadcrumb_prepend -->*/
/* 			<span class="crumb"><a href="{U_INDEX}" data-navbar-reference="index">{L_INDEX}</a></span>*/
/* 			<!-- EVENT overall_footer_breadcrumb_append -->*/
/* 		</li>*/
/* */
/* 		<!-- IF U_WATCH_FORUM_LINK and not S_IS_BOT --><li class="small-icon icon-<!-- IF S_WATCHING_FORUM -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->" data-last-responsive="true"><a href="{U_WATCH_FORUM_LINK}" title="{S_WATCH_FORUM_TITLE}" data-ajax="toggle_link" data-toggle-class="small-icon icon-<!-- IF not S_WATCHING_FORUM -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->" data-toggle-text="{S_WATCH_FORUM_TOGGLE}" data-toggle-url="{U_WATCH_FORUM_TOGGLE}">{S_WATCH_FORUM_TITLE}</a></li><!-- ENDIF -->*/
/* 		<!-- IF U_ACP --><li class="small-icon" data-last-responsive="true"><a href="{U_ACP}" title="{L_ACP}" role="menuitem">{L_ACP_SHORT}</a></li><!-- ENDIF -->*/
/* 		<!-- IF U_CONTACT_US --><li class="small-icon" data-last-responsive="true"><a href="{U_CONTACT_US}" role="menuitem">{L_CONTACT_US}</a></li><!-- ENDIF -->*/
/* */
/* 		<!-- EVENT overall_footer_teamlink_before -->*/
/* 		<!-- EVENT overall_footer_teamlink_after -->*/
/* */
/* 		<!-- IF not S_IS_BOT --><li class="small-icon"><a href="{U_DELETE_COOKIES}" data-ajax="true" data-refresh="true" role="menuitem">{L_DELETE_COOKIES}</a></li><!-- ENDIF -->*/
/* */
/* 		<!-- EVENT overall_footer_timezone_before -->*/
/* 		<li>{S_TIMEZONE}</li>*/
/* 		<!-- EVENT overall_footer_timezone_after -->*/
/* 	</ul>*/
/* </nav>*/
/* */
