<?php

/* AcmeStoreBundle:Default:index.html.twig */
class __TwigTemplate_469860761242f715ed6320a8507cfcb5261cc1cf60a26a835fed68265228534f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Propel Application";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "


 ";
        // line 9
        $this->displayParentBlock("body", $context, $blocks);
        echo "
 <h3> ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " </h3> 

 \t<p> <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("loginpage");
        echo "\">Login here</a></p>
 \t<p>List of Products<p>  <p ><span><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("newproduct");
        echo "\">Add</a></span></p> <br/> <br>
 \t<p ><span><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("create");
        echo "\">Auto create</a></span></p> <br/> <br>

 \t\t<table width=\"55%\">
 \t\t<tr>
\t \t\t<th width=\"10%\" align=\"center\">ID</th>
\t \t\t<th width=\"60%\" align=\"center\">Name</th>
\t \t\t<th width=\"60%\" align=\"center\">Price</th>
\t \t\t<th width=\"30%\" align=\"center\">Action</th>
 \t\t</tr>
 \t\t";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productlist"]) ? $context["productlist"] : $this->getContext($context, "productlist")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 24
            echo "\t\t\t<tr>
\t\t\t\t<td align=\"center\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td align=\"center\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td align=\"center\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td >
\t\t\t\t<ul>
\t\t\t \t<li><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">Show Details</a></li>
\t\t\t \t<li><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editproduct", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">Edit</a></li>
\t\t\t \t<li><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">Delete</a></li>
\t\t\t \t</ul>
\t\t\t \t</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t</table>
";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 37,  109 => 32,  105 => 31,  101 => 30,  95 => 27,  91 => 26,  87 => 25,  84 => 24,  80 => 23,  68 => 14,  64 => 13,  60 => 12,  55 => 10,  51 => 9,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
