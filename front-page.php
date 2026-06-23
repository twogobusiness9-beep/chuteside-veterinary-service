<?php
/**
 * Front page (homepage). All copy below is plain, editable HTML.
 *
 * @package Chuteside
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$img = get_stylesheet_directory_uri() . '/assets/images';
?>

<section class="hero">
	<div class="container hero-inner">
		<span class="eyebrow"><?php esc_html_e( 'Three Forks, Montana · Since 1993', 'chuteside' ); ?></span>
		<h1><?php esc_html_e( 'Trusted Large-Animal Care for Montana Ranches', 'chuteside' ); ?></h1>
		<p class="hero-lead"><?php esc_html_e( 'On-farm and in-clinic veterinary care for cattle, horses, pigs and goats — from herd health and calving to dentistry and emergencies, across the Gallatin Valley.', 'chuteside' ); ?></p>
		<div class="hero-cta">
			<a class="btn btn-primary btn-lg" href="#appointment"><?php esc_html_e( 'Request a Visit', 'chuteside' ); ?></a>
			<a class="btn btn-ghost btn-lg" href="tel:+14062853923"><?php esc_html_e( 'Call (406) 285-3923', 'chuteside' ); ?></a>
		</div>
		<p class="hero-note"><span>🚑</span> <strong><?php esc_html_e( '24-hour emergency service', 'chuteside' ); ?></strong> — <?php esc_html_e( 'we come to your operation when it counts.', 'chuteside' ); ?></p>
	</div>
</section>

<section class="trust">
	<div class="container">
		<div class="trust-grid">
			<div><div class="num"><?php esc_html_e( '30+ yrs', 'chuteside' ); ?></div><div class="label"><?php esc_html_e( 'Caring for livestock', 'chuteside' ); ?></div></div>
			<div><div class="num"><?php esc_html_e( '24/7', 'chuteside' ); ?></div><div class="label"><?php esc_html_e( 'Emergency service', 'chuteside' ); ?></div></div>
			<div><div class="num"><?php esc_html_e( '4 Counties', 'chuteside' ); ?></div><div class="label"><?php esc_html_e( 'Across the valley', 'chuteside' ); ?></div></div>
			<div><div class="num"><?php esc_html_e( 'On-Farm', 'chuteside' ); ?></div><div class="label"><?php esc_html_e( '&amp; in-clinic care', 'chuteside' ); ?></div></div>
		</div>
	</div>
</section>

<section id="services" class="section services">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'What We Do', 'chuteside' ); ?></span>
			<h2 class="section-title"><?php esc_html_e( 'Care for Every Animal in Your Operation', 'chuteside' ); ?></h2>
			<p class="section-sub"><?php esc_html_e( 'Practical, experienced veterinary care tailored to working ranches, hobby farms, and everything in between.', 'chuteside' ); ?></p>
		</div>

		<div class="service-grid">
			<?php
			$services = array(
				array( '🐄', 'Cattle (Bovine)', 'Herd health programs, pregnancy checks, vaccinations, and calving assistance — in the chute or in the field.' ),
				array( '🐴', 'Horses (Equine)', 'Wellness exams, equine dentistry, lameness work, and emergency care for your horses.' ),
				array( '🐐', 'Pigs &amp; Goats', 'Routine and preventive care for porcine and caprine patients, big and small.' ),
				array( '🩺', 'Herd Health &amp; Vaccines', 'Preventive programs that keep your whole herd productive and protected year-round.' ),
				array( '🦷', 'Dental &amp; Floating', 'Equine dentistry and teeth floating to keep your animals eating and working comfortably.' ),
				array( '🚑', '24-Hour Emergencies', 'When something goes wrong after hours, we are on call and ready to come to you.' ),
			);
			foreach ( $services as $svc ) :
				?>
				<div class="service-card">
					<div class="chip"><?php echo wp_kses_post( $svc[0] ); ?></div>
					<h3><?php echo wp_kses_post( $svc[1] ); ?></h3>
					<p><?php echo esc_html( $svc[2] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section id="about" class="section about">
	<div class="container about-grid">
		<div class="about-media">
			<img src="<?php echo esc_url( $img . '/clinic-sunset.png' ); ?>" alt="<?php esc_attr_e( 'Chuteside Veterinary Service clinic at sunset', 'chuteside' ); ?>">
		</div>
		<div class="about-content">
			<span class="eyebrow"><?php esc_html_e( 'About the Practice', 'chuteside' ); ?></span>
			<h2><?php esc_html_e( 'Ranchers Treating You Like a Neighbor', 'chuteside' ); ?></h2>
			<p><?php esc_html_e( 'Chuteside Veterinary Service has cared for the livestock of southwest Montana for three decades. We know what your animals — and your livelihood — mean to you, and we bring straight talk and steady hands to every visit.', 'chuteside' ); ?></p>
			<ul class="checklist">
				<li><?php esc_html_e( 'On-farm visits across the Gallatin Valley', 'chuteside' ); ?></li>
				<li><?php esc_html_e( 'Experienced with cattle, horses, pigs and goats', 'chuteside' ); ?></li>
				<li><?php esc_html_e( '24-hour emergency availability', 'chuteside' ); ?></li>
				<li><?php esc_html_e( 'Honest advice that respects your bottom line', 'chuteside' ); ?></li>
			</ul>
			<div class="vets">
				<span>Dr. Will Oliver</span>
				<span>Dr. Chelsey Petz</span>
			</div>
		</div>
	</div>
</section>

<section id="patients" class="section section-sm patients">
	<div class="container">
		<div class="section-head">
			<span class="eyebrow"><?php esc_html_e( 'Our Patients', 'chuteside' ); ?></span>
			<h2 class="section-title"><?php esc_html_e( 'A Few of the Faces We Care For', 'chuteside' ); ?></h2>
		</div>
		<div class="patient-grid">
			<figure>
				<img src="<?php echo esc_url( $img . '/patient-cattle.png' ); ?>" alt="<?php esc_attr_e( 'Cattle and horse in the pens', 'chuteside' ); ?>">
				<figcaption><?php esc_html_e( 'Cattle &amp; Horses', 'chuteside' ); ?></figcaption>
			</figure>
			<figure>
				<img src="<?php echo esc_url( $img . '/patient-goat.png' ); ?>" alt="<?php esc_attr_e( 'Young goat patient', 'chuteside' ); ?>">
				<figcaption><?php esc_html_e( 'Goats', 'chuteside' ); ?></figcaption>
			</figure>
			<figure>
				<img src="<?php echo esc_url( $img . '/patient-pig.png' ); ?>" alt="<?php esc_attr_e( 'Pig patient at the clinic', 'chuteside' ); ?>">
				<figcaption><?php esc_html_e( 'Pigs', 'chuteside' ); ?></figcaption>
			</figure>
		</div>
	</div>
</section>

<section class="promo">
	<div class="container promo-inner">
		<div>
			<h2><?php esc_html_e( '20% Off In-Clinic Equine Dentistry', 'chuteside' ); ?></h2>
			<p><?php esc_html_e( 'Now through March 15 — book your horse&rsquo;s dental float and save.', 'chuteside' ); ?></p>
		</div>
		<a class="btn btn-primary btn-lg" href="#appointment"><?php esc_html_e( 'Book the Offer', 'chuteside' ); ?></a>
	</div>
</section>

<section id="appointment" class="section appointment">
	<div class="container appt-grid">
		<div class="appt-info">
			<span class="eyebrow"><?php esc_html_e( 'Request a Visit', 'chuteside' ); ?></span>
			<h2><?php esc_html_e( 'Schedule on-farm or in-clinic care', 'chuteside' ); ?></h2>
			<p><?php esc_html_e( 'Tell us about your animals and we&rsquo;ll get back to you to set up a time. For emergencies, please call us directly.', 'chuteside' ); ?></p>

			<div class="contact-line"><span class="ic">📞</span><span><a href="tel:+14062853923">(406) 285-3923</a></span></div>
			<div class="contact-line"><span class="ic">✉️</span><span><a href="mailto:info@chutesidevet.com">info@chutesidevet.com</a></span></div>
			<div class="contact-line"><span class="ic">📍</span><span><?php esc_html_e( '2520 Bench Road, Three Forks, MT 59752', 'chuteside' ); ?></span></div>
			<div class="contact-line"><span class="ic">🕐</span><span><?php esc_html_e( 'Monday – Friday · 8:00 AM – 5:00 PM (24/7 emergencies)', 'chuteside' ); ?></span></div>

			<div style="margin-top:1.4rem;border-radius:var(--radius);overflow:hidden;border:1px solid var(--line);">
				<iframe
					title="<?php esc_attr_e( 'Map to Chuteside Veterinary Service', 'chuteside' ); ?>"
					src="https://maps.google.com/maps?q=2520%20Bench%20Road%2C%20Three%20Forks%2C%20MT%2059752&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
					width="100%" height="240" style="border:0;display:block;" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>

		<div class="appt-form-wrap">
			<form id="apptForm" class="appt-form" novalidate>
				<div class="field-row">
					<div class="field">
						<label for="af-name"><?php esc_html_e( 'Your Name', 'chuteside' ); ?></label>
						<input id="af-name" name="full_name" type="text" required>
					</div>
					<div class="field">
						<label for="af-phone"><?php esc_html_e( 'Phone', 'chuteside' ); ?></label>
						<input id="af-phone" name="phone" type="tel" required>
					</div>
				</div>
				<div class="field-row">
					<div class="field">
						<label for="af-animal"><?php esc_html_e( 'Animal', 'chuteside' ); ?></label>
						<select id="af-animal" name="animal">
							<option><?php esc_html_e( 'Cattle', 'chuteside' ); ?></option>
							<option><?php esc_html_e( 'Horse', 'chuteside' ); ?></option>
							<option><?php esc_html_e( 'Pig', 'chuteside' ); ?></option>
							<option><?php esc_html_e( 'Goat', 'chuteside' ); ?></option>
							<option><?php esc_html_e( 'Other', 'chuteside' ); ?></option>
						</select>
					</div>
					<div class="field">
						<label for="af-date"><?php esc_html_e( 'Preferred Date', 'chuteside' ); ?></label>
						<input id="af-date" name="date" type="date">
					</div>
				</div>
				<div class="field">
					<label for="af-msg"><?php esc_html_e( 'How can we help?', 'chuteside' ); ?></label>
					<textarea id="af-msg" name="message" rows="3" placeholder="<?php esc_attr_e( 'e.g. preg-check 40 head, lame horse, sick goat…', 'chuteside' ); ?>"></textarea>
				</div>
				<button class="btn btn-green btn-lg" type="submit" style="width:100%;justify-content:center;"><?php esc_html_e( 'Send Request', 'chuteside' ); ?></button>
				<p class="form-note"><?php esc_html_e( 'We&rsquo;ll call to confirm. For emergencies, call (406) 285-3923.', 'chuteside' ); ?></p>
			</form>

			<div id="apptSuccess" class="appt-success">
				<div class="check">✓</div>
				<h3><?php esc_html_e( 'Thanks,', 'chuteside' ); ?> <span class="appt-success-name"></span>!</h3>
				<p><?php esc_html_e( 'Your request is in. To set up a time right away, give us a call at', 'chuteside' ); ?> <a href="tel:+14062853923"><strong>(406) 285-3923</strong></a>.</p>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
