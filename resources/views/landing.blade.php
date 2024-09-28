<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Definir el conjunto de caracteres para la página web -->
  <meta charset="UTF-8">

  <!-- Para asegurarse de que la página sea responsive -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Título que aparecerá en la pestaña del navegador -->
  <title>Job Tracker para Encontrar Trabajo - Optimiza tu Búsqueda Laboral</title>

  <!-- Descripción para SEO, aparecerá en los resultados de búsqueda -->
  <meta name="description"
    content="Job Tracker te ayuda a organizar y optimizar tu búsqueda de empleo, con herramientas para organizar ofertas de trabajo y gestionar entrevistas.">

  <!-- Favicon para mostrar un icono en la pestaña del navegador -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Metaetiquetas Open Graph para compartir en redes sociales -->
  <meta property="og:title" content="Job Tracker para Encontrar Trabajo">
  <meta property="og:description"
    content="Organiza tu búsqueda de empleo y prepárate para entrevistas con nuestra herramienta fácil de usar.">
  <meta property="og:image" content="https://example.com/images/preview.jpg">
  <meta property="og:url" content="https://example.com">

  <!-- Twitter Card para compartir en Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Job Tracker para Encontrar Trabajo">
  <meta name="twitter:description"
    content="Organiza tu búsqueda de empleo y gestiona tus entrevistas de manera eficiente.">
  <meta name="twitter:image" content="https://example.com/images/preview.jpg">

  @vite(['resources/css/app.css'])

  <title>Job Tracker para Encontrar Trabajo</title>
</head>

<body>

  <div class="hero bg-primary columns">
    <div class="column col-10 col-mx-auto text-center">
      <div class="content-left">
        <h1>Job Tracker para Encontrar Trabajo</h1>
      </div>

      <div class="content-right">
        <a class="btn btn-success text-large" href="{{ url('/login') }}">Empezar!</a>
      </div>

    </div>
  </div>

  <section class="explanation columns">
    <div class="mt-2 column col-10 col-mx-auto text-center">
      <h2>¡Job Tracker te ayuda a Tener Éxito!</h2>

      <p>Con nuestra herramienta, puedes <strong>rastrear fácilmente</strong> todas las ofertas de trabajo que te
        interesan, y también <strong>organizarte mejor</strong> para las entrevistas.</p>

      <p>Desde recordar fechas importantes hasta preparar las preguntas clave para tus entrevistas, nosotros te ayudamos
        a mantenerte enfocado en lo que importa: ¡conseguir ese trabajo que tanto deseas!</p>

    </div>
  </section>

</body>

</html>
