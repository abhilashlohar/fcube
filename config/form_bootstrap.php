<?php
/**
 * @author: Sonia Solanki
 * @date: March 01, 2018
 * @version: 1.0.0
 */
return [
    'error' => '<span class="help-block">{{content}}</span>',
    'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
    'inputContainerError' => '<div class="form-group input {{type}}{{required}} has-error">{{content}}{{error}}</div>',
    'nestingLabel' => '<div class="mt-checkbox-list">{{hidden}}<label{{attrs}}>{{text}}{{input}}<span></span></label></div>',
    'file' => '<div class="fileinput fileinput-new" data-provides="fileinput"><div class="input-group">{{virtualInput}} <span class="input-group-addon btn default btn-file">{{buttons}} <input type="file" name="{{name}}"{{attrs}}></span>{{control}}</div></div>'
];
