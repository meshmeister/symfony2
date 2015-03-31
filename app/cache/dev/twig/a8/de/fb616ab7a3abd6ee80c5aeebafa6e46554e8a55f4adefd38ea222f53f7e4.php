<?php

/* address/view.html.twig */
class __TwigTemplate_a8defb616ab7a3abd6ee80c5aeebafa6e46554e8a55f4adefd38ea222f53f7e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div id=\"view\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "id", array()), "html", null, true);
        echo "\">
\t\t<div class=\"view-addressrow\">
\t\t\t<div class=\"view-addresslabel\">Id</div>
\t\t\t<div class=\"view-addressvalue\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "id", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"view-addressrow\">
\t\t\t<div class=\"view-addresslabel\">Firstname</div>
\t\t\t<div class=\"view-addressvalue\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "firstname", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"view-addressrow\">
\t\t\t<div class=\"view-addresslabel\">Lastname</div>
\t\t\t<div class=\"view-addressvalue\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "lastname", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"view-addressrow\">
\t\t\t<div class=\"view-addresslabel\">Address line 1</div>
\t\t\t<div class=\"view-addressvalue\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "addressLine1", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"view-addressrow\">
\t\t\t<div class=\"view-addresslabel\">Address line 2</div>
\t\t\t<div class=\"view-addressvalue\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "addressLine2", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"view-addressrow\">
\t\t\t<div class=\"view-addresslabel\">City</div>
\t\t\t<div class=\"view-addressvalue\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "city", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"view-addressrow\">
\t\t\t<div class=\"view-addresslabel\">Postcode</div>
\t\t\t<div class=\"view-addressvalue\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "postcode", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"view-addressrow\">
\t\t\t<div class=\"view-addresslabel\">Postcode</div>
\t\t\t<div class=\"view-addressvalue\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "postcode", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"view-addressrow\">
\t\t\t<div class=\"view-addresslabel\">Telephone Home</div>
\t\t\t<div class=\"view-addressvalue\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "telephoneHome", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"view-addressrow\">
\t\t\t<div class=\"view-addresslabel\">Telephone Mobile</div>
\t\t\t<div class=\"view-addressvalue\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "telephoneMobile", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div id=\"view-actions\">
\t\t\t<button class=\"view-actionbtn\">Edit</button>
\t\t\t<button id=\"view-deletebtn\" class=\"view-actionbtn\">Delete</button>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "address/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 43,  102 => 39,  95 => 35,  88 => 31,  81 => 27,  74 => 23,  67 => 19,  60 => 15,  53 => 11,  46 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
