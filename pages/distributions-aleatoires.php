<div class="list">
	
	<div class="serie">
		<h1>Distributions aléatoires ?</h1>

		<div class="explication">
			Une suite `S` d'entiers naturels entre 0 et 9 (inclus) est générée d'une manière ou d'une autre (processus indiqué sous chaque figure).<br>
			<br>
			Les visuels de cette série sont construits de la manière suivante :<br>
			<br>
			`AA S_n in [0, 9]`<br>
			`AA P_x,P_y in [0, 9]`<br>
			`(P_x, P_y) = (S_n, S_(n+1))`<br>
			<br>
			L'opacité de chaque cellule permet de visualiser la densité de points sur la coordonnée en question.<br>
			<br>
			Il est intéressant de noter qu'une suite "réellement" aléatoire sera représentée par une grille presque complètement uniforme (si tant est que l'échantillon soit assez grand).<br>
			<br>
			Réciproquement, moins la grille est uniforme, plus il est probable que le processus de génération des samples soit biaisé.
			<br>
			<br>
			La taille de chaque échantillon est relativement faible afin de pouvoir comparer des données légères tout ou pouvant visualiser la différence notable de rendu entre les différents processus.
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/aleatoire0.png">
			</div>

			<div class="equation">
				Les chiffres ont été tapés "aléatoirement" sur un clavier d'ordinateur portable, la main gauche restant proche des chiffres entre 1 et 5, la main droite entre 5 et 0 ("0" se situant à droite du "9" sur le clavier).<br>
			</div>
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/aleatoire0bis.png">
			</div>

			<div class="equation">
				Les chiffres ont été à nouveau tapés "aléatoirement" sur un clavier d'ordinateur portable, la main gauche restant proche des chiffres entre 1 et 5, la main droite entre 5 et 0 ("0" se situant à droite du "9" sur le clavier).<br>
			</div>
		</div>

		<div style="clear: both;"></div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/aleatoire1.png">
			</div>

			<div class="equation">
				Les chiffres correspondent aux ~280 premières décimales de `pi`<br>
			</div>
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/aleatoire1bis.png">
			</div>

			<div class="equation">
				Les chiffres correspondent aux ~280 premières décimales de `e`<br>
			</div>
		</div>
		
		<div style="clear: both;"></div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/aleatoire2.png">
			</div>

			<div class="equation">
				Les caractères des deux premières strophes du <em>Bateau Ivre</em> d'Arthur Rimbaud sont d'abord convertis en entiers entre 1 et 26 (Les caractères non alphanumériques sont supprimés). <br>Le modulo 10 de chaque nombre est ensuite utilisé pour générer la séquence correspondant à cette figure.<br>
			</div>
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/aleatoire3.png">
			</div>

			<div class="equation">
				Les caractères du poème <em>L'étranger</em> de Charles Baudelaire (extrait du <em>Spleen de Paris</em>) sont d'abord convertis en entiers entre 1 et 26 (Les caractères non alphanumériques sont supprimés). <br>Le modulo 10 de chaque nombre est ensuite utilisé pour générer la séquence correspondant à cette figure.<br>
			</div>
		</div>

		<div style="clear:both;"></div>
	</div>

	<div class="serie">
		<div class="item line-3">
			<div class="item-img">
				<img src="img/aleatoire0mul.png">
			</div>

			<div class="equation">
				Les visuels correspondant aux séquences entrées au clavier sont superposés avec un mode de fusion "Mulitiplication" afin de mettre en évidence les zones plus denses dans ces deux cas
			</div>
		</div>

		<div class="item line-3">
			<div class="item-img">
				<img src="img/aleatoire1mul.png">
			</div>

			<div class="equation">
				Les visuels correspondant aux séquences générées à partir de constantes mathématiques sont superposés avec un mode de fusion "Mulitiplication" afin de mettre en évidence les zones plus denses dans ces deux cas
			</div>
		</div>

		<div class="item line-3">
			<div class="item-img">
				<img src="img/aleatoire23mul.png">
			</div>

			<div class="equation">
				Les visuels correspondant aux séquences générées à partir de textes écrits en français sont superposés avec un mode de fusion "Mulitiplication" afin de mettre en évidence les zones plus denses dans ces deux cas
			</div>
		</div>

		<div style="clear:both;"></div>
	</div>

</div>