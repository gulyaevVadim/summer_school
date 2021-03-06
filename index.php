<!DOCTYPE html>
<html>
  <body>
    <p>
      <?php
      class Chairs
{
    //Метод для вычисления максимальной прибыли
	static public function getMaxProfit(array $offers, array $demands)
	{	   
            //Переменная, в которую будет записан возвращаемый данной функцией результат
            $sum = 0;	    
	    //Если в городе никто не продает стулья, то следовательно и продавать нечего - прибыль будет равна 0
            if (count($offers) == 0)
            {
        //Возврат итогового значения
            return $sum;            
            }
            
        //Если в городе никто не покупает стулья, то следовательно и продавать некому - прибыль будет равна 0  
        elseif (count($demands) == 0)
            {
            //Возврат итогового значения
            return $sum;
            
            }

        //Если в городе покупателей меньше или равно количеству продавцов, то максимальное количество сделок равно количеству покупателей
        elseif (count($offers) >= count($demands))
            {
            /* Идея в том, чтобы продать самый дешевый стул за максимальную цену для этого масиив спроса сортируется по убыванию */
            rsort($demands);
            //а масиив предложения сортируется по возрастанию
            sort($offers);
            
            //Сделка оформляется только в том случае, если предложенная стоимость выше затрат на стул
            for ($i = 0; $i < count($demands); $i++) 
            {
                if ($offers[$i] < $demands[$i])
                    {
                    $sum+=$demands[$i] - $offers[$i];                    
                    }                    
            }
                    
            //Возврат итогового значения
            return $sum;
            
             }
        //Иначе максимальное количество сделок равно количеству продавцов
        else {
            /* Идея в том, чтобы продать самый дешевый стул за максимальную цену для этого масиив спроса сортируется по убыванию */
            rsort($demands);
            //а масиив предложения сортируется по возрастанию
            sort($offers);
            
            //Сделка оформляется только в том случае, если предложенная стоимость выше затрат на стул
            
            for ($i = 0; $i < count($offers); $i++)
            {                
                if ($offers[$i] < $demands[$i]) 
                    {
                    $sum+=$demands[$i] - $offers[$i];                    
                    }
                    
             }
                    
            //Возврат итогового значения
            return $sum;
        }
        
    }
}
        //Определение случайным образом количества спроса и предложения
        $N = rand (0,30);
        $M = rand (0,30);
        
        //Инициализация массивов, которые будут содержать данные о спросе и предложенииии в этом городе 
        $offers = [];
        $demands= [];
        
        //Наполнение массива, который будут содержать данные о спросе случайными числами 
        for($i = 0; $i < $N; $i++)
        {
            array_push($offers, rand (0,20));
        }
        //Наполнение массива, который будут содержать данные о предложении случайными числами 
        for($i = 0; $i < $M; $i++)
        {
            array_push($demands, rand (0,20));
        }    
        
        //Вызов метода для определения максимально возможной прибыли Остапа в этом городе
        $reult = Chairs::getMaxProfit($offers,$demands);
        
        //Вывод результата
        echo "В этом городе Остап сможет получить максимум ".$reult ." условных единиц";
        ?>
      </p>
  </body>
</html>
