<?php

/* address/index.html.twig */
class __TwigTemplate_c45cad43dca4f7dd8997f2100ac467a76453858ed8fb5463cb59f675f312fa64 extends Twig_Template
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
        echo "\t<table class=\"pure-table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"index-tableheading\">Id</th>
\t\t\t\t<th class=\"index-tableheading\">Firstname</th>
\t\t\t\t<th class=\"index-tableheading\">Lastname</th>
\t\t\t\t<th class=\"index-tableheading\">Address line 1</th>
\t\t\t\t<th class=\"index-tableheading\">Address line 2</th>
\t\t\t\t<th class=\"index-tableheading\">City</th>
\t\t\t\t<th class=\"index-tableheading\">Postcode</th>
\t\t\t\t<th class=\"index-tableheading\">Telephone home</th>
\t\t\t\t<th class=\"index-tableheading\">Telephone mobile</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["addresses"]) ? $context["addresses"] : $this->getContext($context, "addresses"))) > 0)) {
            // line 20
            echo "\t\t\t    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : $this->getContext($context, "addresses")));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 21
                echo "\t\t\t        <tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"), "html", null, true);
                echo "/view/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "id", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "firstname", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "lastname", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td class=\"index-addressline1\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "addressLine1", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "addressLine2", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "postcode", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "telephoneHome", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "telephoneMobile", array()), "html", null, true);
                echo "</td>
\t\t\t        </tr>
\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t";
        }
        // line 38
        echo "\t\t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "address/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 38,  116 => 37,  107 => 34,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  73 => 24,  67 => 23,  63 => 21,  58 => 20,  56 => 19,  39 => 4,  36 => 3,  11 => 1,);
    }
}
