<?php
    const $double P_H = 0.5;

    function factorial($Fact)
    {
        if ($Fact == 1) return 1;
        return factorial($Fact - 1) * $Fact; 
    }


    function Main($args)
    {
        echo "Я считаю...";
        $N;
        $m = 3;
        echo "N = ";
        $N = 3;
        $P = 170;
        $h = P_H;


        $x[0] = -h;
        for ($w = 1; $w < $m; $w++)
        {
            $x[$w] = $x[$w-1] + $h;
        }


        for ($w = 1; $w < $m; $w++)
        {
            echo $x[$w] . " "; 
        }


        for ($j = 0; $j < $N; $j++)
        {
            for ($r = 0; $r < $N; $r++)
            {
                if ($j == $r)
                {
                    $E[$j, $r] = 1;
                }
                else
                {
                    $E[$j, $r] = 0;
                }
            }
        }


        for ($j = 0; $j < $N; $j++)
        {
            for ($r = 0; $r < $N; $r++)
            {
                $Ck[$j, $r] = $E[$j, $r];
            }
        }


           


        for ($i = 0; $i < $N; $i++)
        {
            for ($j = 0; $j < $N; $j++)
            {
                //Console.Write("AS[" + i + "," + j + "]: ");
                $AS[$i, $j] = 0;
            }
        }



        for ($i = 0; $i < $N; $i++)
        {
            for ($j = 0; $j < $N; $j++)
            {
                //Console.Write(" AS[" + i + "," + j + "]: " + AS[i, j] + "\t");
            }
            //Console.WriteLine();
        }


        //Заполние матрицы A 
        /* for ($i = 0; i < N; i++)
        {
            for ($j = 0; j < N; j++)
            {
                Console.Write("A[" + i + "," + j + "]: ");
                A[i, j] = int.Parse(Console.ReadLine());
            }
        }
        Console.WriteLine();*/


    /*

        for ($w = 1; w < m; w++)
        {
            for ($i = 0; i < N; i++)
            {
                for ($j = 0; j < N; j++)
                {
                    A[i, j] = ExSolver.solve(ExParser.parse(ExParser.prepare(AS[i, j])), x[w]);
                    Console.Write(" A[" + i + "," + j + "]: " + A[i, j] + "\t");
                }
            }


            for ($i = 0; i < N; i++)
            {
                for ($j = 0; j < N; j++)
                {
                    Console.Write(" A[" + i + "," + j + "]: " + A[i, j] + "\t");
                }
            }

            
            for ($w = 0; w < m; w++)
            {
                for ($i = 0; i < N; i++)
                {
                    for ($j = 0; j < N; j++)
                    {

                        Console.Write(" A[" + i + "," + j + "]: " + A[i, j] + "\t");
                    }
                }
                }
            Console.WriteLine();



            for ($i = 0; i < P; i++)
            {
                if (i % 1 == 0)
                {

                    Console.WriteLine((i / 10) + "% готово");
                    //Console.ReadKey();
                    for ($j = 0; j < N; j++)
                    {
                        for ($r = 0; r < N; r++)
                        {
                            Console.Write(ExpA[j, r] + " ");
                        }
                        Console.WriteLine();
                    }
                }
                if (i == 0)
                {
                    for ($j = 0; j < N; j++)
                    {
                        for ($r = 0; r < N; r++)
                        {
                            ExpA[j, r] = E[j, r];
                        }
                    }
                    continue;
                } else if (i == 1)
                {
                    for ($j = 0; j < N; j++)
                    {
                        for ($r = 0; r < N; r++)
                        {
                            Ak[j, r] = A[j, r];
                        }
                    }
                }
                else
                {
                    for ($j = 0; j < N; j++)
                    {
                        for ($r = 0; r < N; r++)
                        {
                            for ($s = 0; s < N; s++)
                            {
                                Akn[j, r] += Ak[j, s] * A[s, r];
                            }
                        }
                    }
                    for ($j = 0; j < N; j++)
                    {
                        for ($r = 0; r < N; r++)
                        {
                            Ak[j, r] = Akn[j, r];
                        }
                    }
                }
                h = P_H;
                h = Math.Pow(h, i);

                KFakt = factorial(i);

                koaffic = h / KFakt;

                Console.WriteLine(koaffic + " " + KFakt + " " + h);
                for ($j = 0; j < N; j++)
                {
                    for ($r = 0; r < N; r++)
                    {
                        ExpA[j, r] += koaffic*Ak[j, r];
                    }
                }
            }
            for ($j = 0; j < N; j++)
            {
                for ($r = 0; r < N; r++)
                {
                    Console.Write(ExpA[j, r] + " ");
                }
                Console.WriteLine();
            }


            for ($j = 0; j < N; j++)
            {
                for ($r = 0; r < N; r++)
                {
                    for ($s = 0; s < N; s++)
                    {
                        C[j, r] += ExpA[j, s] * Ck[s, r];
                    }
                }
            }
            for ($j = 0; j < N; j++)
            {
                for ($r = 0; r < N; r++)
                {
                    Ck[j, r] = C[j, r];
                }
            }

        }
        Console.WriteLine();

        for ($j = 0; j < N; j++)
        {
            for ($r = 0; r < N; r++)
            {
                Console.Write(" C[" + j + "," + r + "]:" + C[j, r] + " ");
            }
        }

    }
*/
    
?>

Time: 