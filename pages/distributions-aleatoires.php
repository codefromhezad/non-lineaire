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
			La taille des échantillons sera pour chaque figure relativement faible afin de ne pas atteindre d'uniformité statistique tout ou pouvant visualiser la différence notable de rendu entre les différents processus.
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/aleatoire0.png">
			</div>

			<div class="equation">
				Les chiffres ont été tapés "aléatoirement" sur un clavier d'ordinateur portable, la main gauche restant proche des chiffres entre 1 et 5, la main droite entre 5 et 0 ("0" se situant à droite du "9" sur le clavier).<br>
				<br>
				<strong>Suite utilisée :</strong><br>
				<pre style="word-wrap: break-word;">49582967402957485739730194738695830698586738405927495860293857463940681039857684039485930095830385832020239585676729125446504393285809329258567329292845758192382347568394581235034684729359657394356934029183495823325</pre>
			</div>
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/aleatoire0bis.png">
			</div>

			<div class="equation">
				Les chiffres ont été à nouveau tapés "aléatoirement" sur un clavier d'ordinateur portable, la main gauche restant proche des chiffres entre 1 et 5, la main droite entre 5 et 0 ("0" se situant à droite du "9" sur le clavier).<br>
				<br>
				<strong>Suite utilisée :</strong><br>
				<pre style="word-wrap: break-word;">948375759229458829139585403093478592023058239258230923193285859234855493485728101405867392302358568239239586850523023905482910932859302858239320191823857583935740329183475674393894829023757392303289328593938358695033202394873687289192385859394357592921</pre>
			</div>
		</div>

		<div style="clear: both;"></div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/aleatoire1.png">
			</div>

			<div class="equation">
				Les chiffres correspondent aux premières décimales de `pi`<br>
				<br>
				<strong>Suite utilisée :</strong><br>
				<pre style="word-wrap: break-word;">14159265358979323846264338327950288419716939937510582097494459230781640628620899862803482534211706798214808651328230664709384460955058223172535940812848111745028410270193852110555964462294895493038196442881097566593344</pre>
			</div>
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/aleatoire1bis.png">
			</div>

			<div class="equation">
				Les chiffres correspondent aux premières décimales de `e`<br>
				<br>
				<strong>Suite utilisée :</strong><br>
				<pre style="word-wrap: break-word;">718281828459045235360287471352662497757247093699959574966967627724076630353547594571382178525166427427466391932003059921817413596629043572900334295260595630738132328627943490763233829880753195251019011573834187930702154089149934884167509244761460668082264800168477411853742345442437107</pre>
			</div>
		</div>
		
		<div style="clear: both;"></div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/aleatoire2.png">
			</div>

			<div class="equation">
				Les caractères des deux premières strophes du <em>Bateau Ivre</em> d'Arthur Rimbaud sont d'abord convertis en entiers entre 1 et 26 (Les caractères non alphanumériques sont supprimés). Le modulo 10 de chaque nombre est ensuite utilisé pour générer la séquence correspondant à cette figure.<br>
				<br>
				<strong>Suite utilisée :</strong><br>
				<pre style="word-wrap: break-word;">3533505459354419945962512599361999225905453595409962197194618259812518945965114851759389184925912195406899651839225925915140325194191146505114453512518900199949513951445051925971961759658051845229621314495145350549147219971144125335981251895406949359016175925962512593540219994593544855052512199</pre>
			</div>
		</div>

		<div class="item line-2">
			<div class="item-img">
				<img src="img/aleatoire3.png">
			</div>

			<div class="equation">
				Les caractères du poème <em>L'étranger</em> de Charles Baudelaire (extrait du <em>Spleen de Paris</em>) sont d'abord convertis en entiers entre 1 et 26 (Les caractères non alphanumériques sont supprimés). Le modulo 10 de chaque nombre est ensuite utilisé pour générer la séquence correspondant à cette figure.<br>
				<br>
				<strong>Suite utilisée :</strong><br>
				<pre style="word-wrap: break-word;">7191935901253951485335497310971549905468501385019551851054688505419496854938549918496885059139925192519958256241456185254540259549359085900197135051894354410161089509745859519715225210901455225590990152125110052193581992525409589459955093358052252580525819935335251981995649515871193590145435408158494198508147580193525941175925941175971961995402219221925935825922514411759</pre>
			</div>
		</div>

		<div style="clear:both;"></div>
	</div>

</div>