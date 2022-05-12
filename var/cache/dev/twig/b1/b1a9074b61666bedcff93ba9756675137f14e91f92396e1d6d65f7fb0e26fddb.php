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

/* default/index.html.twig */
class __TwigTemplate_0bd92d3e7cdf65d560dc85ddfdc3bacc3f3aecff73f91cf05e03eca455f75d96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello DefaultController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container-fluid\" id=\"main\">
    <div class=\"row\">



        <div class=\"col-lg-2 ps-0\">
            <nav class=\"side-nav\">
                <div class=\"wrapper\">

                    <div class=\"nav-bloc n-1\">
                        <img class=\"\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/dossier.svg"), "html", null, true);
        echo "\">
                        <div class=\"sub-nav\">
                            <h2>Dossier</h2>
                            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "                            <div>
                                <a>
                                    <img class=\"navImage\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/category/" . twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 22))), "html", null, true);
            echo "\">
                                    <p >";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                                </a>

                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                            <div class=\"sub-doc\">
                                <h2>Document</h2>
                                <div class=\"linkImage\">
                                    <a>
                                        <img  class=\"navImage\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/picture.svg"), "html", null, true);
        echo "\">
                                        <p>Avis_de_Recherche_Nicolas_Zlatesky.jpeg</p>
                                    </a>
                                </div>
                                <div class=\"linkImage\">
                                    <a id=\"info\">
                                        <img class=\"navImage\"  src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/picture.svg"), "html", null, true);
        echo "\">
                                        <p>RAPPORT_AVALANCHE_Fino.png</p>
                                    </a>
                                </div>
                                <div class=\"linkImage\">
                                    <a>
                                        <img class=\"navImage\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/picture.svg"), "html", null, true);
        echo "\">
                                        <p>Champs_Actuel.png</p>
                                    </a>
                                </div>
                                <div class=\"linkImage\">
                                    <a>
                                        <img class=\"navImage\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/picture.svg"), "html", null, true);
        echo "\">
                                        <p>Media_Monde.png</p>
                                    </a>
                                </div>
                                <div class=\"linkImage\">
                                    <a><img class=\"navImage\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/picture.svg"), "html", null, true);
        echo "\">
                                        <p>News_France.png</p>
                                    </a>
                                </div>

                                <div class=\"sub-sousDoc\">
                                    <h2>Aperçu</h2>
                                    <img class=\"img-thumbnail displayed\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/C.A.T_RAPPORT_AVALANCHE_FINO.png"), "html", null, true);
        echo "\">
                                    <p class=\"text-center pt-2\">Avis_de_Recherche_Nicolas_Zlatesky.jpeg</p>
                                    <p class=\"text-center pt-2\">Image PNG - 415 Ko</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </nav>


        </div>


        <div class=\"col-lg-2 dispo\">


            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 82
            echo "
            <!-- Button Image -->
            <button type=\"button\" class=\"btn dossier1\" data-bs-toggle=\"modal\" data-bs-target=\"#dossierImage\">
                <img class=\"\" src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/dossier.svg"), "html", null, true);
            echo "\">
";
            // line 87
            echo "            </button>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
             <!-- Modal Images -->

            <div class=\"modal fade\" id=\"dossierImage\" tabindex=\"-1\" aria-labelledby=\"dossierImage\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-xl\">
                    <div class=\"modal-content\" style=\"margin-top: 125px\">



                        <div class=\"modal-header py-0 px-16\">
                            <img class=\"\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/category/"), "html", null, true);
        echo "\">
                            <h3 class=\"mx-2 pt-2\">Dossier</h3>
                            <button type=\"button\" class=\"btn-close ferm\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>



                        <div class=\"modal-body container\">

                            <div class=\"row\">
                                <div class=\"col-lg-2\">

                                    ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 111, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 112
            echo "                                    <img class=\"navDossier active\" id=\"docImg\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/dossier.svg"), "html", null, true);
            echo "\">
                                    <p class=\"text-center\">";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nom", [], "any", false, false, false, 113), "html", null, true);
            echo "</p>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
                                </div>


                                <div class=\"col-lg-4 nav2 visible\">
                                    <div class=\"linkImage\">
                                        <a>
                                            <img  class=\"navImage\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/picture.svg"), "html", null, true);
        echo "\">
                                            <p>Avis_de_Recherche_Nicolas_Zlatesky.jpeg</p>
                                        </a>
                                    </div>
                                    <div class=\"linkImage\">
                                        <a id=\"info\">
                                            <img class=\"navImage\"  src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/picture.svg"), "html", null, true);
        echo "\">
                                            <p>RAPPORT_AVALANCHE_Fino.png</p>
                                        </a>
                                    </div>
                                    <div class=\"linkImage\">
                                        <a>
                                            <img class=\"navImage\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/picture.svg"), "html", null, true);
        echo "\">
                                            <p>Champs_Actuel.png</p>
                                        </a>
                                    </div>
                                    <div class=\"linkImage\">
                                        <a>
                                            <img class=\"navImage\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/picture.svg"), "html", null, true);
        echo "\">
                                            <p>Media_Monde.png</p>
                                        </a>
                                    </div>
                                    <div class=\"linkImage\">
                                        <a><img class=\"navImage\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/picture.svg"), "html", null, true);
        echo "\">
                                            <p>News_France.png</p>
                                        </a>
                                    </div>

                                </div>
                                <div class=\"col-lg-6 nav3\">
                                    <img class=\"img-thumbnail\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/C.A.T_RAPPORT_AVALANCHE_FINO.png"), "html", null, true);
        echo "\">
                                    <p class=\"text-center\">Avis_de_Recherche_Nicolas_Zlatesky.jpeg</p>
                                    <p class=\"text-center\">Image PNG - 415 Ko</p>
                                </div>

                            </div>
                        </div>

                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                </div>
            </div>


";
        // line 177
        echo "
";
        // line 192
        echo "

";
        // line 207
        echo "
";
        // line 217
        echo "

        </div>




        <div class=\"col-lg-4\">
            <img class=\"imgCenter\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/LogoNoir.png"), "html", null, true);
        echo "\">
        </div>

        <div class=\"col-lg-1\"></div>

        <div class=\"col-lg-3\">
            <div class=\"timer\">
                <div class=\"col-lg-3 carre\">
                    <h3 id=\"hour\">11</h3>
                </div>
                <div class=\"col-lg-1 text-center point\">:</div>
                <div class=\"col-lg-2 carre\">
                    <h3 id=\"minute\">59</h3>
                </div>
                <div class=\"col-lg-1 text-center point\">:</div>
                <div class=\"col-lg-3 carre\">
                    <h3 id=\"second\">55</h3>
                </div>
            </div>

";
        // line 258
        echo "
            <div id=\"chrono\" class=\"col-lg-12 mx-auto\">
                <form name=\"form_main\">
                    <div class=\"d-flex justify-content-evenly chronoControl\">
                        <button type=\"button\" name=\"start\" class=\"btn-grad w-25 mx-auto mt-2\">
                            <i class=\"bi bi-play\"></i>
                        </button>
                        <button type=\"button\" name=\"pause\" class=\"btn-grad w-25 mx-auto mt-2\">
                            <i class=\"bi bi-pause\"></i>
                        </button>
                        <button type=\"button\" name=\"reset\" class=\"btn-grad w-25 mx-auto mt-2\">
                            <i class=\"bi bi-arrow-clockwise\"></i>
                        </button>
                    </div>
                </form>
            </div>

        </div>







    </div>



<footer>
    <div class=\"container-fluid\"  >
        <div class=\"row\">

            <div class=\"col-lg-2\">
                <div class=\"rectangle\">
                    <a  href=\"";
        // line 293
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat");
        echo "\">
                        <img src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logoRond.svg"), "html", null, true);
        echo "\">
                        <h5>CONTINUER</h5>
                    </a>
                </div>
            </div>

            <div class=\"col-lg-1 d-flex justify-content-between px-0\">
                <!-- Button tableau-->
                <button type=\"button\" class=\"btn btnApli\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                    <img class=\"\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/tableau.svg"), "html", null, true);
        echo "\">
                </button>
                <!-- Modal -->
                <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-xl mx-0\">
                        <div class=\"modal-content1\">
";
        // line 313
        echo "
                            <div class=\"modal-body\">
                                ";
        // line 315
        echo twig_include($this->env, $context, "default/tableau.html.twig");
        echo "
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button RATP -->
                <button type=\"button\" class=\"btn btnApli\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal2\">
                    <img class=\"\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/ratp2.svg"), "html", null, true);
        echo "\">
                </button>
                <!-- Modal -->
                <div class=\"modal fade\" id=\"exampleModal2\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-xl\" style=\"margin-top: 125px\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <img class=\"\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/ratp2.svg"), "html", null, true);
        echo "\">
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>

                            <div class=\"modal-body\">
";
        // line 508
        echo "

                                <div id=\"enigme\" class=\"container\">
                                            <div class=\"row\" >
                                                <div class=\"col-lg-12 pt-2\" id=\"fondEnigme\">
                                                    <h2 class=\"text-center\">ENIGME</h2>
                                                </div>
                                                <div class=\"col-lg-12 pt-5\">
                                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                                                        those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\"
                                                        by Cicero are also reproduced in their exact original form, accompanied by English
                                                        versions from the 1914 translation by H. Rackham.</p>
                                                </div>

                                            </div>
                                    </div>


                                <img class=\"metro1\" src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/metro1.svg"), "html", null, true);
        echo "\">
                            </div>

                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">

            </div>
            <div class=\"col-lg-5 d-flex justify-content-around pt-2\">

                ";
        // line 542
        echo "                <a href=\"\">
                    <img class=\"pt-1\" src=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/battery.svg"), "html", null, true);
        echo "\" title=\"Batterie 90%\">
                </a>

                ";
        // line 547
        echo "                <a href=\"\">
                    <img src=\"";
        // line 548
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/temps.svg"), "html", null, true);
        echo "\" title=\"Temps nuageux\">
                </a>

                ";
        // line 552
        echo "                <a href=\"\">
                    <img src=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/wifi.svg"), "html", null, true);
        echo "\" title=\"WIFI activé\">
                </a>

                ";
        // line 557
        echo "                <a href=\"#\" role=\"button\" data-target=\"#modalChat\" data-toggle=\"modalChat\">
                    <img src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logoChat.svg"), "html", null, true);
        echo "\" title=\"CHAT\">
                </a>

                ";
        // line 562
        echo "                <div class=\"modalChat\" id=\"modalChat\" role=\"dialog\">
                    <div class=\"modalChat-content\">
                        <div class=\"modalChat-close\" data-dismiss=\"dialog\">
                            X
                        </div>
                        <div class=\"modalChat-header\">
                            <h3>Messenger</h3>
                        </div>
                        <div class=\"modalChat-body\">
                            <h3 class=\"smsR\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                            <h3 class=\"smsR\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                            <h3 class=\"smsR\">sms</h3>
                            <h3 class=\"smsR\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                            <h3 class=\"smsR\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                            <h3 class=\"smsR\">sms</h3>
                            <h3 class=\"smsR\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                        </div>
                        <div class=\"modalChat-footer\">
                            <h3 class=\"smsText\">Ecrivez votre message...</h3>
                            <button type=\"button\" class=\"smsEnvoi\">envoi</button>
                        </div>
                    </div>
                </div>

                ";
        // line 595
        echo "                <a href=\"\" class=\"heure\">
                    <span id=\"h\">11</span>
                    <span class=\"colon\"> : </span>
                    <span id=\"m\">59</span>
                    <span class=\"colon\"> : </span>
                    <span id=\"s\">55</span>
                </a>
                ";
        // line 603
        echo "                <a href=\"\">
                    <img id=\"imgLogoBleu\" src=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/HIlogoPtit.svg"), "html", null, true);
        echo "\">
                </a>

            </div>

        </div>

    </div>
</footer>


</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 604,  597 => 603,  588 => 595,  554 => 562,  548 => 558,  545 => 557,  539 => 553,  536 => 552,  530 => 548,  527 => 547,  521 => 543,  518 => 542,  500 => 526,  480 => 508,  472 => 333,  462 => 326,  448 => 315,  444 => 313,  435 => 303,  423 => 294,  419 => 293,  382 => 258,  359 => 225,  349 => 217,  346 => 207,  342 => 192,  339 => 177,  320 => 152,  310 => 145,  302 => 140,  293 => 134,  284 => 128,  275 => 122,  266 => 115,  258 => 113,  253 => 112,  249 => 111,  234 => 99,  222 => 89,  215 => 87,  211 => 85,  206 => 82,  202 => 81,  180 => 62,  170 => 55,  162 => 50,  153 => 44,  144 => 38,  135 => 32,  129 => 28,  118 => 23,  114 => 22,  110 => 20,  106 => 19,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello DefaultController!{% endblock %}

{% block body %}
<div class=\"container-fluid\" id=\"main\">
    <div class=\"row\">



        <div class=\"col-lg-2 ps-0\">
            <nav class=\"side-nav\">
                <div class=\"wrapper\">

                    <div class=\"nav-bloc n-1\">
                        <img class=\"\" src=\"{{ asset(\"/images/dossier.svg\") }}\">
                        <div class=\"sub-nav\">
                            <h2>Dossier</h2>
                            {% for category in categories %}
                            <div>
                                <a>
                                    <img class=\"navImage\" src=\"{{ asset('images/category/' ~ category.image) }}\">
                                    <p >{{ category.nom }}</p>
                                </a>

                            </div>
                            {% endfor %}
                            <div class=\"sub-doc\">
                                <h2>Document</h2>
                                <div class=\"linkImage\">
                                    <a>
                                        <img  class=\"navImage\" src=\"{{ asset(\"/images/picture.svg\") }}\">
                                        <p>Avis_de_Recherche_Nicolas_Zlatesky.jpeg</p>
                                    </a>
                                </div>
                                <div class=\"linkImage\">
                                    <a id=\"info\">
                                        <img class=\"navImage\"  src=\"{{ asset(\"/images/picture.svg\") }}\">
                                        <p>RAPPORT_AVALANCHE_Fino.png</p>
                                    </a>
                                </div>
                                <div class=\"linkImage\">
                                    <a>
                                        <img class=\"navImage\" src=\"{{ asset(\"/images/picture.svg\") }}\">
                                        <p>Champs_Actuel.png</p>
                                    </a>
                                </div>
                                <div class=\"linkImage\">
                                    <a>
                                        <img class=\"navImage\" src=\"{{ asset(\"/images/picture.svg\") }}\">
                                        <p>Media_Monde.png</p>
                                    </a>
                                </div>
                                <div class=\"linkImage\">
                                    <a><img class=\"navImage\" src=\"{{ asset(\"/images/picture.svg\") }}\">
                                        <p>News_France.png</p>
                                    </a>
                                </div>

                                <div class=\"sub-sousDoc\">
                                    <h2>Aperçu</h2>
                                    <img class=\"img-thumbnail displayed\" src=\"{{ asset(\"/images/C.A.T_RAPPORT_AVALANCHE_FINO.png\") }}\">
                                    <p class=\"text-center pt-2\">Avis_de_Recherche_Nicolas_Zlatesky.jpeg</p>
                                    <p class=\"text-center pt-2\">Image PNG - 415 Ko</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </nav>


        </div>


        <div class=\"col-lg-2 dispo\">


            {% for category in categories %}

            <!-- Button Image -->
            <button type=\"button\" class=\"btn dossier1\" data-bs-toggle=\"modal\" data-bs-target=\"#dossierImage\">
                <img class=\"\" src=\"{{ asset(\"/images/dossier.svg\") }}\">
{#                <a class=\"btn btn-info\" href=\"{{ path('voir', {'id': category.id}) }}\">{{ category.nom }}</a>#}
            </button>
            {% endfor %}

             <!-- Modal Images -->

            <div class=\"modal fade\" id=\"dossierImage\" tabindex=\"-1\" aria-labelledby=\"dossierImage\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-xl\">
                    <div class=\"modal-content\" style=\"margin-top: 125px\">



                        <div class=\"modal-header py-0 px-16\">
                            <img class=\"\" src=\"{{ asset('images/category/') }}\">
                            <h3 class=\"mx-2 pt-2\">Dossier</h3>
                            <button type=\"button\" class=\"btn-close ferm\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>



                        <div class=\"modal-body container\">

                            <div class=\"row\">
                                <div class=\"col-lg-2\">

                                    {% for category in categories %}
                                    <img class=\"navDossier active\" id=\"docImg\" src=\"{{ asset(\"/images/dossier.svg\") }}\">
                                    <p class=\"text-center\">{{ category.nom }}</p>
                                    {% endfor %}

                                </div>


                                <div class=\"col-lg-4 nav2 visible\">
                                    <div class=\"linkImage\">
                                        <a>
                                            <img  class=\"navImage\" src=\"{{ asset(\"/images/picture.svg\") }}\">
                                            <p>Avis_de_Recherche_Nicolas_Zlatesky.jpeg</p>
                                        </a>
                                    </div>
                                    <div class=\"linkImage\">
                                        <a id=\"info\">
                                            <img class=\"navImage\"  src=\"{{ asset(\"/images/picture.svg\") }}\">
                                            <p>RAPPORT_AVALANCHE_Fino.png</p>
                                        </a>
                                    </div>
                                    <div class=\"linkImage\">
                                        <a>
                                            <img class=\"navImage\" src=\"{{ asset(\"/images/picture.svg\") }}\">
                                            <p>Champs_Actuel.png</p>
                                        </a>
                                    </div>
                                    <div class=\"linkImage\">
                                        <a>
                                            <img class=\"navImage\" src=\"{{ asset(\"/images/picture.svg\") }}\">
                                            <p>Media_Monde.png</p>
                                        </a>
                                    </div>
                                    <div class=\"linkImage\">
                                        <a><img class=\"navImage\" src=\"{{ asset(\"/images/picture.svg\") }}\">
                                            <p>News_France.png</p>
                                        </a>
                                    </div>

                                </div>
                                <div class=\"col-lg-6 nav3\">
                                    <img class=\"img-thumbnail\" src=\"{{ asset(\"/images/C.A.T_RAPPORT_AVALANCHE_FINO.png\") }}\">
                                    <p class=\"text-center\">Avis_de_Recherche_Nicolas_Zlatesky.jpeg</p>
                                    <p class=\"text-center\">Image PNG - 415 Ko</p>
                                </div>

                            </div>
                        </div>

                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                </div>
            </div>


{#            <!-- Button Video -->#}
{#            <button type=\"button\" class=\"btn dossier2\" data-bs-toggle=\"modal\" data-bs-target=\"#dossierVideo\">#}
{#                <img class=\"pt-5\" src=\"{{ asset(\"/images/dossier.svg\") }}\">#}
{#                <p class=\"text2\">Videos</p>#}
{#            </button>#}
{#             <!-- Modal video-->#}
{#            <div class=\"modal fade\" id=\"dossierVideo\" tabindex=\"-1\" aria-labelledby=\"dossierVideo\" aria-hidden=\"true\">#}
{#                <div class=\"modal-dialog modal-xl\">#}
{#                    <div class=\"modal-content\" style=\"margin-top: 125px\">#}

{#                        <div class=\"modal-header py-0 px-16\">#}
{#                            <img class=\"\" src=\"{{ asset(\"/images/video.svg\") }}\">#}
{#                            <h3 class=\"mx-2 pt-2\">Dossier Videos</h3>#}
{#                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>#}
{#                        </div>#}
{#                        <div class=\"modal-body\">#}
{#                            ...#}
{#                        </div>#}
{#                        <div class=\"modal-footer\">#}
{#                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>#}
{#                        </div>#}
{#                    </div>#}
{#                </div>#}
{#            </div>#}


{#            <!-- Button Archives -->#}
{#            <button type=\"button\" class=\"btn dossier3\" data-bs-toggle=\"modal\" data-bs-target=\"#dossierArchives\">#}
{#                <img class=\"pt-5\" src=\"{{ asset(\"/images/dossier.svg\") }}\">#}
{#                <p class=\"text3\">Archives</p>#}
{#            </button>#}
{#            <!-- Modal Archives-->#}
{#            <div class=\"modal fade\" id=\"dossierArchives\" tabindex=\"-1\" aria-labelledby=\"dossierArchives\" aria-hidden=\"true\">#}
{#                <div class=\"modal-dialog modal-xl\">#}
{#                    <div class=\"modal-content\" style=\"margin-top: 125px\">#}
{#                        <div class=\"modal-header\">#}
{#                            <img class=\"\" src=\"{{ asset(\"/images/tableau.svg\") }}\">#}
{#                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>#}
{#                        </div>#}

{#                        <div class=\"modal-body\">#}
{#                            ...#}
{#                        </div>#}
{#                        <div class=\"modal-footer\">#}
{#                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>#}
{#                        </div>#}
{#                    </div>#}
{#                </div>#}
{#            </div>#}


        </div>




        <div class=\"col-lg-4\">
            <img class=\"imgCenter\" src=\"{{ asset(\"/images/LogoNoir.png\") }}\">
        </div>

        <div class=\"col-lg-1\"></div>

        <div class=\"col-lg-3\">
            <div class=\"timer\">
                <div class=\"col-lg-3 carre\">
                    <h3 id=\"hour\">11</h3>
                </div>
                <div class=\"col-lg-1 text-center point\">:</div>
                <div class=\"col-lg-2 carre\">
                    <h3 id=\"minute\">59</h3>
                </div>
                <div class=\"col-lg-1 text-center point\">:</div>
                <div class=\"col-lg-3 carre\">
                    <h3 id=\"second\">55</h3>
                </div>
            </div>

{#            <div class=\"timer\">#}
{#                <div class=\"col-lg-3 carre\">#}
{#                    <h3 id=\"h\">11</h3>#}
{#                </div>#}
{#                <div class=\"col-lg-1 text-center point\">:</div>#}
{#                <div class=\"col-lg-2 carre\">#}
{#                    <h3 id=\"m\">59</h3>#}
{#                </div>#}
{#                <div class=\"col-lg-1 text-center point\">:</div>#}
{#                <div class=\"col-lg-3 carre\">#}
{#                    <h3 id=\"s\">55</h3>#}
{#                </div>#}
{#            </div>#}

            <div id=\"chrono\" class=\"col-lg-12 mx-auto\">
                <form name=\"form_main\">
                    <div class=\"d-flex justify-content-evenly chronoControl\">
                        <button type=\"button\" name=\"start\" class=\"btn-grad w-25 mx-auto mt-2\">
                            <i class=\"bi bi-play\"></i>
                        </button>
                        <button type=\"button\" name=\"pause\" class=\"btn-grad w-25 mx-auto mt-2\">
                            <i class=\"bi bi-pause\"></i>
                        </button>
                        <button type=\"button\" name=\"reset\" class=\"btn-grad w-25 mx-auto mt-2\">
                            <i class=\"bi bi-arrow-clockwise\"></i>
                        </button>
                    </div>
                </form>
            </div>

        </div>







    </div>



<footer>
    <div class=\"container-fluid\"  >
        <div class=\"row\">

            <div class=\"col-lg-2\">
                <div class=\"rectangle\">
                    <a  href=\"{{ path('chat') }}\">
                        <img src=\"{{ asset(\"/images/logoRond.svg\") }}\">
                        <h5>CONTINUER</h5>
                    </a>
                </div>
            </div>

            <div class=\"col-lg-1 d-flex justify-content-between px-0\">
                <!-- Button tableau-->
                <button type=\"button\" class=\"btn btnApli\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                    <img class=\"\" src=\"{{ asset(\"/images/tableau.svg\") }}\">
                </button>
                <!-- Modal -->
                <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-xl mx-0\">
                        <div class=\"modal-content1\">
{#                            <div class=\"modal-header\">#}
{#                                <img class=\"\" src=\"{{ asset(\"/images/tableau.svg\") }}\">#}
{#                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>#}
{#                            </div>#}

                            <div class=\"modal-body\">
                                {{ include('default/tableau.html.twig') }}
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button RATP -->
                <button type=\"button\" class=\"btn btnApli\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal2\">
                    <img class=\"\" src=\"{{ asset(\"/images/ratp2.svg\") }}\">
                </button>
                <!-- Modal -->
                <div class=\"modal fade\" id=\"exampleModal2\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-xl\" style=\"margin-top: 125px\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <img class=\"\" src=\"{{ asset(\"/images/ratp2.svg\") }}\">
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>

                            <div class=\"modal-body\">
{#                                <section id=\"main\">#}
{#                                    <div class=\"position-absolute\"></div>#}
{#                                    <div class=\"d-flex flex-column flex-wrap justify-content-start\" id=\"dsktpContainer\">#}
{#                                        <div class=\"dsktpSoftwareGroup my-2 text-center\" title=\"Ratp\" data-app=\"ratp\">#}
{#                                            <img src=\"{{ asset('build/images/apps/ratp.png') }}\" alt=\"Logo RATP\" class=\"mt-1\">#}
{#                                            <div class=\"text-white text-center mt-2\">Ratp</div>#}
{#                                        </div>#}
{#                                        <div class=\"dsktpSoftwareGroup my-2 text-center\" title=\"Explorateur de fichiers\" data-app=\"fileExplorer\">#}
{#                                            <img src=\"{{ asset('build/images/apps/file-explorer.png') }}\" alt=\"Logo Explorateur de Fichiers\" class=\"mt-1\">#}
{#                                            <div class=\"text-white text-center mt-2\">Fichiers</div>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div id=\"windowsContainer\" class=\"position-absolute\">#}
{#                                        <div id=\"ratp\" class=\"appWindow invisible\">#}
{#                                            <div class=\"appHeader text-white d-flex justify-content-between\">#}
{#                                                <div class=\"d-flex align-items-center py-2\">#}
{#                                                    <img src=\"{{ asset('build/images/apps/ratp.png') }}\" alt=\"Logo RATP\" class=\"mx-2\">#}
{#                                                    <div class=\"ml-1\">Ratp</div>#}
{#                                                </div>#}
{#                                                <div class=\"d-flex appHeaderButtons\">#}
{#                                                    <div class=\"h-100 px-3 d-flex align-items-center appHeaderIcon\" title=\"Réduire\">#}
{#                                                        <img src=\"{{ asset('build/images/app-window/minimize.png') }}\" alt=\"Réduire\">#}
{#                                                    </div>#}
{#                                                    <div class=\"h-100 px-3 d-flex align-items-center appHeaderIcon\" title=\"Agrandir\">#}
{#                                                        <img src=\"{{ asset('build/images/app-window/maximize.png') }}\" alt=\"Agrandir\">#}
{#                                                    </div>#}
{#                                                    <div class=\"h-100 px-3 d-flex align-items-center appHeaderIcon\" title=\"Fermer\" data-btn=\"close\">#}
{#                                                        <img src=\"{{ asset('build/images/app-window/close.png') }}\" alt=\"Fermer\">#}
{#                                                    </div>#}
{#                                                </div>#}
{#                                            </div>#}
{#                                            <div class=\"appAlerts d-block text-center\">#}
{#                                                <div class=\"appAlertsContent\">#}
{#                                                    <div class=\"appLoading d-block\">#}
{#                                                        <div class=\"appAlertsText mb-4 h1\">Chargement des données</div>#}
{#                                                        <i class=\"fas fa-cog fa-spin fa-3x\"></i>#}
{#                                                    </div>#}
{#                                                    <div class=\"appWaitStart d-none\">#}
{#                                                        <div class=\"appAlertsText h1\">Attente du démarrage</div>#}
{#                                                    </div>#}
{#                                                    <div class=\"appSuccessScreen d-none\">#}
{#                                                        <div class=\"appAlertsText h1\">Séquence d'arrêt d'urgence enclenchée</div>#}
{#                                                    </div>#}
{#                                                    <div class=\"appFailureScreen d-none\">#}
{#                                                        <div class=\"appAlertsText h1\">Échec de la manoeuvre</div>#}
{#                                                    </div>#}
{#                                                </div>#}
{#                                            </div>#}
{#                                            <div class=\"appContent d-none\">#}
{#                                                <div class=\"d-flex pt-4 ml-5 justify-content-between\">#}
{#                                                    <div class=\"h4 mb-0 align-self-center font-weight-bold text-secondary\">Métro de Paris - Ligne 1 </div>#}
{#                                                    <div id=\"currentTrainSpeed\" class=\"h5 text-center text-secondary mr-5 mb-0\">#}
{#                                                        <div>Vitesse Actuelle</div>#}
{#                                                        <div class=\"speedNumber mt-2 h4 larger\">70 km/h</div>#}
{#                                                    </div>#}
{#                                                </div>#}
{#                                                <div class=\"metroLine d-flex text-center mt-5 mx-0\">#}
{#                                                    {% for station in stations %}#}
{#                                                        <div class=\"mt-3\">#}
{#                                                            <div class=\"stationName\">{{ station }}</div>#}
{#                                                        </div>#}
{#                                                    {% endfor %}#}
{#                                                </div>#}
{#                                                <div class=\"metroStations mt-4 mx-0 text-center\">#}
{#                                                    <div class=\"d-flex justify-content-between\">#}
{#                                                        {% for i in 0..24 %}#}
{#                                                            <div class=\"stationIcon\" data-number=\"{{ i }}\">#}
{#                                                                <div class=\"vl position-relative\"></div>#}
{#                                                                <i class=\"fas fa-circle fa-2x\"></i>#}
{#                                                            </div>#}
{#                                                        {% endfor %}#}
{#                                                    </div>#}
{#                                                    <div class=\"progress mx-4\">#}
{#                                                        <div class=\"progress-bar progressPastDist\" role=\"progressbar\" style=\"width: 0%\"></div>#}
{#                                                        <div class=\"progress-bar progressTrain\" role=\"progressbar\" style=\"width: 1%\"></div>#}
{#                                                    </div>#}
{#                                                </div>#}
{#                                                <hr style=\"border: 1px solid rgba(0,0,0,0.1);\" class=\"mt-5 mb-2\">#}
{#                                                <div class=\"d-flex flex-column text-center mx-auto pt-2\" style=\"width: fit-content;\">#}
{#                                                    <div id=\"currentStep\" class=\"text-center h3 m-0 mb-3 w-auto mx-auto justify-content-around d-flex\">#}
{#                                                        {% for i in 0..4 %}#}
{#                                                            <div id=\"numberSeries{{ i }}\" class=\"mx-2 p-2 border d-flex flex-column\" style=\"border-radius: 6px;\"></div>#}
{#                                                        {% endfor %}#}
{#                                                    </div>#}
{#                                                    <input id=\"riddleInput\" type=\"number\" class=\"mx-auto form-control w-auto font-weight-bold\">#}
{#                                                    <div id=\"riddleInputResult\" class=\"my-3 font-weight-bold text-uppercase h5 invisible\"></div>#}
{#                                                    <div id=\"riddleSubmit\" class=\"btn text-light font-weight-bold w-auto mx-auto\">TRANSFÉRER</div>#}
{#                                                </div>#}
{#                                                <div id=\"trainSwitch\" class=\"flex-column h-auto text-center mx-auto d-none\">#}
{#                                                    <div class=\"text-center h3 mb-4\">Codes entrés avec succès</div>#}
{#                                                    <i class=\"fas fa-power-off fa-3x text-danger\"></i>#}
{#                                                    <span class=\"font-weight-bold mr-1 text-danger\">ARRÊT</span>#}
{#                                                </div>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                        <div id=\"fileExplorer\" class=\"appWindow invisible\">#}
{#                                            <div class=\"appHeader text-white d-flex justify-content-between\">#}
{#                                                <div class=\"d-flex align-items-center py-2\">#}
{#                                                    <img src=\"{{ asset('build/images/apps/file-explorer.png') }}\" alt=\"Explorateur de fichiers\" class=\"mx-2\">#}
{#                                                    <div class=\"ml-1\">Explorateur de fichiers</div>#}
{#                                                </div>#}
{#                                                <div class=\"d-flex appHeaderButtons\">#}
{#                                                    <div class=\"h-100 px-3 d-flex align-items-center appHeaderIcon\" title=\"Réduire\">#}
{#                                                        <img src=\"{{ asset('build/images/app-window/minimize.png') }}\" alt=\"Réduire\">#}
{#                                                    </div>#}
{#                                                    <div class=\"h-100 px-3 d-flex align-items-center appHeaderIcon\" title=\"Agrandir\">#}
{#                                                        <img src=\"{{ asset('build/images/app-window/maximize.png') }}\" alt=\"Agrandir\">#}
{#                                                    </div>#}
{#                                                    <div class=\"h-100 px-3 d-flex align-items-center appHeaderIcon\" title=\"Fermer\" data-btn=\"close\">#}
{#                                                        <img src=\"{{ asset('build/images/app-window/close.png') }}\" alt=\"Fermer\">#}
{#                                                    </div>#}
{#                                                </div>#}
{#                                            </div>#}
{#                                            <div id=\"fileExplorerContent\" class=\"d-flex\">#}
{#                                                <div class=\"col-2 border-right px-0 pt-3 overflow-auto\">#}
{#                                                    <div class=\"d-flex my-3 py-2 folderGroup\" data-pos=\"main\" data-file-cat=\"all\">#}
{#                                                        <i class=\"my-auto fas fa-chevron-down fa-lg mx-3\" style=\"color: #8c8888\"></i>#}
{#                                                        <img src=\"{{ asset('build/images/apps/this_pc.png') }}\" alt=\"Logo pc\">#}
{#                                                        <span class=\"ml-3 my-auto text-secondary\">Tous les fichiers</span>#}
{#                                                    </div>#}
{#                                                    <div class=\"d-flex my-4 pl-4 py-2 folderGroup\" data-pos=\"sec\" data-file-cat=\"document\">#}
{#                                                        <i class=\"my-auto fas fa-chevron-right mx-3\" style=\"color: #d0cdcd\"></i>#}
{#                                                        <img src=\"{{ asset('build/images/apps/documents.png') }}\" alt=\"Logo documents\" class=\"fileTypeIcon\">#}
{#                                                        <span class=\"ml-3 my-auto text-secondary\">Documents</span>#}
{#                                                    </div>#}
{#                                                    <div class=\"d-flex my-4 pl-4 py-2 folderGroup\" data-pos=\"sec\" data-file-cat=\"images\">#}
{#                                                        <i class=\"my-auto fas fa-chevron-right mx-3\" style=\"color: #d0cdcd\"></i>#}
{#                                                        <img src=\"{{ asset('build/images/apps/pictures.png') }}\" alt=\"Logo images\" class=\"fileTypeIcon\">#}
{#                                                        <span class=\"ml-3 my-auto text-secondary\">Images</span>#}
{#                                                    </div>#}
{#                                                    <div class=\"d-flex my-4 pl-4 py-2 folderGroup\" data-pos=\"sec\" data-file-cat=\"pdf\">#}
{#                                                        <i class=\"my-auto fas fa-chevron-right mx-3\" style=\"color: #d0cdcd\"></i>#}
{#                                                        <img src=\"{{ asset('build/images/apps/pdf.png') }}\" alt=\"Logo pdf\" class=\"fileTypeIcon\">#}
{#                                                        <span class=\"ml-3 my-auto text-secondary\">PDF</span>#}
{#                                                    </div>#}
{#                                                    <div class=\"d-flex my-4 pl-4 py-2 folderGroup\" data-pos=\"sec\" data-file-cat=\"audio\">#}
{#                                                        <i class=\"my-auto fas fa-chevron-right mx-3\" style=\"color: #d0cdcd\"></i>#}
{#                                                        <img src=\"{{ asset('build/images/apps/audio-files.png') }}\" alt=\"Logo fichiers audio\" class=\"fileTypeIcon\">#}
{#                                                        <span class=\"ml-3 my-auto text-secondary\">Audio</span>#}
{#                                                    </div>#}
{#                                                    <div class=\"d-flex my-4 pl-4 py-2 folderGroup\" data-pos=\"sec\" data-file-cat=\"video\">#}
{#                                                        <i class=\"my-auto fas fa-chevron-right mx-3\" style=\"color: #d0cdcd\"></i>#}
{#                                                        <img src=\"{{ asset('build/images/apps/video-files.png') }}\" alt=\"Logo fichiers video\" class=\"fileTypeIcon\">#}
{#                                                        <span class=\"ml-3 my-auto text-secondary\">Vidéos</span>#}
{#                                                    </div>#}
{#                                                </div>#}
{#                                                <div class=\"col-10 px-0 overflow-auto\">#}
{#                                                    {% for file in files %}#}
{#                                                        <div class=\"d-flex mx-2 mt-3\" data-header=\"{{ file.folder }}\">#}
{#                                                            <i class=\"my-auto fas fa-chevron-down mx-3\" style=\"color: #d6d3d3\"></i>#}
{#                                                            <span class=\"my-auto\" style=\"color: #4587cc\">{{ file.type ~ \"(\" ~ file.items|length ~ \")\" }}</span>#}
{#                                                            <hr class=\"border w-100 mx-3 my-auto\">#}
{#                                                        </div>#}
{#                                                        <div class=\"d-flex justify-content-start flex-wrap text-center mt-3\" data-file-container=\"{{ file.folder }}\">#}
{#                                                            {% for item in file.items %}#}
{#                                                                <div class=\"my-4 fileItem\" title=\"{{ item[\"name\"] }}\" data-mime=\"{{ item[\"mime\"] }}\" data-folder=\"{{ file.folder }}\">#}
{#                                                                    <div class=\"d-flex flex-column w-50 mx-auto fileContent\">#}
{#                                                                        <img src=\"{{ asset('build/images/apps/') ~ file.img }}\" alt=\"{{ file.type }}\" class=\"mx-auto\">#}
{#                                                                        <span class=\"text-center w-100 text-truncate small\" style=\"overflow-wrap: anywhere\">{{ item[\"name\"] }}</span>#}
{#                                                                    </div>#}
{#                                                                </div>#}
{#                                                            {% endfor %}#}
{#                                                        </div>#}
{#                                                    {% endfor %}#}
{#                                                </div>#}
{#                                            </div>#}
{#                                            <div id=\"dialog\" style=\"display: none\" class=\"p-0\"></div>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                </section>#}


                                <div id=\"enigme\" class=\"container\">
                                            <div class=\"row\" >
                                                <div class=\"col-lg-12 pt-2\" id=\"fondEnigme\">
                                                    <h2 class=\"text-center\">ENIGME</h2>
                                                </div>
                                                <div class=\"col-lg-12 pt-5\">
                                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                                                        those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\"
                                                        by Cicero are also reproduced in their exact original form, accompanied by English
                                                        versions from the 1914 translation by H. Rackham.</p>
                                                </div>

                                            </div>
                                    </div>


                                <img class=\"metro1\" src=\"{{ asset(\"/images/metro1.svg\") }}\">
                            </div>

                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">

            </div>
            <div class=\"col-lg-5 d-flex justify-content-around pt-2\">

                {#Button de bettery#}
                <a href=\"\">
                    <img class=\"pt-1\" src=\"{{ asset(\"/images/battery.svg\") }}\" title=\"Batterie 90%\">
                </a>

                {#Button de meteo#}
                <a href=\"\">
                    <img src=\"{{ asset(\"/images/temps.svg\") }}\" title=\"Temps nuageux\">
                </a>

                {#Button de wifi#}
                <a href=\"\">
                    <img src=\"{{ asset(\"/images/wifi.svg\") }}\" title=\"WIFI activé\">
                </a>

                {# Button ouverture du chat#}
                <a href=\"#\" role=\"button\" data-target=\"#modalChat\" data-toggle=\"modalChat\">
                    <img src=\"{{ asset(\"/images/logoChat.svg\") }}\" title=\"CHAT\">
                </a>

                {#Modal Chat#}
                <div class=\"modalChat\" id=\"modalChat\" role=\"dialog\">
                    <div class=\"modalChat-content\">
                        <div class=\"modalChat-close\" data-dismiss=\"dialog\">
                            X
                        </div>
                        <div class=\"modalChat-header\">
                            <h3>Messenger</h3>
                        </div>
                        <div class=\"modalChat-body\">
                            <h3 class=\"smsR\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                            <h3 class=\"smsR\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                            <h3 class=\"smsR\">sms</h3>
                            <h3 class=\"smsR\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                            <h3 class=\"smsR\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                            <h3 class=\"smsR\">sms</h3>
                            <h3 class=\"smsR\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                            <h3 class=\"smsL\">sms</h3>
                        </div>
                        <div class=\"modalChat-footer\">
                            <h3 class=\"smsText\">Ecrivez votre message...</h3>
                            <button type=\"button\" class=\"smsEnvoi\">envoi</button>
                        </div>
                    </div>
                </div>

                {#horloge#}
                <a href=\"\" class=\"heure\">
                    <span id=\"h\">11</span>
                    <span class=\"colon\"> : </span>
                    <span id=\"m\">59</span>
                    <span class=\"colon\"> : </span>
                    <span id=\"s\">55</span>
                </a>
                {#logo entreprise#}
                <a href=\"\">
                    <img id=\"imgLogoBleu\" src=\"{{ asset(\"/images/HIlogoPtit.svg\") }}\">
                </a>

            </div>

        </div>

    </div>
</footer>


</div>

{% endblock %}
", "default/index.html.twig", "/Users/coco/Desktop/Projet DEV/horizonImmersion/templates/default/index.html.twig");
    }
}
