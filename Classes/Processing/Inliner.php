<?php

namespace KayStrobach\ThemeZurbink\Processing;

require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('theme_zurbink') . 'Resources/Private/Php/Emogrifier.php';

class Inliner {
	public function process($content, $conf) {
		$emogrifier = new \Pelago\Emogrifier();
		$emogrifier->setHtml($content);
		return $emogrifier->emogrify();
	}
}