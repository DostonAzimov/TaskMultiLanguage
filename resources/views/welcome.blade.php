<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</head>
<body>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Tilni Tanlang!
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="{{url('ru')}}">Russian</a></li>
        <li><a class="dropdown-item" href="{{url('en')}}">English</a></li>
        <li><a class="dropdown-item" href="{{url('uz')}}">Uzbek</a></li>
    </ul>
    <a href="{{url('{locale}/news')}}"
       class="btn btn-success    btn-sm">@lang('auth.news')</a>
    <a href="#"
       class="btn btn-success    btn-sm">@lang('auth.category')</a>
</div>


</body>
</html>
<style>
    .dropdown{
        margin-left: 50%;
        margin-top: 10px;
    }
</style>
