
<?php include 'includes/head.php'; ?>

<?php include 'includes/header.php'; ?>

<session class="slide-home">
	<div class="controle-slide">
		<a class="left" href="#slide" role="button" data-slide="prev"></a>
		<a class="right" href="#slide" role="button" data-slide="next"></a>
	</div>
	<div class="carousel slide" data-ride="carousel" id="slide">
		<div class="carousel-inner" role="listbox">
			<div class="item active" style="background-image: url('assets/images/bg-slide.jpg');">
				<div class="caption">
					<h2>TÍTULO DE DESTAQUE</h2>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</span>
					<a href="#">VEJA MAIS</a>
				</div>
			</div>
			<div class="item" style="background-image: url('assets/images/bg-slide-1.jpg');">
				<div class="caption">
					<h2>TÍTULO DE DESTAQUE</h2>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</span>
					<a href="#">VEJA MAIS</a>
				</div>
			</div>
			<div class="item" style="background-image: url('assets/images/bg-slide-2.jpg');">
				<div class="caption">
					<h2>TÍTULO DE DESTAQUE</h2>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</span>
					<a href="#">VEJA MAIS</a>
				</div>
			</div>
			<div class="item" style="background-image: url('assets/images/bg-slide-3.jpg');">
				<div class="caption">
					<h2>TÍTULO DE DESTAQUE</h2>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</span>
					<a href="#">VEJA MAIS</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container box-btn">
		<div class="row">
			<div class="col-md-3 item-slide">
				<a href="#" class="">
					<img src="assets/images/item-slide-1.png" alt="">
					<span>OBRAS E REFORMAS<br>INDUSTRIAIS</span>
				</a>
			</div>
			<div class="col-md-3 item-slide">
				<a href="#" class="">
					<img src="assets/images/item-slide-2.png" alt="">
					<span>CONCEITO<br>DE GESTÃO</span>
				</a>
			</div>
			<div class="col-md-3 item-slide">
				<a href="#" class="">
					<img src="assets/images/item-slide-3.png" alt="">
					<span>GERENCIAMENTO<br>DE PROJETOS</span>
				</a>
			</div>
			<div class="col-md-3 item-slide">
				<a href="#" class="">
					<img src="assets/images/item-slide-4.png" alt="">
					<span>PORTIFÓLIO</span>
				</a>
			</div>
		</div>
	</div>
</session>

<?php include 'includes/footer.php'; ?>