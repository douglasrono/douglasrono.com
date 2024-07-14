<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Douglas Rono - Senior Software Developer | PHP, JavaScript, Vue, Laravel</title>
    <meta name="description"
        content="Douglas Rono, an experienced senior software developer skilled in PHP, JavaScript, Vue, and Laravel. Providing robust and reliable software solutions to meet business goals.">
    <meta name="keywords"
        content="Douglas Rono, software developer, PHP, JavaScript, Vue, Laravel, web development, MERN stack developer, senior software developer">

    <link href="assets/img/portfolio/port3.jpeg" rel="icon">
    <link href="assets/img/portfolio/port3.jpeg" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Douglas Rono",
      "jobTitle": "Senior Software Developer",
      "description": "Experienced software developer skilled in PHP, JavaScript, Vue, and Laravel.",
      "url": "https://www.douglasrono.com",
      "sameAs": [
        "https://www.linkedin.com/in/douglasrono",
        "https://github.com/douglasrono"
      ]
    }
    </script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <header-component></header-component>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    <script src="assets/js/main.js"></script>
</body>

</html>
