<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_21e1384dbb5ce9486a9d17503df7b90e48bc1b6ea63609664f02070f7deb3d3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5afb406257b38bc04843ef98a99969f76e6d565a45c0a02d6cfa51a1aa1139f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afb406257b38bc04843ef98a99969f76e6d565a45c0a02d6cfa51a1aa1139f6->enter($__internal_5afb406257b38bc04843ef98a99969f76e6d565a45c0a02d6cfa51a1aa1139f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_405a7a3e5bb6aafd65a4246ae9def812b49b86addd6d64e977387aabf19f0924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405a7a3e5bb6aafd65a4246ae9def812b49b86addd6d64e977387aabf19f0924->enter($__internal_405a7a3e5bb6aafd65a4246ae9def812b49b86addd6d64e977387aabf19f0924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_5afb406257b38bc04843ef98a99969f76e6d565a45c0a02d6cfa51a1aa1139f6->leave($__internal_5afb406257b38bc04843ef98a99969f76e6d565a45c0a02d6cfa51a1aa1139f6_prof);

        
        $__internal_405a7a3e5bb6aafd65a4246ae9def812b49b86addd6d64e977387aabf19f0924->leave($__internal_405a7a3e5bb6aafd65a4246ae9def812b49b86addd6d64e977387aabf19f0924_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1b5c424f8a6b06eae953190d89405a2f9a98c1626dff1ee4c9448b054fdf165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b5c424f8a6b06eae953190d89405a2f9a98c1626dff1ee4c9448b054fdf165->enter($__internal_c1b5c424f8a6b06eae953190d89405a2f9a98c1626dff1ee4c9448b054fdf165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd51c85d008a2913f6ece51b862dffbd5a16fb57766708c7eca7ea99cf8b3887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd51c85d008a2913f6ece51b862dffbd5a16fb57766708c7eca7ea99cf8b3887->enter($__internal_fd51c85d008a2913f6ece51b862dffbd5a16fb57766708c7eca7ea99cf8b3887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fd51c85d008a2913f6ece51b862dffbd5a16fb57766708c7eca7ea99cf8b3887->leave($__internal_fd51c85d008a2913f6ece51b862dffbd5a16fb57766708c7eca7ea99cf8b3887_prof);

        
        $__internal_c1b5c424f8a6b06eae953190d89405a2f9a98c1626dff1ee4c9448b054fdf165->leave($__internal_c1b5c424f8a6b06eae953190d89405a2f9a98c1626dff1ee4c9448b054fdf165_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_73b26e0b7c16649f394f2a7a18e3f4a206ba85123ae5d01cf792fb88bf03a1af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b26e0b7c16649f394f2a7a18e3f4a206ba85123ae5d01cf792fb88bf03a1af->enter($__internal_73b26e0b7c16649f394f2a7a18e3f4a206ba85123ae5d01cf792fb88bf03a1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6bb260d6a81907dd1d5539e2e79c99075f1817722231bbc89baa75972e33896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bb260d6a81907dd1d5539e2e79c99075f1817722231bbc89baa75972e33896->enter($__internal_d6bb260d6a81907dd1d5539e2e79c99075f1817722231bbc89baa75972e33896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d6bb260d6a81907dd1d5539e2e79c99075f1817722231bbc89baa75972e33896->leave($__internal_d6bb260d6a81907dd1d5539e2e79c99075f1817722231bbc89baa75972e33896_prof);

        
        $__internal_73b26e0b7c16649f394f2a7a18e3f4a206ba85123ae5d01cf792fb88bf03a1af->leave($__internal_73b26e0b7c16649f394f2a7a18e3f4a206ba85123ae5d01cf792fb88bf03a1af_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0372f319ee2d172b139aff289244e51896fd63690b83d6e12cb8baf6e63c8225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0372f319ee2d172b139aff289244e51896fd63690b83d6e12cb8baf6e63c8225->enter($__internal_0372f319ee2d172b139aff289244e51896fd63690b83d6e12cb8baf6e63c8225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_591e7010e9f3064c4e1b33bc173181768488dcc4178e07372ea57ba5e59a94b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591e7010e9f3064c4e1b33bc173181768488dcc4178e07372ea57ba5e59a94b6->enter($__internal_591e7010e9f3064c4e1b33bc173181768488dcc4178e07372ea57ba5e59a94b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_591e7010e9f3064c4e1b33bc173181768488dcc4178e07372ea57ba5e59a94b6->leave($__internal_591e7010e9f3064c4e1b33bc173181768488dcc4178e07372ea57ba5e59a94b6_prof);

        
        $__internal_0372f319ee2d172b139aff289244e51896fd63690b83d6e12cb8baf6e63c8225->leave($__internal_0372f319ee2d172b139aff289244e51896fd63690b83d6e12cb8baf6e63c8225_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/SSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
