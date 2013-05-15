<html>
	<head>
		<title>Sum of Multiples 3 and 5, Below $max_num</title>
	</head>
	<body>
		<h1>Sum of Multiples 3 and 5, Below $max_num</h1>
		<br />
		<br />
		<div>
			<h2>1.  Function to find Multiples (3)</h2>
			<div>
				<?php
					$array_multiple3 = array();
					$num = 3;
					$max_num = 1000;
					while ($num <= $max_num) {
						if ($num % 3 == 0) {
							array_push($array_multiple3, $num);
							true;
						} else {
							false;
						}
						$num++;
					}
					// print_r($array_multiple3);
				?>
			</div>
		</div>
		<div>
			<h2>2.  Function to find Multiples (5)</h2>
			<div>
				<?php
					$array_multiple5 = array();
					$num = 3;
					$max_num = 1000;
					while ($num <= $max_num) {
						if ($num % 5 == 0) {
							array_push($array_multiple5, $num);
							true;
						} else {
							false;
						}
						$num++;
					}
					// print_r($array_multiple5);
				?>
			</div>
		</div>
		<div>
			<h2>3.  Combine $array_multiple3 and $array_multiple5</h2>
			<div>
				<?php
					echo "array_multiple3 COUNT: " . count($array_multiple3);
					echo "<br />";
					echo "array_multiple5 COUNT: " . count($array_multiple5);
					$array_multiple3_5 = array_merge($array_multiple3, $array_multiple5);
					echo "<br /><br />";
					echo "This is the count of the NEW array: ";
					echo count($array_multiple3_5);
				?>
			</div>
		</div>
		<div>
			<h2>4.  Sum of $array_multiple3_5</h2>
			<div>
				<?php
					echo array_sum($array_multiple3_5);
				?>
			</div>
		</div>
	</body>
</html>