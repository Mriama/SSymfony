<?php

/* form_table_layout.html.twig */
class __TwigTemplate_62b2362143d222114c5430593d1a2a81c99dda35c8f8c1ebd1959f031bad371b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14eb0c5b84f7a4f9bcec1f09bd90e22efe5c4eecd11fb33e8f797ff06f4fbe8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14eb0c5b84f7a4f9bcec1f09bd90e22efe5c4eecd11fb33e8f797ff06f4fbe8c->enter($__internal_14eb0c5b84f7a4f9bcec1f09bd90e22efe5c4eecd11fb33e8f797ff06f4fbe8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_d869b75a6e70bfe23a12ca35cd7f1a02933475cc5eaf42f0f9ee158741f6d653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d869b75a6e70bfe23a12ca35cd7f1a02933475cc5eaf42f0f9ee158741f6d653->enter($__internal_d869b75a6e70bfe23a12ca35cd7f1a02933475cc5eaf42f0f9ee158741f6d653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_14eb0c5b84f7a4f9bcec1f09bd90e22efe5c4eecd11fb33e8f797ff06f4fbe8c->leave($__internal_14eb0c5b84f7a4f9bcec1f09bd90e22efe5c4eecd11fb33e8f797ff06f4fbe8c_prof);

        
        $__internal_d869b75a6e70bfe23a12ca35cd7f1a02933475cc5eaf42f0f9ee158741f6d653->leave($__internal_d869b75a6e70bfe23a12ca35cd7f1a02933475cc5eaf42f0f9ee158741f6d653_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_482e95e007eb445d423a6f4e5e88976547deb30e33d33f8c3c4641e2fcd6b7b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482e95e007eb445d423a6f4e5e88976547deb30e33d33f8c3c4641e2fcd6b7b7->enter($__internal_482e95e007eb445d423a6f4e5e88976547deb30e33d33f8c3c4641e2fcd6b7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_47547c01211193594ee21b38cceb8ec657c37f80040b338c700ff6f8641c8dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47547c01211193594ee21b38cceb8ec657c37f80040b338c700ff6f8641c8dde->enter($__internal_47547c01211193594ee21b38cceb8ec657c37f80040b338c700ff6f8641c8dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_47547c01211193594ee21b38cceb8ec657c37f80040b338c700ff6f8641c8dde->leave($__internal_47547c01211193594ee21b38cceb8ec657c37f80040b338c700ff6f8641c8dde_prof);

        
        $__internal_482e95e007eb445d423a6f4e5e88976547deb30e33d33f8c3c4641e2fcd6b7b7->leave($__internal_482e95e007eb445d423a6f4e5e88976547deb30e33d33f8c3c4641e2fcd6b7b7_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9bca43490258f15b5b8747d8624be47669f813c33d82c3546537babbeaf2683b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bca43490258f15b5b8747d8624be47669f813c33d82c3546537babbeaf2683b->enter($__internal_9bca43490258f15b5b8747d8624be47669f813c33d82c3546537babbeaf2683b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_2a2f4aba42e38368a799596531b6953ac69387fd0b2d99ad4aa5107fb41cd0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2f4aba42e38368a799596531b6953ac69387fd0b2d99ad4aa5107fb41cd0b2->enter($__internal_2a2f4aba42e38368a799596531b6953ac69387fd0b2d99ad4aa5107fb41cd0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_2a2f4aba42e38368a799596531b6953ac69387fd0b2d99ad4aa5107fb41cd0b2->leave($__internal_2a2f4aba42e38368a799596531b6953ac69387fd0b2d99ad4aa5107fb41cd0b2_prof);

        
        $__internal_9bca43490258f15b5b8747d8624be47669f813c33d82c3546537babbeaf2683b->leave($__internal_9bca43490258f15b5b8747d8624be47669f813c33d82c3546537babbeaf2683b_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_823b52aebcb6e3d5185ec73e9f44ba8b3a67888dcee339752910d36e6529f61b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823b52aebcb6e3d5185ec73e9f44ba8b3a67888dcee339752910d36e6529f61b->enter($__internal_823b52aebcb6e3d5185ec73e9f44ba8b3a67888dcee339752910d36e6529f61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_0e393f07b0d7e87493539ea8d709aadf5dd70ab8aa0e6293a9192a1ad095189f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e393f07b0d7e87493539ea8d709aadf5dd70ab8aa0e6293a9192a1ad095189f->enter($__internal_0e393f07b0d7e87493539ea8d709aadf5dd70ab8aa0e6293a9192a1ad095189f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_0e393f07b0d7e87493539ea8d709aadf5dd70ab8aa0e6293a9192a1ad095189f->leave($__internal_0e393f07b0d7e87493539ea8d709aadf5dd70ab8aa0e6293a9192a1ad095189f_prof);

        
        $__internal_823b52aebcb6e3d5185ec73e9f44ba8b3a67888dcee339752910d36e6529f61b->leave($__internal_823b52aebcb6e3d5185ec73e9f44ba8b3a67888dcee339752910d36e6529f61b_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_14ce178abfde37b8b5e98b5d201bfac360db967968313ee98a942c25698f0e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ce178abfde37b8b5e98b5d201bfac360db967968313ee98a942c25698f0e2a->enter($__internal_14ce178abfde37b8b5e98b5d201bfac360db967968313ee98a942c25698f0e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_5c4456b246d20172c825b75d1a81484fcfdfd25646c392e7acecfaefe3f4bd31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4456b246d20172c825b75d1a81484fcfdfd25646c392e7acecfaefe3f4bd31->enter($__internal_5c4456b246d20172c825b75d1a81484fcfdfd25646c392e7acecfaefe3f4bd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_5c4456b246d20172c825b75d1a81484fcfdfd25646c392e7acecfaefe3f4bd31->leave($__internal_5c4456b246d20172c825b75d1a81484fcfdfd25646c392e7acecfaefe3f4bd31_prof);

        
        $__internal_14ce178abfde37b8b5e98b5d201bfac360db967968313ee98a942c25698f0e2a->leave($__internal_14ce178abfde37b8b5e98b5d201bfac360db967968313ee98a942c25698f0e2a_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/SSymfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
