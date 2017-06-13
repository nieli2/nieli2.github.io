<?php
class the_printer
{
	public function print_this($color = null, $num = 9, $string = "*")
	{
		for($a = 1; $a <= $num; $a++)
		{
			for($b = 1; $b <= $a; $b++)
			{
				echo "<span style=".(($color) ? 'color:'.$color : '').">$string</span>";
			}
			echo "<br>";
		}
	}
	public function print_this1($color = null, $num = 9, $string = "*")
	{
		for($a = 1; $a <= $num; $a++)
		{
			for($b = $num; $b >= $a; $b--)
			{
				echo "<span style=".(($color) ? 'color:'.$color : '').">$string</span>";
			}
			echo "<br>";
		}
	}
	public function print_this2($color = null, $num = 9, $string = "*")
	{
		for($a = 1; $a <= $num; $a++)
		{
			for($c = 1; $c < $a; $c++)
			{
				echo "<span style='visibility:hidden'>$string</span>";
			}
			for($b = $num; $b >= $a; $b--)
			{
				echo "<span style=".(($color) ? 'color:'.$color : '').">$string</span>";
			}
			echo "<br>";
		}
	}
	public function print_this3($color = null, $num = 9, $string = "*")
	{
		for($a = 1; $a <= $num; $a++)
		{
			for($c = $a; $c < $num; $c++)
			{
				echo "<span style='visibility:hidden;'>$string</span>";
			}
			for($b = 1; $b <= $a; $b++)
			{
				echo "<span style=".(($color) ? 'color:'.$color : '').">$string</span>";
			}
			echo "<br>";
		}
	}
}
?>
<div style="float: left; width: 100%; text-align: center; display: table;">
	<?php for($a = 0; $a <= 9; $a++ ) : ?>
	<div style="text-align: left; display: inline-table;">
		<?php 
			the_printer::print_this1();
			the_printer::print_this();
			the_printer::print_this1();
			the_printer::print_this();
	 	?>
	</div>
	<div style="text-align: left; display: inline-table;">
		<?php 
			the_printer::print_this2();
			the_printer::print_this3();
			the_printer::print_this2();
			the_printer::print_this3();
	 	?>
	</div>
	<?php endfor; ?>
</div>