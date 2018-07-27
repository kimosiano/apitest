<?php

/* @NelmioApiDoc/SwaggerUi/index.html.twig */
class __TwigTemplate_d0674f8766fc94d62d755cc7a4765b83b0a0b787ba5693f61593fc326814a985 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["swagger_data"] ?? null), "spec", array()), "info", array()), "title", array()), "html", null, true);
        echo " - NelmioApiDocBundle</title>

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nelmioapidoc/swagger-ui/swagger-ui.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nelmioapidoc/style.css"), "html", null, true);
        echo "\">

    ";
        // line 19
        echo "    <script id=\"swagger-data\" type=\"application/json\">";
        echo json_encode(($context["swagger_data"] ?? null), 65);
        echo "</script>
</head>
<body>
    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" style=\"position:absolute;width:0;height:0\">
        <defs>
            <symbol viewBox=\"0 0 20 20\" id=\"unlocked\">
                <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V6h2v-.801C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8z\"></path>
            </symbol>
            <symbol viewBox=\"0 0 20 20\" id=\"locked\">
                <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8zM12 8H8V5.199C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8z\"></path>
            </symbol>
            <symbol viewBox=\"0 0 20 20\" id=\"close\">
                <path d=\"M14.348 14.849c-.469.469-1.229.469-1.697 0L10 11.819l-2.651 3.029c-.469.469-1.229.469-1.697 0-.469-.469-.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-.469-.469-.469-1.228 0-1.697.469-.469 1.228-.469 1.697 0L10 8.183l2.651-3.031c.469-.469 1.228-.469 1.697 0 .469.469.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c.469.469.469 1.229 0 1.698z\"></path>
            </symbol>
            <symbol viewBox=\"0 0 20 20\" id=\"large-arrow\">
                <path d=\"M13.25 10L6.109 2.58c-.268-.27-.268-.707 0-.979.268-.27.701-.27.969 0l7.83 7.908c.268.271.268.709 0 .979l-7.83 7.908c-.268.271-.701.27-.969 0-.268-.269-.268-.707 0-.979L13.25 10z\"></path>
            </symbol>
            <symbol viewBox=\"0 0 20 20\" id=\"large-arrow-down\">
                <path d=\"M17.418 6.109c.272-.268.709-.268.979 0s.271.701 0 .969l-7.908 7.83c-.27.268-.707.268-.979 0l-7.908-7.83c-.27-.268-.27-.701 0-.969.271-.268.709-.268.979 0L10 13.25l7.418-7.141z\"></path>
            </symbol>
            <symbol viewBox=\"0 0 24 24\" id=\"jump-to\">
                <path d=\"M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z\"></path>
            </symbol>
            <symbol viewBox=\"0 0 24 24\" id=\"expand\">
                <path d=\"M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z\"></path>
            </symbol>
        </defs>
    </svg>
    <header>
        <a id=\"logo\" href=\"https://github.com/nelmio/NelmioApiDocBundle\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nelmioapidoc/logo.png"), "html", null, true);
        echo "\" alt=\"NelmioApiDocBundle\"></a>
    </header>

    <div id=\"swagger-ui\" class=\"api-platform\"></div>

    <div class=\"swagger-ui-wrap\" style=\"margin-top: 20px; margin-bottom: 20px;\">
        &copy; 2017 <a href=\"https://api-platform.com\">Api-Platform</a>
    </div>

    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nelmioapidoc/swagger-ui/swagger-ui-bundle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nelmioapidoc/swagger-ui/swagger-ui-standalone-preset.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nelmioapidoc/init-swagger-ui.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@NelmioApiDoc/SwaggerUi/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 59,  94 => 58,  90 => 57,  78 => 48,  45 => 19,  40 => 16,  36 => 15,  30 => 12,  23 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NelmioApiDoc/SwaggerUi/index.html.twig", "C:\\wamp\\www\\api_adherents\\vendor\\nelmio\\api-doc-bundle\\Resources\\views\\SwaggerUi\\index.html.twig");
    }
}
