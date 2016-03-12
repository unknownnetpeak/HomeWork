    <?
// FUNCTION PUSH START
          function push(&$arr){
            $coun = func_get_args();
            $suminp = count($coun) - 1; //количеиство добавляемых элементов
            $sumarr = count($arr);  //общая длина входящего массива
            $j=1; // начинаем с первого добавляемого элемента
            for ($i=($sumarr);$i<($sumarr+$suminp);$i++) // начнаем с концавходящего массива пока не добавим все входящие элементы
            {
              $arr[$i]=$coun[$j];
              $j++;
            }
          }
// FUNCTION PUSH END

// FUNCTION UNSHIFT START
          function unshift(&$arr){
            $coun = func_get_args();
            $suminp = count($coun) - 1;
            $sumarr = count($arr);
            $dumparr=array(); // массив временно хранящий элементы входящего массива
            $j=1;
            for ($i=0;$i<$suminp;$i++)
              {
                $dumparr[$i]=$coun[$j];//запись всех входящих элементов в временный массив
                $j++;
              }
              $d = 0;
            for ($n=($suminp);$n<($suminp+$sumarr);$n++)
            {
              $dumparr[$n] = $arr[$d];//запись в конец временного массива элементов входящего массива
              $d++;
            }
                $arr = $dumparr;
          }
// FUNCTION UNSHIFT END

// FUNCTION SHIFT START
          function shift(&$arr){
              $sumarr = count($arr);
              $firstinarr=$arr[0];//получение первого элемента массива
              for ($i=1;$i<($sumarr);$i++)
              {
                $arr[$i-1] = $arr[$i];//сдвиг элементов массива на 1 ячейку влево
              }
              unset($arr[count($arr)-1]); //удаление последнего элемента массива
              return $firstinarr;
          }
// FUNCTION SHIFT END

// FUNCTION Fmin START
          function Fmin($value)
          {
               if (count(func_get_args())>1){//проверка на количество входящих параметров
                 $value = func_get_args();//если несколько входящих параметров получаем их массив для дальнейшей работы
                 }
                $min = $value[0];
                for ($i=1; $i < count($value); $i++) {//прохождение по всем входящим элементам
               if ($value[$i]<$min){ //сравнивание элемента с минимальным
               $min=$value[$i];
             }
           }
            return $min;
            }
// FUNCTION Fmin END

// FUNCTION Fmax START
            function Fmax($value)
            {
                 if (count(func_get_args())>1){// функция аналогична Fmin
                   $value = func_get_args();
                   }
                  $max = $value[0];
                  for ($i=1; $i < count($value); $i++) {
                 if ($value[$i]>$max){
                 $max=$value[$i];
               }
             }
              return $max;
            }
// FUNCTION Fmax END
    ?>
