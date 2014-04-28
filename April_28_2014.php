<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Salon Database</title>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" />
		<style>
			.update { background-color:yellow;}
		</style>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<script type="text/javascript">
			// Needs to be here so it preps the DOM for the classes
			// otherwise it doesn't work.
			$(function() {
				$( "#tabs" ).tabs();
			});
			
			function button_update() {
				// pass to php to send to server, update and deletion statements
				var confirmation;
				var status = confirm('The update you are going to send to the server are: \nClick cancel to continue updating. \nClick OK to reload page.');
				if (status == true){
					var $table = $(this).closest('table');
					send_table($table);
				}
				else {
				}
				// pass that stuff...
				
			}
			
			function button_refresh() {
				var confirmation;
				var status = confirm("If you reload before saving current updates, \nthey will be lost, \nFOREVER. \nClick cancel to continue updating. \nClick OK to reload page.");
				if (status == true){
					window.location.reload();
				}
				else {
				}
				
			}

			function updateTable($id, $tableID, $id, $updated_cell, $updated_row) {
				//  optional parameters
				$updated_cell = $updated_cell || $updated_cell = 0;
				$updated_row = $updated_row || $updated_row = 0;
				$id = $id || $id = 0;
				
				// We need to lookup the rows other fields to match the row for the database id
			
				if ( $updated_row!=0 ) {
					var $modifyRow = array ($id, $tableID, $updated_row);
					$.post("test.php", 
						$modifyRow,
						function($data, $status) {
							alert("Data: " + $data + "Status: " + $status);
						});
				}
					//  If we are not deleting a row, we are updating a cell in the row.
					//  We need the id, tableID and id of which to update followed by the new value.
					if ( $updated_cell!=0 ) {
						var $modifyCell
						
						for(var i = 0; $updated_cell[i]; i++) {
							$modifyCell = array ($id, $tableID, $id, $updated_cell);
						}
						$.post("test.php",
							$modifyCell,
							function($data, $status) {
								alert("Data: " + $data + "Status: " + $status);
							});
					}
			}
		</script>
		<?php

		require_once('dbconf/dbconf.php'); // Needed for Database login
		
		function update_delete_sort($jsPOST) {
			if ($jsPOST[0].lowercase() == 'update') {
				
			}
			
		}

		if(isset($_POST)) {
		
		}
		
		function deleteRow($id, $tableID) {
			
			// Variables to delete rows (id, array (list-like) of row(s) to delete, tableID)
			// Delete specific rows
			//$sth = $dbh->prepare("DELETE FROM" . $_POST["tableID"] . "WHERE" . $_POST["id"] .);
			//$result = $sth->execute();

		}
		
		function updateCell($array, $id, $tableID) {
			//$sth = $dbh->prepare("UPDATE" . $id .  "FROM [table] WHERE [row...]");
			//$result = $sth->execute();
		}
		
		// Kicking tires, lighting fires...

		// Connection from PHP to MSSQL via PDO
		// DataBase Host
		$dbh = new PDO($dsn, $user, $password);

			// Backbar
			// Sent/Send To Host and preparing the query to send. (Backbar)
			$sth = $dbh->prepare("SELECT * FROM Backbar");
				
			// Send that query!
			$result = $sth->execute();
				
			// Fetch all of the remaining rows in the result set.
			$backBarRow = $sth->fetchAll();

			
			// Retail
			// Sent/Send To Host and preparing the query to send. (Retail)
			$sth = $dbh->prepare("SELECT * FROM Retail");

			// Send next query!
			$result = $sth->execute();

			// Fetch all of the new results in the new result set.
			$retailRow = $sth->fetchAll();
			
			
			// Equipment
			// Sent/Send To Host and preparing the query to send. (Equipment)
			$sth = $dbh->prepare("SELECT * FROM Equipment");

			// Send next query!
			$result = $sth->execute();

			// Fetch all of the new results in the new result set.
			$equipmentRow = $sth->fetchAll();


			// Supplies
			// Sent/Send To Host and preparing the query to send. (Supplies)
			$sth = $dbh->prepare("SELECT * FROM Supplies");

			// Send next query!
			$result = $sth->execute();

			// Fetch all of the new results in the new result set.
			$suppliesRow = $sth->fetchAll();


		?>
		<!-- Credits to jQuery and jQueryUI for base JavaScript and CSS.  
		Alterations made by Jeremy McFadden, Holden Smith, Patricia Bischoff & Eric Venable (Ordered in no specific way)
		-->
	</head>
	<body>
		<?php

		function tableMaker($array,$num_columns) {
			$rowNumber = 0;
			$cellNumber = 0;
			for ( $insideArray=0; $insideArray<=count($array); $insideArray++) {
				echo '<tr id="tr_' . $rowNumber . '">';
				for ( $arrayPos=0; $arrayPos <= $num_columns; $arrayPos++) {
					echo '<td id="td_' . $cellNumber . '">' . $array[$insideArray][$arrayPos] . '</td>';
					$cellNumber++;
				}
			$rowNumber++;
			echo '</tr>';
			}
		}
		// Start the table format extravaganza!
		print('<div id="tabs">
		<ul id="tabs">
			<li><a href="#tabs-1">Retail</a></li>
			<li><a href="#tabs-2">Backbar</a></li>
			<li><a href="#tabs-3">Equipment</a></li>
			<li><a href="#tabs-4">Supplies</a></li>
		</ul>');

		print('<div id="tabs-1">
			<button type="button" onClick="add_row_retail()">Add Row</button>
			<button type="button" onClick="button_update()">Update</button>
			<button type="button" onClick="button_refresh()">Refresh</button>
			<table border="1" id="Retail">
				<tr><th>Company</th><th>Product Name</th><th>Barcode#</th>
				<th>Size</th><th>Wholesale Price</th><th>Shelf Location</th>
				<th>Quantity On Hand</th><th>Retail Price</th><th>Quantity In Storage</th>
				<th>Vendor</th><th>Vendor Region</th><th>Vendor Mileage</th></tr>');
		tableMaker($retailRow,11);
		print('</table>
			</div>');
			
		print('<div id="tabs-2">
			<button type="button" onClick="button_update()">Update</button>
			<button type="button" onClick="button_refresh()">Refresh</button>
			<table border="1" id="Backbar">
				<tr><th>Product Company</th><th>Product Name</th><th>Barcode #</th>
				<th>Color</th><th>Perms</th><th>Cost</th>
				<th>Volume</th><th>Size</th><th>Shelf Location</th>
				<th>Shelf Cap</th><th>Quantity On Hand</th><th>Storage Location</th>
				<th>Quantity In Storage</th><th>Vendor</th><th>Vendor Region</th>
				<th>Vendor Mileage</th></tr>');
		tableMaker($backBarRow,15);
		print('</table>
			</div>');

		print('<div id="tabs-3">
			<button type="button" onClick="button_update()">Update</button>
			<button type="button" onClick="button_refresh()">Refresh</button>
			<table border="1" id="Equipment">
				<tr><th>Company</th><th>Name of Item</th><th>Date Purchased</th>
				<th>Where Purchased</th><th>Cost</th><th>Quantity On Shelf</th>
				<th>Size</th><th>Color</th><th>Warranty Information</th></tr>');
		tableMaker($equipmentRow,8);
		print('</table>
			</div>');

		print('<div id="tabs-4">
			<button type="button" onClick="button_update()">Update</button>
			<button type="button" onClick="button_refresh()">Refresh</button>
			<table border="1" id="Supplies">
				<tr><th>Name of Item</th><th>Cost</th><th>Quantity On Shelf</th>
				<th>Date Purchased</th><th>Number of Months</th></tr>');
		tableMaker($suppliesRow,4);
		print('</table>
			</div>');

		// Need this to close "TabbedPanelsContentGroup"
		print('</div>');

		echo "<p>You should see a table, unless I broke it.</p>";
		unset($dbh);
		?>
		<script type="text/javascript">
			// submit the table to the PHP script for processing
			function send_table($table) {
				// get table ID
				var elementTable = $table;

				// create JSON object
				var jObject = [];

				// iterate through the table
				// rows
				for (var i = 0; i < elementTable.rows.length; i++) {
					// create array within the array - 2nd dimension
					jObject[i] = [];

					// columns within the row
					for (var j = 0; j < elementTable.rows[i].cells.length; j++) {
						if (elementTable.rows[i].cells[j].className == 'update') {
							jObject[i][j] = 'update';
						}
						if (elementTable.rows[i].cells[j].className == 'delete') {
							jObject[i][j] = 'delete';
						}
						jObject[i][j] = elementTable.rows[i].cells[j].innerHTML;
					}
				}

				var JSONObject = encodeURIComponent( JSON.stringify(jObject));
				var url = "test.php";
				var requestData = "&table=" + JSONObject;

				var XMLHttpRequestObj = FileResort.Utils.createRequest();
				XMLHttpRequestObj.open("POST", url, true);
				XMLHttpRequestObj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				XMLHttpRequestObj.send(requestData);

				// process return message
				XMLHttpRequestObj.onreadystatechange = function (event) {
					if (XMLHttpRequestObj.readyState == 4 && XMLHttpRequestObj.status == 200) {
						alert(XMLHttpRequestObj.responseText);
						var responseJSON = eval('(' + XMLHttpRequestObj.responseText + ')');

						if (responseJSON.result == true) {
							console.log("We got the $table");
						}
						else {
							console.log("Did not get $table");
						}
					}
				}

			};
			
			var js_backbar_array =<?php echo json_encode($backBarRow);?>;
			var js_retail_array =<?php echo json_encode($retailRow);?>;
			var js_equipment_array =<?php echo json_encode($equipmentRow);?>;
			var js_supplies_array =<?php echo json_encode($suppliesRow);?>;


			
			
			function add_row_retail() {
				var table = document.getElementById("Retail");
				var row = table.insertRow(-1);

				// Row id
				var row_id = $('#Retail tr:last').attr('id');
				var next_row_id = "tr_" + (1+parseInt(row_id.match(/\d+/)[0],10));
				$(row).attr('id', next_row_id);

				for (var i = 0; i < table.row.length; i++) {
					var cell_id = $('#Retail tr td:last').attr('id');
					console.log(cell_id);
					var next_cell_id = "td_" + (1+parseInt(cell_id.match(/\d+/)[0],10));
					console.log(next_cell_id);
					var cell = row.insertCell(-1);
					cell.attr('id', next_cell_id);
					cell.innerHTML = "blank";
				}
			}


			$(function change_cell_content() {
				$("td").on("click", function () {

				var cell_id_ref = $(this).attr('id');
				var $table = $(this).closest('table');
				if (window.console) { 
					console.log($table);
				}
				var currentValue = $(this).html();
				var changeValue = prompt("Enter a new value. (Current " + currentValue + ")");
					if (changeValue !== null) {
						$table.find('[id="' + cell_id_ref + '"]').text(changeValue);
						$table.find('[id="' + cell_id_ref + '"]').removeAttribute('class');
						$table.find('[id="' + cell_id_ref + '"]').setAttribute('class','update');
						send_table($table);
					}
				});
			});
		</script>
	</body>
</html>