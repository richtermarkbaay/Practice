<?php

/* UserPracticeBundle:Page:confirm.html.twig */
class __TwigTemplate_d8adb522ff07f4f90ba70029236bafbf46cc55d3ea5204a6e6cc0f92b11fc881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 2
        echo "Hi ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
You received this email because you sign up the \"exam site\" and you'll not be able to sign in until you confirm your email. It looks like you haven't confirmed you email yet. If you already confirmed your email, please disregard this mail.
If this is your email ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo ", Simply click the link below now confirm your email and sign in to continue using \"exam site\".
Confirm now: ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("user_practice_confirmnow", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "sAlt" => (isset($context["sAlt"]) ? $context["sAlt"] : $this->getContext($context, "sAlt")))), "html", null, true);
        echo "

Thank you,
\t



    \t";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1fee7bf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1fee7bf_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1fee7bf_part_1_style_1.css");
            echo " ";
        } else {
            // asset "1fee7bf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1fee7bf") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1fee7bf.css");
            echo " ";
        }
        unset($context["asset_url"]);
        echo " ";
    }

    public function getTemplateName()
    {
        return "UserPracticeBundle:Page:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 1,  32 => 5,  28 => 4,  22 => 2,  20 => 1,);
    }
}
