<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    if (TYPO3_MODE === 'BE') {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(trim('
            module.tx_form {
                settings {
                    yamlConfigurations {
                        1505042806 = EXT:form_element_linked_checkbox/Configuration/Yaml/FormSetup.yaml
                    }
                }
            }
        '));
    }

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['beforeRendering'][1571076908]
        = \TRITUM\FormElementLinkedCheckbox\Hooks\FormElementLinkResolverHook::class;
});
