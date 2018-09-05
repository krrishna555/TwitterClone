<?php

/* home.html.twig */
class __TwigTemplate_cf21d5c668f6919488ce3f4e86974bd51aee834998f82ea48fbfc5ceb1df58f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\">Hello ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo "!</a>
    </div>
    <ul class=\"nav navbar-nav navbar-right\">
      <li align=\"right\">
\t  ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 11
            echo "\t  <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a>
\t  ";
        }
        // line 13
        echo "\t  </li>
    </ul>
  </div>
</nav>
\t<div style=\"width:500px; margin:0 auto;\">
    <form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create");
        echo "\" method=\"post\" align=\"center\">
        <textarea class=\"form-control col-xs-6\" maxlength=\"140\" rows=\"4\" cols=\"20\" name=\"content\" placeholder=\"enter a tweet\"></textarea></br>
        <input class=\"btn btn-info\" type=\"submit\" value=\"tweet\">
    </form>
\t</div>

\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "getFlashBag", array()), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "\t\t";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t";
        echo twig_escape_filter($this->env, (isset($context["post"]) ? $context["post"] : null), "html", null, true);
        echo "
    ";
        // line 28
        if ((isset($context["posts"]) ? $context["posts"] : null)) {
            // line 29
            echo "        <ul align=\"center\">
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 31
                echo "\t\t\t<legend>
                <li>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "occurredAt", array()), "F j, Y g:ia"), "html", null, true);
                echo ") </li>
\t\t\t\t<form action=\"";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("retweet");
                echo "\" method=\"post\">
\t\t\t\t\t<input name=\"id\" type=\"hidden\" value=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<input name=\"count\" type=\"hidden\" value=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "count", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<input name=\"content\" type=\"hidden\" value=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "count", array()), "html", null, true);
                echo " <span class=\"glyphicon glyphicon-repeat\"></span> <input type=\"submit\" class=\"btn btn-info\" value=\" retweet\">
\t\t\t\t\t</form>
\t\t\t</legend>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 41,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  97 => 32,  94 => 31,  90 => 30,  87 => 29,  85 => 28,  80 => 27,  71 => 25,  67 => 24,  58 => 18,  51 => 13,  45 => 11,  43 => 10,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "C:\\xampp\\htdocs\\submission\\app\\templates\\home.html.twig");
    }
}
