<!DOCTYPE html>
<html>
<head>
    <title>На чист въздух</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background-image: url('https://blog.hotel-extreme.bg/wp-content/uploads/2017/07/DSC_4100_HOME-min.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        /* Top title bar */
        .top-bar {
            background-color: #d0d0d0;
            text-align: center;
            padding: 6px;
            font-size: 14px;
            color: #333;
        }

        /* Navigation category bar */
        .nav-bar {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            border-bottom: 1px solid #ccc;
        }

        .nav-bar a, .nav-bar span {
            padding: 10px 30px;
            text-decoration: none;
            color: #333;
            font-size: 14px;
            border-right: 1px solid #ccc;
            display: inline-block;
        }

        .nav-bar a:first-child, .nav-bar span:first-child {
            border-left: 1px solid #ccc;
        }

        .nav-bar a:hover {
            background-color: #e0e0e0;
        }

        .nav-bar a.active {
            color: #0007cc;
            font-weight: bold;
        }

        /* Page content */
        .content {
            padding: 40px;
        }

        h1 {
            color: white;
            text-shadow: 1px 1px 4px black;
        }
    </style>
</head>
<body>

    <div class="top-bar">На чист въздух</div>

    <div class="nav-bar">
        <a href="/">Начало</a>
        @foreach($categories as $category)
            @if($category->name === 'Хранителни продукти')
                <a href="/products" class="active">{{ $category->name }}</a>
            @else
                <span>{{ $category->name }}</span>
            @endif
        @endforeach
    </div>

    <div class="content">
        <h1>Добре дошли в магазин На чист въздух</h1>
    </div>

</body>
</html>