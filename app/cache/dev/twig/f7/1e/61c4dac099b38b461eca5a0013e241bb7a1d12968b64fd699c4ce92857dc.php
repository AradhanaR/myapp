<?php

/* AcmeStoreBundle:Default:show.html.twig */
class __TwigTemplate_f71e61c4dac099b38b461eca5a0013e241bb7a1d12968b64fd699c4ce92857dc extends Twig_Template
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
        echo " ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

 \t<h3>Product Details </h3>
\t";
        // line 9
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")));
        echo "

 \t<div><span>Product Name:</span> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</div>
 \t<div><span>Product Description:</span> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</div>
 \t<div><span>Price: </span> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</div>

 <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Back to homepage</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  66 => 13,  62 => 12,  58 => 11,  53 => 9,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
