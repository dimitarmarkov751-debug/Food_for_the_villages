<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Помощ за селата</title>
    <link rel="stylesheet" href="style.css">
    <link rel = "icon" type = "image/avig" href = "favicon.avif">
</head>
<body>
    <img src = "favicon.avif"
    height = "100">
    <header>
        <h1>Добре дошли в Помощ за селата</h1>
        <p>Свързваме големите градове с малките села и помагаме на общността</p>
    </header>

    <a href="learn-more.html">
    <button>Научи повече</button>
    </a>

    <main>
        <section class="info">
            <h2>Как можем да помогнем</h2>
            <p>Тук можете да видите как хората от големите градове могат да изпратят помощ към малките селища.</p>
        </section>

        <section class="form-section">
            <h2>Изпратете помощ или заявка</h2>
            <form id="helpForm" action="process.php" method="POST">
                <label for="name">Име:</label>
                <input type="text" id="name" name="name" required>

                <label for="location">Вашето село / град:</label>
                <input type="text" id="location" name="location" required>

                <label for="type">Тип помощ:</label>
                <select id="type" name="type" required>
                    <option value="храна">Храна</option>
                    <option value="дрехи">Дрехи</option>
                    <option value="лекарства">Лекарства</option>
                    <option value="други">Други</option>
                </select>

                <label for="message">Допълнителна информация:</label>
                <textarea id="message" name="message"></textarea>

                <button type="submit">Изпрати</button>
            </form>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>