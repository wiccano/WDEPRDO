<?php
/**
 * TTableHeaderRow class file
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.pradosoft.com/
 * @copyright Copyright &copy; 2005-2011 PradoSoft
 * @license http://www.pradosoft.com/license/
 * @version $Id: TTableHeaderRow.php 2996 2011-06-20 15:24:57Z ctrlaltca@gmail.com $
 * @package System.Web.UI.WebControls
 */

/**
 * Includes TTableRow class.
 */
Prado::using('System.Web.UI.WebControls.TTableRow');

/**
 * TTableHeaderRow class.
 *
 * TTableHeaderRow displays a table header row.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @version $Id: TTableHeaderRow.php 2996 2011-06-20 15:24:57Z ctrlaltca@gmail.com $
 * @package System.Web.UI.WebControls
 * @since 3.0.1
 */
class TTableHeaderRow extends TTableRow
{
	/**
	 * @return string location of a row in a table. Always returns 'Header'.
	 */
	public function getTableSection()
	{
		return 'Header';
	}

	/**
	 * @param string location of a row in a table.
	 * @throws TInvalidOperationException if this method is invoked
	 */
	public function setTableSection($value)
	{
		throw new TInvalidOperationException('tableheaderrow_tablesection_readonly');
	}
}

