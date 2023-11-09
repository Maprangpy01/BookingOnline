<div class="row carousel-search" >
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item">
              <img src="{{ asset('assets/images/image 18.jpg') }}" alt="" width="100%"
              class="img-logo-profile border-radius-10">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/images/image 18.jpg') }}" alt="" width="100%"
              class="img-logo-profile border-radius-10">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/image 18.jpg') }}" alt="" width="100%"
                class="img-logo-profile border-radius-10">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="search-box">
      <div class="row text-center mt-2">
        <h3><strong> ค้นหาโครงการ</strong></h3>
      </div>
      <div class="row" style="display: flex;align-items: flex-end;">
          <div class="col-md-3 ms-5">
            <div class="form-group">
              <strong class="ms-1 mb-1 fnt-20 bt" for="Prefix">โครงการ</strong>
              <select class="form-select">
                      <option value="">โครงการ</option>
              </select>
          </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <strong class="ms-1 mb-1 fnt-20 bt" for="Prefix">ทำเลที่ตั้ง</strong>
              <select class="form-select">
                      <option value="">ทำเลที่ตั้ง</option>
              </select>
          </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <strong class="ms-1 mb-1 fnt-20 bt" for="Prefix">ราคา</strong>
              <select class="form-select" >
                      <option value="">ราคา</option>
              </select>
          </div>
          </div>
          <div class="col-md-2">
            <button class="btn btn-main btn-w-100"><i class="bi bi-search"></i> ค้นหา</button>
          </div>
      </div>
    </div>
</div>
