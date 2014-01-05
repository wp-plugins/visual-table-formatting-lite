<?php
//Prohibit direct script loading
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );
?>
<div id="w3exvtf-topparent" class="w3exvtfscope">
<div style="margin:15px 0px 25px 10px;">
<div style="float: left;margin-right: 5px;">Generate table<br />from:<br /><br />
<button id="w3exvtf-genshortcode">Shortcode</button>&nbsp;<br /><br />
<button id="w3exvtf-gendata">Data</button><br/>
(enter field delimiter)<br/>
<input type="text" size="5" id="w3exvtf-delimiter" />
</div>
<textarea rows="8" cols="70" id="w3exvtf-importdata">
</textarea>
<div style="clear: both;"></div>
</div>
<div id="w3exvtf-toolbar" class="unselectable">
<table class="tabletool">
<tr>
	<td style="padding-top:3px;">Cell: <input type='text' id="w3exvtf-custom" /></td>
	<td style="padding-top:3px;">Font: <input type='text' id="w3exvtf-custom-font" /></td>
	<td><button id="w3exvtf-removecolor">Remove color</button>&nbsp;&nbsp;</td>
	<td style="padding-top:3px;"><input class="jqButton" type="checkbox" id="w3exvtf-makebold"><label for="w3exvtf-makebold"><b>B</b></label></td>
	<td style="padding-top:3px;"><input class="jqButton" type="checkbox" id="w3exvtf-makeitalic"><label for="w3exvtf-makeitalic"><b><i>I</i></b></label></td>
	<td style="padding-top:3px;"><input class="jqButton" type="checkbox" id="w3exvtf-makeunder"><label for="w3exvtf-makeunder"><b><u>U</u></b></label></td>
	<td style="padding-top:3px;"><input class="jqButton" type="checkbox" id="w3exvtf-makestrike"><label for="w3exvtf-makestrike"><b><strike>S</strike></b></label>&nbsp;&nbsp;</td>
		<td>Cell Size: <button id="w3exvtf-cellmin">-</button><button id="w3exvtf-cellplus">+</button>&nbsp;&nbsp;</td>
		<td><button id="w3exvtf-createuser">Style</button></td>
		</tr>
	</table>
</div>
 <div style="clear:both"></div>
<div id="w3exvtf-parent" class="unselectable" unselectable="on">

 <div id="w3exvtf-colbtns">Cols:
  		 <div id="w3exvtf-colsm" class="btncolrow unselectable" unselectable="on">-</div>
			  <div id="w3exvtf-colsp" class="btncolrow unselectable" unselectable="on">
  		   +
  		 </div>
		 <div id="w3exvtf-showlink"></div>
  </div>
 
	<div id="w3exvtf-rowbtns">Rows:
		<div id="w3exvtf-rowsm" class="btncolrow unselectable" unselectable="on">-</div>
		<div id="w3exvtf-rowsp" class="btncolrow unselectable" unselectable="on">+</div>
	</div>

	<div id="w3exvtf-thetable">
	</div>
 <div style="clear:both">&nbsp;</div>
</div>
<div id="w3exvtf-advanced" class="centered">
<h3>Advanced Settings</h3>
<div>
	<table>
		<tr>
			<td style="width:35%;">
			<input type="radio" name="w3exvtf-css" value="theme" checked="checked" id="w3exvtf-theme">
				<label for="w3exvtf-theme">Use theme's settings for cell &nbsp;&nbsp;&nbsp;&nbsp;height and table width</label>
			</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>
			<input type="radio" name="w3exvtf-css" value="manual" id="w3exvtf-manual">
				<label for="w3exvtf-manual">Manual</label>
			</td>
			<td>
				Cell min-height (px) &nbsp;<input type="text" name="lheight" id="w3exvtf-lheight" value="22"><br /><br />
				Cell padding (px) top:<input type="text" name="ptop" id="w3exvtf-ptop" value="4"> right:<input type="text" name="pright" id="w3exvtf-pright" value="0"> bottom:<input type="text" name="pbottom" id="w3exvtf-pbottom" value="4"> left:<input type="text" name="pleft" id="w3exvtf-pleft" value="0"><br /><br />
				Table width (%)  &nbsp;<input type="text" name="twidth" id="w3exvtf-twidth" value="100" style="width:40px;">
			</td>
		</tr>
		<tr>
			<td style="border:none;">
			<input type="radio" name="w3exvtf-css" value="usecss" id="w3exvtf-usecss">
				<label for="w3exvtf-usecss">Use this css class</label>
			</td>
			<td style="border:none;">Class name:<input type="text" name="classn" id="w3exvtf-classn" style="width:150px;"></td>
		</tr>
	</table>
</div>
</div>
<br />
<br />
<div style="text-align: center;">
<button id="w3exvtf-inserttable">Insert shortcode into Editor</button>
</div>
<br />
<div id="w3exvtf-dialogstyles">
<table class="custstyle-table">
	<tr>
		<td>
			 <input type="radio" name="w3exvtf-custstyle" value="0" checked="checked" id="w3exvtf-noborders">
			 <label for="w3exvtf-noborders">No borders</label>
		</td>
		<td style="border-right: none;">
			 <input type="radio" name="w3exvtf-custstyle" value="1" id="w3exvtf-rowborders">
			 <label for="w3exvtf-rowborders">Row borders</label>
		</td>
		<td style="border-left: none;">
			<table class="custstyle-table-rowb">
				<tr >
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
				</tr>
				<tr >
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
				</tr>
				<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
				</tr>
			</table>
		</td>
		<td style="border-right: none;">
			 <input type="radio" name="w3exvtf-custstyle" value="2" id="w3exvtf-cellborders">
			 <label for="w3exvtf-cellborders">Cell borders</label>
		</td>
		<td style="border-left: none;">
			<table class="custstyle-table-rowc">
				<tr >
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
				</tr>
				<tr >
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
				</tr>
				<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
				</tr>
			</table>
		</td>
		<td>
			<table class="tablelayout">
			<tr>
				<td>
				&nbsp;&nbsp;&nbsp;&nbsp; Border color:
			 	</td>
				<td>
					<input type='text' id="w3exvtf-custom-border" />
			 	</td>
			</tr>
			 </table>
		</td>
	</tr>
</table>
<br/>
</div>
</div>
