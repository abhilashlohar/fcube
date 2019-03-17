<?php

/* E:\wamp64\www\IFWCMS\vendor\cakephp\bake\src\Template\Bake\Layout\default.twig */
class __TwigTemplate_c94dfacf864d5ddfb2eb8d9d40acfaef41e240503669ce957fd6f4e655b34409 extends Twig_Template
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
        $__internal_4b3fceb7d86c25b870eecfe99ddfa3d51ddd7d00c9004ba30cc84a42682fe39a = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_4b3fceb7d86c25b870eecfe99ddfa3d51ddd7d00c9004ba30cc84a42682fe39a->enter($__internal_4b3fceb7d86c25b870eecfe99ddfa3d51ddd7d00c9004ba30cc84a42682fe39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "E:\\wamp64\\www\\IFWCMS\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig"));

        // line 16
        echo $this->getAttribute((isset($context["_view"]) ? $context["_view"] : null), "fetch", array(0 => "content"), "method");
        
        $__internal_4b3fceb7d86c25b870eecfe99ddfa3d51ddd7d00c9004ba30cc84a42682fe39a->leave($__internal_4b3fceb7d86c25b870eecfe99ddfa3d51ddd7d00c9004ba30cc84a42682fe39a_prof);

    }

    public function getTemplateName()
    {
        return "E:\\wamp64\\www\\IFWCMS\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 16,);
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
{{ _view.fetch('content')|raw }}", "E:\\wamp64\\www\\IFWCMS\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig", "");
    }
}
