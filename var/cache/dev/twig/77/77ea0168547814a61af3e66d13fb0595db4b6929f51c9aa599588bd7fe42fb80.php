<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68c513bf075520314cf3d081b2268c37f837b072727dae9dcda1a170399d35bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c513bf075520314cf3d081b2268c37f837b072727dae9dcda1a170399d35bb->enter($__internal_68c513bf075520314cf3d081b2268c37f837b072727dae9dcda1a170399d35bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c715f165815cf78c8493148e6dbf79719b150c4ea25fcf7d896dd0b446934931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c715f165815cf78c8493148e6dbf79719b150c4ea25fcf7d896dd0b446934931->enter($__internal_c715f165815cf78c8493148e6dbf79719b150c4ea25fcf7d896dd0b446934931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68c513bf075520314cf3d081b2268c37f837b072727dae9dcda1a170399d35bb->leave($__internal_68c513bf075520314cf3d081b2268c37f837b072727dae9dcda1a170399d35bb_prof);

        
        $__internal_c715f165815cf78c8493148e6dbf79719b150c4ea25fcf7d896dd0b446934931->leave($__internal_c715f165815cf78c8493148e6dbf79719b150c4ea25fcf7d896dd0b446934931_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90da6c1052d9b7b55079c41eeb7bdeac808f70364248e1e8cb651e469cfbe98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90da6c1052d9b7b55079c41eeb7bdeac808f70364248e1e8cb651e469cfbe98f->enter($__internal_90da6c1052d9b7b55079c41eeb7bdeac808f70364248e1e8cb651e469cfbe98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8965f7713b97a41800f9c7d0b82baa6a49c85f8ee37ffa2e5c45df4694a588d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8965f7713b97a41800f9c7d0b82baa6a49c85f8ee37ffa2e5c45df4694a588d8->enter($__internal_8965f7713b97a41800f9c7d0b82baa6a49c85f8ee37ffa2e5c45df4694a588d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8965f7713b97a41800f9c7d0b82baa6a49c85f8ee37ffa2e5c45df4694a588d8->leave($__internal_8965f7713b97a41800f9c7d0b82baa6a49c85f8ee37ffa2e5c45df4694a588d8_prof);

        
        $__internal_90da6c1052d9b7b55079c41eeb7bdeac808f70364248e1e8cb651e469cfbe98f->leave($__internal_90da6c1052d9b7b55079c41eeb7bdeac808f70364248e1e8cb651e469cfbe98f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c08c3dac82e218d4a9366bdeb98ec8e292c33dad67ec03b8cd7dd4411ddf402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c08c3dac82e218d4a9366bdeb98ec8e292c33dad67ec03b8cd7dd4411ddf402->enter($__internal_2c08c3dac82e218d4a9366bdeb98ec8e292c33dad67ec03b8cd7dd4411ddf402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8f180470a546003b248d5293a21c051c4937f86a0a4aba8ac9c60730764846e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f180470a546003b248d5293a21c051c4937f86a0a4aba8ac9c60730764846e4->enter($__internal_8f180470a546003b248d5293a21c051c4937f86a0a4aba8ac9c60730764846e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8f180470a546003b248d5293a21c051c4937f86a0a4aba8ac9c60730764846e4->leave($__internal_8f180470a546003b248d5293a21c051c4937f86a0a4aba8ac9c60730764846e4_prof);

        
        $__internal_2c08c3dac82e218d4a9366bdeb98ec8e292c33dad67ec03b8cd7dd4411ddf402->leave($__internal_2c08c3dac82e218d4a9366bdeb98ec8e292c33dad67ec03b8cd7dd4411ddf402_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2bd580d43c0c9b9432d17610f36402ecd06a529c399d8ea9156346907526417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bd580d43c0c9b9432d17610f36402ecd06a529c399d8ea9156346907526417->enter($__internal_f2bd580d43c0c9b9432d17610f36402ecd06a529c399d8ea9156346907526417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b1cf89a136e1a7f7a27e8dfa7748e69df73704770fbac1ea7ecbb20e36bc85f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1cf89a136e1a7f7a27e8dfa7748e69df73704770fbac1ea7ecbb20e36bc85f2->enter($__internal_b1cf89a136e1a7f7a27e8dfa7748e69df73704770fbac1ea7ecbb20e36bc85f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b1cf89a136e1a7f7a27e8dfa7748e69df73704770fbac1ea7ecbb20e36bc85f2->leave($__internal_b1cf89a136e1a7f7a27e8dfa7748e69df73704770fbac1ea7ecbb20e36bc85f2_prof);

        
        $__internal_f2bd580d43c0c9b9432d17610f36402ecd06a529c399d8ea9156346907526417->leave($__internal_f2bd580d43c0c9b9432d17610f36402ecd06a529c399d8ea9156346907526417_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/SSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
