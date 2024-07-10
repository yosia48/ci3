<?php 
$data['title'] = 'Home';
$data['active_page'] = 'Home';
$this->load->view('user/header', $data); 
$this->load->view('user/nav', $data); ?>

<section class="coming-soon bg-coming-soon text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="block">
          <h1>Selamat Datang di Blog Saya</h1>
          <h3>Terima kasih telah mengunjungi! Nikmati konten menarik yang telah kami siapkan untuk Anda.</h3>
          <div class="count-down">
            <div class="syotimer">
              <button class="btn btn-primary btn-responsive" onclick="window.location.href=<?php echo site_url('blog'); ?>">Blog</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->load->view('user/footer'); ?>