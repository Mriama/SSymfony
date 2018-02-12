<?php

/* sntimmoBundle:Default:index.html.twig */
class __TwigTemplate_1326638565cb8c2e3bac9253de47f1af5aa4ab3e79fb34e697f9505f48ebc3b0 extends Twig_Template
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
        $__internal_5a210b4fc62ab0c4c49263e6ea8cdbb4f856d30c8eb5361b1dec8dc0aae93c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a210b4fc62ab0c4c49263e6ea8cdbb4f856d30c8eb5361b1dec8dc0aae93c53->enter($__internal_5a210b4fc62ab0c4c49263e6ea8cdbb4f856d30c8eb5361b1dec8dc0aae93c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sntimmoBundle:Default:index.html.twig"));

        $__internal_ce67f679f29555c012b7252fea6b58cd0e18a63bebfb6d2f10d87e2502196b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce67f679f29555c012b7252fea6b58cd0e18a63bebfb6d2f10d87e2502196b90->enter($__internal_ce67f679f29555c012b7252fea6b58cd0e18a63bebfb6d2f10d87e2502196b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sntimmoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        // line 2
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo "
";
        
        $__internal_5a210b4fc62ab0c4c49263e6ea8cdbb4f856d30c8eb5361b1dec8dc0aae93c53->leave($__internal_5a210b4fc62ab0c4c49263e6ea8cdbb4f856d30c8eb5361b1dec8dc0aae93c53_prof);

        
        $__internal_ce67f679f29555c012b7252fea6b58cd0e18a63bebfb6d2f10d87e2502196b90->leave($__internal_ce67f679f29555c012b7252fea6b58cd0e18a63bebfb6d2f10d87e2502196b90_prof);

    }

    public function getTemplateName()
    {
        return "sntimmoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
{{nom}}
", "sntimmoBundle:Default:index.html.twig", "/var/www/html/SSymfony/src/snt/immoBundle/Resources/views/Default/index.html.twig");
    }
}
