<?php

/* sntimmoBundle:AdminController:list.html.twig */
class __TwigTemplate_38f4c8efee919a0983a69e553fa8c6ec19f609809de1eb0502203a293613f3c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "sntimmoBundle:AdminController:list.html.twig", 1);
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
        $__internal_011454fe4168a1893601632c9817e3e0a5ff0557a5566298c48e101b639f7527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_011454fe4168a1893601632c9817e3e0a5ff0557a5566298c48e101b639f7527->enter($__internal_011454fe4168a1893601632c9817e3e0a5ff0557a5566298c48e101b639f7527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sntimmoBundle:AdminController:list.html.twig"));

        $__internal_c6a40b63e6764269e5b78298eed90e015f659be17684a04c15ce122b9d0d7dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a40b63e6764269e5b78298eed90e015f659be17684a04c15ce122b9d0d7dd7->enter($__internal_c6a40b63e6764269e5b78298eed90e015f659be17684a04c15ce122b9d0d7dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sntimmoBundle:AdminController:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_011454fe4168a1893601632c9817e3e0a5ff0557a5566298c48e101b639f7527->leave($__internal_011454fe4168a1893601632c9817e3e0a5ff0557a5566298c48e101b639f7527_prof);

        
        $__internal_c6a40b63e6764269e5b78298eed90e015f659be17684a04c15ce122b9d0d7dd7->leave($__internal_c6a40b63e6764269e5b78298eed90e015f659be17684a04c15ce122b9d0d7dd7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5e64f557f0c184e1d63979a5462a61e7bda1ec0a6b4a34868327cd32018f0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e64f557f0c184e1d63979a5462a61e7bda1ec0a6b4a34868327cd32018f0db->enter($__internal_e5e64f557f0c184e1d63979a5462a61e7bda1ec0a6b4a34868327cd32018f0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93a6791323cf5305b0d0444555816b0848654b5c1be65b2a742aea261bf02e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a6791323cf5305b0d0444555816b0848654b5c1be65b2a742aea261bf02e16->enter($__internal_93a6791323cf5305b0d0444555816b0848654b5c1be65b2a742aea261bf02e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<style>
.container{
    margin-top:50px;
}
</style>
<div class=\"container\">
<h1>Liste des Utilisateur</h1>
<table class=\"table table-bordered table-striped\">
<thead class=\"thead-dark\">
<th>id</th>
<th>login</th>
<th>nomcomplet</th>
<th>datenais</th>
<th>Editer</th>
<th>Supprimer</th>
<th>Etat</th>


</thead>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "<tr>
<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "login", array()), "html", null, true);
            echo "</td>
<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nomcomplet", array()), "html", null, true);
            echo "</td>
<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "datenais", array()), "d/m/Y"), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Editer</a></td>
<td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppr", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>

";
            // line 33
            if (($this->getAttribute($context["user"], "etat", array()) == false)) {
                // line 34
                echo "
            <td><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etat", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">debloquer</a></td>
            ";
            } else {
                // line 37
                echo "
            <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etat", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">bloquer</a></td>
            ";
            }
            // line 40
            echo "
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "<td colspan=\"6\">Aucun utilisateur</td>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</table>
</div>
";
        
        $__internal_93a6791323cf5305b0d0444555816b0848654b5c1be65b2a742aea261bf02e16->leave($__internal_93a6791323cf5305b0d0444555816b0848654b5c1be65b2a742aea261bf02e16_prof);

        
        $__internal_e5e64f557f0c184e1d63979a5462a61e7bda1ec0a6b4a34868327cd32018f0db->leave($__internal_e5e64f557f0c184e1d63979a5462a61e7bda1ec0a6b4a34868327cd32018f0db_prof);

    }

    public function getTemplateName()
    {
        return "sntimmoBundle:AdminController:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  128 => 43,  121 => 40,  116 => 38,  113 => 37,  108 => 35,  105 => 34,  103 => 33,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  75 => 25,  70 => 24,  49 => 5,  40 => 4,  11 => 1,);
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
<style>
.container{
    margin-top:50px;
}
</style>
<div class=\"container\">
<h1>Liste des Utilisateur</h1>
<table class=\"table table-bordered table-striped\">
<thead class=\"thead-dark\">
<th>id</th>
<th>login</th>
<th>nomcomplet</th>
<th>datenais</th>
<th>Editer</th>
<th>Supprimer</th>
<th>Etat</th>


</thead>
{%for user in users%}
<tr>
<td>{{user.id}}</td>
<td>{{user.login}}</td>
<td>{{user.nomcomplet}}</td>
<td>{{user.datenais|date(\"d/m/Y\")}}</td>
<td><a href=\"{{path('edit',{'id':user.id})}}\">Editer</a></td>
<td><a href=\"{{path('suppr',{'id':user.id})}}\">Supprimer</a></td>

{% if user.etat == false %}

            <td><a href=\"{{path('etat', {'id':user.id})}}\">debloquer</a></td>
            {% else %}

            <td><a href=\"{{path('etat', {'id':user.id})}}\">bloquer</a></td>
            {% endif %}

</tr>
{%else%}
<td colspan=\"6\">Aucun utilisateur</td>

{%endfor%}
</table>
</div>
{% endblock %}", "sntimmoBundle:AdminController:list.html.twig", "/var/www/html/SSymfony/src/snt/immoBundle/Resources/views/AdminController/list.html.twig");
    }
}
