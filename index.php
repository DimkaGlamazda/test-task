<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Test</title>
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <form>
                <div class="form-group">
                    <h2 class="f-title"><img src="img/img-task.png">Откуда едем</h2>
                    <div class="f-body">
                        <div class="control-description">
                            <div class="f-control">
                                <ul>
                                    <li>
                                        <label for="district">Район</label>
                                        <select id="district" name="district">
                                            <option value="0">Выберите район...</option>
                                        </select>
                                    </li>
                                    <li>
                                        <label for="block">Массив</label>
                                        <select id="block" name="block">
                                            <option value="0">Выберите массив...</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>

                            <p class="f-description">Укажите район и массив откуда вы будете ехать. Если вы знаете, точный адрес, то лучше укажите адрес.</p>
                        </div>

                        <span class="f-divider">Или</span>

                        <div class="control-description">
                            <div class="f-control">

                                <ul>
                                    <li>
                                        <label for="street">Улица</label>
                                        <input type="text" id="street" name="street">
                                    </li>
                                    <li>
                                        <label for="building">Дом</label>
                                        <input type="text" id="building" name="street">
                                    </li>
                                </ul>
                            </div>
                            <p class="f-description">Укажите улицу и номер дома. Начните набирать название улици и в списке подсветяться найденные варианты.</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h2 class="f-title"><img src="img/img-task.png">Дополнительно</h2>
                    <div class="f-body">
                        <div class="control-description">
                            <div class="f-control">
                                <ul class="check-box-list">
                                    <li><label><input type="checkbox" name="travel-type" value="1"><span>Машина с кодиционером</span></label></li>
                                    <li><label><input type="checkbox" name="travel-type" value="2"><span>Фургон/Универсал</span></label></li>
                                    <li><label><input type="checkbox" name="travel-type" value="3"><span>Еду с животным</span></label></li>
                                </ul>
                            </div>
                            <p class="f-description">Укажите дополнительную информацию которая поможет быстрее и точнее определится с исполнителем.</p>
                        </div>
                    </div>
                </div>
                <div id="load">
                    <input type="submit" id="submit" value="Искать">
                    <img id="loading" src="img/loading.gif">
                </div>

            </form>
        </div>
        <div class="side-bar">

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>