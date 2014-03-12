<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Salon Inventory</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
/*
$stmt = "Select * from Retail";

$result = odbc_exec($db, $stmt);

if ($result == FALSE) die ("could not execute statement $stmt<br />");
*/

$db = odbc_connect("dsn","userid","password") or die ("could not connect <br />");

$stmt = "Select * from Retail";

$result = odbc_exec($db,$stmt);

if ($result == FALSE) die ("could not execute statement $stmt <br />");

while (odbc_fetch_row($result)) //while there are rows
{
 print "<table width="100%" border="1">\n";
	print "<tr>\n";
	  print "<th bgcolor="#3333CC" style="color: #FFF" scope="col">Product Name</th>\n";
	  print "<th bgcolor="#3333CC" style="color: #FFF" scope="col">Barcode #</th>\n";
	  print "<th bgcolor="#3333CC" style="color: #FFF" scope="col">Size</th>\n";
	  print "<th bgcolor="#3333CC" style="color: #FFF" scope="col">Wholesale Price</th>\n";
	  print "<th bgcolor="#3333CC" style="color: #FFF" scope="col">Retail Price</th>\n";
	  print "<th bgcolor="#3333CC" style="color: #FFF" scope="col">Shelf Location</th>\n";
	  print "<th bgcolor="#3333CC" style="color: #FFF" scope="col">Shelf Cap</th>\n";
	  print "<th bgcolor="#3333CC" style="color: #FFF" scope="col">Quantity On Hand</th>\n";
	  print "<th bgcolor="#3333CC" style="color: #FFF" scope="col">Storage Location</th>\n";
	  print "<th bgcolor="#3333CC" style="color: #FFF" scope="col">Quantity In Storage</th>\n";
	  print "<th bgcolor="#3333CC" style="color: #FFF" scope="col">Vendor</th>\n";
	  print "<th bgcolor="#3333CC" style="color: #FFF" scope="col">Vendor Region</th>\n";
	  print "<th bgcolor="#3333CC" style="color: #FFF" scope="col">&nbsp;</th>\n";
	print "</tr>\n";
	print "<tr>\n";
	  print "<td>&nbsp;</td>\n";
	  print "<td>&nbsp;</td>\n";
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
  </table>
  <div id="TabbedPanels1" class="TabbedPanels">
	<ul class="TabbedPanelsTabGroup">
	  <li class="TabbedPanelsTab" tabindex="0">Retail</li>
	  <li class="TabbedPanelsTab" tabindex="0">Backbar</li>
	  <li class="TabbedPanelsTab" tabindex="0">Equipment</li>
	  <li class="TabbedPanelsTab" tabindex="0">Supplies</li>
	</ul>
	<div class="TabbedPanelsContentGroup">
	  <div class="TabbedPanelsContent">
	  <p>Retail</p>
	  
  </div>
	  <div class="TabbedPanelsContent">
	  <p>Backbar</p>
	  <table width="100%" border="1">
	<tr>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Company</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Product Name</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Barcode#</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Color</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Perms</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Cost</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Shelf Location</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Shelf Cap</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Quantity On Hand</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Storage Location</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Quantity In Storage</th>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
  </table>
  </div>
	  <div class="TabbedPanelsContent">
	  <p>Equipment</p>
	  <table width="100%" border="1">
	<tr>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Company</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Name Of Item</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col"><p>Date Purchased</p></th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Where Pruchased</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Cost</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Quantity On Hand</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Size</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Color</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Warranty Information</th>
	  </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  </tr>
  </table>
  </div>
	  <div class="TabbedPanelsContent">
	  <p>Supplies</p>
	  <table width="100%" border="1">
	<tr>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Name Of Item</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Cost</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Quantity On Hand</th>
	  <th bgcolor="#3333CC" style="color: #FFF" scope="col">Number Of Months</th>
	  </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  <td bgcolor="#A4A4E8">&nbsp;</td>
	  </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  </tr>
  </table>
  </div>
	</div>
  </div>
  <script type="text/javascript">
  var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
  </script>

/* PDO */

@sql_connect ("","","") or die ("cannot connect sql");
@sql_selectdb ("$db_name") or die ("No Db Call = $db_name");

select ProductName from Retail; /* get to store in Product name column of table */
select Barcode'#' from Retail;
select Size from Retail;
select WholesalePrice from Retail;
select RetailPrice from Retail;
select ShelfLocation from Retail;

?>

</body>
</html>