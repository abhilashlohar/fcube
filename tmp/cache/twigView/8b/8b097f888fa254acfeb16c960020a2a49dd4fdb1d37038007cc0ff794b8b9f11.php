<?php

/* E:\wamp64\www\IFWCMS\vendor\cakephp\bake\src\Template\Bake\Element\Controller/view.twig */
class __TwigTemplate_67c618a632f837112929447191d2d624d861c78732525eab5ab0840a894b45ab extends Twig_Template
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
        $__internal_9c1442ca4fa578f08f884a78a42afe9e8458e13b66d478b0cc9f4a47ed43378c = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_9c1442ca4fa578f08f884a78a42afe9e8458e13b66d478b0cc9f4a47ed43378c->enter($__internal_9c1442ca4fa578f08f884a78a42afe9e8458e13b66d478b0cc9f4a47ed43378c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "E:\\wamp64\\www\\IFWCMS\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Element\\Controller/view.twig"));

        // line 16
        $context["allAssociations"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "aliasExtractor", array(0 => (isset($context["modelObj"]) ? $context["modelObj"] : null), 1 => "BelongsTo"), "method");
        // line 17
        $context["allAssociations"] = twig_array_merge((isset($context["allAssociations"]) ? $context["allAssociations"] : null), $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "aliasExtractor", array(0 => (isset($context["modelObj"]) ? $context["modelObj"] : null), 1 => "BelongsToMany"), "method"));
        // line 18
        $context["allAssociations"] = twig_array_merge((isset($context["allAssociations"]) ? $context["allAssociations"] : null), $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "aliasExtractor", array(0 => (isset($context["modelObj"]) ? $context["modelObj"] : null), 1 => "HasOne"), "method"));
        // line 19
        $context["allAssociations"] = twig_array_merge((isset($context["allAssociations"]) ? $context["allAssociations"] : null), $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "aliasExtractor", array(0 => (isset($context["modelObj"]) ? $context["modelObj"] : null), 1 => "HasMany"), "method"));
        // line 20
        echo "
    /**
     * View method
     *
     * @param string|null \$id ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["singularHumanName"]) ? $context["singularHumanName"] : null), "html", null, true);
        echo " id.
     * @return \\Cake\\Http\\Response|void
     * @throws \\Cake\\Datasource\\Exception\\RecordNotFoundException When record not found.
     */
    public function view(\$id = null)
    {
        \$";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["singularName"]) ? $context["singularName"] : null), "html", null, true);
        echo " = \$this->";
        echo twig_escape_filter($this->env, (isset($context["currentModelName"]) ? $context["currentModelName"] : null), "html", null, true);
        echo "->get(\$id, [
            'contain' => [";
        // line 31
        echo $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "stringifyList", array(0 => (isset($context["allAssociations"]) ? $context["allAssociations"] : null), 1 => array("indent" => false)), "method");
        echo "]
        ]);

        \$this->set('";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["singularName"]) ? $context["singularName"] : null), "html", null, true);
        echo "', \$";
        echo twig_escape_filter($this->env, (isset($context["singularName"]) ? $context["singularName"] : null), "html", null, true);
        echo ");
    }
";
        
        $__internal_9c1442ca4fa578f08f884a78a42afe9e8458e13b66d478b0cc9f4a47ed43378c->leave($__internal_9c1442ca4fa578f08f884a78a42afe9e8458e13b66d478b0cc9f4a47ed43378c_prof);

    }

    public function getTemplateName()
    {
        return "E:\\wamp64\\www\\IFWCMS\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Element\\Controller/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 34,  51 => 31,  45 => 30,  36 => 24,  30 => 20,  28 => 19,  26 => 18,  24 => 17,  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{% set allAssociations = Bake.aliasExtractor(modelObj, 'BelongsTo') %}
{% set allAssociations = allAssociations|merge(Bake.aliasExtractor(modelObj, 'BelongsToMany')) %}
{% set allAssociations = allAssociations|merge(Bake.aliasExtractor(modelObj, 'HasOne')) %}
{% set allAssociations = allAssociations|merge(Bake.aliasExtractor(modelObj, 'HasMany')) %}

    /**
     * View method
     *
     * @param string|null \$id {{ singularHumanName }} id.
     * @return \\Cake\\Http\\Response|void
     * @throws \\Cake\\Datasource\\Exception\\RecordNotFoundException When record not found.
     */
    public function view(\$id = null)
    {
        \${{ singularName }} = \$this->{{ currentModelName }}->get(\$id, [
            'contain' => [{{ Bake.stringifyList(allAssociations, {'indent': false})|raw }}]
        ]);

        \$this->set('{{ singularName }}', \${{ singularName }});
    }
", "E:\\wamp64\\www\\IFWCMS\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Element\\Controller/view.twig", "");
    }
}
