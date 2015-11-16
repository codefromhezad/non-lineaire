<div class="list">
	
	<div class="serie">
		<h1>Exploration complexe n°1 <small>(Mandelbrot)</small></h1>

		<div class="explication">
			Les figures suivantes illustrent l'ensemble de Mandelbrot. Les zones en noir profond font partie de l'ensemble. Les zones hors de cet ensemble sont colorées d'une manière ou d'une autre (indiquée sous la figure en question).<br>
			<br>
			L'ensemble de Mandelbrot est défini ainsi :<br>
			<br>
			`AA z, c in CC`<br>
			`z_(n+1) = z_n ^ 2 + c`<br>
			<br>
			`z` fera partie de l'ensemble de Mandelbrot si la suite ne diverge pas.<br>
			<br>
			Pour chaquel pixel testé : <br>
			<ul>
				<li>`z` est initialement égal à 0.
				<li>`c` est égal au nombre complexe représentant les coordonnées cardinales (mises à l'échelle) du pixel actuellement considéré
			</ul>
			<br>
			Chaque figure est centrée sur des coordonnées différentes (avec un niveau de zoom différent).
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/mandel0.png">
			</div>

			<div class="equation">
				Aucune coloration des pixels hors de l'ensemble.
			</div>
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/mandel1.png">
			</div>

			<div class="equation">
				Plus la suite diverge rapidement, plus la luminosité est faible.
			</div>
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/mandel2.png">
			</div>

			<div class="equation">
				La vitesse de divergence est utilisée pour modifier la teinte plutôt que la luminosité. 
			</div>
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/mandel3.gif">
			</div>

			<div class="equation">
				Même règle que pour la figure précédente mais un décalage constant est ajouté à la teinte sur chaque frame.
			</div>
		</div>

		<div style="clear:both;"></div>
	</div>

	<div class="serie">
		<h1>Exploration complexe n°2 <small>(Julia)</small></h1>

		<div class="explication">
			Les figures suivantes illustrent l'ensemble de Julia. Les zones hors de cet ensemble sont colorées en associant la teinte d'un pixel à la vitesse d'échappement de la suite indiquée ci-dessous pour le pixel en question :<br>
			<br>
			`AA z, c in CC`<br>
			`z_(n+1) = z_n ^ 2 + c`<br>
			<br>
			La suite est la même que la suite de Mandelbrot à ceci près que pour chaquel pixel testé : <br>
			<ul>
				<li>`z` est initialement égal à `P_x + i * P_y` (`P_x` et `P_y` étant les coordonnées cardinales [mises à l'échelle] du pixel considéré)
				<li>`c` est une constante précisée sous chaque figure
			</ul>
			<br>
			Chaque figure est centrée sur des coordonnées différentes (avec un niveau de zoom différent).
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/julia0.png">
			</div>

			<div class="equation">
				`c = -0.4 + i * 0.6`
			</div>
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/julia1.png">
			</div>

			<div class="equation">
				`c = -0.285 + i * 0.01`
			</div>
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/julia2.png">
			</div>

			<div class="equation">
				`c = -0.70176 + i * 0.3842`
			</div>
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/julia3.png">
			</div>

			<div class="equation">
				`c = -0.8 + i * 0.156`
			</div>
		</div>

		<div style="clear:both;"></div>
	</div>

</div>