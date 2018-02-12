<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4992e6bba4306bce0780722677dd006f03e0a06351f42f64cd0553906f44051f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4992e6bba4306bce0780722677dd006f03e0a06351f42f64cd0553906f44051f->enter($__internal_4992e6bba4306bce0780722677dd006f03e0a06351f42f64cd0553906f44051f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_058106b392c934cad60cedebe9051251917ebd2a3f04f8c6aa74f3d8c981d06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058106b392c934cad60cedebe9051251917ebd2a3f04f8c6aa74f3d8c981d06b->enter($__internal_058106b392c934cad60cedebe9051251917ebd2a3f04f8c6aa74f3d8c981d06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4992e6bba4306bce0780722677dd006f03e0a06351f42f64cd0553906f44051f->leave($__internal_4992e6bba4306bce0780722677dd006f03e0a06351f42f64cd0553906f44051f_prof);

        
        $__internal_058106b392c934cad60cedebe9051251917ebd2a3f04f8c6aa74f3d8c981d06b->leave($__internal_058106b392c934cad60cedebe9051251917ebd2a3f04f8c6aa74f3d8c981d06b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eaa6fe076853e28d76585658e7eadba7bf3eec51221089f9c08fea9a73d916d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa6fe076853e28d76585658e7eadba7bf3eec51221089f9c08fea9a73d916d2->enter($__internal_eaa6fe076853e28d76585658e7eadba7bf3eec51221089f9c08fea9a73d916d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_412860e9f302009fc816e62d60bc7ac0330d87cebc92babbd6ec68cd17d25b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412860e9f302009fc816e62d60bc7ac0330d87cebc92babbd6ec68cd17d25b4a->enter($__internal_412860e9f302009fc816e62d60bc7ac0330d87cebc92babbd6ec68cd17d25b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_412860e9f302009fc816e62d60bc7ac0330d87cebc92babbd6ec68cd17d25b4a->leave($__internal_412860e9f302009fc816e62d60bc7ac0330d87cebc92babbd6ec68cd17d25b4a_prof);

        
        $__internal_eaa6fe076853e28d76585658e7eadba7bf3eec51221089f9c08fea9a73d916d2->leave($__internal_eaa6fe076853e28d76585658e7eadba7bf3eec51221089f9c08fea9a73d916d2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_254a87f117cbf3c2fe6921f399777052890b3ce5d8ac5bc2eb78584c5db0ef72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254a87f117cbf3c2fe6921f399777052890b3ce5d8ac5bc2eb78584c5db0ef72->enter($__internal_254a87f117cbf3c2fe6921f399777052890b3ce5d8ac5bc2eb78584c5db0ef72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f55e299eef20f9dbcf61aab23233fce01fe663006aaec82d768d4a8de29ea745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55e299eef20f9dbcf61aab23233fce01fe663006aaec82d768d4a8de29ea745->enter($__internal_f55e299eef20f9dbcf61aab23233fce01fe663006aaec82d768d4a8de29ea745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f55e299eef20f9dbcf61aab23233fce01fe663006aaec82d768d4a8de29ea745->leave($__internal_f55e299eef20f9dbcf61aab23233fce01fe663006aaec82d768d4a8de29ea745_prof);

        
        $__internal_254a87f117cbf3c2fe6921f399777052890b3ce5d8ac5bc2eb78584c5db0ef72->leave($__internal_254a87f117cbf3c2fe6921f399777052890b3ce5d8ac5bc2eb78584c5db0ef72_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e382da70560a4f6d135f807f84aae2a2329e94831a0e5faf008e44a60b68663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e382da70560a4f6d135f807f84aae2a2329e94831a0e5faf008e44a60b68663->enter($__internal_2e382da70560a4f6d135f807f84aae2a2329e94831a0e5faf008e44a60b68663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_95a18083deea12330cbc64b1ad9b168886ae8aee2b3d0c27acd8c4b7dd2264d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a18083deea12330cbc64b1ad9b168886ae8aee2b3d0c27acd8c4b7dd2264d3->enter($__internal_95a18083deea12330cbc64b1ad9b168886ae8aee2b3d0c27acd8c4b7dd2264d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_95a18083deea12330cbc64b1ad9b168886ae8aee2b3d0c27acd8c4b7dd2264d3->leave($__internal_95a18083deea12330cbc64b1ad9b168886ae8aee2b3d0c27acd8c4b7dd2264d3_prof);

        
        $__internal_2e382da70560a4f6d135f807f84aae2a2329e94831a0e5faf008e44a60b68663->leave($__internal_2e382da70560a4f6d135f807f84aae2a2329e94831a0e5faf008e44a60b68663_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/SSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
