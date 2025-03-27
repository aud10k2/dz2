<html>
    <head>
        <title> Форма</title>
    </head>
    <body>
        <h3>Текстовая форма</h3>
        <form name="form1" method ="post" action="script.php">
            Текстовое поле:
            <input type="text" name="textfield">
            Поле ввода пароля:
            <input type="password" name="pswfield">
            Скрытое поле hidden
            <input name="hidden" type="hidden" id="hidden" value="Скрытое_значение">
            Независимые переключатели (checkbox):
            <input type="checkbox" name="checkbox1" value="1">
            Вариант первый
            <input type="checkbox" name="checkbox2" value= "2">
            Вариант второй
            <input type="checkbox" name="checkbox3" value= "1" checked>
            Вариант третий (по умолчанию)
            Зависимые переключатели (radio):
            <input name="radiobutton" type="radio" value="yes"> Да
            <input name="radiobutton" type="radio" value="no"> Нет
            Многороччное текстовое поле (textarea):
            <textarea name="textarea" cols="40" rows="10" id="">Текст по умолчанию</textarea>
            Список с единственным выбором:
            <select name="day_s" size=1>
                <option value="1">Понедельник</option>
                <option value="2">Вторник</option>
                <option value="3">Среда</option>
                <option value="4">Четверг</option>
                <option value="5">Пятница</option>
                <option value="6">Суббота</option>
                <option value="7">Воскресенье</option>
            </select>
            Список с множественным выбором (multiple):
            <select name="day_m{}" size=1 multiple>
                <option value="1">Понедельник</option>
                <option value="2">Вторник</option>
                <option value="3">Среда</option>
                <option value="4">Четверг</option>
                <option value="5">Пятница</option>
                <option value="6">Суббота</option>
                <option value="7">Воскресенье</option>
            </select>
            <input type="submit" value="Отослать форму">
            &nbsp;&nbsp;&nbsp;
            <input type="reset" value="Очистить форму">
        </form>
    </body>
</html>