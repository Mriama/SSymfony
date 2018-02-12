<?php

/* sntimmoBundle:AdminController:search.html.twig */
class __TwigTemplate_be2a735682d025577208ae858be106aa5ac8311f600a068c594b3b1b5cd4d620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "sntimmoBundle:AdminController:search.html.twig", 1);
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
        $__internal_9aec75545d4c08b9ec72299df44765adf84cebf20ebcb4ac596b27299ac42411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aec75545d4c08b9ec72299df44765adf84cebf20ebcb4ac596b27299ac42411->enter($__internal_9aec75545d4c08b9ec72299df44765adf84cebf20ebcb4ac596b27299ac42411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sntimmoBundle:AdminController:search.html.twig"));

        $__internal_a9c520c8e8c384d3a64b5febff3c1d5c81c3e3cba0bf42aa98db901679504755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c520c8e8c384d3a64b5febff3c1d5c81c3e3cba0bf42aa98db901679504755->enter($__internal_a9c520c8e8c384d3a64b5febff3c1d5c81c3e3cba0bf42aa98db901679504755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sntimmoBundle:AdminController:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aec75545d4c08b9ec72299df44765adf84cebf20ebcb4ac596b27299ac42411->leave($__internal_9aec75545d4c08b9ec72299df44765adf84cebf20ebcb4ac596b27299ac42411_prof);

        
        $__internal_a9c520c8e8c384d3a64b5febff3c1d5c81c3e3cba0bf42aa98db901679504755->leave($__internal_a9c520c8e8c384d3a64b5febff3c1d5c81c3e3cba0bf42aa98db901679504755_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e07b7d3eeb0ac8c5a7d06f4d831e0ab928432c605d1791568e0494428d5983f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e07b7d3eeb0ac8c5a7d06f4d831e0ab928432c605d1791568e0494428d5983f->enter($__internal_0e07b7d3eeb0ac8c5a7d06f4d831e0ab928432c605d1791568e0494428d5983f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82c8b57776619e0e9f0345ff798adc53e6655abe44ca7c93fa92413fd2e1f9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c8b57776619e0e9f0345ff798adc53e6655abe44ca7c93fa92413fd2e1f9f1->enter($__internal_82c8b57776619e0e9f0345ff798adc53e6655abe44ca7c93fa92413fd2e1f9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " <div class=\"container\">

 <a href=\"/SSymfony/web/app_dev.php/immobilier/user/list\" class=\"\" role=\"button\">Lister</a>
<br><br>
<div class=\"container\">
 <form method=\"POST\">
 <input type=\"text\" name=\"login\" placeholder=\"search\">
 <input type=\"submit\" name=\"submit\" value=\"search\">
  </form>
  </div>
 <br><br>
 
<table class=\"table table-bordered table-striped\">
<tr class=\"text-dark bg-info\">
<th>id</th>
<th>Login</th>
<th>Nom complet</th>
<th>Date de naisssance</th>
<th>Edit</th>
<th>Delete</th>
</tr>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["em"]) {
            // line 25
            echo "<tr>
<th>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["em"], "id", array()), "html", null, true);
            echo "</th>
<th>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["em"], "login", array()), "html", null, true);
            echo "</th>
<th>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["em"], "nomcomplet", array()), "html", null, true);
            echo "</th>
<th>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["em"], "datenais", array()), "d/m/Y"), "html", null, true);
            echo "</th>
<th><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["em"], "id", array()))), "html", null, true);
            echo "\">Edit</a></th>
<th><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppr", array("id" => $this->getAttribute($context["em"], "id", array()))), "html", null, true);
            echo "\">Delete</a></th>

</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "<td colspan=\"6\">aucun utilisateur</td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['em'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo " </table>
</div>
";
        
        $__internal_82c8b57776619e0e9f0345ff798adc53e6655abe44ca7c93fa92413fd2e1f9f1->leave($__internal_82c8b57776619e0e9f0345ff798adc53e6655abe44ca7c93fa92413fd2e1f9f1_prof);

        
        $__internal_0e07b7d3eeb0ac8c5a7d06f4d831e0ab928432c605d1791568e0494428d5983f->leave($__internal_0e07b7d3eeb0ac8c5a7d06f4d831e0ab928432c605d1791568e0494428d5983f_prof);

    }

    public function getTemplateName()
    {
        return "sntimmoBundle:AdminController:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 37,  109 => 35,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  77 => 25,  72 => 24,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends \"::base.html.twig\" %}
 {% block body %}
 <div class=\"container\">

 <a href=\"/SSymfony/web/app_dev.php/immobilier/user/list\" class=\"\" role=\"button\">Lister</a>
<br><br>
<div class=\"container\">
 <form method=\"POST\">
 <input type=\"text\" name=\"login\" placeholder=\"search\">
 <input type=\"submit\" name=\"submit\" value=\"search\">
  </form>
  </div>
 <br><br>
 
<table class=\"table table-bordered table-striped\">
<tr class=\"text-dark bg-info\">
<th>id</th>
<th>Login</th>
<th>Nom complet</th>
<th>Date de naisssance</th>
<th>Edit</th>
<th>Delete</th>
</tr>
{%for em in users%}
<tr>
<th>{{em.id}}</th>
<th>{{em.login}}</th>
<th>{{em.nomcomplet}}</th>
<th>{{em.datenais|date(\"d/m/Y\")}}</th>
<th><a href=\"{{path('edit',{'id':em.id})}}\">Edit</a></th>
<th><a href=\"{{path('suppr',{'id':em.id})}}\">Delete</a></th>

</tr>
{%else%}
<td colspan=\"6\">aucun utilisateur</td>
{%endfor%}
 </table>
</div>
{% endblock %}
", "sntimmoBundle:AdminController:search.html.twig", "/var/www/html/SSymfony/src/snt/immoBundle/Resources/views/AdminController/search.html.twig");
    }
}
