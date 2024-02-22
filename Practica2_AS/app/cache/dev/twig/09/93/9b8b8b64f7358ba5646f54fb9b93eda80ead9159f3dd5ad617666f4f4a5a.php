<?php

/* ARSOFTDemoBundle:MisVistas:listarArticulos.html.twig */
class __TwigTemplate_09939b8b8b64f7358ba5646f54fb9b93eda80ead9159f3dd5ad617666f4f4a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Listado de Artículos</h1>

<table border=\"1\">
    <h2>Todos los articulos</h2>
<tr>
    <th>ID</th>
    <th>Artículo</th>
</tr>
";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) ? $context["articulos"] : $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 10
            echo "    <tr>
        <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listar_articulos", array("id" => $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
            echo "</a></td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</table>


<table border=\"1\">
    <h2>Articulos Seleccionado</h2>
<tr>
    <th>ID</th>
    <th>Artículo</th>
    <th>Modelo</th>
    <th>Precio</th>
</tr>
";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) ? $context["articulos"] : $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 27
            echo "    ";
            if (($this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id") == (isset($context["id_deseado"]) ? $context["id_deseado"] : $this->getContext($context, "id_deseado")))) {
                // line 28
                echo "    <tr>
        <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
                echo "</td>
        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
                echo "</td>
        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "nombre_producto"), "html", null, true);
                echo "</td>
        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "precio"), "html", null, true);
                echo "</td>
    </tr>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "ARSOFTDemoBundle:MisVistas:listarArticulos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 36,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  71 => 28,  68 => 27,  64 => 26,  51 => 15,  40 => 12,  36 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
