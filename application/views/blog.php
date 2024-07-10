<?php 
$data['title'] = 'Blog';
$data['active_page'] = 'Blog';
$this->load->view('user/header', $data); 
$this->load->view('user/nav', $data); ?>

<!-- Konten halaman blog -->
<section class="section page-title">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 m-auto">
        <h1>Blog</h1>
        <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta.</p>
      </div>
    </div>
  </div>
</section>

<section class="section featured-article">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <article class="featured">
          <div class="image">
            <a href="blog-single.html"><img class="img-fluid" src="<?php echo base_url('/assets/images/feature/featured-article.jpg'); ?>" alt="featured-article"></a>
          </div>
          <div class="content">
            <h2><a href="blog-single.html">Introducing New IOS App</a></h2>
            <ul class="list-inline post-tag">
              <li class="list-inline-item">
                <img class="img-fluid" src="<?php echo base_url('/assets/images/testimonial/feature-testimonial-thumb.jpg'); ?>" alt="author-thumb">
              </li>
              <li class="list-inline-item">
                <a href="#">Thomas Johnson</a>
              </li>
              <li class="list-inline-item">
                August 8, 2017
              </li>
            </ul>
            <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed,convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat.Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis</p>
            <a class="btn btn-main-sm" href="blog-single.html">Read more</a>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<section class="post-grid section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <article class="post-sm">
          <div class="post-thumb">
            <a href="blog-single.html"><img class="w-100" src="<?php echo base_url('/assets/images/blog/post-01.jpg'); ?>" alt="Post-Image"></a>
          </div>
          <div class="post-title">
            <h3><a href="blog-single.html">Innovation distinguishes between a leader and a follower.</a></h3>
          </div>
          <div class="post-meta">
            <ul class="list-inline post-tag">
              <li class="list-inline-item">
                <img src="<?php echo base_url('/assets/images/testimonial/feature-testimonial-thumb.jpg'); ?>" alt="author-thumb">
              </li>
              <li class="list-inline-item">
                <a href="#">Thomas Johnson</a>
              </li>
              <li class="list-inline-item">
                August 8, 2017
              </li>
            </ul>
          </div>
          <div class="post-details">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
          </div>
        </article>
      </div>
      <!-- ... kode yang sama untuk post lainnya ... -->
      <div class="col-12">
        <nav class="pagination-nav">
          <ul class="pagination">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true"><i class="ti-angle-right"></i></span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>

<?php $this->load->view('user/footer'); ?>