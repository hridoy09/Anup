<nav class="navbar navbar-expand-lg navbar-dark navbar1">
  <div class="container-fluid">
  
   <div class="logo">
      <img src="{{asset('assets/image/anupBiswasLogo.png')}}" alt="">
   </div>
  
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse navcontent1" id="main_nav">
     <ul class="navbar-nav">
         <li class="nav-item active nav-item_con"> <a class="nav-link" href="{{route('index')}}">Home </a> </li>              
         <li class="nav-item dropdown nav-item_con">
          <a class="nav-link" href="{{route('sisterlist')}}">  Our Sister Consurn </a>                 
       </li>
         <li class="nav-item nav-item_con"><a class="nav-link" href="{{route('Sponsordirectors')}}"> Our Team </a></li>
         <li class="nav-item nav-item_con"><a class="nav-link" href="{{route('contact')}}"> Contact Us</a></li>
         
         
      </ul>
     
  </div>
  
  <div class="soical-icon">
      <a href="#"><i class="fa-brands fa-facebook-square"></i></a>
      <a href="#"><i class="fa-brands fa-twitter-square"></i></a>
      <a href="#"><i class="fa-brands fa-youtube-square"></i></a>
      <a href="#"><i class="fa-brands fa-pinterest-square"></i></a>
  </div>
  </div>      
</nav>