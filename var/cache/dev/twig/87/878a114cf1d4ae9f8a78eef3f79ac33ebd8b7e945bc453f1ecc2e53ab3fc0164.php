<?php

/* sntimmoBundle:AdminController:text.html.twig */
class __TwigTemplate_428e1a26a5b4a81372c625d6cc4f507151cb8fc6280649ec77afe29fd8eb1056 extends Twig_Template
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
        $__internal_bc6c6a194c957f7bf237139c14a8d08b8f382add77efa376c32ac351b80c2b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6c6a194c957f7bf237139c14a8d08b8f382add77efa376c32ac351b80c2b1e->enter($__internal_bc6c6a194c957f7bf237139c14a8d08b8f382add77efa376c32ac351b80c2b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sntimmoBundle:AdminController:text.html.twig"));

        $__internal_a37d70c1f14b9b59c4f687219da81e40ddbe01fb415ee0667bb485e5b081b2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37d70c1f14b9b59c4f687219da81e40ddbe01fb415ee0667bb485e5b081b2c3->enter($__internal_a37d70c1f14b9b59c4f687219da81e40ddbe01fb415ee0667bb485e5b081b2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sntimmoBundle:AdminController:text.html.twig"));

        // line 1
        echo "bonjour ";
        echo twig_escape_filter($this->env, ($context["sa"] ?? $this->getContext($context, "sa")), "html", null, true);
        
        $__internal_bc6c6a194c957f7bf237139c14a8d08b8f382add77efa376c32ac351b80c2b1e->leave($__internal_bc6c6a194c957f7bf237139c14a8d08b8f382add77efa376c32ac351b80c2b1e_prof);

        
        $__internal_a37d70c1f14b9b59c4f687219da81e40ddbe01fb415ee0667bb485e5b081b2c3->leave($__internal_a37d70c1f14b9b59c4f687219da81e40ddbe01fb415ee0667bb485e5b081b2c3_prof);

    }

    public function getTemplateName()
    {
        return "sntimmoBundle:AdminController:text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("bonjour {{sa}}", "sntimmoBundle:AdminController:text.html.twig", "/var/www/html/SSymfony/src/snt/immoBundle/Resources/views/AdminController/text.html.twig");
    }
}
