<?php
/**
 * THeader1 class file
 *
 * @author Brad Anderson <javalizard@gmail.com>
 * @link http://www.pradosoft.com/
 * @copyright Copyright &copy; 2005-2011 PradoSoft
 * @license http://www.pradosoft.com/license/
 * @version $Id: THeader1.php 2590 2008-12-10 11:34:24Z carlgmathisen $
 * @package System.Web.UI.WebControls
 */

/**
 * THeader1 class
 *
 * This is a simple class to enable your application to have headers but then have your
 * theme be able to redefine the TagName
 * This is also useful for the {@link TWebControlDecorator} (used by themes).
 *
 * @author Brad Anderson <javalizard@gmail.com>
 * @version $Id: THeader1.php 2541 2008-10-21 15:05:13Z javalizard $
 * @package System.Web.UI.WebControls
 * @since 3.2a
 */
 
class THeader1 extends THtmlElement {	
	
	/**
	 * @return string tag name
	 */
	public function getDefaultTagName()
	{
		return 'h1';
	}
	
}
