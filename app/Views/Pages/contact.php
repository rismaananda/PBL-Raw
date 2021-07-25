<!-- Start Contact -->
<!-- <section id="contact-us" class="contact-us section">
	<div class="container mx-auto">
		<div class="contact-head"> -->
<div class="small-container-contact">
	<div class="col-contact">
		<div class="small-container-contact contact-page">
			<div class="title-contact">
				<h4>Get in touch</h4>
				<h3> Write us a message</h3>
				<br>
				<br>
			</div>
			<form class="form" method="POST" action="/contact/save">
				<?= csrf_field(); ?>
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="form-group">
							<label>Your Name<span>*</span></label>
							<input name="nama_fb" id="nama_fb" type="text" required placeholder="Full Name">
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="form-group">
							<label>Your Subjects<span>*</span></label>
							<input name="subjek_fb" id="subjek_id" type="text" required placeholder="Subjects">
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="form-group">
							<label>Your Email<span>*</span></label>
							<input name="email_fb" id="email_fb" type="email" rewuired placeholder="example.apbpa@gmail.com">
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="form-group">
							<label>Your Phone<span>*</span></label>
							<input name="nomor_fb" id="nomor_fb" type="text" required placeholder="+6289011223355">
						</div>
					</div>
					<div class="col-12">
						<div class="form-group message">
							<label>your message<span>*</span></label>
							<textarea name="pesan_fb" id="pesan_fb" rewuired placeholder=""></textarea>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group button">
							<button type="submit" class="btn-home ">Send Message</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- </div>
</div>
</div> -->
	</section>
	<!--/ End Contact -->