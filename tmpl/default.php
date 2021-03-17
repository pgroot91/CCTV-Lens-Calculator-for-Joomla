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
		<h3><?php echo JText::_('MOD_LENS_CALCULATOR_BREEDTE_H3'); ?></h3>
		<p>
			<label for="answer1"><?php echo JText::_('MOD_LENS_CALCULATOR_STAP1'); ?></label>
			<select name="answer1" id="answer1" size="1" class="form-select"> 
				<option value=0 selected><?php echo JText::_('MOD_LENS_CALCULATOR_FORMAAT'); ?></option> 
				<option value="1"><?php echo JText::_('MOD_LENS_CALCULATOR_1_INCH'); ?></option> 
				<option value="2"><?php echo JText::_('MOD_LENS_CALCULATOR_2_3_INCH'); ?></option> 
				<option value="3"><?php echo JText::_('MOD_LENS_CALCULATOR_1_2_INCH'); ?></option> 
				<option value="4"><?php echo JText::_('MOD_LENS_CALCULATOR_1_3_INCH'); ?></option> 
				<option value="5"><?php echo JText::_('MOD_LENS_CALCULATOR_1_4_INCH'); ?></option>
			</select>
		</p>
		<p>
			<label for="breedte-objectafstand"><?php echo JText::_('MOD_LENS_CALCULATOR_STAP2'); ?></label>
			<input type="number" name="objectafstand" id="breedte-objectafstand" class="form-control" min="0" max="999" placeholder="0" />
			<small><?php echo JText::_('MOD_LENS_CALCULATOR_HELE_METERS'); ?></small>
		</p>
		<p>
			<label for="objectbreedte"><?php echo JText::_('MOD_LENS_CALCULATOR_STAP3_BREEDTE'); ?></label>
			<input type="number" name="objectbreedte" id="objectbreedte" class="form-control" min="0" max="999" placeholder="0" /> 
			<small><?php echo JText::_('MOD_LENS_CALCULATOR_HELE_METERS'); ?></small>
		</p>
		<p>
			<button type="button" name="submit" onclick="compute_it_breedte()" class="btn btn-primary"><?php echo JText::_('MOD_LENS_CALCULATOR_BEREKEN'); ?></button>
			<button type="reset" name="submit" class="btn btn-secondary"><?php echo JText::_('MOD_LENS_CALCULATOR_NIEUWE_BEREKENING'); ?></button>
		</p>
		<p class="result">
			<?php echo JText::_('MOD_LENS_CALCULATOR_GEBRUIK'); ?> 
			<input name="output" class="form-control" size="5" readonly /> 
			<?php echo JText::_('MOD_LENS_CALCULATOR_OBJECTIEF'); ?>
		</p>
	</form>
  
	<form name="hoogte" autocomplete="off">
		<h3><?php echo JText::_('MOD_LENS_CALCULATOR_HOOGTE_H3'); ?></h3>
		<p>
			<label for="hoogte-answer"><?php echo JText::_('MOD_LENS_CALCULATOR_STAP1'); ?></label>
			<select name="answer1" id="hoogte-answer" size="1" class="form-select"> 
				<option value=0 selected><?php echo JText::_('MOD_LENS_CALCULATOR_FORMAAT'); ?></option> 
				<option value="1"><?php echo JText::_('MOD_LENS_CALCULATOR_1_INCH'); ?></option> 
				<option value="2"><?php echo JText::_('MOD_LENS_CALCULATOR_2_3_INCH'); ?></option> 
				<option value="3"><?php echo JText::_('MOD_LENS_CALCULATOR_1_2_INCH'); ?></option> 
				<option value="4"><?php echo JText::_('MOD_LENS_CALCULATOR_1_3_INCH'); ?></option> 
				<option value="5"><?php echo JText::_('MOD_LENS_CALCULATOR_1_4_INCH'); ?></option>
			</select>
		</p>
        <p>
			<label for="hoogte-objectafstand"><?php echo JText::_('MOD_LENS_CALCULATOR_STAP2'); ?></label>
			<input type="number" name="objectafstand" id="hoogte-objectafstand" class="form-control" min="0" max="999" placeholder="0" />
			<small><?php echo JText::_('MOD_LENS_CALCULATOR_HELE_METERS'); ?></small>
		</p>
		<p>
			<label for="objecthoogte"><?php echo JText::_('MOD_LENS_CALCULATOR_STAP3_HOOGTE'); ?></label>
			<input type="number" name="objecthoogte" id="objecthoogte" class="form-control" min="0" max="999" placeholder="0" />
			<small><?php echo JText::_('MOD_LENS_CALCULATOR_HELE_METERS'); ?></small>
		</p>
		<p>
			<button type="button" name="submit" onclick="compute_it_hoogte()" class="btn btn-primary"><?php echo JText::_('MOD_LENS_CALCULATOR_BEREKEN'); ?></button>
			<button type="reset" name="submit" class="btn btn-secondary"><?php echo JText::_('MOD_LENS_CALCULATOR_NIEUWE_BEREKENING'); ?></button>
		</p>
		<p class="result">
			<?php echo JText::_('MOD_LENS_CALCULATOR_GEBRUIK'); ?>
			<input name="output" class="form-control" size="5" readonly />
			<?php echo JText::_('MOD_LENS_CALCULATOR_OBJECTIEF'); ?>
		</p>
	</form>
	
</div>