<?php
class FluidCache_GoMapsExt_Map_partial_Map_Assign_859c4e260f29c724e6f1977edb43585d7a76d0bf extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

';
// Rendering ViewHelper Clickstorm\GoMapsExt\ViewHelpers\ScriptViewHelper
$arguments1 = array();
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
(function ($, window, document, undefined) {
   $(function () {
    var gme = new Object();

    gme.zoomTypes = new Array(google.maps.ZoomControlStyle.DEFAULT,
                    google.maps.ZoomControlStyle.SMALL,
                    google.maps.ZoomControlStyle.LARGE);
    gme.defaultMapTypes = new Array(google.maps.MapTypeId.ROADMAP,
                    google.maps.MapTypeId.SATELLITE,
                    google.maps.MapTypeId.HYBRID,
                    google.maps.MapTypeId.TERRAIN,
                    "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.styledMapName', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = NULL;
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output3 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments4['encoding'] !== NULL ? $arguments4['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments4['doubleEncode']));

$output3 .= '");

    gme.mapSettings = ';

$output3 .= '{';

$output3 .= '
            id: \'gme-\' + ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.uid', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = NULL;
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output3 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments7['encoding'] !== NULL ? $arguments7['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments7['doubleEncode']));

$output3 .= ',
            title: \'';
// Rendering ViewHelper Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper
$arguments10 = array();
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments12 = array();
$arguments12['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.title', $renderingContext);
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = NULL;
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());
return (!is_string($value14) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments12['encoding'] !== NULL ? $arguments12['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments12['doubleEncode']));
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper');
$viewHelper15->setArguments($arguments10);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper

$output3 .= $viewHelper15->initializeArgumentsAndRender();

$output3 .= '\',
            tooltipTitle: \'';
// Rendering ViewHelper Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper
$arguments16 = array();
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.tooltipTitle', $renderingContext);
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = NULL;
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());
return (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments18['encoding'] !== NULL ? $arguments18['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments18['doubleEncode']));
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper');
$viewHelper21->setArguments($arguments16);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper

$output3 .= $viewHelper21->initializeArgumentsAndRender();

$output3 .= '\',
            CSSClass: \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments22 = array();
$arguments22['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.class', $renderingContext);
$arguments22['keepQuotes'] = false;
$arguments22['encoding'] = NULL;
$arguments22['doubleEncode'] = true;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$value24 = ($arguments22['value'] !== NULL ? $arguments22['value'] : $renderChildrenClosure23());

$output3 .= (!is_string($value24) ? $value24 : htmlspecialchars($value24, ($arguments22['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments22['encoding'] !== NULL ? $arguments22['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments22['doubleEncode']));

$output3 .= '\',
            width: \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments25 = array();
$arguments25['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.width', $renderingContext);
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = NULL;
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$value27 = ($arguments25['value'] !== NULL ? $arguments25['value'] : $renderChildrenClosure26());

$output3 .= (!is_string($value27) ? $value27 : htmlspecialchars($value27, ($arguments25['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments25['encoding'] !== NULL ? $arguments25['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments25['doubleEncode']));

$output3 .= '\',
            height: \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments28 = array();
$arguments28['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.height', $renderingContext);
$arguments28['keepQuotes'] = false;
$arguments28['encoding'] = NULL;
$arguments28['doubleEncode'] = true;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$value30 = ($arguments28['value'] !== NULL ? $arguments28['value'] : $renderChildrenClosure29());

$output3 .= (!is_string($value30) ? $value30 : htmlspecialchars($value30, ($arguments28['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments28['encoding'] !== NULL ? $arguments28['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments28['doubleEncode']));

$output3 .= '\',
            zoom: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments31 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.zoom', $renderingContext);
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());
$arguments31['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode'])));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments35 = array();
$arguments35['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.zoom', $renderingContext);
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = NULL;
$arguments35['doubleEncode'] = true;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());
$arguments31['then'] = (!is_string($value37) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments35['encoding'] !== NULL ? $arguments35['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments35['doubleEncode']));
$arguments31['else'] = '0';
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper39->setArguments($arguments31);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper39->initializeArgumentsAndRender();

$output3 .= ',
            minZoom: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments40 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments41 = array();
$arguments41['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.zoomMin', $renderingContext);
$arguments41['keepQuotes'] = false;
$arguments41['encoding'] = NULL;
$arguments41['doubleEncode'] = true;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$value43 = ($arguments41['value'] !== NULL ? $arguments41['value'] : $renderChildrenClosure42());
$arguments40['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value43) ? $value43 : htmlspecialchars($value43, ($arguments41['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments41['encoding'] !== NULL ? $arguments41['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments41['doubleEncode'])));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.zoomMin', $renderingContext);
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = NULL;
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());
$arguments40['then'] = (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments44['encoding'] !== NULL ? $arguments44['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments44['doubleEncode']));
$arguments40['else'] = '0';
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper48->setArguments($arguments40);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper48->initializeArgumentsAndRender();

$output3 .= ',
            maxZoom: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments49 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments50 = array();
$arguments50['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.zoomMax', $renderingContext);
$arguments50['keepQuotes'] = false;
$arguments50['encoding'] = NULL;
$arguments50['doubleEncode'] = true;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$value52 = ($arguments50['value'] !== NULL ? $arguments50['value'] : $renderChildrenClosure51());
$arguments49['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value52) ? $value52 : htmlspecialchars($value52, ($arguments50['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments50['encoding'] !== NULL ? $arguments50['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments50['doubleEncode'])));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments53 = array();
$arguments53['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.zoomMax', $renderingContext);
$arguments53['keepQuotes'] = false;
$arguments53['encoding'] = NULL;
$arguments53['doubleEncode'] = true;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$value55 = ($arguments53['value'] !== NULL ? $arguments53['value'] : $renderChildrenClosure54());
$arguments49['then'] = (!is_string($value55) ? $value55 : htmlspecialchars($value55, ($arguments53['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments53['encoding'] !== NULL ? $arguments53['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments53['doubleEncode']));
$arguments49['else'] = '0';
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper57->setArguments($arguments49);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper57->initializeArgumentsAndRender();

$output3 .= ',
            kmlUrl: \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments58 = array();
$arguments58['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.kmlUrl', $renderingContext);
$arguments58['keepQuotes'] = false;
$arguments58['encoding'] = NULL;
$arguments58['doubleEncode'] = true;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$value60 = ($arguments58['value'] !== NULL ? $arguments58['value'] : $renderChildrenClosure59());

$output3 .= (!is_string($value60) ? $value60 : htmlspecialchars($value60, ($arguments58['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments58['encoding'] !== NULL ? $arguments58['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments58['doubleEncode']));

$output3 .= '\',
            kmlPreserveViewport: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments61 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.kmlPreserveViewport', $renderingContext);
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = NULL;
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());
$arguments61['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value64) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments62['encoding'] !== NULL ? $arguments62['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments62['doubleEncode'])));
$arguments61['then'] = 'true';
$arguments61['else'] = 'false';
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper66->setArguments($arguments61);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper66->initializeArgumentsAndRender();

$output3 .= ',
            kmlLocal: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments67 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.kmlLocal', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = NULL;
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());
$arguments67['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments68['encoding'] !== NULL ? $arguments68['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments68['doubleEncode'])));
$arguments67['then'] = '1';
$arguments67['else'] = '0';
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper72->setArguments($arguments67);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper72->initializeArgumentsAndRender();

$output3 .= ',
            scrollZoom: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments73 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.scrollZoom', $renderingContext);
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = NULL;
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());
$arguments73['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value76) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments74['encoding'] !== NULL ? $arguments74['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments74['doubleEncode'])));
$arguments73['then'] = '1';
$arguments73['else'] = '0';
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper78->setArguments($arguments73);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper78->initializeArgumentsAndRender();

$output3 .= ',
            draggable: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments79 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments80 = array();
$arguments80['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.draggable', $renderingContext);
$arguments80['keepQuotes'] = false;
$arguments80['encoding'] = NULL;
$arguments80['doubleEncode'] = true;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$value82 = ($arguments80['value'] !== NULL ? $arguments80['value'] : $renderChildrenClosure81());
$arguments79['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value82) ? $value82 : htmlspecialchars($value82, ($arguments80['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments80['encoding'] !== NULL ? $arguments80['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments80['doubleEncode'])));
$arguments79['then'] = '1';
$arguments79['else'] = '0';
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper84->setArguments($arguments79);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure83);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper84->initializeArgumentsAndRender();

$output3 .= ',
            doubleClickZoom: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments85 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments86 = array();
$arguments86['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.doubleClickZoom', $renderingContext);
$arguments86['keepQuotes'] = false;
$arguments86['encoding'] = NULL;
$arguments86['doubleEncode'] = true;
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$value88 = ($arguments86['value'] !== NULL ? $arguments86['value'] : $renderChildrenClosure87());
$arguments85['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value88) ? $value88 : htmlspecialchars($value88, ($arguments86['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments86['encoding'] !== NULL ? $arguments86['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments86['doubleEncode'])));
$arguments85['then'] = '0';
$arguments85['else'] = '1';
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper90 = $self->getViewHelper('$viewHelper90', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper90->setArguments($arguments85);
$viewHelper90->setRenderingContext($renderingContext);
$viewHelper90->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper90->initializeArgumentsAndRender();

$output3 .= ',
            markerCluster: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments91 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments92 = array();
$arguments92['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.markerCluster', $renderingContext);
$arguments92['keepQuotes'] = false;
$arguments92['encoding'] = NULL;
$arguments92['doubleEncode'] = true;
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$value94 = ($arguments92['value'] !== NULL ? $arguments92['value'] : $renderChildrenClosure93());
$arguments91['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value94) ? $value94 : htmlspecialchars($value94, ($arguments92['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments92['encoding'] !== NULL ? $arguments92['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments92['doubleEncode'])));
$arguments91['then'] = '1';
$arguments91['else'] = '0';
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper96 = $self->getViewHelper('$viewHelper96', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper96->setArguments($arguments91);
$viewHelper96->setRenderingContext($renderingContext);
$viewHelper96->setRenderChildrenClosure($renderChildrenClosure95);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper96->initializeArgumentsAndRender();

$output3 .= ',
            markerClusterZoom: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments97 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments98 = array();
$arguments98['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.markerClusterZoom', $renderingContext);
$arguments98['keepQuotes'] = false;
$arguments98['encoding'] = NULL;
$arguments98['doubleEncode'] = true;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$value100 = ($arguments98['value'] !== NULL ? $arguments98['value'] : $renderChildrenClosure99());
$arguments97['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', (!is_string($value100) ? $value100 : htmlspecialchars($value100, ($arguments98['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments98['encoding'] !== NULL ? $arguments98['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments98['doubleEncode'])), 0);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments101 = array();
$arguments101['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.markerClusterZoom', $renderingContext);
$arguments101['keepQuotes'] = false;
$arguments101['encoding'] = NULL;
$arguments101['doubleEncode'] = true;
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$value103 = ($arguments101['value'] !== NULL ? $arguments101['value'] : $renderChildrenClosure102());
$arguments97['then'] = (!is_string($value103) ? $value103 : htmlspecialchars($value103, ($arguments101['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments101['encoding'] !== NULL ? $arguments101['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments101['doubleEncode']));
$arguments97['else'] = 'null';
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper105 = $self->getViewHelper('$viewHelper105', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper105->setArguments($arguments97);
$viewHelper105->setRenderingContext($renderingContext);
$viewHelper105->setRenderChildrenClosure($renderChildrenClosure104);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper105->initializeArgumentsAndRender();

$output3 .= ',
            markerClusterSize: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments106 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments107 = array();
$arguments107['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.markerClusterSize', $renderingContext);
$arguments107['keepQuotes'] = false;
$arguments107['encoding'] = NULL;
$arguments107['doubleEncode'] = true;
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$value109 = ($arguments107['value'] !== NULL ? $arguments107['value'] : $renderChildrenClosure108());
$arguments106['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', (!is_string($value109) ? $value109 : htmlspecialchars($value109, ($arguments107['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments107['encoding'] !== NULL ? $arguments107['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments107['doubleEncode'])), 0);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments110 = array();
$arguments110['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.markerClusterSize', $renderingContext);
$arguments110['keepQuotes'] = false;
$arguments110['encoding'] = NULL;
$arguments110['doubleEncode'] = true;
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$value112 = ($arguments110['value'] !== NULL ? $arguments110['value'] : $renderChildrenClosure111());
$arguments106['then'] = (!is_string($value112) ? $value112 : htmlspecialchars($value112, ($arguments110['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments110['encoding'] !== NULL ? $arguments110['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments110['doubleEncode']));
$arguments106['else'] = 'null';
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper114->setArguments($arguments106);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure113);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper114->initializeArgumentsAndRender();

$output3 .= ',
            markerSearch: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments115 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments116 = array();
$arguments116['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.markerSearch', $renderingContext);
$arguments116['keepQuotes'] = false;
$arguments116['encoding'] = NULL;
$arguments116['doubleEncode'] = true;
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$value118 = ($arguments116['value'] !== NULL ? $arguments116['value'] : $renderChildrenClosure117());
$arguments115['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value118) ? $value118 : htmlspecialchars($value118, ($arguments116['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments116['encoding'] !== NULL ? $arguments116['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments116['doubleEncode'])));
$arguments115['then'] = '1';
$arguments115['else'] = '0';
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper120 = $self->getViewHelper('$viewHelper120', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper120->setArguments($arguments115);
$viewHelper120->setRenderingContext($renderingContext);
$viewHelper120->setRenderChildrenClosure($renderChildrenClosure119);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper120->initializeArgumentsAndRender();

$output3 .= ',
            defaultType: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments121 = array();
$arguments121['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.defaultType', $renderingContext);
$arguments121['keepQuotes'] = false;
$arguments121['encoding'] = NULL;
$arguments121['doubleEncode'] = true;
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$value123 = ($arguments121['value'] !== NULL ? $arguments121['value'] : $renderChildrenClosure122());

$output3 .= (!is_string($value123) ? $value123 : htmlspecialchars($value123, ($arguments121['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments121['encoding'] !== NULL ? $arguments121['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments121['doubleEncode']));

$output3 .= ',
            panControl: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments124 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments125 = array();
$arguments125['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.panControl', $renderingContext);
$arguments125['keepQuotes'] = false;
$arguments125['encoding'] = NULL;
$arguments125['doubleEncode'] = true;
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$value127 = ($arguments125['value'] !== NULL ? $arguments125['value'] : $renderChildrenClosure126());
$arguments124['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value127) ? $value127 : htmlspecialchars($value127, ($arguments125['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments125['encoding'] !== NULL ? $arguments125['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments125['doubleEncode'])));
$arguments124['then'] = '1';
$arguments124['else'] = '0';
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper129 = $self->getViewHelper('$viewHelper129', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper129->setArguments($arguments124);
$viewHelper129->setRenderingContext($renderingContext);
$viewHelper129->setRenderChildrenClosure($renderChildrenClosure128);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper129->initializeArgumentsAndRender();

$output3 .= ',
            scaleControl: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments130 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments131 = array();
$arguments131['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.scaleControl', $renderingContext);
$arguments131['keepQuotes'] = false;
$arguments131['encoding'] = NULL;
$arguments131['doubleEncode'] = true;
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$value133 = ($arguments131['value'] !== NULL ? $arguments131['value'] : $renderChildrenClosure132());
$arguments130['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value133) ? $value133 : htmlspecialchars($value133, ($arguments131['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments131['encoding'] !== NULL ? $arguments131['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments131['doubleEncode'])));
$arguments130['then'] = '1';
$arguments130['else'] = '0';
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper135 = $self->getViewHelper('$viewHelper135', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper135->setArguments($arguments130);
$viewHelper135->setRenderingContext($renderingContext);
$viewHelper135->setRenderChildrenClosure($renderChildrenClosure134);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper135->initializeArgumentsAndRender();

$output3 .= ',
            streetviewControl: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments136 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments137 = array();
$arguments137['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.streetviewControl', $renderingContext);
$arguments137['keepQuotes'] = false;
$arguments137['encoding'] = NULL;
$arguments137['doubleEncode'] = true;
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$value139 = ($arguments137['value'] !== NULL ? $arguments137['value'] : $renderChildrenClosure138());
$arguments136['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value139) ? $value139 : htmlspecialchars($value139, ($arguments137['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments137['encoding'] !== NULL ? $arguments137['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments137['doubleEncode'])));
$arguments136['then'] = '1';
$arguments136['else'] = '0';
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper141 = $self->getViewHelper('$viewHelper141', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper141->setArguments($arguments136);
$viewHelper141->setRenderingContext($renderingContext);
$viewHelper141->setRenderChildrenClosure($renderChildrenClosure140);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper141->initializeArgumentsAndRender();

$output3 .= ',
            zoomControl: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments142 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments143 = array();
$arguments143['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.zoomControl', $renderingContext);
$arguments143['keepQuotes'] = false;
$arguments143['encoding'] = NULL;
$arguments143['doubleEncode'] = true;
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$value145 = ($arguments143['value'] !== NULL ? $arguments143['value'] : $renderChildrenClosure144());
$arguments142['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value145) ? $value145 : htmlspecialchars($value145, ($arguments143['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments143['encoding'] !== NULL ? $arguments143['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments143['doubleEncode'])));
$arguments142['then'] = '1';
$arguments142['else'] = '0';
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper147 = $self->getViewHelper('$viewHelper147', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper147->setArguments($arguments142);
$viewHelper147->setRenderingContext($renderingContext);
$viewHelper147->setRenderChildrenClosure($renderChildrenClosure146);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper147->initializeArgumentsAndRender();

$output3 .= ',
            zoomControlType: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments148 = array();
$arguments148['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.zoomControlType', $renderingContext);
$arguments148['keepQuotes'] = false;
$arguments148['encoding'] = NULL;
$arguments148['doubleEncode'] = true;
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$value150 = ($arguments148['value'] !== NULL ? $arguments148['value'] : $renderChildrenClosure149());

$output3 .= (!is_string($value150) ? $value150 : htmlspecialchars($value150, ($arguments148['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments148['encoding'] !== NULL ? $arguments148['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments148['doubleEncode']));

$output3 .= ',
            mapTypeControl: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments151 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments152 = array();
$arguments152['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.mapTypeControl', $renderingContext);
$arguments152['keepQuotes'] = false;
$arguments152['encoding'] = NULL;
$arguments152['doubleEncode'] = true;
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$value154 = ($arguments152['value'] !== NULL ? $arguments152['value'] : $renderChildrenClosure153());
$arguments151['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value154) ? $value154 : htmlspecialchars($value154, ($arguments152['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments152['encoding'] !== NULL ? $arguments152['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments152['doubleEncode'])));
$arguments151['then'] = '1';
$arguments151['else'] = '0';
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper156 = $self->getViewHelper('$viewHelper156', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper156->setArguments($arguments151);
$viewHelper156->setRenderingContext($renderingContext);
$viewHelper156->setRenderChildrenClosure($renderChildrenClosure155);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper156->initializeArgumentsAndRender();

$output3 .= ',
            showRoute: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments157 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments158 = array();
$arguments158['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.showRoute', $renderingContext);
$arguments158['keepQuotes'] = false;
$arguments158['encoding'] = NULL;
$arguments158['doubleEncode'] = true;
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$value160 = ($arguments158['value'] !== NULL ? $arguments158['value'] : $renderChildrenClosure159());
$arguments157['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value160) ? $value160 : htmlspecialchars($value160, ($arguments158['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments158['encoding'] !== NULL ? $arguments158['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments158['doubleEncode'])));
$arguments157['then'] = '1';
$arguments157['else'] = '0';
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper162 = $self->getViewHelper('$viewHelper162', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper162->setArguments($arguments157);
$viewHelper162->setRenderingContext($renderingContext);
$viewHelper162->setRenderChildrenClosure($renderChildrenClosure161);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper162->initializeArgumentsAndRender();

$output3 .= ',
            calcRoute: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments163 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments164 = array();
$arguments164['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.calcRoute', $renderingContext);
$arguments164['keepQuotes'] = false;
$arguments164['encoding'] = NULL;
$arguments164['doubleEncode'] = true;
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$value166 = ($arguments164['value'] !== NULL ? $arguments164['value'] : $renderChildrenClosure165());
$arguments163['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value166) ? $value166 : htmlspecialchars($value166, ($arguments164['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments164['encoding'] !== NULL ? $arguments164['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments164['doubleEncode'])));
$arguments163['then'] = '1';
$arguments163['else'] = '0';
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper168 = $self->getViewHelper('$viewHelper168', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper168->setArguments($arguments163);
$viewHelper168->setRenderingContext($renderingContext);
$viewHelper168->setRenderChildrenClosure($renderChildrenClosure167);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper168->initializeArgumentsAndRender();

$output3 .= ',
            travelMode: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments169 = array();
$arguments169['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.travelMode', $renderingContext);
$arguments169['keepQuotes'] = false;
$arguments169['encoding'] = NULL;
$arguments169['doubleEncode'] = true;
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$value171 = ($arguments169['value'] !== NULL ? $arguments169['value'] : $renderChildrenClosure170());

$output3 .= (!is_string($value171) ? $value171 : htmlspecialchars($value171, ($arguments169['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments169['encoding'] !== NULL ? $arguments169['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments169['doubleEncode']));

$output3 .= ',
            unitSystem: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments172 = array();
$arguments172['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.unitSystem', $renderingContext);
$arguments172['keepQuotes'] = false;
$arguments172['encoding'] = NULL;
$arguments172['doubleEncode'] = true;
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$value174 = ($arguments172['value'] !== NULL ? $arguments172['value'] : $renderChildrenClosure173());

$output3 .= (!is_string($value174) ? $value174 : htmlspecialchars($value174, ($arguments172['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments172['encoding'] !== NULL ? $arguments172['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments172['doubleEncode']));

$output3 .= ',
            showForm: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments175 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments176 = array();
$arguments176['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.showForm', $renderingContext);
$arguments176['keepQuotes'] = false;
$arguments176['encoding'] = NULL;
$arguments176['doubleEncode'] = true;
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$value178 = ($arguments176['value'] !== NULL ? $arguments176['value'] : $renderChildrenClosure177());
$arguments175['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value178) ? $value178 : htmlspecialchars($value178, ($arguments176['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments176['encoding'] !== NULL ? $arguments176['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments176['doubleEncode'])));
$arguments175['then'] = '1';
$arguments175['else'] = '0';
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper180 = $self->getViewHelper('$viewHelper180', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper180->setArguments($arguments175);
$viewHelper180->setRenderingContext($renderingContext);
$viewHelper180->setRenderChildrenClosure($renderChildrenClosure179);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper180->initializeArgumentsAndRender();

$output3 .= ',
            showCategories: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments181 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments182 = array();
$arguments182['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.showCategories', $renderingContext);
$arguments182['keepQuotes'] = false;
$arguments182['encoding'] = NULL;
$arguments182['doubleEncode'] = true;
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$value184 = ($arguments182['value'] !== NULL ? $arguments182['value'] : $renderChildrenClosure183());
$arguments181['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value184) ? $value184 : htmlspecialchars($value184, ($arguments182['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments182['encoding'] !== NULL ? $arguments182['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments182['doubleEncode'])));
$arguments181['then'] = '1';
$arguments181['else'] = '0';
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper186 = $self->getViewHelper('$viewHelper186', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper186->setArguments($arguments181);
$viewHelper186->setRenderingContext($renderingContext);
$viewHelper186->setRenderChildrenClosure($renderChildrenClosure185);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper186->initializeArgumentsAndRender();

$output3 .= ',
            styledMapName: \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments187 = array();
$arguments187['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.styledMapName', $renderingContext);
$arguments187['keepQuotes'] = false;
$arguments187['encoding'] = NULL;
$arguments187['doubleEncode'] = true;
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$value189 = ($arguments187['value'] !== NULL ? $arguments187['value'] : $renderChildrenClosure188());

$output3 .= (!is_string($value189) ? $value189 : htmlspecialchars($value189, ($arguments187['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments187['encoding'] !== NULL ? $arguments187['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments187['doubleEncode']));

$output3 .= '\',
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments190 = array();
// Rendering Boolean node
$arguments190['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.styledMapCode', $renderingContext));
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments193 = array();
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
            styledMapCode: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments196 = array();
$arguments196['parseFuncTSPath'] = '';
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.styledMapCode', $renderingContext);
};
$viewHelper198 = $self->getViewHelper('$viewHelper198', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper');
$viewHelper198->setArguments($arguments196);
$viewHelper198->setRenderingContext($renderingContext);
$viewHelper198->setRenderChildrenClosure($renderChildrenClosure197);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper

$output195 .= $viewHelper198->initializeArgumentsAndRender();

$output195 .= ',
                ';
return $output195;
};
$viewHelper199 = $self->getViewHelper('$viewHelper199', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper199->setArguments($arguments193);
$viewHelper199->setRenderingContext($renderingContext);
$viewHelper199->setRenderChildrenClosure($renderChildrenClosure194);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output192 .= $viewHelper199->initializeArgumentsAndRender();

$output192 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments200 = array();
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return '
            styledMapCode: \'\',
                ';
};
$viewHelper202 = $self->getViewHelper('$viewHelper202', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper202->setArguments($arguments200);
$viewHelper202->setRenderingContext($renderingContext);
$viewHelper202->setRenderChildrenClosure($renderChildrenClosure201);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output192 .= $viewHelper202->initializeArgumentsAndRender();

$output192 .= '
            ';
return $output192;
};
$arguments190['__thenClosure'] = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
            styledMapCode: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments204 = array();
$arguments204['parseFuncTSPath'] = '';
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.styledMapCode', $renderingContext);
};
$viewHelper206 = $self->getViewHelper('$viewHelper206', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper');
$viewHelper206->setArguments($arguments204);
$viewHelper206->setRenderingContext($renderingContext);
$viewHelper206->setRenderChildrenClosure($renderChildrenClosure205);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper

$output203 .= $viewHelper206->initializeArgumentsAndRender();

$output203 .= ',
                ';
return $output203;
};
$arguments190['__elseClosure'] = function() use ($renderingContext, $self) {
return '
            styledMapCode: \'\',
                ';
};
$viewHelper207 = $self->getViewHelper('$viewHelper207', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper207->setArguments($arguments190);
$viewHelper207->setRenderingContext($renderingContext);
$viewHelper207->setRenderChildrenClosure($renderChildrenClosure191);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output3 .= $viewHelper207->initializeArgumentsAndRender();

$output3 .= '
            defaultZoom: 11
    ';

$output3 .= '}';

$output3 .= '

    gme.mapSettings.mapTypes = new Array();
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments208 = array();
$arguments208['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'map.mapTypes', $renderingContext);
$arguments208['as'] = 'type';
$arguments208['iteration'] = 'i';
$arguments208['key'] = '';
$arguments208['reverse'] = false;
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
        gme.mapSettings.mapTypes[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments211 = array();
$arguments211['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'i.index', $renderingContext);
$arguments211['keepQuotes'] = false;
$arguments211['encoding'] = NULL;
$arguments211['doubleEncode'] = true;
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$value213 = ($arguments211['value'] !== NULL ? $arguments211['value'] : $renderChildrenClosure212());

$output210 .= (!is_string($value213) ? $value213 : htmlspecialchars($value213, ($arguments211['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments211['encoding'] !== NULL ? $arguments211['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments211['doubleEncode']));

$output210 .= '] = gme.defaultMapTypes[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments214 = array();
$arguments214['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'type', $renderingContext);
$arguments214['keepQuotes'] = false;
$arguments214['encoding'] = NULL;
$arguments214['doubleEncode'] = true;
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$value216 = ($arguments214['value'] !== NULL ? $arguments214['value'] : $renderChildrenClosure215());

$output210 .= (!is_string($value216) ? $value216 : htmlspecialchars($value216, ($arguments214['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments214['encoding'] !== NULL ? $arguments214['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments214['doubleEncode']));

$output210 .= '];
    ';
return $output210;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output3 .= '

    gme.request = new Array();

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments217 = array();
$arguments217['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'request', $renderingContext);
$arguments217['as'] = 'item';
$arguments217['iteration'] = 'i';
$arguments217['key'] = 'k';
$arguments217['reverse'] = false;
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
    gme.request[\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments220 = array();
$arguments220['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'k', $renderingContext);
$arguments220['keepQuotes'] = false;
$arguments220['encoding'] = NULL;
$arguments220['doubleEncode'] = true;
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$value222 = ($arguments220['value'] !== NULL ? $arguments220['value'] : $renderChildrenClosure221());

$output219 .= (!is_string($value222) ? $value222 : htmlspecialchars($value222, ($arguments220['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments220['encoding'] !== NULL ? $arguments220['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments220['doubleEncode']));

$output219 .= '\'] = \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments223 = array();
$arguments223['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'item', $renderingContext);
$arguments223['keepQuotes'] = false;
$arguments223['encoding'] = NULL;
$arguments223['doubleEncode'] = true;
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$value225 = ($arguments223['value'] !== NULL ? $arguments223['value'] : $renderChildrenClosure224());

$output219 .= (!is_string($value225) ? $value225 : htmlspecialchars($value225, ($arguments223['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments223['encoding'] !== NULL ? $arguments223['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments223['doubleEncode']));

$output219 .= '\';
    ';
return $output219;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output3 .= '

    gme.addresses = new Array();
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments226 = array();
$arguments226['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'addresses', $renderingContext);
$arguments226['as'] = 'address';
$arguments226['iteration'] = 'i';
$arguments226['key'] = '';
$arguments226['reverse'] = false;
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
        gme.addresses[';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments229 = array();
$arguments229['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'i.index', $renderingContext);
$arguments229['keepQuotes'] = false;
$arguments229['encoding'] = NULL;
$arguments229['doubleEncode'] = true;
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$value231 = ($arguments229['value'] !== NULL ? $arguments229['value'] : $renderChildrenClosure230());

$output228 .= (!is_string($value231) ? $value231 : htmlspecialchars($value231, ($arguments229['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments229['encoding'] !== NULL ? $arguments229['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments229['doubleEncode']));

$output228 .= ']  = ';

$output228 .= '{';

$output228 .= '
            title: \'';
// Rendering ViewHelper Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper
$arguments232 = array();
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments234 = array();
$arguments234['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.title', $renderingContext);
$arguments234['keepQuotes'] = false;
$arguments234['encoding'] = NULL;
$arguments234['doubleEncode'] = true;
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$value236 = ($arguments234['value'] !== NULL ? $arguments234['value'] : $renderChildrenClosure235());
return (!is_string($value236) ? $value236 : htmlspecialchars($value236, ($arguments234['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments234['encoding'] !== NULL ? $arguments234['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments234['doubleEncode']));
};
$viewHelper237 = $self->getViewHelper('$viewHelper237', $renderingContext, 'Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper');
$viewHelper237->setArguments($arguments232);
$viewHelper237->setRenderingContext($renderingContext);
$viewHelper237->setRenderChildrenClosure($renderChildrenClosure233);
// End of ViewHelper Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper

$output228 .= $viewHelper237->initializeArgumentsAndRender();

$output228 .= '\',
            latitude: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments238 = array();
$arguments238['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.latitude', $renderingContext);
$arguments238['keepQuotes'] = false;
$arguments238['encoding'] = NULL;
$arguments238['doubleEncode'] = true;
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$value240 = ($arguments238['value'] !== NULL ? $arguments238['value'] : $renderChildrenClosure239());

$output228 .= (!is_string($value240) ? $value240 : htmlspecialchars($value240, ($arguments238['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments238['encoding'] !== NULL ? $arguments238['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments238['doubleEncode']));

$output228 .= ',
            longitude: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments241 = array();
$arguments241['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.longitude', $renderingContext);
$arguments241['keepQuotes'] = false;
$arguments241['encoding'] = NULL;
$arguments241['doubleEncode'] = true;
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$value243 = ($arguments241['value'] !== NULL ? $arguments241['value'] : $renderChildrenClosure242());

$output228 .= (!is_string($value243) ? $value243 : htmlspecialchars($value243, ($arguments241['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments241['encoding'] !== NULL ? $arguments241['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments241['doubleEncode']));

$output228 .= ',
            address: \'';
// Rendering ViewHelper Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper
$arguments244 = array();
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments246 = array();
$arguments246['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.address', $renderingContext);
$arguments246['keepQuotes'] = false;
$arguments246['encoding'] = NULL;
$arguments246['doubleEncode'] = true;
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
return NULL;
};
$value248 = ($arguments246['value'] !== NULL ? $arguments246['value'] : $renderChildrenClosure247());
return (!is_string($value248) ? $value248 : htmlspecialchars($value248, ($arguments246['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments246['encoding'] !== NULL ? $arguments246['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments246['doubleEncode']));
};
$viewHelper249 = $self->getViewHelper('$viewHelper249', $renderingContext, 'Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper');
$viewHelper249->setArguments($arguments244);
$viewHelper249->setRenderingContext($renderingContext);
$viewHelper249->setRenderChildrenClosure($renderChildrenClosure245);
// End of ViewHelper Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper

$output228 .= $viewHelper249->initializeArgumentsAndRender();

$output228 .= '\',
            marker: \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments250 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments251 = array();
$arguments251['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.marker', $renderingContext);
$arguments251['keepQuotes'] = false;
$arguments251['encoding'] = NULL;
$arguments251['doubleEncode'] = true;
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$value253 = ($arguments251['value'] !== NULL ? $arguments251['value'] : $renderChildrenClosure252());
$arguments250['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value253) ? $value253 : htmlspecialchars($value253, ($arguments251['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments251['encoding'] !== NULL ? $arguments251['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments251['doubleEncode'])));
$output254 = '';

$output254 .= 'uploads/tx_gomapsext/';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments255 = array();
$arguments255['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.marker', $renderingContext);
$arguments255['keepQuotes'] = false;
$arguments255['encoding'] = NULL;
$arguments255['doubleEncode'] = true;
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$value257 = ($arguments255['value'] !== NULL ? $arguments255['value'] : $renderChildrenClosure256());

$output254 .= (!is_string($value257) ? $value257 : htmlspecialchars($value257, ($arguments255['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments255['encoding'] !== NULL ? $arguments255['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments255['doubleEncode']));
$arguments250['then'] = $output254;
$arguments250['else'] = NULL;
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper259 = $self->getViewHelper('$viewHelper259', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper259->setArguments($arguments250);
$viewHelper259->setRenderingContext($renderingContext);
$viewHelper259->setRenderChildrenClosure($renderChildrenClosure258);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output228 .= $viewHelper259->initializeArgumentsAndRender();

$output228 .= '\',
            imageSize: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments260 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments261 = array();
$arguments261['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.imageSize', $renderingContext);
$arguments261['keepQuotes'] = false;
$arguments261['encoding'] = NULL;
$arguments261['doubleEncode'] = true;
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$value263 = ($arguments261['value'] !== NULL ? $arguments261['value'] : $renderChildrenClosure262());
$arguments260['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value263) ? $value263 : htmlspecialchars($value263, ($arguments261['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments261['encoding'] !== NULL ? $arguments261['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments261['doubleEncode'])));
$arguments260['then'] = '1';
$arguments260['else'] = '0';
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper265 = $self->getViewHelper('$viewHelper265', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper265->setArguments($arguments260);
$viewHelper265->setRenderingContext($renderingContext);
$viewHelper265->setRenderChildrenClosure($renderChildrenClosure264);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output228 .= $viewHelper265->initializeArgumentsAndRender();

$output228 .= ',
            imageWidth: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments266 = array();
$arguments266['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.imageWidth', $renderingContext);
$arguments266['keepQuotes'] = false;
$arguments266['encoding'] = NULL;
$arguments266['doubleEncode'] = true;
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$value268 = ($arguments266['value'] !== NULL ? $arguments266['value'] : $renderChildrenClosure267());

$output228 .= (!is_string($value268) ? $value268 : htmlspecialchars($value268, ($arguments266['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments266['encoding'] !== NULL ? $arguments266['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments266['doubleEncode']));

$output228 .= ',
            imageHeight: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments269 = array();
$arguments269['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.imageHeight', $renderingContext);
$arguments269['keepQuotes'] = false;
$arguments269['encoding'] = NULL;
$arguments269['doubleEncode'] = true;
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$value271 = ($arguments269['value'] !== NULL ? $arguments269['value'] : $renderChildrenClosure270());

$output228 .= (!is_string($value271) ? $value271 : htmlspecialchars($value271, ($arguments269['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments269['encoding'] !== NULL ? $arguments269['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments269['doubleEncode']));

$output228 .= ',
            shadow: \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments272 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments273 = array();
$arguments273['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.shadow', $renderingContext);
$arguments273['keepQuotes'] = false;
$arguments273['encoding'] = NULL;
$arguments273['doubleEncode'] = true;
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$value275 = ($arguments273['value'] !== NULL ? $arguments273['value'] : $renderChildrenClosure274());
$arguments272['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value275) ? $value275 : htmlspecialchars($value275, ($arguments273['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments273['encoding'] !== NULL ? $arguments273['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments273['doubleEncode'])));
$output276 = '';

$output276 .= 'uploads/tx_gomapsext/';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments277 = array();
$arguments277['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.shadow', $renderingContext);
$arguments277['keepQuotes'] = false;
$arguments277['encoding'] = NULL;
$arguments277['doubleEncode'] = true;
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$value279 = ($arguments277['value'] !== NULL ? $arguments277['value'] : $renderChildrenClosure278());

$output276 .= (!is_string($value279) ? $value279 : htmlspecialchars($value279, ($arguments277['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments277['encoding'] !== NULL ? $arguments277['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments277['doubleEncode']));
$arguments272['then'] = $output276;
$arguments272['else'] = NULL;
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper281 = $self->getViewHelper('$viewHelper281', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper281->setArguments($arguments272);
$viewHelper281->setRenderingContext($renderingContext);
$viewHelper281->setRenderChildrenClosure($renderChildrenClosure280);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output228 .= $viewHelper281->initializeArgumentsAndRender();

$output228 .= '\',
            shadowSize: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments282 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments283 = array();
$arguments283['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.shadowSize', $renderingContext);
$arguments283['keepQuotes'] = false;
$arguments283['encoding'] = NULL;
$arguments283['doubleEncode'] = true;
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$value285 = ($arguments283['value'] !== NULL ? $arguments283['value'] : $renderChildrenClosure284());
$arguments282['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value285) ? $value285 : htmlspecialchars($value285, ($arguments283['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments283['encoding'] !== NULL ? $arguments283['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments283['doubleEncode'])));
$arguments282['then'] = '1';
$arguments282['else'] = '0';
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper287 = $self->getViewHelper('$viewHelper287', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper287->setArguments($arguments282);
$viewHelper287->setRenderingContext($renderingContext);
$viewHelper287->setRenderChildrenClosure($renderChildrenClosure286);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output228 .= $viewHelper287->initializeArgumentsAndRender();

$output228 .= ',
            shadowWidth: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments288 = array();
$arguments288['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.shadowWidth', $renderingContext);
$arguments288['keepQuotes'] = false;
$arguments288['encoding'] = NULL;
$arguments288['doubleEncode'] = true;
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$value290 = ($arguments288['value'] !== NULL ? $arguments288['value'] : $renderChildrenClosure289());

$output228 .= (!is_string($value290) ? $value290 : htmlspecialchars($value290, ($arguments288['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments288['encoding'] !== NULL ? $arguments288['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments288['doubleEncode']));

$output228 .= ',
            shadowHeight: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments291 = array();
$arguments291['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.shadowHeight', $renderingContext);
$arguments291['keepQuotes'] = false;
$arguments291['encoding'] = NULL;
$arguments291['doubleEncode'] = true;
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return NULL;
};
$value293 = ($arguments291['value'] !== NULL ? $arguments291['value'] : $renderChildrenClosure292());

$output228 .= (!is_string($value293) ? $value293 : htmlspecialchars($value293, ($arguments291['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments291['encoding'] !== NULL ? $arguments291['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments291['doubleEncode']));

$output228 .= ',
            infoWindowContent: \'';
// Rendering ViewHelper Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper
$arguments294 = array();
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments296 = array();
$arguments296['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.infoWindowContent', $renderingContext);
};
$viewHelper298 = $self->getViewHelper('$viewHelper298', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper');
$viewHelper298->setArguments($arguments296);
$viewHelper298->setRenderingContext($renderingContext);
$viewHelper298->setRenderChildrenClosure($renderChildrenClosure297);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
return $viewHelper298->initializeArgumentsAndRender();
};
$viewHelper299 = $self->getViewHelper('$viewHelper299', $renderingContext, 'Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper');
$viewHelper299->setArguments($arguments294);
$viewHelper299->setRenderingContext($renderingContext);
$viewHelper299->setRenderChildrenClosure($renderChildrenClosure295);
// End of ViewHelper Clickstorm\GoMapsExt\ViewHelpers\EscapeViewHelper

$output228 .= $viewHelper299->initializeArgumentsAndRender();

$output228 .= '\',
            infoWindowLink: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments300 = array();
$arguments300['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.infoWindowLink', $renderingContext);
$arguments300['keepQuotes'] = false;
$arguments300['encoding'] = NULL;
$arguments300['doubleEncode'] = true;
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$value302 = ($arguments300['value'] !== NULL ? $arguments300['value'] : $renderChildrenClosure301());

$output228 .= (!is_string($value302) ? $value302 : htmlspecialchars($value302, ($arguments300['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments300['encoding'] !== NULL ? $arguments300['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments300['doubleEncode']));

$output228 .= ',
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments303 = array();
// Rendering Boolean node
$arguments303['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.openByClick', $renderingContext));
$arguments303['then'] = NULL;
$arguments303['else'] = NULL;
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments306 = array();
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return '
            openByClick: 1,
                ';
};
$viewHelper308 = $self->getViewHelper('$viewHelper308', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper308->setArguments($arguments306);
$viewHelper308->setRenderingContext($renderingContext);
$viewHelper308->setRenderChildrenClosure($renderChildrenClosure307);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output305 .= $viewHelper308->initializeArgumentsAndRender();

$output305 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments309 = array();
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
            openByClick: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments312 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments313 = array();
$arguments313['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.openByClick', $renderingContext);
$arguments313['keepQuotes'] = false;
$arguments313['encoding'] = NULL;
$arguments313['doubleEncode'] = true;
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$value315 = ($arguments313['value'] !== NULL ? $arguments313['value'] : $renderChildrenClosure314());
$arguments312['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value315) ? $value315 : htmlspecialchars($value315, ($arguments313['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments313['encoding'] !== NULL ? $arguments313['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments313['doubleEncode'])));
$arguments312['then'] = '1';
$arguments312['else'] = '0';
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper317 = $self->getViewHelper('$viewHelper317', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper317->setArguments($arguments312);
$viewHelper317->setRenderingContext($renderingContext);
$viewHelper317->setRenderChildrenClosure($renderChildrenClosure316);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output311 .= $viewHelper317->initializeArgumentsAndRender();

$output311 .= ',
                ';
return $output311;
};
$viewHelper318 = $self->getViewHelper('$viewHelper318', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper318->setArguments($arguments309);
$viewHelper318->setRenderingContext($renderingContext);
$viewHelper318->setRenderChildrenClosure($renderChildrenClosure310);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output305 .= $viewHelper318->initializeArgumentsAndRender();

$output305 .= '
            ';
return $output305;
};
$arguments303['__thenClosure'] = function() use ($renderingContext, $self) {
return '
            openByClick: 1,
                ';
};
$arguments303['__elseClosure'] = function() use ($renderingContext, $self) {
$output319 = '';

$output319 .= '
            openByClick: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments320 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments321 = array();
$arguments321['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.openByClick', $renderingContext);
$arguments321['keepQuotes'] = false;
$arguments321['encoding'] = NULL;
$arguments321['doubleEncode'] = true;
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$value323 = ($arguments321['value'] !== NULL ? $arguments321['value'] : $renderChildrenClosure322());
$arguments320['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value323) ? $value323 : htmlspecialchars($value323, ($arguments321['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments321['encoding'] !== NULL ? $arguments321['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments321['doubleEncode'])));
$arguments320['then'] = '1';
$arguments320['else'] = '0';
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper325 = $self->getViewHelper('$viewHelper325', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper325->setArguments($arguments320);
$viewHelper325->setRenderingContext($renderingContext);
$viewHelper325->setRenderChildrenClosure($renderChildrenClosure324);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output319 .= $viewHelper325->initializeArgumentsAndRender();

$output319 .= ',
                ';
return $output319;
};
$viewHelper326 = $self->getViewHelper('$viewHelper326', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper326->setArguments($arguments303);
$viewHelper326->setRenderingContext($renderingContext);
$viewHelper326->setRenderChildrenClosure($renderChildrenClosure304);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output228 .= $viewHelper326->initializeArgumentsAndRender();

$output228 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments327 = array();
// Rendering Boolean node
$arguments327['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.closeByClick', $renderingContext));
$arguments327['then'] = NULL;
$arguments327['else'] = NULL;
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
$output329 = '';

$output329 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments330 = array();
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
return '
            closeByClick: 1,
                ';
};
$viewHelper332 = $self->getViewHelper('$viewHelper332', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper332->setArguments($arguments330);
$viewHelper332->setRenderingContext($renderingContext);
$viewHelper332->setRenderChildrenClosure($renderChildrenClosure331);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper

$output329 .= $viewHelper332->initializeArgumentsAndRender();

$output329 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments333 = array();
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
$output335 = '';

$output335 .= '
            closeByClick: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments336 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments337 = array();
$arguments337['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.closeByClick', $renderingContext);
$arguments337['keepQuotes'] = false;
$arguments337['encoding'] = NULL;
$arguments337['doubleEncode'] = true;
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
return NULL;
};
$value339 = ($arguments337['value'] !== NULL ? $arguments337['value'] : $renderChildrenClosure338());
$arguments336['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value339) ? $value339 : htmlspecialchars($value339, ($arguments337['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments337['encoding'] !== NULL ? $arguments337['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments337['doubleEncode'])));
$arguments336['then'] = '1';
$arguments336['else'] = '0';
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper341 = $self->getViewHelper('$viewHelper341', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper341->setArguments($arguments336);
$viewHelper341->setRenderingContext($renderingContext);
$viewHelper341->setRenderChildrenClosure($renderChildrenClosure340);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output335 .= $viewHelper341->initializeArgumentsAndRender();

$output335 .= ',
                ';
return $output335;
};
$viewHelper342 = $self->getViewHelper('$viewHelper342', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper342->setArguments($arguments333);
$viewHelper342->setRenderingContext($renderingContext);
$viewHelper342->setRenderChildrenClosure($renderChildrenClosure334);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper

$output329 .= $viewHelper342->initializeArgumentsAndRender();

$output329 .= '
            ';
return $output329;
};
$arguments327['__thenClosure'] = function() use ($renderingContext, $self) {
return '
            closeByClick: 1,
                ';
};
$arguments327['__elseClosure'] = function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
            closeByClick: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments344 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments345 = array();
$arguments345['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.closeByClick', $renderingContext);
$arguments345['keepQuotes'] = false;
$arguments345['encoding'] = NULL;
$arguments345['doubleEncode'] = true;
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
return NULL;
};
$value347 = ($arguments345['value'] !== NULL ? $arguments345['value'] : $renderChildrenClosure346());
$arguments344['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value347) ? $value347 : htmlspecialchars($value347, ($arguments345['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments345['encoding'] !== NULL ? $arguments345['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments345['doubleEncode'])));
$arguments344['then'] = '1';
$arguments344['else'] = '0';
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper349 = $self->getViewHelper('$viewHelper349', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper349->setArguments($arguments344);
$viewHelper349->setRenderingContext($renderingContext);
$viewHelper349->setRenderChildrenClosure($renderChildrenClosure348);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output343 .= $viewHelper349->initializeArgumentsAndRender();

$output343 .= ',
                ';
return $output343;
};
$viewHelper350 = $self->getViewHelper('$viewHelper350', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper350->setArguments($arguments327);
$viewHelper350->setRenderingContext($renderingContext);
$viewHelper350->setRenderChildrenClosure($renderChildrenClosure328);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output228 .= $viewHelper350->initializeArgumentsAndRender();

$output228 .= '
            opened: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments351 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments352 = array();
$arguments352['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.opened', $renderingContext);
$arguments352['keepQuotes'] = false;
$arguments352['encoding'] = NULL;
$arguments352['doubleEncode'] = true;
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
return NULL;
};
$value354 = ($arguments352['value'] !== NULL ? $arguments352['value'] : $renderChildrenClosure353());
$arguments351['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value354) ? $value354 : htmlspecialchars($value354, ($arguments352['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments352['encoding'] !== NULL ? $arguments352['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments352['doubleEncode'])));
$arguments351['then'] = '1';
$arguments351['else'] = '0';
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper356 = $self->getViewHelper('$viewHelper356', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper356->setArguments($arguments351);
$viewHelper356->setRenderingContext($renderingContext);
$viewHelper356->setRenderChildrenClosure($renderChildrenClosure355);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output228 .= $viewHelper356->initializeArgumentsAndRender();

$output228 .= ',
            categories: \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments357 = array();
$arguments357['each'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'address.categories', $renderingContext);
$arguments357['as'] = 'category';
$arguments357['iteration'] = 'icat';
$arguments357['key'] = '';
$arguments357['reverse'] = false;
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$output359 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments360 = array();
$arguments360['value'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.uid', $renderingContext);
$arguments360['keepQuotes'] = false;
$arguments360['encoding'] = NULL;
$arguments360['doubleEncode'] = true;
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$value362 = ($arguments360['value'] !== NULL ? $arguments360['value'] : $renderChildrenClosure361());

$output359 .= (!is_string($value362) ? $value362 : htmlspecialchars($value362, ($arguments360['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments360['encoding'] !== NULL ? $arguments360['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments360['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments363 = array();
// Rendering Boolean node
$arguments363['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'icat.isLast', $renderingContext));
$arguments363['then'] = '';
$arguments363['else'] = ',';
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper365 = $self->getViewHelper('$viewHelper365', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper');
$viewHelper365->setArguments($arguments363);
$viewHelper365->setRenderingContext($renderingContext);
$viewHelper365->setRenderChildrenClosure($renderChildrenClosure364);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper

$output359 .= $viewHelper365->initializeArgumentsAndRender();
return $output359;
};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output228 .= '\'
        ';

$output228 .= '}';

$output228 .= '
    ';
return $output228;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output3 .= '

    gme.ll = {};
    gme.ll.alert = "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments366 = array();
$arguments366['key'] = 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang.xlf:tx_gomapsext_partials_map_assign.alert';
$arguments366['id'] = NULL;
$arguments366['default'] = NULL;
$arguments366['htmlEscape'] = NULL;
$arguments366['arguments'] = NULL;
$arguments366['extensionName'] = NULL;
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper368 = $self->getViewHelper('$viewHelper368', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper368->setArguments($arguments366);
$viewHelper368->setRenderingContext($renderingContext);
$viewHelper368->setRenderChildrenClosure($renderChildrenClosure367);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output3 .= $viewHelper368->initializeArgumentsAndRender();

$output3 .= '";
    gme.ll.submit = "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments369 = array();
$arguments369['key'] = 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang.xlf:tx_gomapsext_partials_map_assign.submit';
$arguments369['id'] = NULL;
$arguments369['default'] = NULL;
$arguments369['htmlEscape'] = NULL;
$arguments369['arguments'] = NULL;
$arguments369['extensionName'] = NULL;
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper371 = $self->getViewHelper('$viewHelper371', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper371->setArguments($arguments369);
$viewHelper371->setRenderingContext($renderingContext);
$viewHelper371->setRenderChildrenClosure($renderChildrenClosure370);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output3 .= $viewHelper371->initializeArgumentsAndRender();

$output3 .= '";
    gme.ll.noSearchResults = "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments372 = array();
$arguments372['key'] = 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang.xlf:tx_gomapsext_partials_map_assign.noSearchResults';
$arguments372['id'] = NULL;
$arguments372['default'] = NULL;
$arguments372['htmlEscape'] = NULL;
$arguments372['arguments'] = NULL;
$arguments372['extensionName'] = NULL;
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper374 = $self->getViewHelper('$viewHelper374', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper374->setArguments($arguments372);
$viewHelper374->setRenderingContext($renderingContext);
$viewHelper374->setRenderChildrenClosure($renderChildrenClosure373);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output3 .= $viewHelper374->initializeArgumentsAndRender();

$output3 .= '";
    gme.ll.infoWindowLinkText = "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments375 = array();
$arguments375['key'] = 'LLL:EXT:go_maps_ext/Resources/Private/Language/locallang.xlf:tx_gomapsext_partials_map_assign.infoWindowLinkText';
$arguments375['id'] = NULL;
$arguments375['default'] = NULL;
$arguments375['htmlEscape'] = NULL;
$arguments375['arguments'] = NULL;
$arguments375['extensionName'] = NULL;
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper377 = $self->getViewHelper('$viewHelper377', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper377->setArguments($arguments375);
$viewHelper377->setRenderingContext($renderingContext);
$viewHelper377->setRenderChildrenClosure($renderChildrenClosure376);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output3 .= $viewHelper377->initializeArgumentsAndRender();

$output3 .= '";
    var $element = jQuery("#" + gme.mapSettings.id);
    $element.gomapsext(gme);
    if(gme.mapSettings.width.indexOf(\'%\') != -1) {
        jQuery(window).resize(function() {
            $element.trigger(\'mapresize\');
        });
    }

  }); // end of closure
})(jQuery, window, document);
';
return $output3;
};
$viewHelper378 = $self->getViewHelper('$viewHelper378', $renderingContext, 'Clickstorm\GoMapsExt\ViewHelpers\ScriptViewHelper');
$viewHelper378->setArguments($arguments1);
$viewHelper378->setRenderingContext($renderingContext);
$viewHelper378->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper Clickstorm\GoMapsExt\ViewHelpers\ScriptViewHelper

$output0 .= $viewHelper378->initializeArgumentsAndRender();

return $output0;
}


}
#1437639743    108601    