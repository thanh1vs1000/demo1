<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themeregion.com/seeker/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jun 2020 12:54:58 GMT -->
<head>
    <base href="{{asset('public')}}"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
    <meta name="description" content="">
    <title>JDNY | Tìm việc làm nhanh chóng</title>

    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="frontend/css/theme.css">
    <link rel="stylesheet" href="frontend/css/jquery-te.css">
    <link href="frontend/css/main-search.css" rel="stylesheet" />
    <link href="frontend/js/attention/dist/attention.css" rel="stylesheet">
    <script src="frontend/js/attention/dist/attention.js"></script>
    <link rel="stylesheet" href="frontend/css/slick.css">
    <link rel="stylesheet" href="frontend/css/main.css">
    <link rel="stylesheet" href="frontend/css/responsive.css">
    <link rel="stylesheet" href="frontend/css/style.css">
    <link rel="stylesheet" href="frontend/css/search.css">
    <link rel="stylesheet" href="frontend/assets/styles/choices.min.css" />
    <link rel="stylesheet" href="frontend/cute-alert/style.css" />

    <script src="frontend/assets/scripts/choices.min.js"></script>
    <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="frontend/assets/images/apple-touch-icon.png"
  />
  <link
    rel="icon"
    type="image/png"
    href="frontend/assets/images/favicon-32x32.png"
    sizes="32x32"
  />
  <link
    rel="icon"
    type="image/png"
    href="frontend/assets/images/favicon-16x16.png"
    sizes="16x16"
  />
  <link rel="manifest" href="frontend/assets/images/manifest.json" />
  <link
    rel="mask-icon"
    href="frontend/assets/images/safari-pinned-tab.svg"
    color="#00bcd4"
  />
  <link rel="shortcut icon" href="frontend/assets/images/favicon.ico" />
  <meta
    name="msapplication-config"
    content="frontend/assets/images/browserconfig.xml"
  />

    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

    <link rel="icon" href="frontend/images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="frontend/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="frontend/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="frontend/images/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon" sizes="57x57" href="frontend/images/ico/apple-touch-icon-57-precomposed.png">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
@include('pages.headercompany')

@yield('content')

@include('pages.footer')
<script src="frontend/js/jquery.min.js" type="a8b72b53df9e7d6b87fce761-text/javascript"></script>
<script src="frontend/js/popper.min.js" type="a8b72b53df9e7d6b87fce761-text/javascript"></script>
<script src="frontend/js/bootstrap.min.js" type="a8b72b53df9e7d6b87fce761-text/javascript"></script>
<script src="frontend/js/inview.min.js" type="a8b72b53df9e7d6b87fce761-text/javascript"></script>
<script src="frontend/js/counterup.min.js" type="a8b72b53df9e7d6b87fce761-text/javascript"></script>
<script src="frontend/js/waypoints.min.js" type="a8b72b53df9e7d6b87fce761-text/javascript"></script>
<script src="frontend/js/slick.min.js" type="a8b72b53df9e7d6b87fce761-text/javascript"></script>
<script src="frontend/js/main.js" type="a8b72b53df9e7d6b87fce761-text/javascript"></script>
{{-- <script src="frontend/js/extention/choices.js"></script> --}}
<script src="frontend/cute-alert/cute-alert.js"></script>
<script src="frontend/js/main-search.js" type="a8b72b53df9e7d6b87fce761-text/javascript"></script>
<script src="frontend/js/jquery-te.min.js" type="a8b72b53df9e7d6b87fce761-text/javascript"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true" type="a8b72b53df9e7d6b87fce761-text/javascript"></script>
<script src="frontend/js/gmaps.min.js" type="a8b72b53df9e7d6b87fce761-text/javascript"></script>
<script src="{{ asset('frontend/ckeditor/ckeditor.js') }}"></script>
<script src="frontend/js/main.js" type="a8b72b53df9e7d6b87fce761-text/javascript"></script>
<script type="a8b72b53df9e7d6b87fce761-text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-73239902-1', 'auto');
      ga('send', 'pageview');
</script>
{{-- <script src="frontend/css/extention/choices.js"></script> --}}
    <script>
      const customSelects = document.querySelectorAll("select");
      const deleteBtn = document.getElementById('delete')
    //   const choices = new Choices('select',
    //   {
    //     searchEnabled: false,
    //     itemSelectText: '',
    //     removeItemButton: true,
    //   });
    //   deleteBtn.addEventListener("click", function(e)
    //   {
    //     e.preventDefault()
    //     const deleteAll = document.querySelectorAll('.choices__button')
    //     for (let i = 0; i < deleteAll.length; i++)
    //     {
    //       deleteAll[i].click();
    //     }
    //   });
    </script>
<script src="frontend/js/rocket-loader.min.js"
        data-cf-settings="a8b72b53df9e7d6b87fce761-|49" defer=""></script>
</body>

<!-- Mirrored from demo.themeregion.com/seeker/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jun 2020 12:55:03 GMT -->
</html>
