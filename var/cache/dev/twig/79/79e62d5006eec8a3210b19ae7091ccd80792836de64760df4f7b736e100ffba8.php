<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbe7533ba7e4fbb56103997f4660d86ae496e5649f7089b944846bef542c7c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29d1c48d005e2f44ce972b1604f0570f2d8de479389d110f4cb03e021e63bdf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d1c48d005e2f44ce972b1604f0570f2d8de479389d110f4cb03e021e63bdf0->enter($__internal_29d1c48d005e2f44ce972b1604f0570f2d8de479389d110f4cb03e021e63bdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_64d1f2c46892a49c41b45a73ef1a998bbe0cff2d959f1444b74616939dbc0295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d1f2c46892a49c41b45a73ef1a998bbe0cff2d959f1444b74616939dbc0295->enter($__internal_64d1f2c46892a49c41b45a73ef1a998bbe0cff2d959f1444b74616939dbc0295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d1c48d005e2f44ce972b1604f0570f2d8de479389d110f4cb03e021e63bdf0->leave($__internal_29d1c48d005e2f44ce972b1604f0570f2d8de479389d110f4cb03e021e63bdf0_prof);

        
        $__internal_64d1f2c46892a49c41b45a73ef1a998bbe0cff2d959f1444b74616939dbc0295->leave($__internal_64d1f2c46892a49c41b45a73ef1a998bbe0cff2d959f1444b74616939dbc0295_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a711ebdd3a39fb31cf6ede49a70adbd20e1d8ef12d36d9db5d3d4a42c9b729fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a711ebdd3a39fb31cf6ede49a70adbd20e1d8ef12d36d9db5d3d4a42c9b729fe->enter($__internal_a711ebdd3a39fb31cf6ede49a70adbd20e1d8ef12d36d9db5d3d4a42c9b729fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8df0c6293f200ee4e8634fce71cb9b4bede58c95be66822e8f2c7b7a5e3f886e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df0c6293f200ee4e8634fce71cb9b4bede58c95be66822e8f2c7b7a5e3f886e->enter($__internal_8df0c6293f200ee4e8634fce71cb9b4bede58c95be66822e8f2c7b7a5e3f886e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8df0c6293f200ee4e8634fce71cb9b4bede58c95be66822e8f2c7b7a5e3f886e->leave($__internal_8df0c6293f200ee4e8634fce71cb9b4bede58c95be66822e8f2c7b7a5e3f886e_prof);

        
        $__internal_a711ebdd3a39fb31cf6ede49a70adbd20e1d8ef12d36d9db5d3d4a42c9b729fe->leave($__internal_a711ebdd3a39fb31cf6ede49a70adbd20e1d8ef12d36d9db5d3d4a42c9b729fe_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_04d592729d40f945e0aec31b61ebc3a45fda409c318d1cf708c3882b5644a289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d592729d40f945e0aec31b61ebc3a45fda409c318d1cf708c3882b5644a289->enter($__internal_04d592729d40f945e0aec31b61ebc3a45fda409c318d1cf708c3882b5644a289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f12e0cd650153c5060cfae30b23989981dc25a7e6d39e2fe105bfc6a38370125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12e0cd650153c5060cfae30b23989981dc25a7e6d39e2fe105bfc6a38370125->enter($__internal_f12e0cd650153c5060cfae30b23989981dc25a7e6d39e2fe105bfc6a38370125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f12e0cd650153c5060cfae30b23989981dc25a7e6d39e2fe105bfc6a38370125->leave($__internal_f12e0cd650153c5060cfae30b23989981dc25a7e6d39e2fe105bfc6a38370125_prof);

        
        $__internal_04d592729d40f945e0aec31b61ebc3a45fda409c318d1cf708c3882b5644a289->leave($__internal_04d592729d40f945e0aec31b61ebc3a45fda409c318d1cf708c3882b5644a289_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b5d2c15d8a28fba13adad45164aaffdce62f38b6f0f335ebe738473e6515b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5d2c15d8a28fba13adad45164aaffdce62f38b6f0f335ebe738473e6515b75->enter($__internal_3b5d2c15d8a28fba13adad45164aaffdce62f38b6f0f335ebe738473e6515b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ff62bb8e20610b95697b1597cad286a7d6e29f4588feb20e942a6540127fe76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff62bb8e20610b95697b1597cad286a7d6e29f4588feb20e942a6540127fe76->enter($__internal_3ff62bb8e20610b95697b1597cad286a7d6e29f4588feb20e942a6540127fe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3ff62bb8e20610b95697b1597cad286a7d6e29f4588feb20e942a6540127fe76->leave($__internal_3ff62bb8e20610b95697b1597cad286a7d6e29f4588feb20e942a6540127fe76_prof);

        
        $__internal_3b5d2c15d8a28fba13adad45164aaffdce62f38b6f0f335ebe738473e6515b75->leave($__internal_3b5d2c15d8a28fba13adad45164aaffdce62f38b6f0f335ebe738473e6515b75_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/SSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
