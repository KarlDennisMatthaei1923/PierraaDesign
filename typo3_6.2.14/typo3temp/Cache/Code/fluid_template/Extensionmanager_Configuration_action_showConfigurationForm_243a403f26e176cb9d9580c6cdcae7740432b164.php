<?php
class FluidCache_Extensionmanager_Configuration_action_showConfigurationForm_243a403f26e176cb9d9580c6cdcae7740432b164 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return 'main';
}
public function hasLayout() {
return TRUE;
}

/**
 * section docheader-buttons
 */
public function section_82416aa889dc891ac3382685ebae30417e96849a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments1 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments2 = array();
$arguments2['action'] = 'index';
$arguments2['controller'] = 'List';
// Rendering Array
$array3 = array();
$array3['search'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$arguments2['additionalParams'] = $array3;
$arguments2['arguments'] = array (
);
$arguments2['extensionName'] = NULL;
$arguments2['pluginName'] = NULL;
$arguments2['pageUid'] = NULL;
$arguments2['pageType'] = 0;
$arguments2['noCache'] = false;
$arguments2['noCacheHash'] = false;
$arguments2['section'] = '';
$arguments2['format'] = '';
$arguments2['linkAccessRestrictedPages'] = false;
$arguments2['absolute'] = false;
$arguments2['addQueryString'] = false;
$arguments2['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments2['addQueryStringMethod'] = NULL;
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper5 = $self->getViewHelper('$viewHelper5', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper5->setArguments($arguments2);
$viewHelper5->setRenderingContext($renderingContext);
$viewHelper5->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments1['uri'] = $viewHelper5->initializeArgumentsAndRender();
$arguments1['icon'] = 'actions-view-go-back';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments6 = array();
$arguments6['key'] = 'extConfTemplate.backToList';
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['htmlEscape'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper8->setArguments($arguments6);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1['title'] = $viewHelper8->initializeArgumentsAndRender();
$arguments1['additionalAttributes'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper10->setArguments($arguments1);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output0 .= $viewHelper10->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments11 = array();
$arguments11['uri'] = 'javascript:document.configurationform.submit();';
$arguments11['icon'] = 'actions-document-save';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments12 = array();
$arguments12['key'] = 'LLL:EXT:lang/locallang_common.xlf:save';
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['htmlEscape'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper14->setArguments($arguments12);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments11['title'] = $viewHelper14->initializeArgumentsAndRender();
$arguments11['additionalAttributes'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper16->setArguments($arguments11);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output0 .= $viewHelper16->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments17 = array();
$arguments17['uri'] = '#';
$arguments17['icon'] = 'actions-document-save-close';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments18 = array();
$arguments18['key'] = 'LLL:EXT:lang/locallang_common.xlf:saveAndClose';
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments17['title'] = $viewHelper20->initializeArgumentsAndRender();
$arguments17['additionalAttributes'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper22->setArguments($arguments17);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output0 .= $viewHelper22->initializeArgumentsAndRender();

$output0 .= '
';

return $output0;
}
/**
 * section module-headline
 */
public function section_448d1ad99edd62d80682fc5d4e038788bb925e4c(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output23 = '';

$output23 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments24 = array();
$arguments24['key'] = 'extConfTemplate.headline';
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['htmlEscape'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper26->setArguments($arguments24);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output23 .= $viewHelper26->initializeArgumentsAndRender();

$output23 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments27 = array();
$arguments27['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = NULL;
$arguments27['doubleEncode'] = true;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$value29 = ($arguments27['value'] !== NULL ? $arguments27['value'] : $renderChildrenClosure28());

$output23 .= (!is_string($value29) ? $value29 : htmlspecialchars($value29, ($arguments27['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments27['encoding'] !== NULL ? $arguments27['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments27['doubleEncode']));

$output23 .= '
	</h1>
';

return $output23;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output30 = '';

$output30 .= '
	<div id="typo3-extension-configuration-forms">
		<div class="tabs">
			<ul>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments31 = array();
$arguments31['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'configuration', $renderingContext);
$arguments31['as'] = 'category';
$arguments31['key'] = 'categoryNumber';
$arguments31['reverse'] = false;
$arguments31['iteration'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments34 = array();
// Rendering Boolean node
$arguments34['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext));
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
						<li><a href="#category-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'categoryNumber', $renderingContext);
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());

$output36 .= (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments37['encoding'] !== NULL ? $arguments37['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments37['doubleEncode']));

$output36 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output36 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));

$output36 .= '</a></li>
					';
return $output36;
};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper43->setArguments($arguments34);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output33 .= $viewHelper43->initializeArgumentsAndRender();

$output33 .= '
				';
return $output33;
};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
			</ul>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments44 = array();
$arguments44['action'] = 'save';
$arguments44['name'] = 'configurationform';
$arguments44['class'] = 'validate';
$arguments44['additionalAttributes'] = NULL;
$arguments44['arguments'] = array (
);
$arguments44['controller'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['pluginName'] = NULL;
$arguments44['pageUid'] = NULL;
$arguments44['object'] = NULL;
$arguments44['pageType'] = 0;
$arguments44['noCache'] = false;
$arguments44['noCacheHash'] = false;
$arguments44['section'] = '';
$arguments44['format'] = '';
$arguments44['additionalParams'] = array (
);
$arguments44['absolute'] = false;
$arguments44['addQueryString'] = false;
$arguments44['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments44['fieldNamePrefix'] = NULL;
$arguments44['actionUri'] = NULL;
$arguments44['objectName'] = NULL;
$arguments44['hiddenFieldClassName'] = NULL;
$arguments44['enctype'] = NULL;
$arguments44['method'] = NULL;
$arguments44['onreset'] = NULL;
$arguments44['onsubmit'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments47 = array();
$arguments47['name'] = 'extensionKey';
$arguments47['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$arguments47['additionalAttributes'] = NULL;
$arguments47['property'] = NULL;
$arguments47['class'] = NULL;
$arguments47['dir'] = NULL;
$arguments47['id'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['title'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper49->setArguments($arguments47);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output46 .= $viewHelper49->initializeArgumentsAndRender();

$output46 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments50 = array();
$arguments50['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'configuration', $renderingContext);
$arguments50['as'] = 'category';
$arguments50['key'] = 'categoryNumber';
$arguments50['reverse'] = false;
$arguments50['iteration'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments53 = array();
// Rendering Boolean node
$arguments53['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext));
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
						<div class="category" id="category-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments56 = array();
$arguments56['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'categoryNumber', $renderingContext);
$arguments56['keepQuotes'] = false;
$arguments56['encoding'] = NULL;
$arguments56['doubleEncode'] = true;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$value58 = ($arguments56['value'] !== NULL ? $arguments56['value'] : $renderChildrenClosure57());

$output55 .= (!is_string($value58) ? $value58 : htmlspecialchars($value58, ($arguments56['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments56['encoding'] !== NULL ? $arguments56['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments56['doubleEncode']));

$output55 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments59 = array();
$arguments59['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.subcategories', $renderingContext);
$arguments59['as'] = 'subcategory';
$arguments59['key'] = '';
$arguments59['reverse'] = false;
$arguments59['iteration'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
								<div class="subcategory">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments62 = array();
// Rendering Boolean node
$arguments62['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'subcategory.label', $renderingContext));
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments65 = array();
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
											<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'subcategory.label', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = NULL;
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());

$output67 .= (!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments68['encoding'] !== NULL ? $arguments68['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments68['doubleEncode']));

$output67 .= '</h3>
										';
return $output67;
};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper71->setArguments($arguments65);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure66);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output64 .= $viewHelper71->initializeArgumentsAndRender();

$output64 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments72 = array();
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments75 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments76 = array();
$arguments76['subject'] = NULL;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.subcategories', $renderingContext);
};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper');
$viewHelper78->setArguments($arguments76);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments75['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', $viewHelper78->initializeArgumentsAndRender(), 1);
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
												<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments81 = array();
$arguments81['key'] = 'extConfTemplate.other';
$arguments81['id'] = NULL;
$arguments81['default'] = NULL;
$arguments81['htmlEscape'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper83 = $self->getViewHelper('$viewHelper83', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper83->setArguments($arguments81);
$viewHelper83->setRenderingContext($renderingContext);
$viewHelper83->setRenderChildrenClosure($renderChildrenClosure82);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output80 .= $viewHelper83->initializeArgumentsAndRender();

$output80 .= '</h3>
											';
return $output80;
};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper84->setArguments($arguments75);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output74 .= $viewHelper84->initializeArgumentsAndRender();

$output74 .= '
										';
return $output74;
};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper85->setArguments($arguments72);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure73);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output64 .= $viewHelper85->initializeArgumentsAndRender();

$output64 .= '
									';
return $output64;
};
$arguments62['__thenClosure'] = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
											<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments87 = array();
$arguments87['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'subcategory.label', $renderingContext);
$arguments87['keepQuotes'] = false;
$arguments87['encoding'] = NULL;
$arguments87['doubleEncode'] = true;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$value89 = ($arguments87['value'] !== NULL ? $arguments87['value'] : $renderChildrenClosure88());

$output86 .= (!is_string($value89) ? $value89 : htmlspecialchars($value89, ($arguments87['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments87['encoding'] !== NULL ? $arguments87['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments87['doubleEncode']));

$output86 .= '</h3>
										';
return $output86;
};
$arguments62['__elseClosure'] = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments91 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments92 = array();
$arguments92['subject'] = NULL;
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.subcategories', $renderingContext);
};
$viewHelper94 = $self->getViewHelper('$viewHelper94', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper');
$viewHelper94->setArguments($arguments92);
$viewHelper94->setRenderingContext($renderingContext);
$viewHelper94->setRenderChildrenClosure($renderChildrenClosure93);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments91['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', $viewHelper94->initializeArgumentsAndRender(), 1);
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
												<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments97 = array();
$arguments97['key'] = 'extConfTemplate.other';
$arguments97['id'] = NULL;
$arguments97['default'] = NULL;
$arguments97['htmlEscape'] = NULL;
$arguments97['arguments'] = NULL;
$arguments97['extensionName'] = NULL;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper99 = $self->getViewHelper('$viewHelper99', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper99->setArguments($arguments97);
$viewHelper99->setRenderingContext($renderingContext);
$viewHelper99->setRenderChildrenClosure($renderChildrenClosure98);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output96 .= $viewHelper99->initializeArgumentsAndRender();

$output96 .= '</h3>
											';
return $output96;
};
$viewHelper100 = $self->getViewHelper('$viewHelper100', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper100->setArguments($arguments91);
$viewHelper100->setRenderingContext($renderingContext);
$viewHelper100->setRenderChildrenClosure($renderChildrenClosure95);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output90 .= $viewHelper100->initializeArgumentsAndRender();

$output90 .= '
										';
return $output90;
};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper101->setArguments($arguments62);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output61 .= $viewHelper101->initializeArgumentsAndRender();

$output61 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments102 = array();
$arguments102['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'subcategory.items', $renderingContext);
$arguments102['as'] = 'item';
$arguments102['key'] = '';
$arguments102['reverse'] = false;
$arguments102['iteration'] = NULL;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
										<div class="group">
											<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments105 = array();
$arguments105['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.labelHeadline', $renderingContext);
$arguments105['keepQuotes'] = false;
$arguments105['encoding'] = NULL;
$arguments105['doubleEncode'] = true;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$value107 = ($arguments105['value'] !== NULL ? $arguments105['value'] : $renderChildrenClosure106());

$output104 .= (!is_string($value107) ? $value107 : htmlspecialchars($value107, ($arguments105['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments105['encoding'] !== NULL ? $arguments105['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments105['doubleEncode']));

$output104 .= ' <span class="info">[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments108 = array();
$arguments108['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments108['keepQuotes'] = false;
$arguments108['encoding'] = NULL;
$arguments108['doubleEncode'] = true;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$value110 = ($arguments108['value'] !== NULL ? $arguments108['value'] : $renderChildrenClosure109());

$output104 .= (!is_string($value110) ? $value110 : htmlspecialchars($value110, ($arguments108['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments108['encoding'] !== NULL ? $arguments108['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments108['doubleEncode']));

$output104 .= '.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.name', $renderingContext);
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());

$output104 .= (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));

$output104 .= ']</span></h4>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments114 = array();
// Rendering Boolean node
$arguments114['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.labelText', $renderingContext));
$arguments114['then'] = NULL;
$arguments114['else'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
												<label for="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments117 = array();
$arguments117['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.name', $renderingContext);
$arguments117['keepQuotes'] = false;
$arguments117['encoding'] = NULL;
$arguments117['doubleEncode'] = true;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$value119 = ($arguments117['value'] !== NULL ? $arguments117['value'] : $renderChildrenClosure118());

$output116 .= (!is_string($value119) ? $value119 : htmlspecialchars($value119, ($arguments117['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments117['encoding'] !== NULL ? $arguments117['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments117['doubleEncode']));

$output116 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments120 = array();
$arguments120['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.labelText', $renderingContext);
$arguments120['keepQuotes'] = false;
$arguments120['encoding'] = NULL;
$arguments120['doubleEncode'] = true;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$value122 = ($arguments120['value'] !== NULL ? $arguments120['value'] : $renderChildrenClosure121());

$output116 .= (!is_string($value122) ? $value122 : htmlspecialchars($value122, ($arguments120['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments120['encoding'] !== NULL ? $arguments120['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments120['doubleEncode']));

$output116 .= '</label>
											';
return $output116;
};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper123->setArguments($arguments114);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output104 .= $viewHelper123->initializeArgumentsAndRender();

$output104 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments124 = array();
// Rendering Boolean node
$arguments124['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.highlight', $renderingContext));
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
												<span style="background:red; padding:1px 2px; color:#fff; font-weight:bold;">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments127 = array();
$arguments127['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.highlight', $renderingContext);
$arguments127['keepQuotes'] = false;
$arguments127['encoding'] = NULL;
$arguments127['doubleEncode'] = true;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$value129 = ($arguments127['value'] !== NULL ? $arguments127['value'] : $renderChildrenClosure128());

$output126 .= (!is_string($value129) ? $value129 : htmlspecialchars($value129, ($arguments127['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments127['encoding'] !== NULL ? $arguments127['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments127['doubleEncode']));

$output126 .= '</span>
											';
return $output126;
};
$viewHelper130 = $self->getViewHelper('$viewHelper130', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper130->setArguments($arguments124);
$viewHelper130->setRenderingContext($renderingContext);
$viewHelper130->setRenderChildrenClosure($renderChildrenClosure125);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output104 .= $viewHelper130->initializeArgumentsAndRender();

$output104 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper
$arguments131 = array();
$arguments131['configuration'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item', $renderingContext);
$arguments131['additionalAttributes'] = NULL;
$arguments131['name'] = NULL;
$arguments131['value'] = NULL;
$arguments131['class'] = NULL;
$arguments131['dir'] = NULL;
$arguments131['id'] = NULL;
$arguments131['lang'] = NULL;
$arguments131['style'] = NULL;
$arguments131['title'] = NULL;
$arguments131['accesskey'] = NULL;
$arguments131['tabindex'] = NULL;
$arguments131['onclick'] = NULL;
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper133 = $self->getViewHelper('$viewHelper133', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper');
$viewHelper133->setArguments($arguments131);
$viewHelper133->setRenderingContext($renderingContext);
$viewHelper133->setRenderChildrenClosure($renderChildrenClosure132);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper

$output104 .= $viewHelper133->initializeArgumentsAndRender();

$output104 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments134 = array();
// Rendering Boolean node
$arguments134['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.type', $renderingContext), 'user');
$arguments134['then'] = NULL;
$arguments134['else'] = NULL;
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments137 = array();
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments140 = array();
// Rendering Array
$array141 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments142 = array();
$output143 = '';

$output143 .= 'extConfTemplate.type.';

$output143 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.type', $renderingContext);
$arguments142['key'] = $output143;
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['htmlEscape'] = NULL;
$arguments142['arguments'] = NULL;
$arguments142['extensionName'] = NULL;
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper145 = $self->getViewHelper('$viewHelper145', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper145->setArguments($arguments142);
$viewHelper145->setRenderingContext($renderingContext);
$viewHelper145->setRenderChildrenClosure($renderChildrenClosure144);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$array141['label'] = $viewHelper145->initializeArgumentsAndRender();
$arguments140['map'] = $array141;
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments148 = array();
// Rendering Boolean node
$arguments148['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'label', $renderingContext));
$arguments148['then'] = NULL;
$arguments148['else'] = NULL;
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments151 = array();
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
																<span class="info">(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments154 = array();
$arguments154['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'label', $renderingContext);
$arguments154['keepQuotes'] = false;
$arguments154['encoding'] = NULL;
$arguments154['doubleEncode'] = true;
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$value156 = ($arguments154['value'] !== NULL ? $arguments154['value'] : $renderChildrenClosure155());

$output153 .= (!is_string($value156) ? $value156 : htmlspecialchars($value156, ($arguments154['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments154['encoding'] !== NULL ? $arguments154['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments154['doubleEncode']));

$output153 .= ')</span>
															';
return $output153;
};
$viewHelper157 = $self->getViewHelper('$viewHelper157', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper157->setArguments($arguments151);
$viewHelper157->setRenderingContext($renderingContext);
$viewHelper157->setRenderChildrenClosure($renderChildrenClosure152);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output150 .= $viewHelper157->initializeArgumentsAndRender();

$output150 .= '
														';
return $output150;
};
$arguments148['__thenClosure'] = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
																<span class="info">(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments159 = array();
$arguments159['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'label', $renderingContext);
$arguments159['keepQuotes'] = false;
$arguments159['encoding'] = NULL;
$arguments159['doubleEncode'] = true;
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$value161 = ($arguments159['value'] !== NULL ? $arguments159['value'] : $renderChildrenClosure160());

$output158 .= (!is_string($value161) ? $value161 : htmlspecialchars($value161, ($arguments159['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments159['encoding'] !== NULL ? $arguments159['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments159['doubleEncode']));

$output158 .= ')</span>
															';
return $output158;
};
$viewHelper162 = $self->getViewHelper('$viewHelper162', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper162->setArguments($arguments148);
$viewHelper162->setRenderingContext($renderingContext);
$viewHelper162->setRenderChildrenClosure($renderChildrenClosure149);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output147 .= $viewHelper162->initializeArgumentsAndRender();

$output147 .= '
													';
return $output147;
};
$viewHelper163 = $self->getViewHelper('$viewHelper163', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper');
$viewHelper163->setArguments($arguments140);
$viewHelper163->setRenderingContext($renderingContext);
$viewHelper163->setRenderChildrenClosure($renderChildrenClosure146);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper

$output139 .= $viewHelper163->initializeArgumentsAndRender();

$output139 .= '
												';
return $output139;
};
$viewHelper164 = $self->getViewHelper('$viewHelper164', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper164->setArguments($arguments137);
$viewHelper164->setRenderingContext($renderingContext);
$viewHelper164->setRenderChildrenClosure($renderChildrenClosure138);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output136 .= $viewHelper164->initializeArgumentsAndRender();

$output136 .= '
											';
return $output136;
};
$arguments134['__thenClosure'] = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments166 = array();
// Rendering Array
$array167 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments168 = array();
$output169 = '';

$output169 .= 'extConfTemplate.type.';

$output169 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.type', $renderingContext);
$arguments168['key'] = $output169;
$arguments168['id'] = NULL;
$arguments168['default'] = NULL;
$arguments168['htmlEscape'] = NULL;
$arguments168['arguments'] = NULL;
$arguments168['extensionName'] = NULL;
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper171 = $self->getViewHelper('$viewHelper171', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper171->setArguments($arguments168);
$viewHelper171->setRenderingContext($renderingContext);
$viewHelper171->setRenderChildrenClosure($renderChildrenClosure170);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$array167['label'] = $viewHelper171->initializeArgumentsAndRender();
$arguments166['map'] = $array167;
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments174 = array();
// Rendering Boolean node
$arguments174['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'label', $renderingContext));
$arguments174['then'] = NULL;
$arguments174['else'] = NULL;
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments177 = array();
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
																<span class="info">(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments180 = array();
$arguments180['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'label', $renderingContext);
$arguments180['keepQuotes'] = false;
$arguments180['encoding'] = NULL;
$arguments180['doubleEncode'] = true;
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$value182 = ($arguments180['value'] !== NULL ? $arguments180['value'] : $renderChildrenClosure181());

$output179 .= (!is_string($value182) ? $value182 : htmlspecialchars($value182, ($arguments180['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments180['encoding'] !== NULL ? $arguments180['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments180['doubleEncode']));

$output179 .= ')</span>
															';
return $output179;
};
$viewHelper183 = $self->getViewHelper('$viewHelper183', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper183->setArguments($arguments177);
$viewHelper183->setRenderingContext($renderingContext);
$viewHelper183->setRenderChildrenClosure($renderChildrenClosure178);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output176 .= $viewHelper183->initializeArgumentsAndRender();

$output176 .= '
														';
return $output176;
};
$arguments174['__thenClosure'] = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
																<span class="info">(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments185 = array();
$arguments185['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'label', $renderingContext);
$arguments185['keepQuotes'] = false;
$arguments185['encoding'] = NULL;
$arguments185['doubleEncode'] = true;
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$value187 = ($arguments185['value'] !== NULL ? $arguments185['value'] : $renderChildrenClosure186());

$output184 .= (!is_string($value187) ? $value187 : htmlspecialchars($value187, ($arguments185['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments185['encoding'] !== NULL ? $arguments185['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments185['doubleEncode']));

$output184 .= ')</span>
															';
return $output184;
};
$viewHelper188 = $self->getViewHelper('$viewHelper188', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper188->setArguments($arguments174);
$viewHelper188->setRenderingContext($renderingContext);
$viewHelper188->setRenderChildrenClosure($renderChildrenClosure175);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output173 .= $viewHelper188->initializeArgumentsAndRender();

$output173 .= '
													';
return $output173;
};
$viewHelper189 = $self->getViewHelper('$viewHelper189', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper');
$viewHelper189->setArguments($arguments166);
$viewHelper189->setRenderingContext($renderingContext);
$viewHelper189->setRenderChildrenClosure($renderChildrenClosure172);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper

$output165 .= $viewHelper189->initializeArgumentsAndRender();

$output165 .= '
												';
return $output165;
};
$viewHelper190 = $self->getViewHelper('$viewHelper190', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper190->setArguments($arguments134);
$viewHelper190->setRenderingContext($renderingContext);
$viewHelper190->setRenderChildrenClosure($renderChildrenClosure135);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output104 .= $viewHelper190->initializeArgumentsAndRender();

$output104 .= '
										</div>
									';
return $output104;
};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output61 .= '
								</div>
							';
return $output61;
};

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output55 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments191 = array();
// Rendering Boolean node
$arguments191['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.highlightText', $renderingContext));
$arguments191['then'] = NULL;
$arguments191['else'] = NULL;
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$output193 = '';

$output193 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments194 = array();
$arguments194['value'] = NULL;
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.highlightText', $renderingContext);
};
$viewHelper196 = $self->getViewHelper('$viewHelper196', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper');
$viewHelper196->setArguments($arguments194);
$viewHelper196->setRenderingContext($renderingContext);
$viewHelper196->setRenderChildrenClosure($renderChildrenClosure195);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper

$output193 .= $viewHelper196->initializeArgumentsAndRender();

$output193 .= '
							';
return $output193;
};
$viewHelper197 = $self->getViewHelper('$viewHelper197', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper197->setArguments($arguments191);
$viewHelper197->setRenderingContext($renderingContext);
$viewHelper197->setRenderChildrenClosure($renderChildrenClosure192);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output55 .= $viewHelper197->initializeArgumentsAndRender();

$output55 .= '
						</div>
					';
return $output55;
};
$viewHelper198 = $self->getViewHelper('$viewHelper198', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper198->setArguments($arguments53);
$viewHelper198->setRenderingContext($renderingContext);
$viewHelper198->setRenderChildrenClosure($renderChildrenClosure54);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output52 .= $viewHelper198->initializeArgumentsAndRender();

$output52 .= '
				';
return $output52;
};

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output46 .= '
			';
return $output46;
};
$viewHelper199 = $self->getViewHelper('$viewHelper199', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper199->setArguments($arguments44);
$viewHelper199->setRenderingContext($renderingContext);
$viewHelper199->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output30 .= $viewHelper199->initializeArgumentsAndRender();

$output30 .= '
		</div>
	</div>
';

return $output30;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output200 = '';

$output200 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments201 = array();
$arguments201['name'] = 'main';
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper203 = $self->getViewHelper('$viewHelper203', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper203->setArguments($arguments201);
$viewHelper203->setRenderingContext($renderingContext);
$viewHelper203->setRenderChildrenClosure($renderChildrenClosure202);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output200 .= $viewHelper203->initializeArgumentsAndRender();

$output200 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments204 = array();
$arguments204['name'] = 'docheader-buttons';
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments207 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments208 = array();
$arguments208['action'] = 'index';
$arguments208['controller'] = 'List';
// Rendering Array
$array209 = array();
$array209['search'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$arguments208['additionalParams'] = $array209;
$arguments208['arguments'] = array (
);
$arguments208['extensionName'] = NULL;
$arguments208['pluginName'] = NULL;
$arguments208['pageUid'] = NULL;
$arguments208['pageType'] = 0;
$arguments208['noCache'] = false;
$arguments208['noCacheHash'] = false;
$arguments208['section'] = '';
$arguments208['format'] = '';
$arguments208['linkAccessRestrictedPages'] = false;
$arguments208['absolute'] = false;
$arguments208['addQueryString'] = false;
$arguments208['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments208['addQueryStringMethod'] = NULL;
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper211 = $self->getViewHelper('$viewHelper211', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper211->setArguments($arguments208);
$viewHelper211->setRenderingContext($renderingContext);
$viewHelper211->setRenderChildrenClosure($renderChildrenClosure210);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments207['uri'] = $viewHelper211->initializeArgumentsAndRender();
$arguments207['icon'] = 'actions-view-go-back';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments212 = array();
$arguments212['key'] = 'extConfTemplate.backToList';
$arguments212['id'] = NULL;
$arguments212['default'] = NULL;
$arguments212['htmlEscape'] = NULL;
$arguments212['arguments'] = NULL;
$arguments212['extensionName'] = NULL;
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper214 = $self->getViewHelper('$viewHelper214', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper214->setArguments($arguments212);
$viewHelper214->setRenderingContext($renderingContext);
$viewHelper214->setRenderChildrenClosure($renderChildrenClosure213);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments207['title'] = $viewHelper214->initializeArgumentsAndRender();
$arguments207['additionalAttributes'] = NULL;
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper216 = $self->getViewHelper('$viewHelper216', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper216->setArguments($arguments207);
$viewHelper216->setRenderingContext($renderingContext);
$viewHelper216->setRenderChildrenClosure($renderChildrenClosure215);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output206 .= $viewHelper216->initializeArgumentsAndRender();

$output206 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments217 = array();
$arguments217['uri'] = 'javascript:document.configurationform.submit();';
$arguments217['icon'] = 'actions-document-save';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments218 = array();
$arguments218['key'] = 'LLL:EXT:lang/locallang_common.xlf:save';
$arguments218['id'] = NULL;
$arguments218['default'] = NULL;
$arguments218['htmlEscape'] = NULL;
$arguments218['arguments'] = NULL;
$arguments218['extensionName'] = NULL;
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper220 = $self->getViewHelper('$viewHelper220', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper220->setArguments($arguments218);
$viewHelper220->setRenderingContext($renderingContext);
$viewHelper220->setRenderChildrenClosure($renderChildrenClosure219);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments217['title'] = $viewHelper220->initializeArgumentsAndRender();
$arguments217['additionalAttributes'] = NULL;
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper222 = $self->getViewHelper('$viewHelper222', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper222->setArguments($arguments217);
$viewHelper222->setRenderingContext($renderingContext);
$viewHelper222->setRenderChildrenClosure($renderChildrenClosure221);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output206 .= $viewHelper222->initializeArgumentsAndRender();

$output206 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments223 = array();
$arguments223['uri'] = '#';
$arguments223['icon'] = 'actions-document-save-close';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments224 = array();
$arguments224['key'] = 'LLL:EXT:lang/locallang_common.xlf:saveAndClose';
$arguments224['id'] = NULL;
$arguments224['default'] = NULL;
$arguments224['htmlEscape'] = NULL;
$arguments224['arguments'] = NULL;
$arguments224['extensionName'] = NULL;
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper226 = $self->getViewHelper('$viewHelper226', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper226->setArguments($arguments224);
$viewHelper226->setRenderingContext($renderingContext);
$viewHelper226->setRenderChildrenClosure($renderChildrenClosure225);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments223['title'] = $viewHelper226->initializeArgumentsAndRender();
$arguments223['additionalAttributes'] = NULL;
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper228 = $self->getViewHelper('$viewHelper228', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper228->setArguments($arguments223);
$viewHelper228->setRenderingContext($renderingContext);
$viewHelper228->setRenderChildrenClosure($renderChildrenClosure227);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output206 .= $viewHelper228->initializeArgumentsAndRender();

$output206 .= '
';
return $output206;
};

$output200 .= '';

$output200 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments229 = array();
$arguments229['name'] = 'module-headline';
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments232 = array();
$arguments232['key'] = 'extConfTemplate.headline';
$arguments232['id'] = NULL;
$arguments232['default'] = NULL;
$arguments232['htmlEscape'] = NULL;
$arguments232['arguments'] = NULL;
$arguments232['extensionName'] = NULL;
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper234 = $self->getViewHelper('$viewHelper234', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper234->setArguments($arguments232);
$viewHelper234->setRenderingContext($renderingContext);
$viewHelper234->setRenderChildrenClosure($renderChildrenClosure233);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output231 .= $viewHelper234->initializeArgumentsAndRender();

$output231 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments235 = array();
$arguments235['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$arguments235['keepQuotes'] = false;
$arguments235['encoding'] = NULL;
$arguments235['doubleEncode'] = true;
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$value237 = ($arguments235['value'] !== NULL ? $arguments235['value'] : $renderChildrenClosure236());

$output231 .= (!is_string($value237) ? $value237 : htmlspecialchars($value237, ($arguments235['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments235['encoding'] !== NULL ? $arguments235['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments235['doubleEncode']));

$output231 .= '
	</h1>
';
return $output231;
};

$output200 .= '';

$output200 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments238 = array();
$arguments238['name'] = 'Content';
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
	<div id="typo3-extension-configuration-forms">
		<div class="tabs">
			<ul>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments241 = array();
$arguments241['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'configuration', $renderingContext);
$arguments241['as'] = 'category';
$arguments241['key'] = 'categoryNumber';
$arguments241['reverse'] = false;
$arguments241['iteration'] = NULL;
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments244 = array();
// Rendering Boolean node
$arguments244['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext));
$arguments244['then'] = NULL;
$arguments244['else'] = NULL;
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
						<li><a href="#category-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments247 = array();
$arguments247['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'categoryNumber', $renderingContext);
$arguments247['keepQuotes'] = false;
$arguments247['encoding'] = NULL;
$arguments247['doubleEncode'] = true;
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$value249 = ($arguments247['value'] !== NULL ? $arguments247['value'] : $renderChildrenClosure248());

$output246 .= (!is_string($value249) ? $value249 : htmlspecialchars($value249, ($arguments247['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments247['encoding'] !== NULL ? $arguments247['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments247['doubleEncode']));

$output246 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments250 = array();
$arguments250['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments250['keepQuotes'] = false;
$arguments250['encoding'] = NULL;
$arguments250['doubleEncode'] = true;
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$value252 = ($arguments250['value'] !== NULL ? $arguments250['value'] : $renderChildrenClosure251());

$output246 .= (!is_string($value252) ? $value252 : htmlspecialchars($value252, ($arguments250['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments250['encoding'] !== NULL ? $arguments250['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments250['doubleEncode']));

$output246 .= '</a></li>
					';
return $output246;
};
$viewHelper253 = $self->getViewHelper('$viewHelper253', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper253->setArguments($arguments244);
$viewHelper253->setRenderingContext($renderingContext);
$viewHelper253->setRenderChildrenClosure($renderChildrenClosure245);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output243 .= $viewHelper253->initializeArgumentsAndRender();

$output243 .= '
				';
return $output243;
};

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
			</ul>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments254 = array();
$arguments254['action'] = 'save';
$arguments254['name'] = 'configurationform';
$arguments254['class'] = 'validate';
$arguments254['additionalAttributes'] = NULL;
$arguments254['arguments'] = array (
);
$arguments254['controller'] = NULL;
$arguments254['extensionName'] = NULL;
$arguments254['pluginName'] = NULL;
$arguments254['pageUid'] = NULL;
$arguments254['object'] = NULL;
$arguments254['pageType'] = 0;
$arguments254['noCache'] = false;
$arguments254['noCacheHash'] = false;
$arguments254['section'] = '';
$arguments254['format'] = '';
$arguments254['additionalParams'] = array (
);
$arguments254['absolute'] = false;
$arguments254['addQueryString'] = false;
$arguments254['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments254['fieldNamePrefix'] = NULL;
$arguments254['actionUri'] = NULL;
$arguments254['objectName'] = NULL;
$arguments254['hiddenFieldClassName'] = NULL;
$arguments254['enctype'] = NULL;
$arguments254['method'] = NULL;
$arguments254['onreset'] = NULL;
$arguments254['onsubmit'] = NULL;
$arguments254['dir'] = NULL;
$arguments254['id'] = NULL;
$arguments254['lang'] = NULL;
$arguments254['style'] = NULL;
$arguments254['title'] = NULL;
$arguments254['accesskey'] = NULL;
$arguments254['tabindex'] = NULL;
$arguments254['onclick'] = NULL;
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments257 = array();
$arguments257['name'] = 'extensionKey';
$arguments257['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'extension.key', $renderingContext);
$arguments257['additionalAttributes'] = NULL;
$arguments257['property'] = NULL;
$arguments257['class'] = NULL;
$arguments257['dir'] = NULL;
$arguments257['id'] = NULL;
$arguments257['lang'] = NULL;
$arguments257['style'] = NULL;
$arguments257['title'] = NULL;
$arguments257['accesskey'] = NULL;
$arguments257['tabindex'] = NULL;
$arguments257['onclick'] = NULL;
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper259 = $self->getViewHelper('$viewHelper259', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper259->setArguments($arguments257);
$viewHelper259->setRenderingContext($renderingContext);
$viewHelper259->setRenderChildrenClosure($renderChildrenClosure258);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output256 .= $viewHelper259->initializeArgumentsAndRender();

$output256 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments260 = array();
$arguments260['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'configuration', $renderingContext);
$arguments260['as'] = 'category';
$arguments260['key'] = 'categoryNumber';
$arguments260['reverse'] = false;
$arguments260['iteration'] = NULL;
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments263 = array();
// Rendering Boolean node
$arguments263['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext));
$arguments263['then'] = NULL;
$arguments263['else'] = NULL;
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
						<div class="category" id="category-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments266 = array();
$arguments266['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'categoryNumber', $renderingContext);
$arguments266['keepQuotes'] = false;
$arguments266['encoding'] = NULL;
$arguments266['doubleEncode'] = true;
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$value268 = ($arguments266['value'] !== NULL ? $arguments266['value'] : $renderChildrenClosure267());

$output265 .= (!is_string($value268) ? $value268 : htmlspecialchars($value268, ($arguments266['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments266['encoding'] !== NULL ? $arguments266['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments266['doubleEncode']));

$output265 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments269 = array();
$arguments269['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.subcategories', $renderingContext);
$arguments269['as'] = 'subcategory';
$arguments269['key'] = '';
$arguments269['reverse'] = false;
$arguments269['iteration'] = NULL;
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
								<div class="subcategory">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments272 = array();
// Rendering Boolean node
$arguments272['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'subcategory.label', $renderingContext));
$arguments272['then'] = NULL;
$arguments272['else'] = NULL;
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments275 = array();
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output277 = '';

$output277 .= '
											<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments278 = array();
$arguments278['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'subcategory.label', $renderingContext);
$arguments278['keepQuotes'] = false;
$arguments278['encoding'] = NULL;
$arguments278['doubleEncode'] = true;
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$value280 = ($arguments278['value'] !== NULL ? $arguments278['value'] : $renderChildrenClosure279());

$output277 .= (!is_string($value280) ? $value280 : htmlspecialchars($value280, ($arguments278['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments278['encoding'] !== NULL ? $arguments278['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments278['doubleEncode']));

$output277 .= '</h3>
										';
return $output277;
};
$viewHelper281 = $self->getViewHelper('$viewHelper281', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper281->setArguments($arguments275);
$viewHelper281->setRenderingContext($renderingContext);
$viewHelper281->setRenderChildrenClosure($renderChildrenClosure276);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output274 .= $viewHelper281->initializeArgumentsAndRender();

$output274 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments282 = array();
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$output284 = '';

$output284 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments285 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments286 = array();
$arguments286['subject'] = NULL;
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.subcategories', $renderingContext);
};
$viewHelper288 = $self->getViewHelper('$viewHelper288', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper');
$viewHelper288->setArguments($arguments286);
$viewHelper288->setRenderingContext($renderingContext);
$viewHelper288->setRenderChildrenClosure($renderChildrenClosure287);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments285['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', $viewHelper288->initializeArgumentsAndRender(), 1);
$arguments285['then'] = NULL;
$arguments285['else'] = NULL;
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
												<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments291 = array();
$arguments291['key'] = 'extConfTemplate.other';
$arguments291['id'] = NULL;
$arguments291['default'] = NULL;
$arguments291['htmlEscape'] = NULL;
$arguments291['arguments'] = NULL;
$arguments291['extensionName'] = NULL;
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper293 = $self->getViewHelper('$viewHelper293', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper293->setArguments($arguments291);
$viewHelper293->setRenderingContext($renderingContext);
$viewHelper293->setRenderChildrenClosure($renderChildrenClosure292);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output290 .= $viewHelper293->initializeArgumentsAndRender();

$output290 .= '</h3>
											';
return $output290;
};
$viewHelper294 = $self->getViewHelper('$viewHelper294', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper294->setArguments($arguments285);
$viewHelper294->setRenderingContext($renderingContext);
$viewHelper294->setRenderChildrenClosure($renderChildrenClosure289);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output284 .= $viewHelper294->initializeArgumentsAndRender();

$output284 .= '
										';
return $output284;
};
$viewHelper295 = $self->getViewHelper('$viewHelper295', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper295->setArguments($arguments282);
$viewHelper295->setRenderingContext($renderingContext);
$viewHelper295->setRenderChildrenClosure($renderChildrenClosure283);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output274 .= $viewHelper295->initializeArgumentsAndRender();

$output274 .= '
									';
return $output274;
};
$arguments272['__thenClosure'] = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
											<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments297 = array();
$arguments297['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'subcategory.label', $renderingContext);
$arguments297['keepQuotes'] = false;
$arguments297['encoding'] = NULL;
$arguments297['doubleEncode'] = true;
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$value299 = ($arguments297['value'] !== NULL ? $arguments297['value'] : $renderChildrenClosure298());

$output296 .= (!is_string($value299) ? $value299 : htmlspecialchars($value299, ($arguments297['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments297['encoding'] !== NULL ? $arguments297['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments297['doubleEncode']));

$output296 .= '</h3>
										';
return $output296;
};
$arguments272['__elseClosure'] = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments301 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments302 = array();
$arguments302['subject'] = NULL;
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.subcategories', $renderingContext);
};
$viewHelper304 = $self->getViewHelper('$viewHelper304', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper');
$viewHelper304->setArguments($arguments302);
$viewHelper304->setRenderingContext($renderingContext);
$viewHelper304->setRenderChildrenClosure($renderChildrenClosure303);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments301['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', $viewHelper304->initializeArgumentsAndRender(), 1);
$arguments301['then'] = NULL;
$arguments301['else'] = NULL;
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
$output306 = '';

$output306 .= '
												<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments307 = array();
$arguments307['key'] = 'extConfTemplate.other';
$arguments307['id'] = NULL;
$arguments307['default'] = NULL;
$arguments307['htmlEscape'] = NULL;
$arguments307['arguments'] = NULL;
$arguments307['extensionName'] = NULL;
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper309 = $self->getViewHelper('$viewHelper309', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper309->setArguments($arguments307);
$viewHelper309->setRenderingContext($renderingContext);
$viewHelper309->setRenderChildrenClosure($renderChildrenClosure308);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output306 .= $viewHelper309->initializeArgumentsAndRender();

$output306 .= '</h3>
											';
return $output306;
};
$viewHelper310 = $self->getViewHelper('$viewHelper310', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper310->setArguments($arguments301);
$viewHelper310->setRenderingContext($renderingContext);
$viewHelper310->setRenderChildrenClosure($renderChildrenClosure305);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output300 .= $viewHelper310->initializeArgumentsAndRender();

$output300 .= '
										';
return $output300;
};
$viewHelper311 = $self->getViewHelper('$viewHelper311', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper311->setArguments($arguments272);
$viewHelper311->setRenderingContext($renderingContext);
$viewHelper311->setRenderChildrenClosure($renderChildrenClosure273);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output271 .= $viewHelper311->initializeArgumentsAndRender();

$output271 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments312 = array();
$arguments312['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'subcategory.items', $renderingContext);
$arguments312['as'] = 'item';
$arguments312['key'] = '';
$arguments312['reverse'] = false;
$arguments312['iteration'] = NULL;
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
										<div class="group">
											<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments315 = array();
$arguments315['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.labelHeadline', $renderingContext);
$arguments315['keepQuotes'] = false;
$arguments315['encoding'] = NULL;
$arguments315['doubleEncode'] = true;
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$value317 = ($arguments315['value'] !== NULL ? $arguments315['value'] : $renderChildrenClosure316());

$output314 .= (!is_string($value317) ? $value317 : htmlspecialchars($value317, ($arguments315['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments315['encoding'] !== NULL ? $arguments315['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments315['doubleEncode']));

$output314 .= ' <span class="info">[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments318 = array();
$arguments318['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.name', $renderingContext);
$arguments318['keepQuotes'] = false;
$arguments318['encoding'] = NULL;
$arguments318['doubleEncode'] = true;
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$value320 = ($arguments318['value'] !== NULL ? $arguments318['value'] : $renderChildrenClosure319());

$output314 .= (!is_string($value320) ? $value320 : htmlspecialchars($value320, ($arguments318['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments318['encoding'] !== NULL ? $arguments318['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments318['doubleEncode']));

$output314 .= '.';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments321 = array();
$arguments321['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.name', $renderingContext);
$arguments321['keepQuotes'] = false;
$arguments321['encoding'] = NULL;
$arguments321['doubleEncode'] = true;
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$value323 = ($arguments321['value'] !== NULL ? $arguments321['value'] : $renderChildrenClosure322());

$output314 .= (!is_string($value323) ? $value323 : htmlspecialchars($value323, ($arguments321['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments321['encoding'] !== NULL ? $arguments321['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments321['doubleEncode']));

$output314 .= ']</span></h4>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments324 = array();
// Rendering Boolean node
$arguments324['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.labelText', $renderingContext));
$arguments324['then'] = NULL;
$arguments324['else'] = NULL;
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$output326 = '';

$output326 .= '
												<label for="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments327 = array();
$arguments327['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.name', $renderingContext);
$arguments327['keepQuotes'] = false;
$arguments327['encoding'] = NULL;
$arguments327['doubleEncode'] = true;
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
return NULL;
};
$value329 = ($arguments327['value'] !== NULL ? $arguments327['value'] : $renderChildrenClosure328());

$output326 .= (!is_string($value329) ? $value329 : htmlspecialchars($value329, ($arguments327['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments327['encoding'] !== NULL ? $arguments327['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments327['doubleEncode']));

$output326 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments330 = array();
$arguments330['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.labelText', $renderingContext);
$arguments330['keepQuotes'] = false;
$arguments330['encoding'] = NULL;
$arguments330['doubleEncode'] = true;
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
return NULL;
};
$value332 = ($arguments330['value'] !== NULL ? $arguments330['value'] : $renderChildrenClosure331());

$output326 .= (!is_string($value332) ? $value332 : htmlspecialchars($value332, ($arguments330['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments330['encoding'] !== NULL ? $arguments330['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments330['doubleEncode']));

$output326 .= '</label>
											';
return $output326;
};
$viewHelper333 = $self->getViewHelper('$viewHelper333', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper333->setArguments($arguments324);
$viewHelper333->setRenderingContext($renderingContext);
$viewHelper333->setRenderChildrenClosure($renderChildrenClosure325);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output314 .= $viewHelper333->initializeArgumentsAndRender();

$output314 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments334 = array();
// Rendering Boolean node
$arguments334['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.highlight', $renderingContext));
$arguments334['then'] = NULL;
$arguments334['else'] = NULL;
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
$output336 = '';

$output336 .= '
												<span style="background:red; padding:1px 2px; color:#fff; font-weight:bold;">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments337 = array();
$arguments337['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.highlight', $renderingContext);
$arguments337['keepQuotes'] = false;
$arguments337['encoding'] = NULL;
$arguments337['doubleEncode'] = true;
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
return NULL;
};
$value339 = ($arguments337['value'] !== NULL ? $arguments337['value'] : $renderChildrenClosure338());

$output336 .= (!is_string($value339) ? $value339 : htmlspecialchars($value339, ($arguments337['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments337['encoding'] !== NULL ? $arguments337['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments337['doubleEncode']));

$output336 .= '</span>
											';
return $output336;
};
$viewHelper340 = $self->getViewHelper('$viewHelper340', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper340->setArguments($arguments334);
$viewHelper340->setRenderingContext($renderingContext);
$viewHelper340->setRenderChildrenClosure($renderChildrenClosure335);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output314 .= $viewHelper340->initializeArgumentsAndRender();

$output314 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper
$arguments341 = array();
$arguments341['configuration'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item', $renderingContext);
$arguments341['additionalAttributes'] = NULL;
$arguments341['name'] = NULL;
$arguments341['value'] = NULL;
$arguments341['class'] = NULL;
$arguments341['dir'] = NULL;
$arguments341['id'] = NULL;
$arguments341['lang'] = NULL;
$arguments341['style'] = NULL;
$arguments341['title'] = NULL;
$arguments341['accesskey'] = NULL;
$arguments341['tabindex'] = NULL;
$arguments341['onclick'] = NULL;
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper343 = $self->getViewHelper('$viewHelper343', $renderingContext, 'TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper');
$viewHelper343->setArguments($arguments341);
$viewHelper343->setRenderingContext($renderingContext);
$viewHelper343->setRenderChildrenClosure($renderChildrenClosure342);
// End of ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Form\TypoScriptConstantsViewHelper

$output314 .= $viewHelper343->initializeArgumentsAndRender();

$output314 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments344 = array();
// Rendering Boolean node
$arguments344['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.type', $renderingContext), 'user');
$arguments344['then'] = NULL;
$arguments344['else'] = NULL;
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$output346 = '';

$output346 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments347 = array();
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$output349 = '';

$output349 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments350 = array();
// Rendering Array
$array351 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments352 = array();
$output353 = '';

$output353 .= 'extConfTemplate.type.';

$output353 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.type', $renderingContext);
$arguments352['key'] = $output353;
$arguments352['id'] = NULL;
$arguments352['default'] = NULL;
$arguments352['htmlEscape'] = NULL;
$arguments352['arguments'] = NULL;
$arguments352['extensionName'] = NULL;
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper355 = $self->getViewHelper('$viewHelper355', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper355->setArguments($arguments352);
$viewHelper355->setRenderingContext($renderingContext);
$viewHelper355->setRenderChildrenClosure($renderChildrenClosure354);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$array351['label'] = $viewHelper355->initializeArgumentsAndRender();
$arguments350['map'] = $array351;
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
$output357 = '';

$output357 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments358 = array();
// Rendering Boolean node
$arguments358['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'label', $renderingContext));
$arguments358['then'] = NULL;
$arguments358['else'] = NULL;
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$output360 = '';

$output360 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments361 = array();
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
																<span class="info">(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments364 = array();
$arguments364['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'label', $renderingContext);
$arguments364['keepQuotes'] = false;
$arguments364['encoding'] = NULL;
$arguments364['doubleEncode'] = true;
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$value366 = ($arguments364['value'] !== NULL ? $arguments364['value'] : $renderChildrenClosure365());

$output363 .= (!is_string($value366) ? $value366 : htmlspecialchars($value366, ($arguments364['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments364['encoding'] !== NULL ? $arguments364['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments364['doubleEncode']));

$output363 .= ')</span>
															';
return $output363;
};
$viewHelper367 = $self->getViewHelper('$viewHelper367', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper367->setArguments($arguments361);
$viewHelper367->setRenderingContext($renderingContext);
$viewHelper367->setRenderChildrenClosure($renderChildrenClosure362);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output360 .= $viewHelper367->initializeArgumentsAndRender();

$output360 .= '
														';
return $output360;
};
$arguments358['__thenClosure'] = function() use ($renderingContext, $self) {
$output368 = '';

$output368 .= '
																<span class="info">(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments369 = array();
$arguments369['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'label', $renderingContext);
$arguments369['keepQuotes'] = false;
$arguments369['encoding'] = NULL;
$arguments369['doubleEncode'] = true;
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$value371 = ($arguments369['value'] !== NULL ? $arguments369['value'] : $renderChildrenClosure370());

$output368 .= (!is_string($value371) ? $value371 : htmlspecialchars($value371, ($arguments369['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments369['encoding'] !== NULL ? $arguments369['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments369['doubleEncode']));

$output368 .= ')</span>
															';
return $output368;
};
$viewHelper372 = $self->getViewHelper('$viewHelper372', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper372->setArguments($arguments358);
$viewHelper372->setRenderingContext($renderingContext);
$viewHelper372->setRenderChildrenClosure($renderChildrenClosure359);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output357 .= $viewHelper372->initializeArgumentsAndRender();

$output357 .= '
													';
return $output357;
};
$viewHelper373 = $self->getViewHelper('$viewHelper373', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper');
$viewHelper373->setArguments($arguments350);
$viewHelper373->setRenderingContext($renderingContext);
$viewHelper373->setRenderChildrenClosure($renderChildrenClosure356);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper

$output349 .= $viewHelper373->initializeArgumentsAndRender();

$output349 .= '
												';
return $output349;
};
$viewHelper374 = $self->getViewHelper('$viewHelper374', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper374->setArguments($arguments347);
$viewHelper374->setRenderingContext($renderingContext);
$viewHelper374->setRenderChildrenClosure($renderChildrenClosure348);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output346 .= $viewHelper374->initializeArgumentsAndRender();

$output346 .= '
											';
return $output346;
};
$arguments344['__thenClosure'] = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper
$arguments376 = array();
// Rendering Array
$array377 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments378 = array();
$output379 = '';

$output379 .= 'extConfTemplate.type.';

$output379 .= TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item.type', $renderingContext);
$arguments378['key'] = $output379;
$arguments378['id'] = NULL;
$arguments378['default'] = NULL;
$arguments378['htmlEscape'] = NULL;
$arguments378['arguments'] = NULL;
$arguments378['extensionName'] = NULL;
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper381 = $self->getViewHelper('$viewHelper381', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper381->setArguments($arguments378);
$viewHelper381->setRenderingContext($renderingContext);
$viewHelper381->setRenderChildrenClosure($renderChildrenClosure380);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$array377['label'] = $viewHelper381->initializeArgumentsAndRender();
$arguments376['map'] = $array377;
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
$output383 = '';

$output383 .= '
														';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments384 = array();
// Rendering Boolean node
$arguments384['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'label', $renderingContext));
$arguments384['then'] = NULL;
$arguments384['else'] = NULL;
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
$output386 = '';

$output386 .= '
															';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments387 = array();
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$output389 = '';

$output389 .= '
																<span class="info">(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments390 = array();
$arguments390['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'label', $renderingContext);
$arguments390['keepQuotes'] = false;
$arguments390['encoding'] = NULL;
$arguments390['doubleEncode'] = true;
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return NULL;
};
$value392 = ($arguments390['value'] !== NULL ? $arguments390['value'] : $renderChildrenClosure391());

$output389 .= (!is_string($value392) ? $value392 : htmlspecialchars($value392, ($arguments390['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments390['encoding'] !== NULL ? $arguments390['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments390['doubleEncode']));

$output389 .= ')</span>
															';
return $output389;
};
$viewHelper393 = $self->getViewHelper('$viewHelper393', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper393->setArguments($arguments387);
$viewHelper393->setRenderingContext($renderingContext);
$viewHelper393->setRenderChildrenClosure($renderChildrenClosure388);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output386 .= $viewHelper393->initializeArgumentsAndRender();

$output386 .= '
														';
return $output386;
};
$arguments384['__thenClosure'] = function() use ($renderingContext, $self) {
$output394 = '';

$output394 .= '
																<span class="info">(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments395 = array();
$arguments395['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'label', $renderingContext);
$arguments395['keepQuotes'] = false;
$arguments395['encoding'] = NULL;
$arguments395['doubleEncode'] = true;
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
return NULL;
};
$value397 = ($arguments395['value'] !== NULL ? $arguments395['value'] : $renderChildrenClosure396());

$output394 .= (!is_string($value397) ? $value397 : htmlspecialchars($value397, ($arguments395['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments395['encoding'] !== NULL ? $arguments395['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments395['doubleEncode']));

$output394 .= ')</span>
															';
return $output394;
};
$viewHelper398 = $self->getViewHelper('$viewHelper398', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper398->setArguments($arguments384);
$viewHelper398->setRenderingContext($renderingContext);
$viewHelper398->setRenderChildrenClosure($renderChildrenClosure385);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output383 .= $viewHelper398->initializeArgumentsAndRender();

$output383 .= '
													';
return $output383;
};
$viewHelper399 = $self->getViewHelper('$viewHelper399', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper');
$viewHelper399->setArguments($arguments376);
$viewHelper399->setRenderingContext($renderingContext);
$viewHelper399->setRenderChildrenClosure($renderChildrenClosure382);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\AliasViewHelper

$output375 .= $viewHelper399->initializeArgumentsAndRender();

$output375 .= '
												';
return $output375;
};
$viewHelper400 = $self->getViewHelper('$viewHelper400', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper400->setArguments($arguments344);
$viewHelper400->setRenderingContext($renderingContext);
$viewHelper400->setRenderChildrenClosure($renderChildrenClosure345);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output314 .= $viewHelper400->initializeArgumentsAndRender();

$output314 .= '
										</div>
									';
return $output314;
};

$output271 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output271 .= '
								</div>
							';
return $output271;
};

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output265 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments401 = array();
// Rendering Boolean node
$arguments401['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.highlightText', $renderingContext));
$arguments401['then'] = NULL;
$arguments401['else'] = NULL;
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
$output403 = '';

$output403 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments404 = array();
$arguments404['value'] = NULL;
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.highlightText', $renderingContext);
};
$viewHelper406 = $self->getViewHelper('$viewHelper406', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper');
$viewHelper406->setArguments($arguments404);
$viewHelper406->setRenderingContext($renderingContext);
$viewHelper406->setRenderChildrenClosure($renderChildrenClosure405);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper

$output403 .= $viewHelper406->initializeArgumentsAndRender();

$output403 .= '
							';
return $output403;
};
$viewHelper407 = $self->getViewHelper('$viewHelper407', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper407->setArguments($arguments401);
$viewHelper407->setRenderingContext($renderingContext);
$viewHelper407->setRenderChildrenClosure($renderChildrenClosure402);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output265 .= $viewHelper407->initializeArgumentsAndRender();

$output265 .= '
						</div>
					';
return $output265;
};
$viewHelper408 = $self->getViewHelper('$viewHelper408', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper408->setArguments($arguments263);
$viewHelper408->setRenderingContext($renderingContext);
$viewHelper408->setRenderChildrenClosure($renderChildrenClosure264);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output262 .= $viewHelper408->initializeArgumentsAndRender();

$output262 .= '
				';
return $output262;
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output256 .= '
			';
return $output256;
};
$viewHelper409 = $self->getViewHelper('$viewHelper409', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper409->setArguments($arguments254);
$viewHelper409->setRenderingContext($renderingContext);
$viewHelper409->setRenderChildrenClosure($renderChildrenClosure255);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output240 .= $viewHelper409->initializeArgumentsAndRender();

$output240 .= '
		</div>
	</div>
';
return $output240;
};

$output200 .= '';

$output200 .= '
';

return $output200;
}


}
#1437401887    109033    