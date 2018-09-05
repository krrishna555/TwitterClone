<?php

/* login.html.twig */
class __TwigTemplate_3ba3dbf217103e4e76be282f6c527dd01bc19a96004632d9755544a97794fc77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
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
        echo "    <h2 align=\"center\">Login</h2>
    <form action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\" align=\"center\">
      <p><font color=\"red\"> ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo " </font></p>
    <br>UserName <input type=\"text\" name=\"_username\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" /><br></br>
    Password <input type=\"password\" name=\"_password\" value=\"\" placeholder=\"password\"/></br></br>
        <input type=\"submit\" class=\"btn btn-success\" value=\"login\"/>
    </form>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html.twig", "C:\\xampp\\htdocs\\submission\\app\\templates\\login.html.twig");
    }
}
