<?php

/* sntimmoBundle:AdminController:edit.html.twig */
class __TwigTemplate_6b905fdab20fb94c790d1d3b33f3003e7fc426c92aebb3d79379fd06a7898b7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "sntimmoBundle:AdminController:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ed57318b3207bce67edd735480bf70df8e0b225a2187a1abe775ca575605907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed57318b3207bce67edd735480bf70df8e0b225a2187a1abe775ca575605907->enter($__internal_8ed57318b3207bce67edd735480bf70df8e0b225a2187a1abe775ca575605907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sntimmoBundle:AdminController:edit.html.twig"));

        $__internal_5050cdd1eac3939a4688799c862ed7ac618dcaf37d501121a2c68c89171016d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5050cdd1eac3939a4688799c862ed7ac618dcaf37d501121a2c68c89171016d3->enter($__internal_5050cdd1eac3939a4688799c862ed7ac618dcaf37d501121a2c68c89171016d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sntimmoBundle:AdminController:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ed57318b3207bce67edd735480bf70df8e0b225a2187a1abe775ca575605907->leave($__internal_8ed57318b3207bce67edd735480bf70df8e0b225a2187a1abe775ca575605907_prof);

        
        $__internal_5050cdd1eac3939a4688799c862ed7ac618dcaf37d501121a2c68c89171016d3->leave($__internal_5050cdd1eac3939a4688799c862ed7ac618dcaf37d501121a2c68c89171016d3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_89ebffed264a57d8e614f816610d7bec50db64f3adee57b2239afd09a788b204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ebffed264a57d8e614f816610d7bec50db64f3adee57b2239afd09a788b204->enter($__internal_89ebffed264a57d8e614f816610d7bec50db64f3adee57b2239afd09a788b204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd6099454c411ed6ffc16a38d7c84f21757d8c5ef935c4a10c01d92c23f1d8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6099454c411ed6ffc16a38d7c84f21757d8c5ef935c4a10c01d92c23f1d8c2->enter($__internal_fd6099454c411ed6ffc16a38d7c84f21757d8c5ef935c4a10c01d92c23f1d8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_fd6099454c411ed6ffc16a38d7c84f21757d8c5ef935c4a10c01d92c23f1d8c2->leave($__internal_fd6099454c411ed6ffc16a38d7c84f21757d8c5ef935c4a10c01d92c23f1d8c2_prof);

        
        $__internal_89ebffed264a57d8e614f816610d7bec50db64f3adee57b2239afd09a788b204->leave($__internal_89ebffed264a57d8e614f816610d7bec50db64f3adee57b2239afd09a788b204_prof);

    }

    public function getTemplateName()
    {
        return "sntimmoBundle:AdminController:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}


{% block body %}
{{form(form)}}
{% endblock %}
", "sntimmoBundle:AdminController:edit.html.twig", "/var/www/html/SSymfony/src/snt/immoBundle/Resources/views/AdminController/edit.html.twig");
    }
}
