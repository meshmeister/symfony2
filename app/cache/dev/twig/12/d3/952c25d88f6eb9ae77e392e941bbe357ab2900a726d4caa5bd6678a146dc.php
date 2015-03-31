<?php

/* base.html.twig */
class __TwigTemplate_12d3952c25d88f6eb9ae77e392e941bbe357ab2900a726d4caa5bd6678a146dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3d14251_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3d14251_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3d14251_part_1_main_1.css");
            // line 7
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "3d14251_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3d14251_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3d14251_part_1_pure-min-0.6.0_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "3d14251_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3d14251_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3d14251_part_1_view_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "3d14251"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3d14251") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3d14251.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $context["baseUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method");
        // line 13
        echo "        <header>
            <h1>Mesh Address Book</h1>
            <nav>
                <div class=\"pure-menu pure-menu-horizontal\">
                    <ul class=\"pure-menu-list\">
                        <li class=\"pure-menu-item\">
                            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : $this->getContext($context, "baseUrl")), "html", null, true);
        echo "\">Home</a>
                        </li>
                        <li class=\"pure-menu-item\">
                            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : $this->getContext($context, "baseUrl")), "html", null, true);
        echo "/add\">Add Address</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div id=\"content\" data-url=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : $this->getContext($context, "baseUrl")), "html", null, true);
        echo "\">
            ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        </div>
        <footer>
            <div>Copyright &copy; ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</div>
        </footer>
        ";
        // line 34
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "46cfc6e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_46cfc6e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main_part_1_jquery-2.1.3.min_1.js");
            // line 35
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "46cfc6e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_46cfc6e_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main_part_1_main_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "46cfc6e_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_46cfc6e_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main_part_1_view_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "46cfc6e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_46cfc6e") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 37
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 29
    public function block_body($context, array $blocks = array())
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
        return array (  150 => 29,  144 => 5,  138 => 37,  112 => 35,  108 => 34,  103 => 32,  99 => 30,  97 => 29,  93 => 28,  84 => 22,  78 => 19,  70 => 13,  68 => 12,  61 => 9,  35 => 7,  31 => 6,  27 => 5,  21 => 1,);
    }
}
