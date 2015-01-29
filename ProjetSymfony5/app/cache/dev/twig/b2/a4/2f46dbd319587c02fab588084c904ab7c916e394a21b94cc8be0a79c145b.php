<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_b2a42f46dbd319587c02fab588084c904ab7c916e394a21b94cc8be0a79c145b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 5
            echo "    <li>
      <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
      
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  34 => 7,  30 => 6,  27 => 5,  23 => 4,  19 => 2,);
    }
}
