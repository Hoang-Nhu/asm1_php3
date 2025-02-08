
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Chủ - My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .hero {
            background: url('https://source.unsplash.com/1600x900/?technology,nature') center/cover no-repeat;
            height: 90vh;
            color: white;
            display: flex;
            align-items: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
        }
        .service-icon {
            font-size: 3rem;
            color: #007bff;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">My Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Trang Chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sản Phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Danh Muc</a></li>

                    <li class="nav-item"><a class="nav-link" href="#">Dịch Vụ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Liên Hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h1>Chào mừng đến với My Shop</h1>
            <p>Chúng tôi mang đến cho bạn những sản phẩm tốt nhất với giá cả hợp lý.</p>
            <a href="{{route('home')}}" class="btn btn-primary btn-lg">Khám Phá Ngay</a>
        </div>
    </header>

    <!-- Dịch Vụ -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Dịch Vụ Của Chúng Tôi</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <i class="service-icon bi bi-bag-check"></i>
                <h4>Chất Lượng Cao</h4>
                <p>Sản phẩm của chúng tôi được chọn lọc kỹ càng và đảm bảo chất lượng.</p>
            </div>
            <div class="col-md-4">
                <i class="service-icon bi bi-truck"></i>
                <h4>Giao Hàng Nhanh</h4>
                <p>Vận chuyển nhanh chóng trong vòng 24h cho tất cả đơn hàng.</p>
            </div>
            <div class="col-md-4">
                <i class="service-icon bi bi-headset"></i>
                <h4>Hỗ Trợ 24/7</h4>
                <p>Đội ngũ hỗ trợ luôn sẵn sàng giải đáp mọi thắc mắc của bạn.</p>
            </div>
        </div>
    </section>

    <!-- Sản Phẩm Mới -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Sản Phẩm Mới Nhất</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/images/products/Ao-len.jpg') }}" class="card-img-top" alt="Sản phẩm" width="200" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Gaming</h5>
                            <p class="card-text">Hiệu suất mạnh mẽ, thiết kế đẹp mắt.</p>
                            <a href="#" class="btn btn-primary">Xem Ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/images/products/aonam.webp') }}" class="card-img-top" alt="Sản phẩm" width="200" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Điện Thoại Thông Minh</h5>
                            <p class="card-text">Công nghệ hiện đại, giá cả hợp lý.</p>
                            <a href="#" class="btn btn-primary">Xem Ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{url('images/ao.jpg')}}" class="card-img-top" alt="Sản phẩm" width="200" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Đồng Hồ Thông Minh</h5>
                            <p class="card-text">Theo dõi sức khỏe, kết nối thông minh.</p>
                            <a href="#" class="btn btn-primary">Xem Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="text-center py-5 bg-primary text-white">
        <h2>Tham gia ngay để nhận ưu đãi</h2>
        <p>Nhận ngay mã giảm giá 10% cho đơn hàng đầu tiên.</p>
        <a href="#" class="btn btn-light btn-lg">Đăng Ký Ngay</a>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 My Shop. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
