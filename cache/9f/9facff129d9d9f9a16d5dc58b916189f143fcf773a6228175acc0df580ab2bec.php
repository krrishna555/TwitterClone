<?php

/* base.html.twig */
class __TwigTemplate_254a31e05688b1b6d88c927e075e9bcc13f76c1dc72193f8b6a269ee692ecf1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE>
<html>
    <head>
        <title>Silex Twitter Clone</title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../../bootstrap/bootstrap/css/bootstrap.min.css\">
\t\t        <style type=\"text/css\">

            ul {
                margin:0;
                padding:0;
                text-align: center;
                list-style:none;                
            }
            ul  li {
                padding: 2px 5px;               
            }
            }
        </style>
    </head>
    <body background=\"../twitte.png\">
        <h1 align=\"center\">Silex Twitter Clone</h1>
        ";
        // line 22
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 23
            echo "        ";
        }
        // line 24
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "    </body>
</html>";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 24,  51 => 25,  48 => 24,  45 => 23,  43 => 22,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\xampp\\htdocs\\a\\app\\templates\\base.html.twig");
    }
}
