<div class=" top-nav rsidebar span_1_of_left">
				<h3 class="cate">Danh Mục Sản Phẩm</h3>
				<ul class="menu">
					<li class="item1"><a href="#">Điện Thoại<img class="arrow-img" src="images/arrow1.png" alt=""/> </a>
					<ul class="cute">
						<li class="subitem1"><a href="samsung.html">Samsung</a></li>
						<li class="subitem2"><a href="apple.html">Apple</a></li>
						<li class="subitem3"><a href="vsmart.html">Vsmart</a></li>
					</ul>
					</li>
					<li class="item2"><a href="#">Laptop <img class="arrow-img img-arrow" src="images/arrow1.png" alt=""/></a>
					<ul class="cute">
						<li class="subitem1"><a href="macbook.html">Macbook </a></li>
						<li class="subitem2"><a href="asus.html">Asus </a></li>
						<li class="subitem3"><a href="dell.html">Dell </a></li>
					</ul>
					</li>
					<li class="item3"><a href="#">Phụ Kiện<img class="arrow-img" src="images/arrow1.png" alt=""/></a>
					<ul class="cute">
						<li class="subitem1"><a href="loa.html">Loa </a></li>
						<li class="subitem2"><a href="tainghe.html">Tai Nghe </a></li>
						<li class="subitem3"><a href="sacduphong.html">Sạc Dự Phòng </a></li>
					</ul>
			<ul class="kid-menu">
				<li><a href="product.html">Điện Thoại Cũ</a></li>
				<li class="menu-kid-left"><a href="contact.html">Liên hệ</a></li>
			</ul>
		</li>
		
	</ul>
</div>
<!--initiate accordion-->
<script type="text/javascript">
	$(function() {
	var menu_ul = $('.menu > li > ul'),
	menu_a  = $('.menu > li > a');
	menu_ul.hide();
	menu_a.click(function(e) {
	e.preventDefault();
	if(!$(this).hasClass('active')) {
	menu_a.removeClass('active');
	menu_ul.filter(':visible').slideUp('normal');
	$(this).addClass('active').next().stop(true,true).slideDown('normal');
	} else {
	$(this).removeClass('active');
	$(this).next().stop(true,true).slideUp('normal');
	}
	});
	
	});
</script>
<a class="view-all all-product" href="product.html">Tất cả sản phẩm<span> </span></a>