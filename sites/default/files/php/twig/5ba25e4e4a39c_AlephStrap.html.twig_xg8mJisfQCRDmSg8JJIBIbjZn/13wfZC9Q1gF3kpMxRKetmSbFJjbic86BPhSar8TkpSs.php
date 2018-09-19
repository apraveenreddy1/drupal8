<?php

/* modules/aleph_jobs/templates/AlephStrap.html.twig */
class __TwigTemplate_783fd3d8ceff9a0433b90188a02f7a58d3d28ce0f81f694bee3472e450370cb1 extends Twig_Template
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
        $tags = array("for" => 37);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<h4>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h4>
<style>
table {
    width:100%;
    border: 2px solid #ddd;
}
tr {
    border-bottom: 0px solid #ccc;
    padding: 0.1em 0.6em;
    background: #fff;
}
th, td {
    padding: 15px;
    text-align: left;
}

table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}
table#t01 th {
    background-color: black;
    color: white;
}

.btn{
\tfloat: right;
    background-color: mediumseagreen;
    color: #fff;
    height: 30px;
    width: 150px;
}
</style>

";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 38
            echo "<table>
\t<tr>
  \t\t<td><h2>";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true));
            echo "</h2></td>
  \t\t<td><button class=\"btn\">";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["article"], "type", array()), "html", null, true));
            echo "</button></td>
 \t</tr>
 \t<tr>
  \t\t<td>@ ";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["article"], "company", array()), "html", null, true));
            echo " | ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["article"], "location", array()), "html", null, true));
            echo "</td>
  \t\t<td></td>
 \t</tr>
 \t<tr>
  \t\t<td>Published ";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["article"], "created_at", array()), "html", null, true));
            echo "</td>
  \t\t<td></td>
 \t</tr>
 \t<tr>
  \t\t<td colspan=\"2\">

  \t\t<a href=\"javascript:void(0);\" id=\"show_more";
            // line 54
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true));
            echo "\" onclick=\"showml('content";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true));
            echo "','show_more";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true));
            echo "')\">More info</a>
  \t\t<div id=\"content";
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true));
            echo "\" style=\"display: none;\">
      \t\t";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true));
            echo "
\t\t</div>

  \t\t</td>
 \t</tr>
</table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "

<script>

    function showml(divId,inhtmText) 
     {  
        var x = document.getElementById(divId).style.display; 

        if(x==\"block\")
        {
          document.getElementById(divId).style.display = \"none\";
          document.getElementById(inhtmText).innerHTML=\"Show More...\";
        }
       if(x==\"none\")
       {
          document.getElementById(divId).style.display = \"block\";
          document.getElementById(inhtmText).innerHTML=\"Show Less\";
        }
     }

</script>

";
    }

    public function getTemplateName()
    {
        return "modules/aleph_jobs/templates/AlephStrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 63,  131 => 56,  127 => 55,  119 => 54,  110 => 48,  101 => 44,  95 => 41,  91 => 40,  87 => 38,  83 => 37,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/aleph_jobs/templates/AlephStrap.html.twig", "/Applications/MAMP/htdocs/drupal8/modules/aleph_jobs/templates/AlephStrap.html.twig");
    }
}
