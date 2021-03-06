<!--
	autor: Markovic Milos, 0096/2012
	@version: 1.1
-->
<?php echo form_open('koordinator/unosPredmeta'); ?>
<div class="col col-lg-2 col-md-3 col-sm-3 col-xs-12 left-container">
	<div class="tm-left-inner-container">
		<ul class="nav nav-stacked css-nav">
			<li><a href="<?php echo base_url(); ?>koordinator/home">Početna</a></li>
			<li><a href="<?php echo base_url(); ?>koordinator/predmeti">Predmeti</a></li>
			<li><a href="<?php echo base_url(); ?>koordinator/ra	spored">Raspored časova</a></li>
			<li><a href="<?php echo base_url(); ?>koordinator/uredjivanje">Uređivanje naloga</a></li>
		</ul>
	</div>
</div>
<div class="col col-lg-8 col-md-7 col-sm-7 col-xs-12 right-container">	
	<div class="tm-right-inner-container">
		
		
<div class="row">
	<div class="col-md-6">
		<h1 class="text-center"><?php echo $title; ?></h1>
		
			<div class="form-group">
				<label>Ime predmeta</label>
				<input type="text" class="form-control" name="ime" placeholder="Ime">
			</div>
			
			<div class="form-group">
					<label>Nastavnik:</label>
					<?php
						echo "<select name='nastavnik'>";
						foreach($nastavnici->result() as $row) {
							foreach($users->result() as $rowU)
							{
								if($row->id === $rowU->id){
								?>
								echo "<option value="<?php echo $rowU->id; ?>"><?php echo $rowU->name; ?> <?php echo $rowU->surname; ?></option>"; 
								<?php
								}
							}
						}
						echo "</select>";
					?>
				</div>
				
				
			<div>
				
				
				
			<div class="form-group">
				<label>Školska godina</label>
				<input type="number" name="skolskaGodina" min="1" max="4">
				
			</div>
			<div class="form-group">
				<label>Kabineti</label>
				<input type="text" class="form-control" name="kabineti" placeholder="Kabinet">
			</div>
			
			

			
			<button type="submit" class="btn btn-primary btn-block">Unesi</button>
			
</div>		
		
		
	</div>	
</div>

<?php echo form_close(); ?>