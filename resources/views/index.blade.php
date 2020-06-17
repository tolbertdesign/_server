<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tolbert.Design</title>
    <meta property="og:title" content="Tolbert.Design" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="https://tolbert.design" />
    <meta property="og:url" content="https://tolbert.design" />
    <meta property="og:image" content="https://tolbert.design/assets/booster/img/logo/booster_stacked.png"/>
    @livewireStyles
</head>
<body>
    @livewire('hello-world')

    @livewireScripts
    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-76464598-4', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>
</html>
