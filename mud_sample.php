<?php
require_once ('connect.php');
require_once ('functions.php');
transit_2();
insert_table_mud();
    $insert_table_mud = insert_table_mud();
    $insert_table_mud_composition = insert_table_mud_composition();
    //print_arr($create_table);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Журнал</title>
</head>
<body>
<div id="header">
    <img src="picture.jpg" class="logo" alt="">
    <div class="date">
        <?php  echo date_online()?>
    </div>
    <form action="" method="POST">
        <button type="submit" name="reagent_sample" class="btn btn-secondary">Внесение реагентов в таблицу</button>
        <button type="submit" name="cement_sample" class="btn btn-secondary">Внесение рецептуры тампонажных растворов в таблицу</button>
    </form>
    </div>
<div id="foundation">
    <div id="left_column">
        <form action="" method="POST" id="List3">
            <table class="table table-bordered" id="mud_table2">
                <thead>   
                        <th colspan="3">
                            Параметры
                        </th>
                </thead>
                <tbody id="mud_tr1">
                    <tr class="thead-dark">
                        <th colspan="3">Состав раствора</th>
                    </tr>
                    <tr>
                        <td>
                            <label for="mud_number">№</label>
                        </td>
                        <td>
                            <label for="mud_material">Наименование материала</label>  
                        </td>
                        <td>
                            <label for="mud_concentration">Концентрация, %</label>
                        </td>
                    </tr>
                    <tr> 
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="mud_number[]" class="form-control">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="mud_material[]" class="form-control">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="mud_concentration[]" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                    <tr>
                        <td colspan="3">
                            <button type="button" name="mud_table_button" id="mud_table_button" class="btn btn-secondary">Нажать</button>
                        </td>
                    </tr>
            </table>
            <table class="table table-bordered">
                <tr class="thead-dark">
                    <th colspan="3">Результаты тестирования буровых растворов </th>
                </tr>
                <tbody>
                    <tr>
                        <td>
                            <label for="density_mud">Плотность</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="density_mud" class="form-control">
                                </div>
                                <div class="col">
                                    <select name="unit_density_mud" form="List3" class="custom-select">
                                        <option>кг/м3</option>
                                        <option>г/см3</option>
                                        <option>ppg</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="FV">Условная вязкость, с</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="FV" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">Фильтрация</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="metodic">Методика</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="metodic" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="filtrate">Выход фильтрата, мл</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="filtrate" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">Коэффициент скольжения корки</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="degree">Градус скольжения, &deg</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="degree" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="coef">Коэффициент</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="coef" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">Реология</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="PV_mud">PV, сПз</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="PV_mud" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="YP_mud">YP, дПа</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="YP_mud" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sec_10_mud">10 sec, дПа</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="sec_10_mud" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="min_10_mud">10 min, дПа</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="min_10_mud" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sand">Содержание песка, %</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="sand" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-secondary">Занести в таблицу</button>
        </form>
    </div>
</div>
<script>
            var trInput = document.getElementById('mud_tr1')
            var table = document.getElementById('mud_table2');
            var button = document.getElementById ('mud_table_button');
            button.addEventListener('click',function(){
                var tr = document.createElement('tr');
                var td = document.createElement('td')
                td.innerHTML = '<input type="text" name="mud_number[]" class="form-control">';
                var td1 = document.createElement('td');
                td1.innerHTML = '<input type="text" name="mud_material[]" class="form-control">';
                var td2 = document.createElement('td');
                td2.innerHTML = '<input type="text" name="mud_concentration[]" class="form-control">';
                tr.appendChild(td)
                tr.appendChild(td1);
                tr.appendChild(td2);
                trInput.append(tr);
            });
                </script>
</body>
</html>