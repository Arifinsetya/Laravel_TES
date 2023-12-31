<nav class="navbar navbar-expand-lg navbar-dark">
   <div class="container">
     <a class="navbar-brand" href="/">GAS </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav mx-auto">
         <li class="nav-item">
           <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/">Beranda</a>
         </li>
         <li class="nav-item">
           <a class="nav-link {{ ($title === "about") ? 'active' : '' }}" href="/about">Tentang GAS </a>
         </li>
         <li class="nav-item">
            <a class="nav-link {{ ($title === "fitur") ? 'active' : '' }}" href="/fitur">Fitur </a>
          </li>
         <li class="nav-item">
            <a class="nav-link {{ ($title === "daftar") ? 'active' : '' }}" href="/daftar">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "karir") ? 'active' : '' }}" href="/karir">Karir</a>
          </li>
       </ul>
     </div>
   </div>
 </nav>



