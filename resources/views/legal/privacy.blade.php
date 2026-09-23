@extends('layouts.site')

{{--
    Política de privacidad. Describe lo que la aplicación hace de verdad: si
    cambias qué datos se recogen, a quién se envían o cuánto se guardan,
    actualiza este texto y la fecha de config/legal.php.
    Los datos del responsable salen del .env (LEGAL_*), ver config/legal.php.
--}}

@section('content')
    <article class="max-w-3xl mx-auto px-4 sm:px-6 py-12">
        <p class="text-xs font-semibold uppercase tracking-wide text-brand-600 dark:text-brand-400">Legal</p>
        <h1 class="mt-2 text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Política de privacidad</h1>
        <p class="mt-3 text-sm text-gray-500 dark:text-gray-400">
            Última actualización:
            <time datetime="{{ $legal['updated'] }}">{{ \Illuminate\Support\Carbon::parse($legal['updated'])->locale('es')->translatedFormat('j \d\e F \d\e Y') }}</time>
        </p>

        <div class="guide-content mt-10">
            <p>
                En ia-skills tratamos solo los datos necesarios para que la web funcione. No vendemos datos, no mostramos
                publicidad y no usamos herramientas de analítica ni cookies de seguimiento. Aquí se explica con detalle qué
                datos tratamos, para qué y cómo puedes controlarlos, conforme al Reglamento General de Protección de Datos
                (RGPD) y a la Ley Orgánica 3/2018 (LOPDGDD).
            </p>

            <h2 id="responsable">1. Quién es el responsable</h2>
            <ul>
                <li><strong>Titular:</strong> {{ $legal['owner'] ?: 'ia-skills' }}</li>
                @if($legal['tax_id'])
                    <li><strong>NIF:</strong> {{ $legal['tax_id'] }}</li>
                @endif
                @if($legal['address'])
                    <li><strong>Domicilio:</strong> {{ $legal['address'] }}</li>
                @endif
                @if($legal['email'])
                    <li><strong>Contacto para temas de privacidad:</strong> <a href="mailto:{{ $legal['email'] }}">{{ $legal['email'] }}</a></li>
                @endif
                <li><strong>Web:</strong> {{ url('/') }}</li>
            </ul>

            <h2 id="datos">2. Qué datos tratamos</h2>
            <p><strong>Si solo navegas</strong>, no te pedimos ningún dato. El servidor registra, como cualquier web, datos técnicos de cada petición (dirección IP, navegador, página solicitada y fecha) para poder funcionar y protegerse de abusos.</p>
            <p><strong>Si creas una cuenta</strong>, tratamos:</p>
            <ul>
                <li>Nombre, email y contraseña. La contraseña se guarda cifrada con un algoritmo irreversible: nadie, tampoco nosotros, puede leerla.</li>
                <li>Nombre de usuario y, si la escribes, una bio. Ambos aparecen en tu perfil público (<code>/autores/tu-usuario</code>).</li>
                <li>Lo que publicas: skills, comentarios y sus versiones. Son públicos y aparecen con tu nombre.</li>
                <li>Tus votos y las skills que guardas. No se muestran a otras personas.</li>
                <li>Tus preferencias de email y, si la generas, tu clave de API (solo guardamos un resumen cifrado, no la clave).</li>
                <li>Mientras tienes la sesión abierta, la dirección IP y el navegador asociados a ella.</li>
            </ul>
            <p><strong>Si te suscribes al resumen semanal sin cuenta</strong>, tratamos tu email, la página desde la que te apuntaste y las fechas de alta, confirmación y baja.</p>

            <h2 id="finalidades">3. Para qué los usamos y con qué base legal</h2>
            <ul>
                <li><strong>Prestar el servicio</strong> (tu cuenta, publicar, votar, guardar, tu perfil público): es necesario para cumplir las condiciones de uso que aceptas al registrarte (art. 6.1.b RGPD).</li>
                <li><strong>Avisos sobre tu actividad</strong> (tu skill se ha aprobado o rechazado, alguien la ha comentado o ha respondido a tu comentario): forman parte del servicio y puedes desactivarlos en cualquier momento desde tu perfil (art. 6.1.b RGPD).</li>
                <li><strong>Resumen semanal por email:</strong> solo si lo pides expresamente. Sin cuenta, además, tienes que confirmarlo desde un email antes de recibir nada. Base legal: tu consentimiento (art. 6.1.a RGPD), que puedes retirar con un clic desde cualquier email.</li>
                <li><strong>Seguridad y prevención de abusos</strong> (límites de peticiones por IP, protección contra spam y accesos no autorizados): interés legítimo en mantener la web segura (art. 6.1.f RGPD).</li>
            </ul>
            <p>No tomamos decisiones automatizadas con efectos sobre ti ni elaboramos perfiles con fines comerciales.</p>

            <h2 id="destinatarios">4. Con quién los compartimos</h2>
            <p>No cedemos datos a terceros. Solo acceden a ellos los proveedores que necesitamos para funcionar, con contrato de encargado del tratamiento:</p>
            <ul>
                <li><strong>Brevo (Sendinblue SAS, Francia, UE)</strong>: envío de los emails de la web. Recibe tu email y el contenido de cada mensaje.</li>
                <li><strong>Alojamiento del servidor</strong>{{ $legal['hosting'] ? ': '.$legal['hosting'] : '' }}. Es donde se guarda la base de datos de la web.</li>
                <li><strong>Google Fonts (Google)</strong>: la tipografía de la web se descarga de los servidores de Google, que reciben tu dirección IP al cargar la página. Google puede tratar estos datos fuera de la UE, amparado por el Marco de Privacidad de Datos UE-EE. UU.</li>
            </ul>
            <p>Lo que publicas en tu perfil, tus skills y tus comentarios es público: cualquiera puede verlo, y los buscadores pueden indexarlo.</p>

            <h2 id="conservacion">5. Cuánto tiempo los guardamos</h2>
            <ul>
                <li><strong>Cuenta:</strong> hasta que la borres. Al eliminarla desde tu perfil se borran también tus skills, comentarios, votos y guardadas.</li>
                <li><strong>Sesiones:</strong> caducan tras {{ $sessionMinutes }} minutos sin actividad, salvo que marques «Recordarme».</li>
                <li><strong>Resumen semanal sin cuenta:</strong> mientras sigas suscrito. Las altas que no se confirman y las bajas se borran a los 30 días.</li>
                <li><strong>Registros técnicos del servidor:</strong> el tiempo imprescindible para la seguridad y la resolución de errores.</li>
            </ul>

            <h2 id="derechos">6. Tus derechos</h2>
            <p>Puedes ejercer en cualquier momento tus derechos de acceso, rectificación, supresión, oposición, limitación del tratamiento y portabilidad, y retirar tu consentimiento:</p>
            <ul>
                <li>Buena parte de ello puedes hacerlo tú mismo desde <a href="{{ route('profile.edit') }}">tu perfil</a>: cambiar tus datos, desactivar emails o eliminar tu cuenta.</li>
                <li>Para darte de baja del resumen semanal, usa el enlace que aparece al final de cada email.</li>
                @if($legal['email'])
                    <li>Para cualquier otra solicitud, escríbenos a <a href="mailto:{{ $legal['email'] }}">{{ $legal['email'] }}</a>. Te responderemos en el plazo máximo de un mes.</li>
                @endif
            </ul>
            <p>Si crees que no hemos tratado bien tus datos, puedes presentar una reclamación ante la <a href="https://www.aepd.es" rel="noopener">Agencia Española de Protección de Datos</a>.</p>

            <h2 id="cookies">7. Cookies</h2>
            <p>Solo usamos cookies técnicas, imprescindibles para que la web funcione. No necesitan tu consentimiento y por eso no mostramos un aviso de cookies:</p>
            <ul>
                <li><strong>Cookie de sesión</strong> ({{ config('session.cookie') }}): mantiene tu sesión iniciada y tus mensajes entre páginas. Caduca al cerrar la sesión o tras {{ $sessionMinutes }} minutos sin actividad.</li>
                <li><strong>XSRF-TOKEN</strong>: protege los formularios contra envíos falsificados desde otras webs.</li>
                <li><strong>remember_web_…</strong>: solo si marcas «Recordarme» al iniciar sesión, para no tener que volver a entrar.</li>
            </ul>
            <p>Además, tu navegador guarda en su almacenamiento local si prefieres el modo claro u oscuro. Ese dato no se envía a nuestro servidor.</p>

            <h2 id="menores">8. Menores</h2>
            <p>Para crear una cuenta o suscribirte debes tener al menos 14 años.</p>

            <h2 id="cambios">9. Cambios en esta política</h2>
            <p>Si cambiamos la forma de tratar tus datos, actualizaremos esta página y su fecha. Si el cambio es relevante y tienes cuenta, te avisaremos por email.</p>
        </div>
    </article>
@endsection
