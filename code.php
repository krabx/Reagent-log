<?php
require_once ('connect.php');
require_once ('functions.php');
transit();
$create_table = create_table();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>Журнал</title>
</head>
<body>
    <div id="header">
        <form action="" method="POST">
            <button type="submit" name="cement_sample" class="btn btn-secondary">Внесение рецептуры цементов в таблицу</button>
            <button type="submit" name="mud_sample" class="btn btn-secondary">Внесение рецептуры буровых растворов в таблицу</button>
        </form>
    </div>
    <div id="foundation">
        <div id="left">
           <form action="" method="POST" id="List">
                <table class="table table-sm table-borderless" id="table1">
                    <thead>
                        <tr>
                            <th colspan="3">
                                Внесение реагентов
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="empty">
                            <td>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Наименование">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="empty">
                            <td>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="adress" id="adress" class="form-control" placeholder="От кого">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="empty">
                            <td>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="weight" id="weight" class="form-control" placeholder="Вес">
                                    </div>
                                    <div class="col">
                                        <select form="List" id="weight_name" name ="weight_name" class="custom-select">
                                            <option >кг</option>
                                            <option >л</option>
                                            <option >мл</option>
                                            <option >г</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="empty">
                            <td>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="price" id="price" class="form-control" placeholder="Цена">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="empty">
                            <td>        
                                <select form="List" name ="type" class="custom-select">
                                    <option>Армирующая добавка</option>
                                    <option>Газоблокатор</option>
                                    <option>Загуститель</option>
                                    <option>Замедлитель</option>
                                    <option>Облегчитель</option>
                                    <option>Пеногаситель</option>
                                    <option>Пластификатор</option>
                                    <option>Понизитель фильтрации</option>
                                    <option>Расширяющая добавка</option>
                                    <option>Ускоритель</option>
                                    <option>Утяжеляющая добавка</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" id="fillIn" class="btn btn-secondary">Занести в таблицу</button>
          </form>
        </div>
        
        <div id="center">
            <table id="tableReagent" class="table table-sm table-bordered">
                <thead>
                <tr>
                    <th>Номер</th>
                    <th>Название</th>
                    <th>От кого</th>
                    <th>Вес</th>
                    <th>Цена</th>
                    <th>Дата</th>
                    <th>Тип</th>
                </tr>
                </thead>
                <tbody>
                        <?php if (!empty($create_table)) :?>
                        <?php foreach ($create_table as $create_table) : ?>
                    <tr>
                        <td id="id"><?php echo $create_table['id']?></td>
                        <td id="name"><?php echo $create_table['name']?></td>
                        <td id="adress"><?php echo $create_table['adress']?></td>
                        <td id="weight"><?php echo $create_table['weight'] . ' ' . $create_table['weight_name']?></td> 
                        <td id="price"><?php echo $create_table['price']?></td>
                        <td id="date"><?php echo $create_table['date']?></td>
                        <td class="type"><?php echo $create_table['type']?></td>
                    </tr>
                        <?php endforeach;?>
                        <?php endif;?>
                </tbody>
            </table>
        </div>
        <div id="right">
            <input type="text" placeholder="Поиск по таблице" id="search" class="form-control">
            <!-- <table class="table table-sm table-borderless">
                <tr><td><button type="submit" name="ReinforcingAdditive" id="ReinA" class="btn btn-secondary">Армирующая добавка</button></td></tr>
                <tr><td><button type="submit" name="gasBlockerAdditive" id="GBA" class="btn btn-secondary">Газоблокатор</button></td></tr>
                <tr><td><button type="submit" name="thickenerAdditive" id="THA" class="btn btn-secondary">Загуститель</button></td></tr>
                <tr><td><button type="submit" name="retarderAdditive" id="RA" class="btn btn-secondary">Замедлитель</button></td></tr>
                <tr><td><button type="submit" name="leadAdditive" id="LA" class="btn btn-secondary">Облегчитель</button></td></tr>
                <tr><td><button type="submit" name="defoamAdditive" id="DA" class="btn btn-secondary">Пеногаситель</button></td></tr>
                <tr><td><button type="submit" name="plasificatorAdditive" id="PA" class="btn btn-secondary">Пластификатор</button></td></tr>
                <tr><td><button type="submit" name="fluidlossAdditive" id="FL" class="btn btn-secondary">Понизитель фильтрации</button></td></tr>
                <tr><td><button type="submit" name="expandingAdditive" id="EA" class="btn btn-secondary">Расширяющая добавка</button></td></tr>
                <tr><td><button type="submit" name="SpeedAdditive" id="SA" class="btn btn-secondary">Ускоритель</button></td></tr>
                <tr><td><button type="submit" name="tailAdditive" id="TA" class="btn btn-secondary">Утяжеляющая добавка</button></td></tr>   
                <tr><td><button type="submit" name="Allreagent" id="AR" class="btn btn-secondary">Все реагенты</button></td></tr> 
            </table> -->
        </div>
    </div>
    <script src="./table.js"></script>
</body>
</html>