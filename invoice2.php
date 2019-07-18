<!DOCTYPE html>
<html>
	<head>
		<title><?php echo 'Admin'.' | '.'Login'; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<?php include ('config/css.php');?>
		<?php include ('config/js.php');?>

	</head>
	<body>


<div id="templateArea"><style type="text/css">* { margin:0; padding:0; }body { background:#fff; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:20px; }#extra {font-size: 22px; font-weight: 700}.invoice-wrap { width:700px; margin:0 auto; background:#FFF; color:#000 }.invoice-inner { margin:0 15px; padding:20px 0 }.invoice-address { border-top: 3px double #000000; margin: 25px 0; padding-top: 25px; }.bussines-name { font-size:18px; font-weight:100 }.invoice-name { font-size:22px; font-weight:700 }.listing-table th { background-color: #e5e5e5; border-bottom: 1px solid #555555; border-top: 1px solid #555555; font-weight: bold; text-align:left; padding:6px 4px }.listing-table td { border-bottom: 1px solid #555555; text-align:left; padding:5px 6px; vertical-align:top }.total-table td { border-left: 1px solid #555555; }.total-row { background-color: #e5e5e5; border-bottom: 1px solid #555555; border-top: 1px solid #555555; font-weight: bold; }.row-items { margin:5px 0; display:block }.notes-block { margin:50px 0 0 0 }/*tables*/table td { vertical-align:top}.items-table { border:1px solid #1px solid #555555; border-collapse:collapse; width:100%>.items-table td, .items-table th { border:1px solid #555555; padding:4px 5px ; text-align:left}.items-table th { background:#f5f5f5;}.totals-row .wide-cell { border:1px solid #fff; border-right:1px solid #555555; border-top:1px solid #555555}.invoice-input {font: 12px}</style><div class="invoice-wrap"><div class="invoice-inner"><table width="100%" cellspacing="0" cellpadding="0" border="0">    <tbody>        <tr>            <td valign="top" align="right">            <div class="business_info">            <table width="100%" cellspacing="0" cellpadding="0" border="0">                <tbody>                    <tr>                        <td><textarea id="business_info" rows="6" class="invoice-input" style="display: none; overflow: hidden; overflow-wrap: break-word; resize: none; height: 120px;"></textarea><div class="reset_editor invoice-input mce-content-body" id="business_info_editor" style="width: 255px; min-height: 80px; position: relative;" spellcheck="false" contenteditable="true"><p style="font-size: 14pt;" data-mce-style="font-size: 14pt;">[Business Name]</p><p>[Business Address 1]<br> [City], [State] [Postal Code]<br> [Company Phone Number]<br> [Company Emaill Address]</p></div></td>                    </tr>                </tbody>            </table>            </div>            </td>            <td class="is_logo" valign="top" align="right"><div id="logoDiv"><img class="" id="logo" src="https://create.onlineinvoices.com/img/uploads/logos/default-logo.png" style="width: 122px; height: 102px;" data-original-title="" title="" width="122" height="102"></div></td>        </tr>    </tbody></table><div class="invoice-address"><table width="100%" cellspacing="0" cellpadding="0" border="0">    <tbody>        <tr>            <td colspan="2" valign="top" align="right">            <input id="extra" value="Invoice" class="invoice-input" style="text-align: right; display: none;" type="text"><div class="reset_editor invoice-input mce-content-body" id="extra_editor" style="width: 200px; min-height: 22px; position: relative;" spellcheck="false" contenteditable="true"><p><span style="font-size: 18pt;" data-mce-style="font-size: 18pt;">Invoice</span></p></div>            <br>            &nbsp;</td>        </tr>        <tr>            <td width="60%" valign="top" align="left">            <table cellspacing="0" cellpadding="0" border="0">                <tbody>                    <tr>                        <td style="float: left;" valign="top"><strong><input id="label_bill_to" value="Bill To" class="invoice-input" style="font-weight: bold;" type="text"></strong></td>                        <td valign="top">                        <div class="client_info">                        <table cellspacing="0" cellpadding="0" border="0">                            <tbody>                                <tr>                                    <td style="padding-left:20px;"><textarea id="client_info" rows="4" class="invoice-input" style="display: none; overflow: hidden; overflow-wrap: break-word; resize: none; height: 80px;"></textarea><div class="reset_editor invoice-input mce-content-body" id="client_info_editor" style="width: 200px; min-height: 80px; position: relative;" spellcheck="false" contenteditable="true"><p>[Client Name]<br> [Client Address line 1]<br> [City], [State] [Postal Code]</p></div></td>                                </tr>                            </tbody>                        </table>                        </div>                        </td>                    </tr>                </tbody>            </table>            </td>            <!-- Invoice Info -->            <td width="40%" valign="top" align="right">            <table cellspacing="0" cellpadding="0" border="0">                <tbody>                    <tr>                        <td align="right"><strong><input id="label_invoice_no" value="Invoice no." class="invoice-input" style="text-align: right; font-weight: bold;" type="text"></strong></td>                        <td style="padding-left:20px" align="left"><input id="no" value="2001321" class="invoice-input" style="text-align: right;" type="text"></td>                    </tr>                    <tr>                        <td align="right"><strong><input id="label_date" value="Date" class="invoice-input" style="text-align: right; font-weight: bold;" type="text"></strong></td>                        <td style="padding-left:20px" align="left"><input id="date" value="7/9/2018" class="invoice-input" style="text-align: right;" type="text"></td>                    </tr>                    <!-- Fieldl-->                    <tr class="field1_row">                        <td align="right"><strong><input id="label_field1" value="" class="invoice-input" style="text-align: right; font-weight: bold;" placeholder="[ADD MORE]" type="text"></strong></td>                        <td style="padding-left:20px;" align="left"><input id="field1_value" value="" class="invoice-input" style="text-align: right;" type="text"></td>                    </tr>                    <!-- /Fieldl--><!-- Field2-->                    <tr class="field2_row" style="display: none;">                        <td align="right"><strong><input id="label_field2" value="" class="invoice-input" style="text-align: right; font-weight: bold;" type="text"></strong></td>                        <td style="padding-left:20px;" align="left"><input id="field2_value" value="" class="invoice-input" style="text-align: right;" type="text"></td>                    </tr>                    <!-- /Field2--><!-- Field3-->                    <tr class="field3_row" style="display: none;">                        <td align="right"><strong><input id="label_field3" value="" class="invoice-input" style="text-align: right; font-weight: bold;" type="text"></strong></td>                        <td style="padding-left:20px;" align="left"><input id="field3_value" value="" class="invoice-input" style="text-align: right;" type="text"></td>                    </tr>                    <!-- /Field3--><!-- Field4-->                    <tr class="field4_row" style="display: none;">                        <td align="right"><strong><input id="label_field4" value="" class="invoice-input" style="text-align: right; font-weight: bold;" type="text"></strong></td>                        <td style="padding-left:20px;" align="left"><input id="field4_value" value="" class="invoice-input" style="text-align: right;" type="text"></td>                    </tr>                    <!-- /Field4--><!-- Field5-->                    <tr class="field5_row" style="display: none;">                        <td align="right"><strong><input id="label_field5" value="" class="invoice-input" style="text-align: right; font-weight: bold;" type="text"></strong></td>                        <td style="padding-left:20px;" align="left"><input id="field5_value" value="" class="invoice-input" style="text-align: right;" type="text"></td>                    </tr>                    <!-- /Field5--><!-- Field6-->                    <tr class="field6_row" style="display: none;">                        <td align="right"><strong><input id="label_field6" value="" class="invoice-input" style="text-align: right; font-weight: bold;" type="text"></strong></td>                        <td style="padding-left:20px;" align="left"><input id="field6_value" value="" class="invoice-input" style="text-align: right;" type="text"></td>                    </tr>                    <!-- /Field6--><!-- Field7-->                    <tr class="field7_row" style="display: none;">                        <td align="right"><strong><input id="label_field7" value="" class="invoice-input" style="text-align: right; font-weight: bold;" type="text"></strong></td>                        <td style="padding-left:20px;" align="left"><input id="field7_value" value="" class="invoice-input" style="text-align: right;" type="text"></td>                    </tr>                    <!-- /Field7--><!-- Field8-->                    <tr class="field8_row" style="display: none;">                        <td align="right"><strong><input id="label_field8" value="" class="invoice-input" style="text-align: right; font-weight: bold;" type="text"></strong></td>                        <td style="padding-left:20px;" align="left"><input id="field8_value" value="" class="invoice-input" style="text-align: right;" type="text"></td>                    </tr>                    <!-- /Field8--><!-- Field9-->                    <tr class="field9_row" style="display: none;">                        <td align="right"><strong><input id="label_field9" value="" class="invoice-input" style="text-align: right; font-weight: bold;" type="text"></strong></td>                        <td style="padding-left:20px;" align="left"><input id="field9_value" value="" class="invoice-input" style="text-align: right;" type="text"></td>                    </tr>                    <!-- /Field9--><!-- Field10-->                    <tr class="field10_row">                        <td align="right"><strong><input id="label_field10" value="" class="invoice-input" style="text-align: right; font-weight: bold;" type="text"></strong></td>                        <td style="padding-left:20px;" align="left"><input id="field9_value" value="" class="invoice-input" style="text-align: right;" type="text"></td>                    </tr>                    <!-- /Field10-->                </tbody>            </table>            </td>        </tr>    </tbody></table></div><div id="items-list"><table class="table table-condensed table-bordered table-striped items-table">
	<thead>
		<tr>
			<th><input id="label_description" value="Description" class="invoice-input" type="text"></th>
			<th class="mount-header"><input id="label_qty" value="Quantity" class="invoice-input" type="text"></th>
			<th class="mount-header"><input id="label_unit_price" value="Unit price" class="invoice-input" type="text"></th>
			<th class="tax1-header" style="display: none;"><input id="label_tax_1" value="Tax" class="invoice-input" type="text"></th>
			<th class="tax2-header" style="display: none;"><input id="label_tax_2" value="Extra Tax" class="invoice-input" type="text"></th>
			<th class="subtotal-header"><input id="label_item_subtotal" value="Amount" class="invoice-input" type="text"></th>
			<th width="20">&nbsp;</th>
		</tr>
	</thead>
	<tfoot id="TotalsSection">
		<tr class="totals-row" id="SubtotalRow" style="display: none;">
			<td class="wide-cell" colspan="2"></td>
			<td><strong><input id="label_subtotal" value="Subtotal" class="invoice-input" style="font-weight: bold;" type="text"></strong>
			</td><td colspan="2"><span id="subtotal">Rs.&nbsp;0</span>
		</td></tr>
		<tr class="totals-row" id="TotalRow">
			<td class="wide-cell" colspan="2"><button type="button" id="AddProduct" class="btn btn-small btn-primary"><i class="fa fa-plus"></i> Add Line</button></td>
			<td><strong><input id="label_total" value="Total" class="invoice-input" style="font-weight: bold;" type="text"></strong>
			</td><td colspan="2"><span id="total">Rs.&nbsp;0</span>
		</td></tr>
		<tr class="totals-row shaped" id="PaidRow">
			<td class="wide-cell" colspan="2"><a href="#" class="show-row" id="toggle_paid"></a></td>
			<td><strong><input id="label_paid" value="Paid Amount" class="invoice-input" style="font-weight: bold;" type="text"></strong>
			</td><td colspan="2"><input id="paid" value="" class="invoice-input" type="text">
		</td></tr>
		<tr class="totals-row shaped" id="UnpaidRow">
			<td class="wide-cell" colspan="2"></td>
			<td><strong><input id="label_unpaid" value="Balance Due" class="invoice-input" style="font-weight: bold;" type="text"></strong>
			</td><td colspan="2"><span id="unpaid">Rs.&nbsp;0</span>
		</td></tr>
	</tfoot>
	<tbody id="ItemsTable">
	<tr description="Product name" qty="1" unit_price="0" discount="0" subtotal="0" total="0" class="item-row">
<td><textarea data-key="description" class="editable input-block-level" type="text" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 57px;">Product name</textarea></td>
<td><input data-key="qty" class="editable input-mini" value="1"></td>
<td><input data-key="unit_price" class="editable input-mini" value="0"></td>
<td class="tax-container tax1-container" data-item-key="tax1" style="display: none;">
	<div class="btn-group">
		<button class="btn btn-sm btn-xxs  selected-tax" autocomplete="off">Select</button>
		<button class="btn btn-sm btn-xxs dropdown-toggle" data-toggle="dropdown" autocomplete="off"><span class="caret"></span></button>
		<ul class="dropdown-menu tax-list">

		</ul>
	</div>
</td>
<td class="tax-container tax2-container" data-item-key="tax2" style="display: none;">
	<div class="btn-group">
		<button class="btn btn-sm btn-xxs selected-tax" autocomplete="off">Select</button>
		<button class="btn btn-sm btn-xxs dropdown-toggle" data-toggle="dropdown" autocomplete="off"><span class="caret"></span></button>
		<ul class="dropdown-menu tax-list">
		</ul>
	</div>
</td>
<td data-key="subtotal">0</td>
<td><btn href="#" class="btn btn-danger btn-sm remove-item"><i class="fa fa-trash icon-white"></i></btn></td>        </tr></tbody>
</table></div><div class="notes-block"><table width="100%" cellspacing="0" cellpadding="0" border="0">    <tbody>        <tr>            <td>            <textarea id="notes" rows="2" class="invoice-input" style="display: none; overflow: hidden; overflow-wrap: break-word; resize: none; height: 80px;" placeholder="Type your notes here"></textarea><div class="reset_editor invoice-input mce-content-body" id="notes_editor" style="width: 670px; min-height: 80px; position: relative;" spellcheck="false" contenteditable="true"><p>Enter your Notes, Bank Details, or Terms</p></div>            </td>        </tr>    </tbody></table></div><br><br><br><br>&nbsp;</div></div></div>



</body>
	
	
</html>
