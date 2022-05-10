<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/tableau.html.twig */
class __TwigTemplate_d43973b77725f6133761d46751c517d0bf18f6c54d78608f4033a32a72b2a63a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseTableau.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/tableau.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/tableau.html.twig"));

        $this->parent = $this->loadTemplate("baseTableau.html.twig", "default/tableau.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

    <body>


    <div id=\"modal\">
        <div id=\"inner_modal\">


            <div class=\"icon\">
                <i class=\"bi bi-check-circle\" id=\"check-icon\"></i>
                <i class=\"far fa-times-circle\" id=\"hide\"></i>
            </div>

            <div class=\"text\">
                <textarea placeholder=\"Veuillez entrer votre texte...\" id=\"user_input\" maxlength=\"110\" class=\"pt-5\"></textarea>
            </div>

            <section class=\"\" id=\"all-icone\">

                <div class=\"flex-box\">
                    <div class=\"row\">
                        <div class=\"col\">

                            <button type=\"button\"
                                    onclick=\"f1()\"
                                    class=\" shadow-sm btn btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Bold Text\">
                                <i class=\"bi bi-type-bold\"></i></button>
                            <button type=\"button\"
                                    onclick=\"f2()\"
                                    class=\"shadow-sm btn btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Italic Text\">
                                <i class=\"bi bi-type-italic\"></i></button>
                            <button type=\"button\"
                                    onclick=\"f3()\"
                                    class=\" shadow-sm btn btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Left Align\">
                                <i class=\"bi bi-justify-left\"></i></button>
                            <button type=\"button\"
                                    onclick=\"f4()\"
                                    class=\"btn shadow-sm btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Center Align\">
                                <i class=\"bi bi-justify\"></i></button>
                            <button type=\"button\"
                                    onclick=\"f5()\"
                                    class=\"btn shadow-sm btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Right Align\">
                                <i class=\"bi bi-justify-right\"></i></button>
                            <button type=\"button\"
                                    onclick=\"f6()\"
                                    class=\"btn shadow-sm btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Uppercase Text\">
                                AA</button>
                            <button type=\"button\"
                                    onclick=\"f7()\"
                                    class=\"btn shadow-sm btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Lowercase Text\">
                                aa</button>
                            <button type=\"button\"
                                    onclick=\"f8()\"
                                    class=\"btn shadow-sm btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Capitalize Text\">
                                Aa</button>

                            <button type=\"button\"
                                    onclick=\"f9()\"
                                    class=\"btn shadow-sm btn-secondary side\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Clear\">
                                <i class=\"bi bi-eraser\"></i></button>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <main>


        <section id=\"set\">
            <div class=\"container\">
                <div class=\"ui-widget-content\" >
                    <div id=\"all_notes\"></div>
                </div>
            </div>

        </section>
        <button class=\"add_note\">AJOUTER POST-IT</button>


    </main>





    </body>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/tableau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseTableau.html.twig' %}


{% block body %}


    <body>


    <div id=\"modal\">
        <div id=\"inner_modal\">


            <div class=\"icon\">
                <i class=\"bi bi-check-circle\" id=\"check-icon\"></i>
                <i class=\"far fa-times-circle\" id=\"hide\"></i>
            </div>

            <div class=\"text\">
                <textarea placeholder=\"Veuillez entrer votre texte...\" id=\"user_input\" maxlength=\"110\" class=\"pt-5\"></textarea>
            </div>

            <section class=\"\" id=\"all-icone\">

                <div class=\"flex-box\">
                    <div class=\"row\">
                        <div class=\"col\">

                            <button type=\"button\"
                                    onclick=\"f1()\"
                                    class=\" shadow-sm btn btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Bold Text\">
                                <i class=\"bi bi-type-bold\"></i></button>
                            <button type=\"button\"
                                    onclick=\"f2()\"
                                    class=\"shadow-sm btn btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Italic Text\">
                                <i class=\"bi bi-type-italic\"></i></button>
                            <button type=\"button\"
                                    onclick=\"f3()\"
                                    class=\" shadow-sm btn btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Left Align\">
                                <i class=\"bi bi-justify-left\"></i></button>
                            <button type=\"button\"
                                    onclick=\"f4()\"
                                    class=\"btn shadow-sm btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Center Align\">
                                <i class=\"bi bi-justify\"></i></button>
                            <button type=\"button\"
                                    onclick=\"f5()\"
                                    class=\"btn shadow-sm btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Right Align\">
                                <i class=\"bi bi-justify-right\"></i></button>
                            <button type=\"button\"
                                    onclick=\"f6()\"
                                    class=\"btn shadow-sm btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Uppercase Text\">
                                AA</button>
                            <button type=\"button\"
                                    onclick=\"f7()\"
                                    class=\"btn shadow-sm btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Lowercase Text\">
                                aa</button>
                            <button type=\"button\"
                                    onclick=\"f8()\"
                                    class=\"btn shadow-sm btn-secondary\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Capitalize Text\">
                                Aa</button>

                            <button type=\"button\"
                                    onclick=\"f9()\"
                                    class=\"btn shadow-sm btn-secondary side\"
                                    data-toggle=\"tooltip\"
                                    data-placement=\"top\"
                                    title=\"Clear\">
                                <i class=\"bi bi-eraser\"></i></button>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <main>


        <section id=\"set\">
            <div class=\"container\">
                <div class=\"ui-widget-content\" >
                    <div id=\"all_notes\"></div>
                </div>
            </div>

        </section>
        <button class=\"add_note\">AJOUTER POST-IT</button>


    </main>





    </body>




{% endblock %}", "default/tableau.html.twig", "/Users/coco/Desktop/horizonImmersion/templates/default/tableau.html.twig");
    }
}
