<?php

/* UserPracticeBundle:Page:base.html.twig */
class __TwigTemplate_1b7ad8fe9f2ef5804714719559612dd41250c5ccb971acce9496a797867fcb3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " | Practice1</title>

        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
    </head>
    <body>

        <section id=\"wrapper\">

            <header id=\"header\">

                <div class = \"header-content\">
                        <div>
                            <logo>
                                    logo here 
                            </logo>
                        </div>

                        ";
        // line 27
        $this->displayBlock('navigation', $context, $blocks);
        // line 37
        echo "                </div>
                
            </header>

            <section class=\"main\">
                ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "            </section>

        </section>

    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1fee7bf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1fee7bf_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1fee7bf_part_1_style_1.css");
            // line 8
            echo "                 <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
                 <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            ";
        } else {
            // asset "1fee7bf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1fee7bf") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1fee7bf.css");
            echo "                 <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
                 <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
            ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "        ";
    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        // line 28
        echo "                            <div>
                                <ul class=\"navigation\">
                                    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("user_practice_homepage");
        echo "\">Home</a></li>
                                    <li><a href=\"#\">About</a></li>
                                    <li><a href=\"#\">Contact</a></li>
                                    <!--li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">logout</a></li-->
                                </ul>
                            </div>
                        ";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UserPracticeBundle:Page:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  118 => 33,  112 => 30,  108 => 28,  105 => 27,  101 => 11,  80 => 7,  77 => 6,  72 => 4,  61 => 42,  54 => 37,  52 => 27,  33 => 6,  28 => 4,  23 => 1,  111 => 44,  104 => 39,  96 => 29,  91 => 26,  85 => 8,  83 => 23,  79 => 21,  70 => 18,  67 => 17,  63 => 43,  60 => 15,  51 => 12,  48 => 11,  44 => 10,  38 => 6,  35 => 12,  29 => 4,);
    }
}
