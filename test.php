<div class="text">
        <form action="test.php" method="post">
                            <span style="font-weight: 900;">1.Какой Ваш возраст?:</span>
                            <select name = "age">
                            <option value = '1'> 18-25 </option>
                                 <option value = '3'> 25-45</option>
                                      <option value = '2'>45-60</option>
                            </select>
                <br>
                <span style="font-weight: 900;">2.Семейное положение ?:</span>
                    <select name = "MaritalStatus">
                            <option value = '2'> Холост/Незамужем </option>
                                 <option value = '1'> Разведен/Разведена</option>
                                      <option value = '3'>Замужем/Женат</option>
                </select>
                
                   <br>
                            <span style="font-weight: 900;">3.Есть ли дети?:</span>
                      <select name = "child">
                            <option value = '3'> Нет </option>
                                 <option value = '2'> 1</option>
                                      <option value = '1'>2 и более</option>
                            </select>
                
                  <br>
                       <span style="font-weight: 900;">4.Какое у вас образование?:</span>
                      <select name = "education">
                            <option value = '3'> Высшее </option>
                                 <option value = '2'> Среднее специальное/Неоконченое высшее</option>
                                      <option value = '1'>Среднее общее </option>
                            </select>
                  <br>
                <span style="font-weight: 900;">5.Какое у вас жилье?:</span>
                      <select name = "home">
                            <option value = '3'> Собственное жилье </option>
                                 <option value = '2'> Съемное жилье </option>
                                      <option value = '1'>Живу с родственниками</option>
                            </select>
                  <br>
                       <span style="font-weight: 900;">6.Есть ли автомобиль?:</span>
                      <select name = "car">
                            <option value = '3'> Да, новый </option>
                                 <option value = '2'> Да, подержаный старше 3 лет</option>
                                      <option value = '1'>Нет </option>
                            </select>
                  <br>
                      <span style="font-weight: 900;">7.Ваша занятость в данный момент?:</span>
                      <select name = "activity">
                            <option value = '3'> Работаю </option>
                                 <option value = '2'> Студент/Пенсионер</option>
                                      <option value = '1'>Безработный </option>
                            </select>
                  <br>
                
                <span style="font-weight: 900;">8.Каков стаж на последнем месте работы?:</span>
                      <select name = "work">
                            <option value = '3'> 1.5 года и более </option>
                                 <option value = '2'> от 10 месяцев до 1.5 года</option>
                                      <option value = '1'>менее 10 месяцев</option>
                            </select>
                  <br>
                 <span style="font-weight: 900;">9.Каков общий стаж работы?:</span>
                      <select name = "work2">
                            <option value = '3'> 1.5 года и более </option>
                                 <option value = '2'> от 10 месяцев до 1.5 года</option>
                                      <option value = '1'>менее 10 месяцев</option>
                            </select>
                  <br>
                <span style="font-weight: 900;">10.Каков ваш доход по освновному месту работы?:</span>
                      <select name = "work3">
                            <option value = '3'> Более 30.000 руб </option>
                                 <option value = '2'> От 15.000 руб до 30.000 руб</option>
                                      <option value = '1'>Менее 15.000 руб</option>
                            </select>
                  <br>
                  <span style="font-weight: 900;">11.Какова ваша кредитная история?:</span>
                      <select name = "credit">
                            <option value = '3'> Положительная, вернул крит(ы) без проблем </option>
                                 <option value = '2'> Ранее не брал кредиты</option>
                                      <option value = '1'>Отрицательная</option>
                            </select>
                
                  <br>
                
                  <span style="font-weight: 900;">12.Имеете поручителя?:</span>
                      <select name = "ct">
                            <option value = '3'> 2 и более поручителя </option>
                                 <option value = '2'> 1 поручитель</option>
                                      <option value = '1'>нет поручителей</option>
                            </select>
                
                  <br>
                
                  <span style="font-weight: 900;">13.Имеете кредиты в данный момент?:</span>
                      <select name = "ct2">
                            <option value = '3'> Нет </option>
                                 <option value = '2'> 1 кредит</option>
                                      <option value = '1'>2 и более</option>
                            </select>
                  <br>
               
                        <div style="text-align: center">
                                </form>
            <input class="btn btn-success btn-lg" type="submit" name = "abc" value="Получить результат">
            </div>
                
                
                <?php
                
                 if (isset($_POST['abc']))
                 {
                         $a = $_POST['age'];
                         $b = $_POST['MaritalStatus'];
                         $c = $_POST['child'];
                         $d = $_POST['education'];
                         $e = $_POST['home'];
                         $f = $_POST['car'];
                         $g = $_POST['activity'];
                         $h = $_POST['work'];
                         $k = $_POST['work2'];
                         $l = $_POST['work3'];
                         $o = $_POST['credit'];
                         $m = $_POST['ct'];
                         $n = $_POST['ct2'];
                         $sum = $a+$b+$c+$d+$e+$f+$g+$h+$k+$l+$o+$m+$n;
                         
                         if($sum>35)
                         {
                                 echo "<h3 style = 'color: green;'>Отличный кредитный балл ".$sum.". Кредит будет выдан в любом выбранном банке.
Рекомендации: Сбербанк 8 (800) 555-55-50, ВТБ 8 (800) 100-24-24 ,Газпромбанк 8 (800) 100-07-01 ,Россельхозбанк 8-800-200-60-99 .</h3>";
                         }
                         else
                         {
                                 if($sum<35 && $sum>25)
                                 {
                                          echo "<h3 style = 'color: orange;'>Средний кредитный балл ".$sum." . Кредит скорее всего будет выдан, но проценты по кредиту повышенны.
Рекомендации: Сбербанк 8 (800) 555-55-50, ВТБ 8 (800) 100-24-24 ,Газпромбанк 8 (800) 100-07-01 ,Россельхозбанк 8-800-200-60-99 .</h3>";
                                 }
                                 else
                                 {
                                         echo "<h3 style = 'color: orange;'>Плохой кредитный балл ".$sum.". Кредит может быть выдан только в микрофинансовой организации.
Рекомендации: Тинькофф банк  +7 (495) 645-59-09, Быстроденьги  8 800 700-43-44, Срочноденьги 8 (800) 100-13-63.</h3>";
                                 }
                         }

                 }
                
                ?>
