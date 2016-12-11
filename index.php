<?php

const P_H = 0.5;

function factorial($Fact)
{
    if ($Fact == 1) return 1;
    return factorial($Fact - 1) * $Fact; 
}

function calc_matrix($N, $AS)
{
    $m = 3;
    $P = 170;
    $h = P_H;


    $x[0] = -$h;
    for ($w = 1; $w < $m; $w++)
    {
        $x[$w] = $x[$w-1] + $h;
    }


    for ($w = 1; $w < $m; $w++)
    {
        //echo $x[$w] . " "; 
    }
	//echo "<hr>";

    for ($j = 0; $j < $N; $j++)
    {
        for ($r = 0; $r < $N; $r++)
        {
            if ($j == $r)
            {
                $E[$j][$r] = 1;
            }
            else
            {
                $E[$j][$r] = 0;
            }
        }
    }


    for ($j = 0; $j < $N; $j++)
    {
        for ($r = 0; $r < $N; $r++)
        {
            $Ck[$j][$r] = $E[$j][$r];
        }
    }



    for ($i = 0; $i < $N; $i++)
    {
        for ($j = 0; $j < $N; $j++)
        {
            //echo " AS[" . $i . "," . $j . "]: " . $AS[$i][$j] . " ";
        }
        //echo "<br>";
    }

    //Заполние матрицы A 
    /* for ($i = 0; $i < $N; $i++)
    {
        for ($j = 0; $j < $N; $j++)
        {
            //Console.Write("A[" + i + "," + j + "]: ");
            //A[i, j] = int.Parse(Console.ReadLine());
        }
    }
    //Console.WriteLine();*/




    for ($w = 1; $w < $m; $w++)
    {
        for ($i = 0; $i < $N; $i++)
        {
            for ($j = 0; $j < $N; $j++)
            {
                $A[$i][$j] = $AS[$i][$j];//ExSolver.solve(ExParser.parse(ExParser.prepare(AS[i, j])), x[w]);
                //Console.Write(" A[" + i + "," + j + "]: " + A[i, j] + "\t");
            }
        }


        for ($i = 0; $i < $N; $i++)
        {
            for ($j = 0; $j < $N; $j++)
            {
                //Console.Write(" A[" + i + "," + j + "]: " + A[i, j] + "\t");
            }
        }

        
        //echo "<br>";



        for ($i = 0; $i < $P; $i++)
        {
            if ($i % 17 == 0)
            {

                //echo ($i / 1.7) . "% ready<br>";
                //Console.ReadKey();
                for ($j = 0; $j < $N; $j++)
                {
                    for ($r = 0; $r < $N; $r++)
                    {
                        //echo $ExpA[$j][$r] . " ";
                    }
                    //echo "<br>";
                }
            }
            if ($i == 0)
            {
                for ($j = 0; $j < $N; $j++)
                {
                    for ($r = 0; $r < $N; $r++)
                    {
                        $ExpA[$j][$r] = $E[$j][$r];
                    }
                }
                continue;
            } else if ($i == 1)
            {
                for ($j = 0; $j < $N; $j++)
                {
                    for ($r = 0; $r < $N; $r++)
                    {
                        $Ak[$j][$r] = $A[$j][$r];
                    }
                }
            }
            else
            {
                for ($j = 0; $j < $N; $j++)
                {
                    for ($r = 0; $r < $N; $r++)
                    {
                        for ($s = 0; $s < $N; $s++)
                        {
                            $Akn[$j][$r] += $Ak[$j][$s] * $A[$s][$r];
                        }
                    }
                }
                for ($j = 0; $j < $N; $j++)
                {
                    for ($r = 0; $r < $N; $r++)
                    {
                        $Ak[$j][$r] = $Akn[$j][$r];
                    }
                }
            }
            $h = P_H;
            $h = pow($h, $i);

            $KFakt = factorial($i);

            $koaffic = $h / $KFakt;

            //echo $koaffic . " " . $KFakt . " " . $h . "<br>";
            for ($j = 0; $j < $N; $j++)
            {
                for ($r = 0; $r < $N; $r++)
                {
                    $ExpA[$j][$r] += $koaffic*$Ak[$j][$r];
                }
            }
        }
        for ($j = 0; $j < $N; $j++)
        {
            for ($r = 0; $r < $N; $r++)
            {
                //echo $ExpA[$j][$r] . " ";
            }
            //echo "<br>";
        }


        for ($j = 0; $j < $N; $j++)
        {
            for ($r = 0; $r < $N; $r++)
            {
                for ($s = 0; $s < $N; $s++)
                {
                    $C[$j][$r] += $ExpA[$j][$s] * $Ck[$s][$r];
                }
            }
        }
        for ($j = 0; $j < $N; $j++)
        {
            for ($r = 0; $r < $N; $r++)
            {
                $Ck[$j][$r] = $C[$j][$r];
            }
        }

    }
    //echo "<hr>";
    for ($j = 0; $j < $N; $j++)
    {
        for ($r = 0; $r < $N; $r++)
        {
            //echo " C[" . $j . "," . $r . "]:" . $C[$j][$r] . " ";
        }
    }

	return $C;
}

$step = $_GET['step'];

if($step == 1 || $step == 0){
	
	?>
	<div id="main">
	<h2>Step 1:</h2>
	<p>Select matrix size</p>
	<form action="?" method="GET">
		<input type="hidden" name="step" value="2">
		<select name="size">
			<?php
			for($i=2; $i<=10; $i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
			?>
		</select>
		<input type="submit" value="Next ->">
	</form>
	</div>
	<?php
	
} else if($step == 2){
	$size = $_GET['size'];
	?>
	<div id="main">
	<h2>Step 2:</h2>
	<p>Fill in with data</p>
	<form action="?" method="GET">
		<input type="hidden" name="step" value="3">
		<input type="hidden" name="size" value="<?php echo $size; ?>">
		<table>
			<?php
			for($i=0; $i<$size; $i++){
				?>
				<tr>
					<?php
					for($j=0; $j<$size; $j++){
						echo '<td><input type="text" name="matrix['.$i.']['.$j.']"></td>';	
					}
					?>
					
				</tr>
				
				<?php
				
			}
			?>
		</table>
		<input type="submit" value="Next ->">
	</form>
	<hr>
	<a href="?step=1"><input type="submit" value="<- Back"></a>
	</div>
	<?php
	
} else if($step == 3){
	$size = $_GET['size'];
	$R = calc_matrix($size, $_GET['matrix']);
	
	?>
	<div id="main">
	<h2>Step 3:</h2>
	<p>Here are your results</p>
	<table>
			<?php
			for($i=0; $i<$size; $i++){
				?>
				<tr>
					<?php
					for($j=0; $j<$size; $j++){
						echo '<td><input type="text" value="'.$R[$i][$j].'" readonly></td>';	
					}
					?>
					
				</tr>
				
				<?php
				
			}
			?>
		</table>
		<hr>
		<a href="?step=2"><input type="submit" value="<- Back"></a>
		<a href="?step=1"><input type="submit" value="Start again"></a>
		</div>
	<?php
}
?>

<style>
	body{
		background: #ddd;
		font: 20px Century Gothic, Arial, sans-serif;
	}
	#main{
		background: #eee;
		position: absolute;
		top: 30px;
		height: calc(100% - 100px);
		width: calc(100% - 100px);
		left: 30px;
		border: 1px solid #062cff;
		padding: 20px;
		text-align: center;
		overflow: scroll;
	}
	input[type=text]{
		height: 60px;
		width: 60px;
		text-align: center;
		transition: width 0.5s;
	}
	input[type=text]:hover{
		width: 150px;
	}
	table{
		margin: 0 auto;
	}
	a{
		text-decoration: none;
	}
</style>