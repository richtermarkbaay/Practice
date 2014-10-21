<?php

/* UserPracticeBundle:Page:login.html.twig */
class __TwigTemplate_b8ae1702ceabf2394ae447e28a678c9ce104c95619a33ce0880fd16da7183ba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UserPracticeBundle:Page:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserPracticeBundle:Page:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t<div class = \"login-wrapper\">
\t    \t
\t    \t<div class =\"flashMessage\">
\t    \t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "\t\t\t            <div class=\"glyphicon glyphicon-remove\" id = \"error-msg\">
\t\t\t            ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
\t\t\t            </div> 
\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
\t\t\t\t\t ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "\t\t\t            <div id = \"success-msg\" class = \"glyphicon glyphicon-ok\">
\t\t\t            ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
\t\t\t            </div> 
\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t    \t</div>

\t\t\t    \t";
        // line 23
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 24
            echo "\t\t\t\t\t    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        // line 26
        echo "
\t\t\t\t\t<form action=\"login_check\" method=\"post\">

\t\t\t\t\t    <input type=\"text\" id=\"email\" class = \"form-control\" name=\"_username\" placeholder = \"Email\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />


\t\t\t\t\t    <input type=\"password\" id=\"password\" class = \"form-control\" name=\"_password\" placeholder = \"Password\"/>

\t\t\t\t\t    ";
        // line 39
        echo "
\t\t\t\t\t    <button type=\"submit\" class = \"btn btn-primary\">login</button>
\t\t\t\t\t</form>


\t    \t\t<p class = \"fpass-signup\"><a href = \"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("user_practice_forgot_pass_request");
        echo "\">Forgot password?</a> | <a href = \"";
        echo $this->env->getExtension('routing')->getPath("user_practice_signup");
        echo "\"\"> Signup </ad></p>

\t</div>
    
";
    }

    public function getTemplateName()
    {
        return "UserPracticeBundle:Page:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 44,  104 => 39,  96 => 29,  91 => 26,  85 => 24,  83 => 23,  79 => 21,  70 => 18,  67 => 17,  63 => 16,  60 => 15,  51 => 12,  48 => 11,  44 => 10,  38 => 6,  35 => 5,  29 => 4,);
    }
}
