<!--Footer Section-->
		<section class="main-footer">
			<footer class="bg-dark-purple text-white">
				<div class="footer-main">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-12">
								<h6>About</h6>
								<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<p>Bhoomantra Services Private Limited Established in 2019 - A group company of Burgeon verticles origin at Mumbai of Maharashtra State with a Vision to establish in Globe. </p>
                               
							</div>
							<div class="col-lg-4 col-md-12">
								<h6>Our Quick Links</h6>
								 <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<ul class="list-unstyled mb-0">
									
									
									<li><a href="about.php">About</a></li>
									<li><a href="contact.php">Contact Us</a></li>
									<li><a href="disclaimer.php">Disclaimer</a></li>
								</ul>
							</div>

							<div class="col-lg-4 col-md-12">
								<h6>Contact</h6>
								<hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<ul class="list-unstyled mb-0">
									<li>
										<a href="https://www.google.com/maps/place/Royal+Empress,+Baner+-+Mahalunge+Rd,+Baner,+Pune,+Maharashtra+411045/@18.564485,73.780013,16z/data=!4m5!3m4!1s0x3bc2becc34802539:0x7e5b3a0d67c06664!8m2!3d18.5644849!4d73.7800132?hl=en"><i class="fa fa-home mr-3 text-primary"></i> The Avenue, Unit No.303,<br>Airport Road, Marol, Andheri(E) <br>Mumbai-400059</a>
									</li>
									<li>
										<a href="mailto:support@bhoomantra.com"><i class="fa fa-envelope mr-3 text-primary"></i> support@bhoomantra.com</a></li>
									<li>
										<a href="tel:8235712712"><i class="fa fa-phone mr-3 text-primary"></i> + 91 82 35 712 712</a>
									</li>
									 <li>
										<!--a href="#"><i class="fa fa-print mr-3 text-primary"></i> + 01 234 567 89</a-->
									</li>
								</ul>
								<ul class="list-unstyled list-inline mt-3">
									<li class="list-inline-item">
									  <a href="https://www.facebook.com/bhoomantra712" class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
										<i class="fa fa-facebook bg-facebook"></i>
									  </a>
									</li>
					 
									<li class="list-inline-item">
									  <a href="https://in.linkedin.com/in/bhoomantra-services-private-limited-76717b221" class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
										<i class="fa fa-linkedin bg-linkedin"></i>
									  </a>
									</li>
								</ul>
							</div>
							<!--<div class="col-lg-4 col-md-12">
								<h6>Subscribe</h6>
								<hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<div class="clearfix"></div>
								<div class="input-group w-100">
									<input type="text" class="form-control br-tl-3  br-bl-3 " placeholder="Email">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary br-tr-3  br-br-3"> Subscribe </button>
									</div>
								</div>
								 
							 
							</div>-->
						</div>
					</div>
				</div>
				<div class="bg-dark-purple text-white p-0">
					<div class="container">
						<div class="row d-flex">
							<div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center ">
								Copyright © 2022 Bhoomantra |  All rights reserved.
							</div>
						</div>
					</div>
				</div>
			</footer>
		</section>
		<!--Footer Section-->
		<script>
		    function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
   document.getElementById("top_bar").style.marginLeft = "250px";
   document.getElementById("sticky-wrapper").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("top_bar").style.marginLeft = "0";
  document.getElementById("sticky-wrapper").style.marginLeft = "0";
}
document.getElementById("mySidenav").style.display="block";
document.getElementById("mySidenav_button").style.display="block";
function select_city(sel){
        var location_id=document.getElementById("location_session").value;
        var location_name=sel.options[sel.selectedIndex].text;
        /*localStorage.setItem("location_id",location_id);
        localStorage.setItem("location_name",location_name);
        location_name=location_name+" <span style='font-size: 14px;float:right;margin-top:9px'>selected city</span>"
        document.getElementById("location_session_display").innerHTML=location_name;*/
        var path="city.php?id="+location_id+"&city="+location_name;
        window.location.href=path;
    }
    
function select_builder(sel){
        var builder_id=document.getElementById("builder_session").value;
        var builder_name=sel.options[sel.selectedIndex].text;
        var path="builder.php?id="+builder_id+"&builder="+builder_name;
        window.location.href=path;
        
    }    
		</script>