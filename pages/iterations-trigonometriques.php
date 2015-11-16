<div class="list">
	
	<div class="serie">
		<h1>Itération trigonométrique n°1</h1>

		<div class="explication">
			Les figures de cette série sont définies par le système non-linéaire suivant :<br >
			<br>
			`x_(n+1) = cos(x_n - y_n)`<br>
			`y_(n+1) = r * (1 - x_n ^ 2)`<br>
			<br>
			Seul le paramètre `r` varie de l'une à l'autre.
		</div>

		<div class="item line-4">
			<div class="item-img">
				<img src="img/p0.png">
			</div>

			<div class="equation">
				`r = 1.1`
			</div>
		</div>

		<div class="item line-4">
			<div class="item-img">
				<img src="img/p1.png">
			</div>

			<div class="equation">
				`r = 1.2`
			</div>
		</div>

		<div class="item line-4">
			<div class="item-img">
				<img src="img/p2.png">
			</div>

			<div class="equation">
				`r = 1.8`
			</div>
		</div>

		<div class="item line-4">
			<div class="item-img">
				<img src="img/p3.png">
			</div>

			<div class="equation">
				`r = 3.1`
			</div>
		</div>

		<div style="clear:both;"></div>
	</div>
	
	<div class="serie">
		<h1>Itération trigonométrique n°2</h1>

		<div class="explication">
			Les figures de cette série sont définies par le système non-linéaire suivant :<br >
			<br>
			`x_(n+1) = x_n * cos(r * x_n) - sin(y_n) * y_n`<br>
			`y_(n+1) = r * cos(1 - x_n)`<br>
			<br>
			Seul le paramètre `r` varie de l'une à l'autre.
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/s0.png">
			</div>

			<div class="equation">
				`r = 2.5`
			</div>
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/s1.png">
			</div>

			<div class="equation">
				`r = 4.5`
			</div>
		</div>

		<div style="clear:both;"></div>
	</div>

	<div class="serie">
		<h1>Itération trigonométrique n°3</h1>

		<div class="explication">
			Cette figure est définie par le système non-linéaire suivant :<br >
			<br>
			`x_(n+1) = r * sin(y_n - r) - r * tan(x_n)`<br>
			`y_(n+1) = cos(x_n - y_n) - r * sin(x_n)`<br>
			<br>
			Le paramètre `r` est indiqué sous le visuel.
		</div>

		<div class="item line-1">
			<div class="item-img">
				<img src="img/n0.png">
			</div>

			<div class="equation">
				`r = 1.5`
			</div>
		</div>

		<div style="clear:both;"></div>
	</div>
</div>