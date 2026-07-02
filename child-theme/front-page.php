<?php
/**
 * MVP launch homepage for mayrachaparro.com.
 *
 * @package mayrachaparro-child
 */

$whatsapp_url    = 'https://wa.me/5214427928045';
$hero_image_url  = 'https://mayrachaparro.com/wp-content/uploads/2026/07/dra-mayra-chaparro-hero.png';
$about_image_url = 'https://mayrachaparro.com/wp-content/uploads/2026/07/dra-mayra-chaparro-about.png';
$seo_title       = 'Dra. Mayra Chaparro | Odontología familiar en Querétaro';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	ob_start();
	wp_head();
	$mch_head = ob_get_clean();
	$mch_head = preg_replace( '/<title>.*?<\/title>/s', '<title>' . esc_html( $seo_title ) . '</title>', $mch_head, 1 );
	echo $mch_head; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	?>
</head>
<body <?php body_class( 'mch-home' ); ?>>
<?php wp_body_open(); ?>

<a class="mch-skip-link" href="#contenido-principal">Saltar al contenido</a>

<header class="mch-site-header" id="inicio">
	<div class="mch-container mch-header-inner">
		<a class="mch-brand" href="#inicio" aria-label="Ir al inicio">
			<span class="mch-brand-name">Dra. Mayra Chaparro</span>
			<span class="mch-brand-subtitle">Odontología familiar y preventiva</span>
		</a>

		<nav class="mch-main-nav" aria-label="Navegación principal">
			<a href="#inicio">Inicio</a>
			<a href="#servicios">Servicios</a>
			<a href="#conoce-a-mayra">Conoce a Mayra</a>
			<a href="#preguntas-frecuentes">Preguntas frecuentes</a>
			<a href="#contacto">Contacto</a>
		</nav>

		<a class="mch-header-cta" href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener">
			Agendar cita
		</a>
	</div>
</header>

<main id="contenido-principal">
	<section class="mch-hero" aria-labelledby="hero-title">
		<div class="mch-container mch-hero-grid">
			<div class="mch-hero-copy">
				<p class="mch-eyebrow">Odontología familiar en Querétaro</p>
				<h1 id="hero-title">La tranquilidad de cuidar tu sonrisa con alguien en quien puedes confiar.</h1>
				<p class="mch-hero-subtitle">Atención cercana para niños, adultos y familias, con un enfoque preventivo, claro y humano.</p>

				<div class="mch-button-group">
					<a class="mch-button mch-button-primary" href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener">
						Agendar cita por WhatsApp
					</a>
					<a class="mch-button mch-button-secondary" href="#conoce-a-mayra">
						Conoce a la Dra. Mayra
					</a>
				</div>

				<p class="mch-microcopy">Sin juicios. Sin presión. Con explicación clara.</p>
			</div>

			<?php if ( $hero_image_url ) : ?>
				<div class="mch-photo-frame mch-photo-frame-hero">
					<img src="<?php echo esc_url( $hero_image_url ); ?>" alt="Dra. Mayra Chaparro">
				</div>
			<?php else : ?>
				<div class="mch-photo-placeholder mch-photo-placeholder-hero" role="img" aria-label="Espacio para foto principal de la Dra. Mayra">
					<span>Foto principal de la Dra. Mayra aquí</span>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<section class="mch-section mch-trust" aria-labelledby="confianza-title">
		<div class="mch-container mch-narrow">
			<h2 id="confianza-title">Ir al dentista no debería empezar con miedo.</h2>
			<p>Muchas personas llegan al consultorio después de malas experiencias, dolor o años de postergar su salud bucal. La atención de la Dra. Mayra está pensada para que entiendas qué está pasando, qué opciones tienes y cómo cuidar mejor tu sonrisa sin sentirte juzgado.</p>

			<div class="mch-trust-points" aria-label="Puntos de confianza">
				<p>Escucha antes de diagnosticar.</p>
				<p>Explica antes de decidir.</p>
				<p>Acompaña antes de tratar.</p>
			</div>
		</div>
	</section>

	<section class="mch-section" id="servicios" aria-labelledby="servicios-title">
		<div class="mch-container">
			<div class="mch-section-heading">
				<h2 id="servicios-title">¿Cómo puedo ayudarte?</h2>
				<p>Servicios dentales para cuidar, prevenir y resolver lo que hoy necesita tu sonrisa.</p>
			</div>

			<div class="mch-services-grid">
				<article class="mch-service-card">
					<h3>Limpieza dental</h3>
					<p>Para mantener encías sanas, prevenir problemas y sentir tu boca más limpia y fresca.</p>
				</article>
				<article class="mch-service-card">
					<h3>Valoración integral</h3>
					<p>Revisión completa para entender el estado actual de tu salud bucal y definir los siguientes pasos.</p>
				</article>
				<article class="mch-service-card">
					<h3>Odontología preventiva</h3>
					<p>Acompañamiento para evitar problemas antes de que aparezcan o se compliquen.</p>
				</article>
				<article class="mch-service-card">
					<h3>Odontología familiar</h3>
					<p>Atención cercana para niños, adultos y familias que buscan una doctora de confianza.</p>
				</article>
				<article class="mch-service-card">
					<h3>Resinas dentales</h3>
					<p>Restauraciones estéticas y funcionales para recuperar dientes afectados por caries o fracturas pequeñas.</p>
				</article>
				<article class="mch-service-card">
					<h3>Blanqueamiento dental</h3>
					<p>Una opción para mejorar el tono de tu sonrisa con valoración profesional previa.</p>
				</article>
				<article class="mch-service-card">
					<h3>Urgencias dentales</h3>
					<p>Atención para dolor, molestias o situaciones que no pueden esperar.</p>
				</article>
			</div>

			<div class="mch-centered-action">
				<a class="mch-button mch-button-primary" href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener">
					Agendar valoración
				</a>
			</div>
		</div>
	</section>

	<section class="mch-section mch-doctor" id="conoce-a-mayra" aria-labelledby="mayra-title">
		<div class="mch-container mch-doctor-grid">
			<?php if ( $about_image_url ) : ?>
				<div class="mch-photo-frame mch-photo-frame-secondary">
					<img src="<?php echo esc_url( $about_image_url ); ?>" alt="Dra. Mayra Chaparro">
				</div>
			<?php else : ?>
				<div class="mch-photo-placeholder mch-photo-placeholder-secondary" role="img" aria-label="Espacio para foto secundaria de la Dra. Mayra">
					<span>Foto secundaria de la Dra. Mayra aquí</span>
				</div>
			<?php endif; ?>

			<div class="mch-doctor-copy">
				<p class="mch-eyebrow">Conoce a tu doctora</p>
				<h2 id="mayra-title">Una atención dental cercana, clara y sin juicios.</h2>
				<p>La Dra. Mayra Chaparro entiende que detrás de cada paciente hay una historia, una experiencia previa y muchas veces también miedo. Por eso su forma de atender se basa en escuchar, explicar y acompañar.</p>
				<p>No se trata solo de resolver un problema dental. Se trata de ayudarte a sentir tranquilidad y confianza para cuidar tu salud bucal y la de tu familia.</p>

				<ul class="mch-check-list">
					<li>Atención para niños, adultos y familias.</li>
					<li>Enfoque preventivo y humano.</li>
					<li>Explicaciones claras antes de iniciar cualquier tratamiento.</li>
					<li>Agenda sencilla por WhatsApp.</li>
				</ul>

				<a class="mch-button mch-button-primary" href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener">
					Agendar cita
				</a>
			</div>
		</div>
	</section>

	<section class="mch-section mch-philosophy" aria-labelledby="prevencion-title">
		<div class="mch-container">
			<div class="mch-highlight-block">
				<h2 id="prevencion-title">Una sonrisa sana empieza en los hábitos de una familia.</h2>
				<p>La prevención no empieza cuando duele. Empieza mucho antes: con información clara, revisiones periódicas y pequeños hábitos que ayudan a evitar problemas mayores.</p>
				<p>Este sitio es el primer paso de una visión más grande: ayudar a más familias a entender que cuidar su salud bucal también es cuidar su vida.</p>
			</div>
		</div>
	</section>

	<section class="mch-section" aria-labelledby="testimonios-title">
		<div class="mch-container mch-narrow mch-testimonials">
			<h2 id="testimonios-title">Pacientes que vuelven con confianza.</h2>
			<p>Muy pronto compartiremos experiencias reales de pacientes que han confiado en la Dra. Mayra Chaparro.</p>
		</div>
	</section>

	<section class="mch-section mch-faq" id="preguntas-frecuentes" aria-labelledby="faq-title">
		<div class="mch-container">
			<div class="mch-section-heading">
				<h2 id="faq-title">Preguntas frecuentes</h2>
			</div>

			<div class="mch-faq-list">
				<details>
					<summary>¿Atiendes niños?</summary>
					<p>Sí. La atención está pensada para que los niños se sientan tranquilos y acompañados durante su visita.</p>
				</details>
				<details>
					<summary>¿Puedo agendar por WhatsApp?</summary>
					<p>Sí. Puedes escribir directamente por WhatsApp para consultar disponibilidad y agendar tu cita.</p>
				</details>
				<details>
					<summary>¿Qué pasa si me da miedo ir al dentista?</summary>
					<p>Es más común de lo que parece. La consulta se realiza con calma, explicación clara y sin juicios.</p>
				</details>
				<details>
					<summary>¿Necesito una valoración antes de un tratamiento?</summary>
					<p>Sí. Antes de recomendar cualquier tratamiento es importante revisar tu caso y explicarte tus opciones.</p>
				</details>
				<details>
					<summary>¿Dónde atiende la Dra. Mayra?</summary>
					<p>Actualmente atiende en Querétaro. Los datos específicos del consultorio se confirmarán al agendar por WhatsApp.</p>
				</details>
			</div>
		</div>
	</section>

	<section class="mch-section mch-contact" id="contacto" aria-labelledby="contacto-title">
		<div class="mch-container mch-contact-panel">
			<div>
				<h2 id="contacto-title">Agenda tu cita con la Dra. Mayra Chaparro.</h2>
				<p>Da el primer paso para cuidar tu salud bucal con una atención cercana, profesional y sin presión.</p>
			</div>

			<div class="mch-contact-action">
				<a class="mch-button mch-button-primary mch-button-large" href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener">
					Agendar cita por WhatsApp
				</a>
				<p>Querétaro, México</p>
				<div class="mch-map-placeholder">Espacio para futura ubicación o mapa</div>
			</div>
		</div>
	</section>
</main>

<footer class="mch-site-footer">
	<div class="mch-container mch-footer-inner">
		<div>
			<p class="mch-footer-brand">Dra. Mayra Chaparro</p>
			<p>Odontología familiar y preventiva en Querétaro</p>
		</div>

		<nav class="mch-footer-nav" aria-label="Navegación de pie de página">
			<a href="#inicio">Inicio</a>
			<a href="#servicios">Servicios</a>
			<a href="#conoce-a-mayra">Conoce a Mayra</a>
			<a href="#preguntas-frecuentes">Preguntas frecuentes</a>
			<a href="#contacto">Contacto</a>
			<a href="/aviso-de-privacidad/">Aviso de privacidad</a>
		</nav>
	</div>

	<div class="mch-container mch-footer-bottom">
		<p>© 2026 Dra. Mayra Chaparro. Todos los derechos reservados.</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
