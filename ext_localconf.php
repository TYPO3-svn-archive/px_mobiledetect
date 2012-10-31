<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Alexander Tretyak (Alexander.Tretyak@pixabit-interactive.de)
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
function user_isMobile() {
	require_once t3lib_extMgm::extPath('px_mobiledetect') . 'libs/mobile-detect.php';
	$md = t3lib_div::makeInstance('Mobile_Detect');
	return $md->isMobile();
}

function user_isTablet() {
	require_once t3lib_extMgm::extPath('px_mobiledetect') . 'libs/mobile-detect.php';
	$md = t3lib_div::makeInstance('Mobile_Detect');
	return $md->isTablet();
}
?>