<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* micro_post/_post.html.twig */
class __TwigTemplate_91b9288b56d5c43edd333f685c5c865d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_post/_post.html.twig"));

        // line 1
        yield " <div class=\"mb-4\">
    <div class=\"text-2xl\">
        <a href=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_show", ["post" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
        yield "\">
            ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        yield "
        </a>
    </div>
    <div class=\"text-xl dark:text-grey-400\">
            ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "text", [], "any", false, false, false, 8), "html", null, true);
        yield "
    </div>
    <div class=\"text-gray-500 dark:text-gray-400\">
        ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "created", [], "any", false, false, false, 11), "M j, Y"), "html", null, true);
        yield "
    </div>

    <div>
        ";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 15, $this->source); })()), "likedBy", [], "any", false, false, false, 15), "contains", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)], "method", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unlike", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
            yield "\">
                    Unlike <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 17, $this->source); })()), "likedBy", [], "any", false, false, false, 17), "count", [], "any", false, false, false, 17), "html", null, true);
            yield "</span>
                </a>
        ";
        } else {
            // line 20
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\">
                    Like <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 21, $this->source); })()), "likedBy", [], "any", false, false, false, 21), "count", [], "any", false, false, false, 21), "html", null, true);
            yield "</span>
                </a>
        ";
        }
        // line 24
        yield "    </div>

    <div class=\"text-sm text-gray-500 dark:text-gray-400\" >
        <a href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 27, $this->source); })()), "author", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 27, $this->source); })()), "author", [], "any", false, false, false, 27), "email", [], "any", false, false, false, 27), "html", null, true);
        yield "</a>
    </div>
    <div class=\"flex\">
        <a href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_edit", ["post" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        yield "\" class=\"mr-2\" >Edit</a>
        <a href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_micro_post_comment", ["post" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        yield "\" >
        Comment <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\" >";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 32, $this->source); })()), "comments", [], "any", false, false, false, 32), "count", [], "any", false, false, false, 32), "html", null, true);
        yield "</span>
        </a>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "micro_post/_post.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  121 => 32,  117 => 31,  113 => 30,  105 => 27,  100 => 24,  94 => 21,  89 => 20,  83 => 17,  78 => 16,  76 => 15,  69 => 11,  63 => 8,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" <div class=\"mb-4\">
    <div class=\"text-2xl\">
        <a href=\"{{ path('app_micro_post_show', {post: post.id}) }}\">
            {{ post.title }}
        </a>
    </div>
    <div class=\"text-xl dark:text-grey-400\">
            {{ post.text }}
    </div>
    <div class=\"text-gray-500 dark:text-gray-400\">
        {{ post.created | date(\"M j, Y\")}}
    </div>

    <div>
        {% if post.likedBy.contains(app.user) %}
                <a href=\"{{ path('app_unlike', { id: post.id }) }}\">
                    Unlike <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">{{ post.likedBy.count }}</span>
                </a>
        {% else %}
                <a href=\"{{ path('app_like', { id: post.id }) }}\">
                    Like <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\">{{ post.likedBy.count }}</span>
                </a>
        {% endif %}
    </div>

    <div class=\"text-sm text-gray-500 dark:text-gray-400\" >
        <a href=\"{{ path('app_profile', { id: post.author.id }) }}\">{{ post.author.email }}</a>
    </div>
    <div class=\"flex\">
        <a href=\"{{ path('app_micro_post_edit', {post: post.id}) }}\" class=\"mr-2\" >Edit</a>
        <a href=\"{{ path('app_micro_post_comment', {post: post.id}) }}\" >
        Comment <span class=\"px-2 rounded-md bg-gray-200 dark:bg-gray-700\" >{{ post.comments.count }}</span>
        </a>
    </div>
</div>
", "micro_post/_post.html.twig", "/Users/nadia/Desktop/Symfony/test/symfony-handson/templates/micro_post/_post.html.twig");
    }
}
