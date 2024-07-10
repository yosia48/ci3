<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
  <div class="container">
    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url('/assets/images/logo.png'); ?>" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php echo (isset($active_page) && $active_page == 'home') ? 'active' : ''; ?>">
          <a class="nav-link" href="<?php echo base_url('/welcome'); ?>">Home</a>
        </li>
        <li class="nav-item @@about">
          <a class="nav-link" href="<?php echo site_url('blog'); ?>">Blog</a>
        </li>

        <li class="nav-item dropdown @@pages">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Product
            <span><i class="ti-angle-down"></i></span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item @@team" href="team.html">Team</a></li>
            <li><a class="dropdown-item @@career" href="career.html">Career</a></li>
            <li><a class="dropdown-item @@blog" href="blog.html">Blog</a></li>
            <li><a class="dropdown-item @@blogSingle" href="blog-single.html">Blog Single</a></li>
            <li><a class="dropdown-item @@privacy" href="privacy-policy.html">Privacy</a></li>
            <li><a class="dropdown-item @@faq" href="FAQ.html">FAQ</a></li>
            <li><a class="dropdown-item" href="sign-in.html">Sign In</a></li>
            <li><a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
            <li><a class="dropdown-item" href="404.html">404</a></li>
            <li><a class="dropdown-item" href="comming-soon.html">Coming Soon</a></li>
            <li class="dropdown dropdown-submenu dropleft">
              <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                <li><a class="dropdown-item" href="index.html">Submenu 21</a></li>
                <li><a class="dropdown-item" href="index.html">Submenu 22</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item <?php echo (isset($active_page) && $active_page == 'about') ? 'active' : ''; ?>">
          <a class="nav-link" href="<?php echo site_url('about'); ?>">About</a>
        </li>
        <li class="nav-item <?php echo (isset($active_page) && $active_page == 'contact') ? 'active' : ''; ?>">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>