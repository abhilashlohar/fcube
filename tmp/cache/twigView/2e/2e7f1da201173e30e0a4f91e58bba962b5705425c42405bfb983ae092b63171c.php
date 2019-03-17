<?php

/* C:\wamp64\www\visvesvaraya\vendor\cakephp\bake\src\Template\Bake\Layout\default.twig */
class __TwigTemplate_75a4ae7cc0634b886aaf1195dfe39178c7a12b12d8bd20554f37be7afa7126d2 extends Twig_Template
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
        $__internal_0a4509dab0ab318800fca2d257fbe64854e82991fd949cc0926b37f7f1d07f59 = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_0a4509dab0ab318800fca2d257fbe64854e82991fd949cc0926b37f7f1d07f59->enter($__internal_0a4509dab0ab318800fca2d257fbe64854e82991fd949cc0926b37f7f1d07f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\wamp64\\www\\visvesvaraya\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig"));

        // line 16
        echo $this->getAttribute(($context["_view"] ?? null), "fetch", array(0 => "content"), "method");
        
        $__internal_0a4509dab0ab318800fca2d257fbe64854e82991fd949cc0926b37f7f1d07f59->leave($__internal_0a4509dab0ab318800fca2d257fbe64854e82991fd949cc0926b37f7f1d07f59_prof);

    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\visvesvaraya\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig";
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
{{ _view.fetch('content')|raw }}", "C:\\wamp64\\www\\visvesvaraya\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig", "");
    }
}
