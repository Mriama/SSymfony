<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_331c007d19a699a8f9348969575a20cbd6d1002c90c8e1cab57044633e7a2a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d2903819381f0c252c3229968cd85cd7659c898028e5723c249a2544ccb5350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2903819381f0c252c3229968cd85cd7659c898028e5723c249a2544ccb5350->enter($__internal_7d2903819381f0c252c3229968cd85cd7659c898028e5723c249a2544ccb5350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_0c94f06ad4dc617f62fef1f5854ce7b0f32167d8c5e1968b63b5d476ade2efc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c94f06ad4dc617f62fef1f5854ce7b0f32167d8c5e1968b63b5d476ade2efc5->enter($__internal_0c94f06ad4dc617f62fef1f5854ce7b0f32167d8c5e1968b63b5d476ade2efc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d2903819381f0c252c3229968cd85cd7659c898028e5723c249a2544ccb5350->leave($__internal_7d2903819381f0c252c3229968cd85cd7659c898028e5723c249a2544ccb5350_prof);

        
        $__internal_0c94f06ad4dc617f62fef1f5854ce7b0f32167d8c5e1968b63b5d476ade2efc5->leave($__internal_0c94f06ad4dc617f62fef1f5854ce7b0f32167d8c5e1968b63b5d476ade2efc5_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_af19822c84f68555990b02ee3b4d2957c09f24a189a0ad0f626962e82b78e33f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af19822c84f68555990b02ee3b4d2957c09f24a189a0ad0f626962e82b78e33f->enter($__internal_af19822c84f68555990b02ee3b4d2957c09f24a189a0ad0f626962e82b78e33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_c88ca7120aa0b311bfafbb69bb887e3ce5ea1beb1a500cbc5148b743e40211a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88ca7120aa0b311bfafbb69bb887e3ce5ea1beb1a500cbc5148b743e40211a3->enter($__internal_c88ca7120aa0b311bfafbb69bb887e3ce5ea1beb1a500cbc5148b743e40211a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c88ca7120aa0b311bfafbb69bb887e3ce5ea1beb1a500cbc5148b743e40211a3->leave($__internal_c88ca7120aa0b311bfafbb69bb887e3ce5ea1beb1a500cbc5148b743e40211a3_prof);

        
        $__internal_af19822c84f68555990b02ee3b4d2957c09f24a189a0ad0f626962e82b78e33f->leave($__internal_af19822c84f68555990b02ee3b4d2957c09f24a189a0ad0f626962e82b78e33f_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_069d1f74bd7d6e5d0eb6b84dc7d44fb0b9eadcd45527a6d777373d06a9d58d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069d1f74bd7d6e5d0eb6b84dc7d44fb0b9eadcd45527a6d777373d06a9d58d4b->enter($__internal_069d1f74bd7d6e5d0eb6b84dc7d44fb0b9eadcd45527a6d777373d06a9d58d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_07c8260c90869f0f60605a160012e4bcdef45e5ff96e76d6eac9f0f51f8f207b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c8260c90869f0f60605a160012e4bcdef45e5ff96e76d6eac9f0f51f8f207b->enter($__internal_07c8260c90869f0f60605a160012e4bcdef45e5ff96e76d6eac9f0f51f8f207b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_07c8260c90869f0f60605a160012e4bcdef45e5ff96e76d6eac9f0f51f8f207b->leave($__internal_07c8260c90869f0f60605a160012e4bcdef45e5ff96e76d6eac9f0f51f8f207b_prof);

        
        $__internal_069d1f74bd7d6e5d0eb6b84dc7d44fb0b9eadcd45527a6d777373d06a9d58d4b->leave($__internal_069d1f74bd7d6e5d0eb6b84dc7d44fb0b9eadcd45527a6d777373d06a9d58d4b_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_81150c646254abffa8b821041d17aac5cb837bdc20006fc741905e7723ba3932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81150c646254abffa8b821041d17aac5cb837bdc20006fc741905e7723ba3932->enter($__internal_81150c646254abffa8b821041d17aac5cb837bdc20006fc741905e7723ba3932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e6454de5cff7e6ba46e96dc342098e71ae7df6e60c98a0b4071c881b60258b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6454de5cff7e6ba46e96dc342098e71ae7df6e60c98a0b4071c881b60258b6a->enter($__internal_e6454de5cff7e6ba46e96dc342098e71ae7df6e60c98a0b4071c881b60258b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e6454de5cff7e6ba46e96dc342098e71ae7df6e60c98a0b4071c881b60258b6a->leave($__internal_e6454de5cff7e6ba46e96dc342098e71ae7df6e60c98a0b4071c881b60258b6a_prof);

        
        $__internal_81150c646254abffa8b821041d17aac5cb837bdc20006fc741905e7723ba3932->leave($__internal_81150c646254abffa8b821041d17aac5cb837bdc20006fc741905e7723ba3932_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b4262a7bce7136fa8d6c6876f8c68ecc451895071faa28e8568ecf5bd0b865d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4262a7bce7136fa8d6c6876f8c68ecc451895071faa28e8568ecf5bd0b865d8->enter($__internal_b4262a7bce7136fa8d6c6876f8c68ecc451895071faa28e8568ecf5bd0b865d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_f2f19aac3d5f88bde516c54a273ae7070eee05f13f12a1a4ace98e4dd955fcbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f19aac3d5f88bde516c54a273ae7070eee05f13f12a1a4ace98e4dd955fcbb->enter($__internal_f2f19aac3d5f88bde516c54a273ae7070eee05f13f12a1a4ace98e4dd955fcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_f2f19aac3d5f88bde516c54a273ae7070eee05f13f12a1a4ace98e4dd955fcbb->leave($__internal_f2f19aac3d5f88bde516c54a273ae7070eee05f13f12a1a4ace98e4dd955fcbb_prof);

        
        $__internal_b4262a7bce7136fa8d6c6876f8c68ecc451895071faa28e8568ecf5bd0b865d8->leave($__internal_b4262a7bce7136fa8d6c6876f8c68ecc451895071faa28e8568ecf5bd0b865d8_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1fe443659d5487d5ca534566e1d35b9292b841ed92309f011b680c4f9b2c1941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe443659d5487d5ca534566e1d35b9292b841ed92309f011b680c4f9b2c1941->enter($__internal_1fe443659d5487d5ca534566e1d35b9292b841ed92309f011b680c4f9b2c1941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_10faf26b12d06cd4055f964abf62b632a2f647ce71fec10b2bfcb85a8d8c1a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10faf26b12d06cd4055f964abf62b632a2f647ce71fec10b2bfcb85a8d8c1a8b->enter($__internal_10faf26b12d06cd4055f964abf62b632a2f647ce71fec10b2bfcb85a8d8c1a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_10faf26b12d06cd4055f964abf62b632a2f647ce71fec10b2bfcb85a8d8c1a8b->leave($__internal_10faf26b12d06cd4055f964abf62b632a2f647ce71fec10b2bfcb85a8d8c1a8b_prof);

        
        $__internal_1fe443659d5487d5ca534566e1d35b9292b841ed92309f011b680c4f9b2c1941->leave($__internal_1fe443659d5487d5ca534566e1d35b9292b841ed92309f011b680c4f9b2c1941_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_7ed9e2a1c3399106f09739d62cb32189367650e1690cc302e8777cc50965c89c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed9e2a1c3399106f09739d62cb32189367650e1690cc302e8777cc50965c89c->enter($__internal_7ed9e2a1c3399106f09739d62cb32189367650e1690cc302e8777cc50965c89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_97ffa84ca9ab710c3b9ebed4d38d1c8245dadbbd908fbd877f3b66b2e853ef1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ffa84ca9ab710c3b9ebed4d38d1c8245dadbbd908fbd877f3b66b2e853ef1a->enter($__internal_97ffa84ca9ab710c3b9ebed4d38d1c8245dadbbd908fbd877f3b66b2e853ef1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_97ffa84ca9ab710c3b9ebed4d38d1c8245dadbbd908fbd877f3b66b2e853ef1a->leave($__internal_97ffa84ca9ab710c3b9ebed4d38d1c8245dadbbd908fbd877f3b66b2e853ef1a_prof);

        
        $__internal_7ed9e2a1c3399106f09739d62cb32189367650e1690cc302e8777cc50965c89c->leave($__internal_7ed9e2a1c3399106f09739d62cb32189367650e1690cc302e8777cc50965c89c_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_315413a231984a8b2283f5b057877b96b9202335faf1483c1a113aa74c9c934e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315413a231984a8b2283f5b057877b96b9202335faf1483c1a113aa74c9c934e->enter($__internal_315413a231984a8b2283f5b057877b96b9202335faf1483c1a113aa74c9c934e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_8506e12648e191a78a6d294c811d248ca818f75fb9f205e2a47caa3676f0c46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8506e12648e191a78a6d294c811d248ca818f75fb9f205e2a47caa3676f0c46c->enter($__internal_8506e12648e191a78a6d294c811d248ca818f75fb9f205e2a47caa3676f0c46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_8506e12648e191a78a6d294c811d248ca818f75fb9f205e2a47caa3676f0c46c->leave($__internal_8506e12648e191a78a6d294c811d248ca818f75fb9f205e2a47caa3676f0c46c_prof);

        
        $__internal_315413a231984a8b2283f5b057877b96b9202335faf1483c1a113aa74c9c934e->leave($__internal_315413a231984a8b2283f5b057877b96b9202335faf1483c1a113aa74c9c934e_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_f7a25ffb87eaec7d9c05cf6b12d78491c2799317ec30f014f597a7e914d73354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a25ffb87eaec7d9c05cf6b12d78491c2799317ec30f014f597a7e914d73354->enter($__internal_f7a25ffb87eaec7d9c05cf6b12d78491c2799317ec30f014f597a7e914d73354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_a6e8bbeb95fc1564197776f44efd8b2bf75a68361ea1853ffe5a2be3f5cffb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e8bbeb95fc1564197776f44efd8b2bf75a68361ea1853ffe5a2be3f5cffb9d->enter($__internal_a6e8bbeb95fc1564197776f44efd8b2bf75a68361ea1853ffe5a2be3f5cffb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_a6e8bbeb95fc1564197776f44efd8b2bf75a68361ea1853ffe5a2be3f5cffb9d->leave($__internal_a6e8bbeb95fc1564197776f44efd8b2bf75a68361ea1853ffe5a2be3f5cffb9d_prof);

        
        $__internal_f7a25ffb87eaec7d9c05cf6b12d78491c2799317ec30f014f597a7e914d73354->leave($__internal_f7a25ffb87eaec7d9c05cf6b12d78491c2799317ec30f014f597a7e914d73354_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f47f935d89a339292c9299049656a59797eb76b3ee4ee79f11918a07b14164d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47f935d89a339292c9299049656a59797eb76b3ee4ee79f11918a07b14164d8->enter($__internal_f47f935d89a339292c9299049656a59797eb76b3ee4ee79f11918a07b14164d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1d16742b5af8ace837fc2605e0e6fd0fdd68ee5dc4fed86695cc0d593b568e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d16742b5af8ace837fc2605e0e6fd0fdd68ee5dc4fed86695cc0d593b568e77->enter($__internal_1d16742b5af8ace837fc2605e0e6fd0fdd68ee5dc4fed86695cc0d593b568e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_1d16742b5af8ace837fc2605e0e6fd0fdd68ee5dc4fed86695cc0d593b568e77->leave($__internal_1d16742b5af8ace837fc2605e0e6fd0fdd68ee5dc4fed86695cc0d593b568e77_prof);

        
        $__internal_f47f935d89a339292c9299049656a59797eb76b3ee4ee79f11918a07b14164d8->leave($__internal_f47f935d89a339292c9299049656a59797eb76b3ee4ee79f11918a07b14164d8_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7d0cb5909a55f08a588f33379d445cace8f38a6fa2acba83a9b55904e5d9d62c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d0cb5909a55f08a588f33379d445cace8f38a6fa2acba83a9b55904e5d9d62c->enter($__internal_7d0cb5909a55f08a588f33379d445cace8f38a6fa2acba83a9b55904e5d9d62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_df1ba79c13818adec64cb2bedcc9a0f4c0e7c421c44cce6bde7495c3fd8a5000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1ba79c13818adec64cb2bedcc9a0f4c0e7c421c44cce6bde7495c3fd8a5000->enter($__internal_df1ba79c13818adec64cb2bedcc9a0f4c0e7c421c44cce6bde7495c3fd8a5000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_df1ba79c13818adec64cb2bedcc9a0f4c0e7c421c44cce6bde7495c3fd8a5000->leave($__internal_df1ba79c13818adec64cb2bedcc9a0f4c0e7c421c44cce6bde7495c3fd8a5000_prof);

        
        $__internal_7d0cb5909a55f08a588f33379d445cace8f38a6fa2acba83a9b55904e5d9d62c->leave($__internal_7d0cb5909a55f08a588f33379d445cace8f38a6fa2acba83a9b55904e5d9d62c_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5d3efac48aa161cf5df7e3fa6338b42cc1e04974144adf138d33732768c37eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3efac48aa161cf5df7e3fa6338b42cc1e04974144adf138d33732768c37eb4->enter($__internal_5d3efac48aa161cf5df7e3fa6338b42cc1e04974144adf138d33732768c37eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_4c74bd40f4f900b2d7db56e775bd8dc0821f46fdf64e35ac6cf3eb837c1b2030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c74bd40f4f900b2d7db56e775bd8dc0821f46fdf64e35ac6cf3eb837c1b2030->enter($__internal_4c74bd40f4f900b2d7db56e775bd8dc0821f46fdf64e35ac6cf3eb837c1b2030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_4c74bd40f4f900b2d7db56e775bd8dc0821f46fdf64e35ac6cf3eb837c1b2030->leave($__internal_4c74bd40f4f900b2d7db56e775bd8dc0821f46fdf64e35ac6cf3eb837c1b2030_prof);

        
        $__internal_5d3efac48aa161cf5df7e3fa6338b42cc1e04974144adf138d33732768c37eb4->leave($__internal_5d3efac48aa161cf5df7e3fa6338b42cc1e04974144adf138d33732768c37eb4_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1c1e5e496b8047c43d1df7a23d41c792f0917c3471365e1600379e9214ed3630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1e5e496b8047c43d1df7a23d41c792f0917c3471365e1600379e9214ed3630->enter($__internal_1c1e5e496b8047c43d1df7a23d41c792f0917c3471365e1600379e9214ed3630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_a014b763d99518ba9887b9393bdc94ec4e7416cdb080d1253dabc730ffcd8b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a014b763d99518ba9887b9393bdc94ec4e7416cdb080d1253dabc730ffcd8b58->enter($__internal_a014b763d99518ba9887b9393bdc94ec4e7416cdb080d1253dabc730ffcd8b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_a014b763d99518ba9887b9393bdc94ec4e7416cdb080d1253dabc730ffcd8b58->leave($__internal_a014b763d99518ba9887b9393bdc94ec4e7416cdb080d1253dabc730ffcd8b58_prof);

        
        $__internal_1c1e5e496b8047c43d1df7a23d41c792f0917c3471365e1600379e9214ed3630->leave($__internal_1c1e5e496b8047c43d1df7a23d41c792f0917c3471365e1600379e9214ed3630_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a6efd259ff172bfaa9d17715c2f0cafe632d6ae1911aefc26286bf753549807d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6efd259ff172bfaa9d17715c2f0cafe632d6ae1911aefc26286bf753549807d->enter($__internal_a6efd259ff172bfaa9d17715c2f0cafe632d6ae1911aefc26286bf753549807d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0e96e5faf69c5459f4cc0e23cdf6b18c28151c15425d5c9b731d4a065fae0a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e96e5faf69c5459f4cc0e23cdf6b18c28151c15425d5c9b731d4a065fae0a4f->enter($__internal_0e96e5faf69c5459f4cc0e23cdf6b18c28151c15425d5c9b731d4a065fae0a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0e96e5faf69c5459f4cc0e23cdf6b18c28151c15425d5c9b731d4a065fae0a4f->leave($__internal_0e96e5faf69c5459f4cc0e23cdf6b18c28151c15425d5c9b731d4a065fae0a4f_prof);

        
        $__internal_a6efd259ff172bfaa9d17715c2f0cafe632d6ae1911aefc26286bf753549807d->leave($__internal_a6efd259ff172bfaa9d17715c2f0cafe632d6ae1911aefc26286bf753549807d_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a42fc4d9df378c798b910574c023ecc3f62400e90ca2559d1e665f219cb784da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42fc4d9df378c798b910574c023ecc3f62400e90ca2559d1e665f219cb784da->enter($__internal_a42fc4d9df378c798b910574c023ecc3f62400e90ca2559d1e665f219cb784da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_bead19485f6a350a7a55a47183642c1ca7dfb0f5ee5fb3dfc1002d5f33cbcc77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bead19485f6a350a7a55a47183642c1ca7dfb0f5ee5fb3dfc1002d5f33cbcc77->enter($__internal_bead19485f6a350a7a55a47183642c1ca7dfb0f5ee5fb3dfc1002d5f33cbcc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_bead19485f6a350a7a55a47183642c1ca7dfb0f5ee5fb3dfc1002d5f33cbcc77->leave($__internal_bead19485f6a350a7a55a47183642c1ca7dfb0f5ee5fb3dfc1002d5f33cbcc77_prof);

        
        $__internal_a42fc4d9df378c798b910574c023ecc3f62400e90ca2559d1e665f219cb784da->leave($__internal_a42fc4d9df378c798b910574c023ecc3f62400e90ca2559d1e665f219cb784da_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b7875dd955b9f7fda98840c020eef58e248091f98ebd8585436806e5724524a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7875dd955b9f7fda98840c020eef58e248091f98ebd8585436806e5724524a7->enter($__internal_b7875dd955b9f7fda98840c020eef58e248091f98ebd8585436806e5724524a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_b9d84f05ba0a63dfd6d3f5c11533a96abeaa3229bbc5138eb0670cb6f2cf7784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d84f05ba0a63dfd6d3f5c11533a96abeaa3229bbc5138eb0670cb6f2cf7784->enter($__internal_b9d84f05ba0a63dfd6d3f5c11533a96abeaa3229bbc5138eb0670cb6f2cf7784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b9d84f05ba0a63dfd6d3f5c11533a96abeaa3229bbc5138eb0670cb6f2cf7784->leave($__internal_b9d84f05ba0a63dfd6d3f5c11533a96abeaa3229bbc5138eb0670cb6f2cf7784_prof);

        
        $__internal_b7875dd955b9f7fda98840c020eef58e248091f98ebd8585436806e5724524a7->leave($__internal_b7875dd955b9f7fda98840c020eef58e248091f98ebd8585436806e5724524a7_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_f6c933d37a4ea56d609b4834bf16ea145ae2cbb9061447cffbe9b31313b2f80c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c933d37a4ea56d609b4834bf16ea145ae2cbb9061447cffbe9b31313b2f80c->enter($__internal_f6c933d37a4ea56d609b4834bf16ea145ae2cbb9061447cffbe9b31313b2f80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_74492d8a3e689c2d79fa6b384ca9cf58f2c5434b306b6c10e332f0be8dc37fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74492d8a3e689c2d79fa6b384ca9cf58f2c5434b306b6c10e332f0be8dc37fc7->enter($__internal_74492d8a3e689c2d79fa6b384ca9cf58f2c5434b306b6c10e332f0be8dc37fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_74492d8a3e689c2d79fa6b384ca9cf58f2c5434b306b6c10e332f0be8dc37fc7->leave($__internal_74492d8a3e689c2d79fa6b384ca9cf58f2c5434b306b6c10e332f0be8dc37fc7_prof);

        
        $__internal_f6c933d37a4ea56d609b4834bf16ea145ae2cbb9061447cffbe9b31313b2f80c->leave($__internal_f6c933d37a4ea56d609b4834bf16ea145ae2cbb9061447cffbe9b31313b2f80c_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_bd9d7102c6795ba4c3c761769d0daf071eaacf887a03abe26db5ec51f542e30a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9d7102c6795ba4c3c761769d0daf071eaacf887a03abe26db5ec51f542e30a->enter($__internal_bd9d7102c6795ba4c3c761769d0daf071eaacf887a03abe26db5ec51f542e30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_d524f570780ea4cafe35bd9a79dfcc225b44b26842a5cfa2f6d924b4d656c4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d524f570780ea4cafe35bd9a79dfcc225b44b26842a5cfa2f6d924b4d656c4f0->enter($__internal_d524f570780ea4cafe35bd9a79dfcc225b44b26842a5cfa2f6d924b4d656c4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_d524f570780ea4cafe35bd9a79dfcc225b44b26842a5cfa2f6d924b4d656c4f0->leave($__internal_d524f570780ea4cafe35bd9a79dfcc225b44b26842a5cfa2f6d924b4d656c4f0_prof);

        
        $__internal_bd9d7102c6795ba4c3c761769d0daf071eaacf887a03abe26db5ec51f542e30a->leave($__internal_bd9d7102c6795ba4c3c761769d0daf071eaacf887a03abe26db5ec51f542e30a_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4fe03c96db94e2b35f6921ccdbf0bd95001c42064f01595bd7c171e9a509ace6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe03c96db94e2b35f6921ccdbf0bd95001c42064f01595bd7c171e9a509ace6->enter($__internal_4fe03c96db94e2b35f6921ccdbf0bd95001c42064f01595bd7c171e9a509ace6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9055cf779c1444b234430c71b49da0dc21983096bdb7708e984e052145990463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9055cf779c1444b234430c71b49da0dc21983096bdb7708e984e052145990463->enter($__internal_9055cf779c1444b234430c71b49da0dc21983096bdb7708e984e052145990463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_9055cf779c1444b234430c71b49da0dc21983096bdb7708e984e052145990463->leave($__internal_9055cf779c1444b234430c71b49da0dc21983096bdb7708e984e052145990463_prof);

        
        $__internal_4fe03c96db94e2b35f6921ccdbf0bd95001c42064f01595bd7c171e9a509ace6->leave($__internal_4fe03c96db94e2b35f6921ccdbf0bd95001c42064f01595bd7c171e9a509ace6_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_4659ea4cd9b746ac364b1d450179fda1a8fe3a116bde7234f8bf5c19d44a8143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4659ea4cd9b746ac364b1d450179fda1a8fe3a116bde7234f8bf5c19d44a8143->enter($__internal_4659ea4cd9b746ac364b1d450179fda1a8fe3a116bde7234f8bf5c19d44a8143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_61c638103ac78517920298448a02839c9a18644a95a5d8a207d95476d2d8a4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c638103ac78517920298448a02839c9a18644a95a5d8a207d95476d2d8a4e3->enter($__internal_61c638103ac78517920298448a02839c9a18644a95a5d8a207d95476d2d8a4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_61c638103ac78517920298448a02839c9a18644a95a5d8a207d95476d2d8a4e3->leave($__internal_61c638103ac78517920298448a02839c9a18644a95a5d8a207d95476d2d8a4e3_prof);

        
        $__internal_4659ea4cd9b746ac364b1d450179fda1a8fe3a116bde7234f8bf5c19d44a8143->leave($__internal_4659ea4cd9b746ac364b1d450179fda1a8fe3a116bde7234f8bf5c19d44a8143_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d31b926c2ad2752ff9f7f8fb7a9f879f9d381233c07eeba5bbdedaa5c092955a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d31b926c2ad2752ff9f7f8fb7a9f879f9d381233c07eeba5bbdedaa5c092955a->enter($__internal_d31b926c2ad2752ff9f7f8fb7a9f879f9d381233c07eeba5bbdedaa5c092955a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_4e8b2209344c7a514cb3891eb1368db23acd8c67b31c8af8c3ac22cd84c88ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8b2209344c7a514cb3891eb1368db23acd8c67b31c8af8c3ac22cd84c88ce0->enter($__internal_4e8b2209344c7a514cb3891eb1368db23acd8c67b31c8af8c3ac22cd84c88ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4e8b2209344c7a514cb3891eb1368db23acd8c67b31c8af8c3ac22cd84c88ce0->leave($__internal_4e8b2209344c7a514cb3891eb1368db23acd8c67b31c8af8c3ac22cd84c88ce0_prof);

        
        $__internal_d31b926c2ad2752ff9f7f8fb7a9f879f9d381233c07eeba5bbdedaa5c092955a->leave($__internal_d31b926c2ad2752ff9f7f8fb7a9f879f9d381233c07eeba5bbdedaa5c092955a_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_467d30a501e7d2ac017b2347fce98577578d79a6d805b6020010129467467148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467d30a501e7d2ac017b2347fce98577578d79a6d805b6020010129467467148->enter($__internal_467d30a501e7d2ac017b2347fce98577578d79a6d805b6020010129467467148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_ecea54d5905802cff9972066f736f6b1bb41ce81942c334bbb3ed52a31f263a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecea54d5905802cff9972066f736f6b1bb41ce81942c334bbb3ed52a31f263a9->enter($__internal_ecea54d5905802cff9972066f736f6b1bb41ce81942c334bbb3ed52a31f263a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ecea54d5905802cff9972066f736f6b1bb41ce81942c334bbb3ed52a31f263a9->leave($__internal_ecea54d5905802cff9972066f736f6b1bb41ce81942c334bbb3ed52a31f263a9_prof);

        
        $__internal_467d30a501e7d2ac017b2347fce98577578d79a6d805b6020010129467467148->leave($__internal_467d30a501e7d2ac017b2347fce98577578d79a6d805b6020010129467467148_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_9226e5ba08673409880cdb7fa1e392580070faea2219c1fdcc486f357110fa8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9226e5ba08673409880cdb7fa1e392580070faea2219c1fdcc486f357110fa8e->enter($__internal_9226e5ba08673409880cdb7fa1e392580070faea2219c1fdcc486f357110fa8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_323d46963b9f0e509c17bb0f24aa666e2fa63caba20bbbb4c8da36f4c22e7e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323d46963b9f0e509c17bb0f24aa666e2fa63caba20bbbb4c8da36f4c22e7e11->enter($__internal_323d46963b9f0e509c17bb0f24aa666e2fa63caba20bbbb4c8da36f4c22e7e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_323d46963b9f0e509c17bb0f24aa666e2fa63caba20bbbb4c8da36f4c22e7e11->leave($__internal_323d46963b9f0e509c17bb0f24aa666e2fa63caba20bbbb4c8da36f4c22e7e11_prof);

        
        $__internal_9226e5ba08673409880cdb7fa1e392580070faea2219c1fdcc486f357110fa8e->leave($__internal_9226e5ba08673409880cdb7fa1e392580070faea2219c1fdcc486f357110fa8e_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_45add52eb98994ebcc9e2fdc6b610258524298bfc310bb58c4d7cc904e15b329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45add52eb98994ebcc9e2fdc6b610258524298bfc310bb58c4d7cc904e15b329->enter($__internal_45add52eb98994ebcc9e2fdc6b610258524298bfc310bb58c4d7cc904e15b329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_66b0b0e7504f0a39a207014c690a1b7f54f47b47cb0fcd2702fbc43dc05ee7a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b0b0e7504f0a39a207014c690a1b7f54f47b47cb0fcd2702fbc43dc05ee7a1->enter($__internal_66b0b0e7504f0a39a207014c690a1b7f54f47b47cb0fcd2702fbc43dc05ee7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_66b0b0e7504f0a39a207014c690a1b7f54f47b47cb0fcd2702fbc43dc05ee7a1->leave($__internal_66b0b0e7504f0a39a207014c690a1b7f54f47b47cb0fcd2702fbc43dc05ee7a1_prof);

        
        $__internal_45add52eb98994ebcc9e2fdc6b610258524298bfc310bb58c4d7cc904e15b329->leave($__internal_45add52eb98994ebcc9e2fdc6b610258524298bfc310bb58c4d7cc904e15b329_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_7b0478c00fc5e15f5b90b1f97d9a665073adf858013e90dec3ec55ba1a646b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0478c00fc5e15f5b90b1f97d9a665073adf858013e90dec3ec55ba1a646b31->enter($__internal_7b0478c00fc5e15f5b90b1f97d9a665073adf858013e90dec3ec55ba1a646b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_727efd9a7fcb94c83ba572abbb86b716b82b4763553fc335ba4292b4dbf92383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727efd9a7fcb94c83ba572abbb86b716b82b4763553fc335ba4292b4dbf92383->enter($__internal_727efd9a7fcb94c83ba572abbb86b716b82b4763553fc335ba4292b4dbf92383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_727efd9a7fcb94c83ba572abbb86b716b82b4763553fc335ba4292b4dbf92383->leave($__internal_727efd9a7fcb94c83ba572abbb86b716b82b4763553fc335ba4292b4dbf92383_prof);

        
        $__internal_7b0478c00fc5e15f5b90b1f97d9a665073adf858013e90dec3ec55ba1a646b31->leave($__internal_7b0478c00fc5e15f5b90b1f97d9a665073adf858013e90dec3ec55ba1a646b31_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2fe28bd1c0cad87858f8e9c29cd0c37a882c1c6a71babc189fb8f67c826bbbd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe28bd1c0cad87858f8e9c29cd0c37a882c1c6a71babc189fb8f67c826bbbd0->enter($__internal_2fe28bd1c0cad87858f8e9c29cd0c37a882c1c6a71babc189fb8f67c826bbbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_dea42db84296e9b2264ed2d51e898a9887e5e6596df190bd92db224d65eff62f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea42db84296e9b2264ed2d51e898a9887e5e6596df190bd92db224d65eff62f->enter($__internal_dea42db84296e9b2264ed2d51e898a9887e5e6596df190bd92db224d65eff62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_dea42db84296e9b2264ed2d51e898a9887e5e6596df190bd92db224d65eff62f->leave($__internal_dea42db84296e9b2264ed2d51e898a9887e5e6596df190bd92db224d65eff62f_prof);

        
        $__internal_2fe28bd1c0cad87858f8e9c29cd0c37a882c1c6a71babc189fb8f67c826bbbd0->leave($__internal_2fe28bd1c0cad87858f8e9c29cd0c37a882c1c6a71babc189fb8f67c826bbbd0_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form.parent %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/var/www/html/SSymfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
