<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_5f6bd524ece67a4155a28b63bdaa5ffe6586c2e64211a3b619904fb387945fff extends Twig_Template
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
        $__internal_fa4740149ece6de620e62e1bab0a51bfe3a9651f0db6a51978f0f9adcadc8b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa4740149ece6de620e62e1bab0a51bfe3a9651f0db6a51978f0f9adcadc8b5a->enter($__internal_fa4740149ece6de620e62e1bab0a51bfe3a9651f0db6a51978f0f9adcadc8b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_e1277a8e37bf141f37ef5e6e419575397c53c421c60fda03cbf7075679c7b1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1277a8e37bf141f37ef5e6e419575397c53c421c60fda03cbf7075679c7b1b2->enter($__internal_e1277a8e37bf141f37ef5e6e419575397c53c421c60fda03cbf7075679c7b1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "at ";
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "class", array()) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "type", array())) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "args", array()));
            echo ")";
        }
        // line 4
        if (( !twig_test_empty((($this->getAttribute(($context["trace"] ?? null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "file", array()), "")) : (""))) &&  !twig_test_empty((($this->getAttribute(($context["trace"] ?? null), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "line", array()), "")) : (""))))) {
            // line 5
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) ? ("
     (") : ("at "));
            echo twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "file", array()), $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array()))), array((" at line " . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array())) => ""));
            echo ":";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array());
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) ? (")") : (""));
        }
        
        $__internal_fa4740149ece6de620e62e1bab0a51bfe3a9651f0db6a51978f0f9adcadc8b5a->leave($__internal_fa4740149ece6de620e62e1bab0a51bfe3a9651f0db6a51978f0f9adcadc8b5a_prof);

        
        $__internal_e1277a8e37bf141f37ef5e6e419575397c53c421c60fda03cbf7075679c7b1b2->leave($__internal_e1277a8e37bf141f37ef5e6e419575397c53c421c60fda03cbf7075679c7b1b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  34 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args }})
{%- endif -%}
{% if trace.file|default('') is not empty and trace.line|default('') is not empty %}
  {{- trace.function ? '\\n     (' : 'at '}}{{ trace.file|format_file(trace.line)|striptags|replace({ (' at line ' ~ trace.line): '' }) }}:{{ trace.line }}{{ trace.function ? ')' }}
{%- endif %}
", "@Twig/Exception/trace.txt.twig", "/var/www/html/SSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
