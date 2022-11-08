<div class="col-md-4">
	<div class="box_style_1">
		<div class="box_contact">
			<i class="icon_set_1_icon-41"></i>
			<h4><?PHP echo _("Address");?></h4>
			<p>Av. del Libertador 1841 - El Calafate<br />Patagonia Argentina<br>
				<!--<a href="tel://005402902495922">+54 02902 495 922</a>-->
			</p>
		</div>
		<div class="box_contact">
			<i class="icon_set_1_icon-37"></i>
			<h4><?PHP echo _("Get directions");?></h4>
			<form action="https://maps.google.com/maps" method="get" target="_blank">
				<div class="form-group">
					<input type="text" name="saddr" placeholder="<?PHP echo _('Enter your starting point');?>" class="form-control" />
					<input type="hidden" name="daddr" value="red house hostel, calafate, santa cruz"/><!-- Write here your end point -->
				</div>
				<div class="form-group">
					<button class="btn_1" type="submit" value="Get directions"><?PHP echo _('Get directions');?></button>
				</div>
			</form>
		</div>
	</div>
</div>