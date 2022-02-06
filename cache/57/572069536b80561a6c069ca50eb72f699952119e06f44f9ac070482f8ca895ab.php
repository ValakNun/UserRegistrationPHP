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

/* register.html.twig */
class __TwigTemplate_be720f3364157ff7ec133d32f450ea2de3d0a06c7ec289e3e738bb3533421834 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"/css/form.css\">
    <title>Register</title>
</head>
<body>
<main>
<div class=\"form-style-2\">
<div class=\"form-style-2-heading\">Provide your information</div>
<form action=\"register.php\" method=\"post\">
<label for=\"field1\"><span>First Name <span class=\"required\">*</span></span><input type=\"text\" class=\"input-field\" name=\"firstname\" value=\"\" /></label>
<label for=\"field2\"><span>Last Name <span class=\"required\">*</span></span><input type=\"text\" class=\"input-field\" name=\"lastname\" value=\"\" /></label>
<label for=\"field1\"><span>User Name <span class=\"required\">*</span></span><input type=\"text\" class=\"input-field\" name=\"username\" value=\"\" /></label>
<label for=\"field2\"><span>Email <span class=\"required\">*</span></span><input type=\"email\" class=\"input-field\" name=\"email\" value=\"\" /></label>
<label for=\"field1\"><span>Password<span class=\"required\">*</span></span><input type=\"text\" class=\"input-field\" name=\"passwrd\" value=\"\" /></label>
<label><span> </span><input type=\"submit\" name=\"submit\" /></label>
</form>
</div>
</main>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "register.html.twig", "/home/sumit/Desktop/TerryBerry/templates/register.html.twig");
    }
}
