<?php

/* AcmeStoreBundle:Default:edit.html.twig */
class __TwigTemplate_616d1a59457fa29602f4e5b11375154c6f1ab581eba0b536227f6f8c100bf91e extends Twig_Template
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
 <h3> ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " </h3>

 \t";
        // line 9
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "Add Form")) {
            // line 10
            echo "\t\t<form action=\"";
            echo $this->env->getExtension('routing')->getPath("newproduct");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">
\t\t    ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "

\t\t    <input type=\"submit\" />
\t\t</form>
\t";
        } else {
            // line 16
            echo "
\t\t<form action=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editproduct", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">
\t\t    ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "

\t\t    <input type=\"submit\" />
\t\t</form>

\t";
        }
        // line 24
        echo "  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Back to homepage</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  82 => 18,  76 => 17,  73 => 16,  65 => 11,  58 => 10,  56 => 9,  51 => 7,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
