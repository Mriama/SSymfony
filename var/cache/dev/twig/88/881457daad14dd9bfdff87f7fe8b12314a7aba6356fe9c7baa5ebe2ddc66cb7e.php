<?php

/* ::base.html.twig */
class __TwigTemplate_2e55ceb3e3a8172ee2bdb98420a739c71281e5768b9082c463522045b60e4555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79da932944aad1f18399a05c82f7c63d48e1bd83fbe497b08e75c772866890b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79da932944aad1f18399a05c82f7c63d48e1bd83fbe497b08e75c772866890b9->enter($__internal_79da932944aad1f18399a05c82f7c63d48e1bd83fbe497b08e75c772866890b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_00adc48e225782343e88eee4f9b60d9b8e1ccdb3d96ed04c1bea6570d8319aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00adc48e225782343e88eee4f9b60d9b8e1ccdb3d96ed04c1bea6570d8319aa9->enter($__internal_00adc48e225782343e88eee4f9b60d9b8e1ccdb3d96ed04c1bea6570d8319aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
   
   
   
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_79da932944aad1f18399a05c82f7c63d48e1bd83fbe497b08e75c772866890b9->leave($__internal_79da932944aad1f18399a05c82f7c63d48e1bd83fbe497b08e75c772866890b9_prof);

        
        $__internal_00adc48e225782343e88eee4f9b60d9b8e1ccdb3d96ed04c1bea6570d8319aa9->leave($__internal_00adc48e225782343e88eee4f9b60d9b8e1ccdb3d96ed04c1bea6570d8319aa9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61ec309a097ae82184735b5349e0a071f5a1d70e954135fce7d638aa17a7701d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ec309a097ae82184735b5349e0a071f5a1d70e954135fce7d638aa17a7701d->enter($__internal_61ec309a097ae82184735b5349e0a071f5a1d70e954135fce7d638aa17a7701d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_424f2120cc11bbf5c0cc1be2f1cd736eab3f5836edcb52b9adfe48f31c220e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424f2120cc11bbf5c0cc1be2f1cd736eab3f5836edcb52b9adfe48f31c220e71->enter($__internal_424f2120cc11bbf5c0cc1be2f1cd736eab3f5836edcb52b9adfe48f31c220e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_424f2120cc11bbf5c0cc1be2f1cd736eab3f5836edcb52b9adfe48f31c220e71->leave($__internal_424f2120cc11bbf5c0cc1be2f1cd736eab3f5836edcb52b9adfe48f31c220e71_prof);

        
        $__internal_61ec309a097ae82184735b5349e0a071f5a1d70e954135fce7d638aa17a7701d->leave($__internal_61ec309a097ae82184735b5349e0a071f5a1d70e954135fce7d638aa17a7701d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fca4f0d604318af7c29e6a45e198d7f6f605ecb8559c2fc4ee73cecc268c0aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca4f0d604318af7c29e6a45e198d7f6f605ecb8559c2fc4ee73cecc268c0aa2->enter($__internal_fca4f0d604318af7c29e6a45e198d7f6f605ecb8559c2fc4ee73cecc268c0aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0eb18c9ccdf70320c236108b4dc37a461c725c1080c1c2ee2f3d5b8dd1a9ead3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb18c9ccdf70320c236108b4dc37a461c725c1080c1c2ee2f3d5b8dd1a9ead3->enter($__internal_0eb18c9ccdf70320c236108b4dc37a461c725c1080c1c2ee2f3d5b8dd1a9ead3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>";
        
        $__internal_0eb18c9ccdf70320c236108b4dc37a461c725c1080c1c2ee2f3d5b8dd1a9ead3->leave($__internal_0eb18c9ccdf70320c236108b4dc37a461c725c1080c1c2ee2f3d5b8dd1a9ead3_prof);

        
        $__internal_fca4f0d604318af7c29e6a45e198d7f6f605ecb8559c2fc4ee73cecc268c0aa2->leave($__internal_fca4f0d604318af7c29e6a45e198d7f6f605ecb8559c2fc4ee73cecc268c0aa2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2e20ebaec6cf0ab60b139b5c1f96ce4e047a40fb4d778bda9017edaba3d81b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e20ebaec6cf0ab60b139b5c1f96ce4e047a40fb4d778bda9017edaba3d81b8->enter($__internal_f2e20ebaec6cf0ab60b139b5c1f96ce4e047a40fb4d778bda9017edaba3d81b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_600e8411f7c7fc201caf0375003071d072c62a12296a5863433a1e4c4a311888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600e8411f7c7fc201caf0375003071d072c62a12296a5863433a1e4c4a311888->enter($__internal_600e8411f7c7fc201caf0375003071d072c62a12296a5863433a1e4c4a311888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_600e8411f7c7fc201caf0375003071d072c62a12296a5863433a1e4c4a311888->leave($__internal_600e8411f7c7fc201caf0375003071d072c62a12296a5863433a1e4c4a311888_prof);

        
        $__internal_f2e20ebaec6cf0ab60b139b5c1f96ce4e047a40fb4d778bda9017edaba3d81b8->leave($__internal_f2e20ebaec6cf0ab60b139b5c1f96ce4e047a40fb4d778bda9017edaba3d81b8_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e20bdcb4e5db88099d18f53460deaf9447c2acb081771256c2e5302baf5e23a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20bdcb4e5db88099d18f53460deaf9447c2acb081771256c2e5302baf5e23a7->enter($__internal_e20bdcb4e5db88099d18f53460deaf9447c2acb081771256c2e5302baf5e23a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d545ddd1a28ac77493d3ecb6de52b097baa6f740cfed04250fe223fad770d72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d545ddd1a28ac77493d3ecb6de52b097baa6f740cfed04250fe223fad770d72f->enter($__internal_d545ddd1a28ac77493d3ecb6de52b097baa6f740cfed04250fe223fad770d72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d545ddd1a28ac77493d3ecb6de52b097baa6f740cfed04250fe223fad770d72f->leave($__internal_d545ddd1a28ac77493d3ecb6de52b097baa6f740cfed04250fe223fad770d72f_prof);

        
        $__internal_e20bdcb4e5db88099d18f53460deaf9447c2acb081771256c2e5302baf5e23a7->leave($__internal_e20bdcb4e5db88099d18f53460deaf9447c2acb081771256c2e5302baf5e23a7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 16,  106 => 15,  95 => 7,  86 => 6,  68 => 5,  56 => 17,  53 => 16,  51 => 15,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
   
   
   
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/SSymfony/app/Resources/views/base.html.twig");
    }
}
