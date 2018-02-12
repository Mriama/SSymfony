<?php

/* sntimmoBundle:AdminController:add.html.twig */
class __TwigTemplate_7e140eb4886f27e99636b0d811a4de14cbdc4cdc9cf4a24d5644d87e205bb537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "sntimmoBundle:AdminController:add.html.twig", 1);
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
        $__internal_3001514c9af5bd8cc07ef5b51a434fb5d891332754c42e876c4a66196b1d58c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3001514c9af5bd8cc07ef5b51a434fb5d891332754c42e876c4a66196b1d58c0->enter($__internal_3001514c9af5bd8cc07ef5b51a434fb5d891332754c42e876c4a66196b1d58c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sntimmoBundle:AdminController:add.html.twig"));

        $__internal_d38743f95b0ac5f0c65cd5561dba6615c7c110bc800a36eb50de6cc6642762a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38743f95b0ac5f0c65cd5561dba6615c7c110bc800a36eb50de6cc6642762a3->enter($__internal_d38743f95b0ac5f0c65cd5561dba6615c7c110bc800a36eb50de6cc6642762a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sntimmoBundle:AdminController:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3001514c9af5bd8cc07ef5b51a434fb5d891332754c42e876c4a66196b1d58c0->leave($__internal_3001514c9af5bd8cc07ef5b51a434fb5d891332754c42e876c4a66196b1d58c0_prof);

        
        $__internal_d38743f95b0ac5f0c65cd5561dba6615c7c110bc800a36eb50de6cc6642762a3->leave($__internal_d38743f95b0ac5f0c65cd5561dba6615c7c110bc800a36eb50de6cc6642762a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c09c3fecb9cda2cad3f3aabd24bb97ab08292986bf5e05b436f406cc2a3e66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c09c3fecb9cda2cad3f3aabd24bb97ab08292986bf5e05b436f406cc2a3e66c->enter($__internal_8c09c3fecb9cda2cad3f3aabd24bb97ab08292986bf5e05b436f406cc2a3e66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa7cfd89b8616d516511f246792e7f689bf6cbebd9a31c07e68dc3e1657d13f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7cfd89b8616d516511f246792e7f689bf6cbebd9a31c07e68dc3e1657d13f6->enter($__internal_aa7cfd89b8616d516511f246792e7f689bf6cbebd9a31c07e68dc3e1657d13f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Formulaire d'Ajout!";
        
        $__internal_aa7cfd89b8616d516511f246792e7f689bf6cbebd9a31c07e68dc3e1657d13f6->leave($__internal_aa7cfd89b8616d516511f246792e7f689bf6cbebd9a31c07e68dc3e1657d13f6_prof);

        
        $__internal_8c09c3fecb9cda2cad3f3aabd24bb97ab08292986bf5e05b436f406cc2a3e66c->leave($__internal_8c09c3fecb9cda2cad3f3aabd24bb97ab08292986bf5e05b436f406cc2a3e66c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_969e9205d09c6ebdcbdf17bc39b36e4b51b368485b34db214e0babede2e425ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969e9205d09c6ebdcbdf17bc39b36e4b51b368485b34db214e0babede2e425ba->enter($__internal_969e9205d09c6ebdcbdf17bc39b36e4b51b368485b34db214e0babede2e425ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cac9187455444ff969948611383469941ff1e3da0abd5889c858d47b328a300f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac9187455444ff969948611383469941ff1e3da0abd5889c858d47b328a300f->enter($__internal_cac9187455444ff969948611383469941ff1e3da0abd5889c858d47b328a300f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\" style=\"\">
<h1>Formulaire d'enregistrement</h1>

";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
</div>



";
        
        $__internal_cac9187455444ff969948611383469941ff1e3da0abd5889c858d47b328a300f->leave($__internal_cac9187455444ff969948611383469941ff1e3da0abd5889c858d47b328a300f_prof);

        
        $__internal_969e9205d09c6ebdcbdf17bc39b36e4b51b368485b34db214e0babede2e425ba->leave($__internal_969e9205d09c6ebdcbdf17bc39b36e4b51b368485b34db214e0babede2e425ba_prof);

    }

    public function getTemplateName()
    {
        return "sntimmoBundle:AdminController:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 8,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block title %}Formulaire d'Ajout!{% endblock %}
{% block body %}
<div class=\"container\" style=\"\">
<h1>Formulaire d'enregistrement</h1>

{{form(form)}}
</div>



{% endblock %}
", "sntimmoBundle:AdminController:add.html.twig", "/var/www/html/SSymfony/src/snt/immoBundle/Resources/views/AdminController/add.html.twig");
    }
}
