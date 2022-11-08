<div class="col-md-7 col-md-offset-1">
            
            <div id="message-contact"></div>
				<form method="post" action="assets/contact.php" id="contactform">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label><?PHP echo _('Name');?></label>
								<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="<?PHP echo _('Enter');?> <?PHP echo _('Name');?>">
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="<?PHP echo _('Enter');?> Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label><?PHP echo _('Phone');?></label>
								<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="<?PHP echo _('Enter');?> <?PHP echo _('Phone number');?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label><?PHP echo _('Message');?></label>
								<textarea id="message_contact" name="message_contact" class="form-control" placeholder="<?PHP echo _('Write').' '._('your').' '._('message');?>" style="height:150px;"></textarea>
							</div>
						</div>
					</div>
					<div class="row add_bottom_30">
						<div class="col-md-6">
                        	<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
							<input type="submit" value="<?PHP echo _("Submit");?>" class="btn_1" id="submit-contact">
						</div>
					</div>
				</form>               
            </div><!-- End col-md-8 --> 