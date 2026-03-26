<!DOCTYPE html>
<html>
<head><title>Продукти</title></head>
<body style="background-image: url('https://www.sharenacherga.com/wp-content/uploads/2019/09/%D0%96%D0%B8%D0%B2%D0%BE%D1%82-%D0%BD%D0%B0-%D1%81%D0%B5%D0%BB%D0%BE.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100vh;">

    <h1>Нашите продукти</h1>

    <a href="/">← Назад към категории</a>

    <ul>
        @foreach($products as $product)
            <li>
                <strong>{{ $product->name }}</strong> — {{ $product->price }} лв.
                <br>{{ $product->description }}
            </li>
        @endforeach
    </ul>

</body>
</html>