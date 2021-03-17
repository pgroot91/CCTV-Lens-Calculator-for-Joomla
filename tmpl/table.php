<?php 

defined('_JEXEC') or die('Direct Access to this location is not allowed.');

/**
*
* @package Lens Calculator
* @copyright Patrick Groot; 
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Homepage: http://www.patrickgroot.com
* @version: 1.0 
* Created on December 10, 2012
*
**/

JText::script('MOD_LENS_CALCULATOR_MESSAGE_1');
JText::script('MOD_LENS_CALCULATOR_MESSAGE_2');
JText::script('MOD_LENS_CALCULATOR_MESSAGE_3B');
JText::script('MOD_LENS_CALCULATOR_MESSAGE_3H');
JText::script('MOD_LENS_CALCULATOR_NNB');

?>

<div>

	<h1><?php echo $title; ?></h1>
	<p><?php echo JText::_('MOD_LENS_CALCULATOR_DESCRIPTION'); ?></p>


    <form name="breedte" autocomplete="off">
		<fieldset>
			<legend>
				<h3><?php echo JText::_('MOD_LENS_CALCULATOR_BREEDTE_H3'); ?></h3>
			</legend>
			<table class="lc-table">
				<tr>
					<td width="40%">
						<label for="answer1"><?php echo JText::_('MOD_LENS_CALCULATOR_STAP1'); ?></label>
					</td>
					<td width="60%">
						<select name="answer1" id="answer1" size="1" class="form-select"> 
							<option value=0 selected><?php echo JText::_('MOD_LENS_CALCULATOR_FORMAAT'); ?></option> 
							<option value="1"><?php echo JText::_('MOD_LENS_CALCULATOR_1_INCH'); ?></option> 
							<option value="2"><?php echo JText::_('MOD_LENS_CALCULATOR_2_3_INCH'); ?></option> 
							<option value="3"><?php echo JText::_('MOD_LENS_CALCULATOR_1_2_INCH'); ?></option> 
							<option value="4"><?php echo JText::_('MOD_LENS_CALCULATOR_1_3_INCH'); ?></option> 
							<option value="5"><?php echo JText::_('MOD_LENS_CALCULATOR_1_4_INCH'); ?></option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for="breedte-objectafstand"><?php echo JText::_('MOD_LENS_CALCULATOR_STAP2'); ?></label>
					</td>
					<td>
						<input type="number" name="objectafstand" id="breedte-objectafstand" class="form-control" min="0" max="999" placeholder="0" />
						<small><?php echo JText::_('MOD_LENS_CALCULATOR_HELE_METERS'); ?></small>
					</td>
				</tr>
				<tr>
					<td>
						<label for="objectbreedte"><?php echo JText::_('MOD_LENS_CALCULATOR_STAP3_BREEDTE'); ?></label>
					</td>
					<td>
						<input type="number" name="objectbreedte" id="objectbreedte" class="form-control" min="0" max="999" placeholder="0" /> 
						<small><?php echo JText::_('MOD_LENS_CALCULATOR_HELE_METERS'); ?></small>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button type="button" name="submit" onclick="compute_it_breedte()" class="btn btn-primary"><?php echo JText::_('MOD_LENS_CALCULATOR_BEREKEN'); ?></button>
						<button type="reset" name="submit" class="btn btn-secondary"><?php echo JText::_('MOD_LENS_CALCULATOR_NIEUWE_BEREKENING'); ?></button>
					</td>
				</tr>
				<tr>
					<td align="right"><?php echo JText::_('MOD_LENS_CALCULATOR_GEBRUIK'); ?> </td>
					<td>
						<input name="output" class="form-control" size="5" readonly />
						<?php echo JText::_('MOD_LENS_CALCULATOR_OBJECTIEF'); ?>
					</td>
				</tr>          
			</table>
		</fieldset>
	</form>
  
	<form name="hoogte" autocomplete="off">
		<fieldset>
			<legend>
				<h3><?php echo JText::_('MOD_LENS_CALCULATOR_HOOGTE_H3'); ?></h3>
			</legend>
			<table class="lc-table">
				<tr>
					<td width="40%">
						<label for="hoogte-answer"><?php echo JText::_('MOD_LENS_CALCULATOR_STAP1'); ?></label>
					</td>
					<td width="60%">
						<select name="answer1" id="hoogte-answer" size="1" class="form-select"> 
							<option value=0 selected><?php echo JText::_('MOD_LENS_CALCULATOR_FORMAAT'); ?></option> 
							<option value="1"><?php echo JText::_('MOD_LENS_CALCULATOR_1_INCH'); ?></option> 
							<option value="2"><?php echo JText::_('MOD_LENS_CALCULATOR_2_3_INCH'); ?></option> 
							<option value="3"><?php echo JText::_('MOD_LENS_CALCULATOR_1_2_INCH'); ?></option> 
							<option value="4"><?php echo JText::_('MOD_LENS_CALCULATOR_1_3_INCH'); ?></option> 
							<option value="5"><?php echo JText::_('MOD_LENS_CALCULATOR_1_4_INCH'); ?></option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for="hoogte-objectafstand"><?php echo JText::_('MOD_LENS_CALCULATOR_STAP2'); ?></label>
					</td>
					<td>
						<input type="number" name="objectafstand" id="hoogte-objectafstand" class="form-control" min="0" max="999" placeholder="0" /> 
						<small><?php echo JText::_('MOD_LENS_CALCULATOR_HELE_METERS'); ?></small>
					</td>
				</tr>
				<tr>
					<td>
						<label for="objecthoogte"><?php echo JText::_('MOD_LENS_CALCULATOR_STAP3_HOOGTE'); ?></label>
					</td>
					<td>
						<input type="number" name="objecthoogte" id="objecthoogte" class="form-control" min="0" max="999" placeholder="0" /> 
						<small><?php echo JText::_('MOD_LENS_CALCULATOR_HELE_METERS'); ?></small>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button type="button" name="submit" onclick="compute_it_hoogte()" class="btn btn-primary"><?php echo JText::_('MOD_LENS_CALCULATOR_BEREKEN'); ?></button>
						<button type="reset" name="submit" class="btn btn-secondary"><?php echo JText::_('MOD_LENS_CALCULATOR_NIEUWE_BEREKENING'); ?></button>
					</td>
				</tr>
				<tr>
					<td align="right">
						<?php echo JText::_('MOD_LENS_CALCULATOR_GEBRUIK'); ?>
					</td>
					<td>
						<input name="output" class="form-control" size="5" readonly />
						<?php echo JText::_('MOD_LENS_CALCULATOR_OBJECTIEF'); ?>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	
</div>