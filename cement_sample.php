<?php
require_once ('connect.php');
require_once ('functions.php');
transit_1();
$insert_table_well_conditions = insert_table_well_conditions();
$insert_table_cement_composition = insert_table_cement_composition();
$insert_table_gost_test = insert_table_gost_test();
$insert_table_api_test = insert_table_api_test();
$insert_table_before_conditioning_rheology_test = insert_table_before_conditioning_rheology_test();
$insert_table_after_conditioning_rheology_test = insert_table_after_conditioning_rheology_test();
//print_arr ($insert_table_well_conditions);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <title>Цементы</title>
</head>
<body> 
<div id="header">
    <form action="" method="POST">
    <button type="submit" name="reagent_sample" class="btn btn-secondary">Внесение реагентов в таблицу</button>
    <button type="submit" name="mud_sample" class="btn btn-secondary">Внесение рецептуры буровых растворов в таблицу</button>
    </form>
</div>
<div id="foundation">
<div id="left_column"> 
    <form action="" method="POST" id="List2">
        <table class="table table-bordered" >
            <thead>   
                    <th colspan="5">
                        Параметры
                    </th>
            </thead>
            <tbody>
                <tr>
                    <th colspan="5">
                        Скважинные условия
                    </th>
                </tr>
                <tr>
                    <td>
                        <label for="cirk">Циркуляционная температура</label>
                    </td>
                    <td>
                        <label for="stat">Статическая температура</label>
                    </td>
                    <td>
                        <label for="pressure" id="pressure">Давление</label>
                    </td>
                    <td>
                        <label for="measure_depth">Глубина по стволу</label>
                    </td>
                    <td>
                        <label for="vertical_depth">Глубина по вертикали</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="cirk" class="form-control">
                            </div>
                        <div class="col">
                        <select form="List2" name ="unit_1" class="custom-select">
                            <option>&#176C</option>
                            <option>&#176F</option>
                        </select>
                        </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="stat" class="form-control">
                            </div>
                            <div class="col">
                                <select form="List2" name ="unit_2" class="custom-select">
                                    <option>&#176C</option>
                                    <option>&#176F</option>
                                </select>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                            <input type="text" name="pressure" class="form-control">
                            </div>
                            <div class="col">
                                <select form="List2" name ="unit_3" class="custom-select">
                                <option>МПа</option>
                                <option>PSI</option>
                            </select>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="measure_depth" class="form-control">
                            </div>
                            <div class="col">
                                <select form="List2" name ="unit_4" class="custom-select">
                                    <option>М</option>
                                    <option>F</option>
                                </select>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="vertical_depth" class="form-control">
                            </div>
                            <div class="col">
                                <select form="List2" name ="unit_5" class="custom-select">
                                    <option>М</option>
                                    <option>F</option>
                                </select>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <tbody id="tr1">
                    <tr>
                        <th colspan="5">
                            Состав раствора
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <label for="number">№</label>
                        </td>
                        <td>  
                            <label for="material">Наименование материала</label>
                        </td>
                        <td>
                            <label for="concentration">Концентрация, %</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="number[]" class="form-control">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="material[]" class="form-control">
                                </div>
                            </div>
                        </td>
                        <td >
                            <div class="form-row">
                                <div class="col">
                                <input type="text" name="concentration[]" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
            </tbody>
                    <tr>
                        <td colspan="3">
                            <button type="button" name="table_button" id="table_button" class="btn btn-secondary">Добавить</button>
                        </td>
                    </tr>
        </table>
        <table class="table">
                    <tr>
                        <th colspan="3">
                            Результаты тестов
                        </th>
                    </tr>
                    <th colspan="2">ГОСТ</th>
                    <tr>
                        <td>
                            <label for="density_gost">Плотность</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="density_gost" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" name ="unit_density_gost" class="custom-select">
                                        <option>кг/м3</option>
                                        <option>г/см3</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="spreadability_gost">Растекаемость</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="spreadability_gost" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" name ="unit_spreadability_gost" class="custom-select">
                                        <option>мм</option>
                                        <option>cм</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tt_gost">Время загустевания до 30 Bc</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="tt_gost" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" name ="unit_tt_gost" class="custom-select">
                                        <option>мин</option>
                                        <option>ч</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tt_gost">Время схватывания</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="tt_gost" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" name ="unit_tt_gost" class="custom-select">
                                        <option>мин,начало</option>
                                        <option>ч,начало</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <input type="text" name="tt_gost" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" name ="unit_tt_gost" class="custom-select">
                                        <option>мин, конец</option>
                                        <option>ч,конец</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="freefluid_gost">Водоотделение</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="freefluid_gost" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" name ="unit_freefluid_gost" class="custom-select">
                                        <option>мл</option>
                                        <option>%</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="bend_gost">Предел прочности на изгиб за 24 часа</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="bend_gost" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" name ="unit_bend_gost" class="custom-select">
                                        <option>МПа</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="compression_gost">Предел прочности на сжатие за 24 часа</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="compression_gost" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" name ="unit_compression_gost" class="custom-select">
                                        <option>МПа</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
        </table>
        <table class="table table-bordered">
            <tr>
                <th colspan="2">API</th>
            </tr>
                    <tr>
                        <td>
                            <label for="mixing_time">Время замешивания (4000 об/мин)</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="mixing_time" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" name ="unit_mixing_time" class="custom-select">
                                        <option>с</option>
                                        <option>мин</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="density_API"> Плотность</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="density_API" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" id="" name ="unit_density_API" class="custom-select">
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
                            <label for="tt_API"> Время загустевания до консистенции 70 Bc</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="tt_API" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" id="" name ="unit_tt_API" class="custom-select">
                                        <option>мин</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="freefluid_API">Водоотделение</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="freefluid_API" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" id="" name ="unit_freefluid_API" class="custom-select">
                                        <option>мл</option>
                                        <option>%</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="fluidloss_API">Водоотдача</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="fluidloss_API" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" id="" name ="unit_fluidloss_API" class="custom-select">
                                        <option>мл</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="compression_API">Предел прочности на сжатие</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="compression_API" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" id="" name ="unit_compression_API" class="custom-select">
                                        <option>PSI</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select form="List2" id="" name ="time_compression_API" class="custom-select">
                                        <option>12 часов</option>
                                        <option>16 часов</option>
                                        <option>24 часа</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="UCA_API">Ультразвуковой набор прочности</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="UCA_API" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" name ="unit_UCA_API" class="custom-select">
                                        <option>PSI</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select form="List2" name ="time_UCA_API" class="custom-select">
                                        <option>12 часов</option>
                                        <option>16 часов</option>
                                        <option>24 часа</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="expansion_API">Расширение</label>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="expansion_API" size="1px" class="form-control">
                                </div>
                                <div class="col">
                                    <select form="List2" id="" name ="unit_expansion_API" class="custom-select">
                                        <option>%</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select form="List2" id="" name ="time_expansion_API" class="custom-select"> 
                                        <option>24 часа</option>
                                        <option>48 часов</option>
                                        <option>72 часа</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
        </table>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th colspan="9">
                        Реологические характеристики до кондиционирования
                    </th>
                </tr>
                <tr>
                    <td>
                        <label for="rheology_API_3">3</label>
                    </td>
                    <td>
                        <label for="rheology_API_6">6</label>
                    </td>
                    <td>
                        <label for="rheology_API_30">30</label>
                    </td>
                    <td>
                        <label for="rheology_API_60">60</label>
                    </td>
                    <td>
                        <label for="rheology_API_100">100</label>
                    </td>
                    <td>
                        <label for="rheology_API_200">200</label>
                    </td>
                    <td>
                        <label for="rheology_API_300">300</label>
                    </td>
                    <td>
                        <label for="PV">PV</label>
                    </td>
                    <td>
                        <label for="YP">YP</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="rheology_API_3" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="rheology_API_6" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="rheology_API_30"  size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="rheology_API_60" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="rheology_API_100" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="rheology_API_200" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="rheology_API_300" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="PV" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="YP" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="9">
                        Реологические характеристики после кондиционирования
                    </th>
                </tr> 
                <tr>
                    <td>
                        <label for="rheology_API_3_after">3</label>
                    </td>
                    <td>
                        <label for="rheology_API_6_after">6</label>
                    </td>
                    <td>
                        <label for="rheology_API_30_after">30</label>
                    </td>
                    <td>
                        <label for="rheology_API_60_after">60</label>
                    </td>
                    <td>
                        <label for="rheology_API_100_after">100</label>
                    </td>
                    <td>
                        <label for="rheology_API_200_after">200</label>
                    </td>
                    <td>
                        <label for="rheology_API_300_after">300</label>
                    </td>
                    <td>
                        <label for="PV_after">PV</label>
                    </td>
                    <td>
                        <label for="YP_after">YP</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="rheology_API_3_after" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="rheology_API_6_after" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="rheology_API_30_after" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="rheology_API_60_after" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="rheology_API_100_after" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="rheology_API_200_after" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="rheology_API_300_after" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="PV_after" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="YP_after" size="1px" class="form-control">
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="finalButton btn btn-secondary">Занести состав в базу данных</button>
    </form>
</div>
<script>
            var firstTr = document.getElementById('tr1');
            var button = document.getElementById ('table_button');
            button.addEventListener('click',function(){
                var tr = document.createElement('tr');
                var td = document.createElement('td');
                td.innerHTML = '<input type="text" name="number[]" class="form-control">';
                var td1 = document.createElement('td');
                td1.innerHTML = '<input type="text" name="material[]" class="form-control">';
                var td2 = document.createElement('td');
                td2.innerHTML = '<input type="text" name="concentration[]" class="form-control">';
                tr.appendChild(td)
                tr.appendChild(td1);
                tr.appendChild(td2);
                firstTr.appendChild(tr);
            });
                </script>
</body>
</html>