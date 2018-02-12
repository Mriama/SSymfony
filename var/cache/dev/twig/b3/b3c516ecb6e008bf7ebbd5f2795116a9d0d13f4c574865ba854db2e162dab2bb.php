<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_c24b52a99e076f36143083598375da26bc08a9076ab245b0d3f0411be48be368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cd664a2ce2449b840d918a06bc62be6f750860493482f025adf85fdf1daef6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd664a2ce2449b840d918a06bc62be6f750860493482f025adf85fdf1daef6e->enter($__internal_2cd664a2ce2449b840d918a06bc62be6f750860493482f025adf85fdf1daef6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_26d9789745585b1fe3a73b6360110879b98330aa2e9908e8dfffc1840fa4993b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d9789745585b1fe3a73b6360110879b98330aa2e9908e8dfffc1840fa4993b->enter($__internal_26d9789745585b1fe3a73b6360110879b98330aa2e9908e8dfffc1840fa4993b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_2cd664a2ce2449b840d918a06bc62be6f750860493482f025adf85fdf1daef6e->leave($__internal_2cd664a2ce2449b840d918a06bc62be6f750860493482f025adf85fdf1daef6e_prof);

        
        $__internal_26d9789745585b1fe3a73b6360110879b98330aa2e9908e8dfffc1840fa4993b->leave($__internal_26d9789745585b1fe3a73b6360110879b98330aa2e9908e8dfffc1840fa4993b_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_6161af3147ca7e32f8abdbadf2c6eea2fe4b22332754b6a4b837e1d403c11772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6161af3147ca7e32f8abdbadf2c6eea2fe4b22332754b6a4b837e1d403c11772->enter($__internal_6161af3147ca7e32f8abdbadf2c6eea2fe4b22332754b6a4b837e1d403c11772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_45dc93e30458bb220c31ad58ed74306c70174a99a655479eadec6aa6707a50df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45dc93e30458bb220c31ad58ed74306c70174a99a655479eadec6aa6707a50df->enter($__internal_45dc93e30458bb220c31ad58ed74306c70174a99a655479eadec6aa6707a50df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_45dc93e30458bb220c31ad58ed74306c70174a99a655479eadec6aa6707a50df->leave($__internal_45dc93e30458bb220c31ad58ed74306c70174a99a655479eadec6aa6707a50df_prof);

        
        $__internal_6161af3147ca7e32f8abdbadf2c6eea2fe4b22332754b6a4b837e1d403c11772->leave($__internal_6161af3147ca7e32f8abdbadf2c6eea2fe4b22332754b6a4b837e1d403c11772_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_20c1d2264fc3cf722ecc6c91fd8886333ca69852a6b5b5ddc0e20524781903ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c1d2264fc3cf722ecc6c91fd8886333ca69852a6b5b5ddc0e20524781903ec->enter($__internal_20c1d2264fc3cf722ecc6c91fd8886333ca69852a6b5b5ddc0e20524781903ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_91b668477debc26430ab333d030bec4a4353682af97aeb80e6d2809eecb8669b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b668477debc26430ab333d030bec4a4353682af97aeb80e6d2809eecb8669b->enter($__internal_91b668477debc26430ab333d030bec4a4353682af97aeb80e6d2809eecb8669b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_91b668477debc26430ab333d030bec4a4353682af97aeb80e6d2809eecb8669b->leave($__internal_91b668477debc26430ab333d030bec4a4353682af97aeb80e6d2809eecb8669b_prof);

        
        $__internal_20c1d2264fc3cf722ecc6c91fd8886333ca69852a6b5b5ddc0e20524781903ec->leave($__internal_20c1d2264fc3cf722ecc6c91fd8886333ca69852a6b5b5ddc0e20524781903ec_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_8be669751a9cdd1179b7c95b67a5161070031b8aba184d0c716045c4e61743cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be669751a9cdd1179b7c95b67a5161070031b8aba184d0c716045c4e61743cf->enter($__internal_8be669751a9cdd1179b7c95b67a5161070031b8aba184d0c716045c4e61743cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_073d50a6d61d9d1c5f75cdcee95fa60ba2ed02d941d8a443b0af91ae1430602c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073d50a6d61d9d1c5f75cdcee95fa60ba2ed02d941d8a443b0af91ae1430602c->enter($__internal_073d50a6d61d9d1c5f75cdcee95fa60ba2ed02d941d8a443b0af91ae1430602c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_073d50a6d61d9d1c5f75cdcee95fa60ba2ed02d941d8a443b0af91ae1430602c->leave($__internal_073d50a6d61d9d1c5f75cdcee95fa60ba2ed02d941d8a443b0af91ae1430602c_prof);

        
        $__internal_8be669751a9cdd1179b7c95b67a5161070031b8aba184d0c716045c4e61743cf->leave($__internal_8be669751a9cdd1179b7c95b67a5161070031b8aba184d0c716045c4e61743cf_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4f00bca071772da6883e87f3245e8b6bbef03253efb621f483d6edfed7f1ecc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f00bca071772da6883e87f3245e8b6bbef03253efb621f483d6edfed7f1ecc4->enter($__internal_4f00bca071772da6883e87f3245e8b6bbef03253efb621f483d6edfed7f1ecc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_558ad425e043b8c28d12b318790a6ba25072b29adb7bcded09f085adeb889c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558ad425e043b8c28d12b318790a6ba25072b29adb7bcded09f085adeb889c12->enter($__internal_558ad425e043b8c28d12b318790a6ba25072b29adb7bcded09f085adeb889c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_558ad425e043b8c28d12b318790a6ba25072b29adb7bcded09f085adeb889c12->leave($__internal_558ad425e043b8c28d12b318790a6ba25072b29adb7bcded09f085adeb889c12_prof);

        
        $__internal_4f00bca071772da6883e87f3245e8b6bbef03253efb621f483d6edfed7f1ecc4->leave($__internal_4f00bca071772da6883e87f3245e8b6bbef03253efb621f483d6edfed7f1ecc4_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_583d368606276c6ce9edad3d50e53c30de79723fd8b79550744e693e0f0e6698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583d368606276c6ce9edad3d50e53c30de79723fd8b79550744e693e0f0e6698->enter($__internal_583d368606276c6ce9edad3d50e53c30de79723fd8b79550744e693e0f0e6698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_99b3e43a3e71b6a695a58f71b19a3bab7b4528b02894b7910f7e026d94cb0e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b3e43a3e71b6a695a58f71b19a3bab7b4528b02894b7910f7e026d94cb0e69->enter($__internal_99b3e43a3e71b6a695a58f71b19a3bab7b4528b02894b7910f7e026d94cb0e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_99b3e43a3e71b6a695a58f71b19a3bab7b4528b02894b7910f7e026d94cb0e69->leave($__internal_99b3e43a3e71b6a695a58f71b19a3bab7b4528b02894b7910f7e026d94cb0e69_prof);

        
        $__internal_583d368606276c6ce9edad3d50e53c30de79723fd8b79550744e693e0f0e6698->leave($__internal_583d368606276c6ce9edad3d50e53c30de79723fd8b79550744e693e0f0e6698_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_7c6d498d40d77ba900d11c3fe0eb6cf447be6f647323fc3000cf28c933eb6f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6d498d40d77ba900d11c3fe0eb6cf447be6f647323fc3000cf28c933eb6f30->enter($__internal_7c6d498d40d77ba900d11c3fe0eb6cf447be6f647323fc3000cf28c933eb6f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_645244132b87b2518b55c25897e2d29aace3cb6e3c296fd79dff38669093db4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645244132b87b2518b55c25897e2d29aace3cb6e3c296fd79dff38669093db4b->enter($__internal_645244132b87b2518b55c25897e2d29aace3cb6e3c296fd79dff38669093db4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_645244132b87b2518b55c25897e2d29aace3cb6e3c296fd79dff38669093db4b->leave($__internal_645244132b87b2518b55c25897e2d29aace3cb6e3c296fd79dff38669093db4b_prof);

        
        $__internal_7c6d498d40d77ba900d11c3fe0eb6cf447be6f647323fc3000cf28c933eb6f30->leave($__internal_7c6d498d40d77ba900d11c3fe0eb6cf447be6f647323fc3000cf28c933eb6f30_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_5fad4b21df42053e9a0c5cfa98c2857d185f1995b0c3d5eab61af20b631f921c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fad4b21df42053e9a0c5cfa98c2857d185f1995b0c3d5eab61af20b631f921c->enter($__internal_5fad4b21df42053e9a0c5cfa98c2857d185f1995b0c3d5eab61af20b631f921c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_09fa677898dd7674680c500a7050455e95128fbb100b3aa14ccba3648dc4385d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09fa677898dd7674680c500a7050455e95128fbb100b3aa14ccba3648dc4385d->enter($__internal_09fa677898dd7674680c500a7050455e95128fbb100b3aa14ccba3648dc4385d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_09fa677898dd7674680c500a7050455e95128fbb100b3aa14ccba3648dc4385d->leave($__internal_09fa677898dd7674680c500a7050455e95128fbb100b3aa14ccba3648dc4385d_prof);

        
        $__internal_5fad4b21df42053e9a0c5cfa98c2857d185f1995b0c3d5eab61af20b631f921c->leave($__internal_5fad4b21df42053e9a0c5cfa98c2857d185f1995b0c3d5eab61af20b631f921c_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_654403945bd0e6e7ab12770fc6843cc0eb0e055740e1d723ede298e4daaab33a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654403945bd0e6e7ab12770fc6843cc0eb0e055740e1d723ede298e4daaab33a->enter($__internal_654403945bd0e6e7ab12770fc6843cc0eb0e055740e1d723ede298e4daaab33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_b69075ea37e9784a970b05200c45e75429eda19507ed3635dd75951639a32179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69075ea37e9784a970b05200c45e75429eda19507ed3635dd75951639a32179->enter($__internal_b69075ea37e9784a970b05200c45e75429eda19507ed3635dd75951639a32179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b69075ea37e9784a970b05200c45e75429eda19507ed3635dd75951639a32179->leave($__internal_b69075ea37e9784a970b05200c45e75429eda19507ed3635dd75951639a32179_prof);

        
        $__internal_654403945bd0e6e7ab12770fc6843cc0eb0e055740e1d723ede298e4daaab33a->leave($__internal_654403945bd0e6e7ab12770fc6843cc0eb0e055740e1d723ede298e4daaab33a_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_3c9389446a50b2ed779c3aba72abc4cfbf3bfd97377e03376d83db04dc075723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9389446a50b2ed779c3aba72abc4cfbf3bfd97377e03376d83db04dc075723->enter($__internal_3c9389446a50b2ed779c3aba72abc4cfbf3bfd97377e03376d83db04dc075723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_6353dbebed49e7e829654e5360c4d392507f616ea356bb312b538208e9332ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6353dbebed49e7e829654e5360c4d392507f616ea356bb312b538208e9332ce7->enter($__internal_6353dbebed49e7e829654e5360c4d392507f616ea356bb312b538208e9332ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6353dbebed49e7e829654e5360c4d392507f616ea356bb312b538208e9332ce7->leave($__internal_6353dbebed49e7e829654e5360c4d392507f616ea356bb312b538208e9332ce7_prof);

        
        $__internal_3c9389446a50b2ed779c3aba72abc4cfbf3bfd97377e03376d83db04dc075723->leave($__internal_3c9389446a50b2ed779c3aba72abc4cfbf3bfd97377e03376d83db04dc075723_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e03244b2656eda7a1f6d84ce0f0d1e51fbfbcd57d39c82209f0de705cb9ef888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03244b2656eda7a1f6d84ce0f0d1e51fbfbcd57d39c82209f0de705cb9ef888->enter($__internal_e03244b2656eda7a1f6d84ce0f0d1e51fbfbcd57d39c82209f0de705cb9ef888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_8727b56688bdbb1ad659e3675b1496a9ce169f7f03578f1d550e1e80267982a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8727b56688bdbb1ad659e3675b1496a9ce169f7f03578f1d550e1e80267982a2->enter($__internal_8727b56688bdbb1ad659e3675b1496a9ce169f7f03578f1d550e1e80267982a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_8727b56688bdbb1ad659e3675b1496a9ce169f7f03578f1d550e1e80267982a2->leave($__internal_8727b56688bdbb1ad659e3675b1496a9ce169f7f03578f1d550e1e80267982a2_prof);

        
        $__internal_e03244b2656eda7a1f6d84ce0f0d1e51fbfbcd57d39c82209f0de705cb9ef888->leave($__internal_e03244b2656eda7a1f6d84ce0f0d1e51fbfbcd57d39c82209f0de705cb9ef888_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/SSymfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
