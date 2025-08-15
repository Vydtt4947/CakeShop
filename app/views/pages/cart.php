<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng của bạn - Parrot Smell</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/websitePS/public/assets/css/style.css">
    <style>
        :root {
            --primary-color: #009688;
            --secondary-color: #fdf5e6;
            --text-color: #5d4037;
            --heading-font: 'Playfair Display', serif;
            --body-font: 'Roboto', sans-serif;
        }
        body {
            font-family: var(--body-font);
            color: var(--text-color);
            background-color: #f8f9fa;
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            background-color: #fff;
        }
        .navbar-brand {
            font-family: var(--heading-font);
            font-weight: 700;
            color: var(--primary-color) !important;
        }
        .btn-primary-custom {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
            padding: 12px 30px;
            font-weight: 500;
            transition: all 0.3s;
        }
        .btn-primary-custom:hover {
            background-color: #00796b;
            border-color: #00796b;
            transform: translateY(-2px);
        }
        .btn-outline-primary-custom {
            background-color: transparent;
            border-color: var(--primary-color);
            color: var(--primary-color);
            padding: 12px 30px;
            font-weight: 500;
            transition: all 0.3s;
        }
        .btn-outline-primary-custom:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, #00796b 100%);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }
        .hero-title {
            font-family: var(--heading-font);
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        
        /* Cart Container */
        .cart-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 2.5rem;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }
        .cart-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), #00796b);
        }
        
        /* Empty Cart */
        .empty-cart {
            text-align: center;
            padding: 4rem 2rem;
        }
        .empty-cart-icon {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            font-size: 3rem;
            color: var(--primary-color);
        }
        .empty-cart h3 {
            font-family: var(--heading-font);
            color: var(--text-color);
            margin-bottom: 1rem;
        }
        .empty-cart p {
            color: #6c757d;
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }
        
        /* Product Cards */
        .product-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border: 1px solid #f1f3f4;
        }
        .product-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .product-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .product-info h5 {
            font-family: var(--heading-font);
            color: var(--text-color);
            margin-bottom: 0.5rem;
        }
        .product-code {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        .product-price {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary-color);
        }
        .product-total {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-color);
        }
        
        /* Quantity Controls */
        .quantity-control {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: #f8f9fa;
            border-radius: 25px;
            padding: 0.5rem;
            width: fit-content;
        }
        .quantity-btn {
            width: 35px;
            height: 35px;
            border: none;
            background: white;
            color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .quantity-btn:hover {
            background: var(--primary-color);
            color: white;
            transform: scale(1.1);
        }
        .quantity-input {
            width: 50px;
            text-align: center;
            border: none;
            background: transparent;
            font-weight: 600;
            color: var(--text-color);
        }
        .quantity-input:focus {
            outline: none;
        }
        
        /* Ẩn spinner của input number */
        .quantity-input::-webkit-outer-spin-button,
        .quantity-input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .quantity-input[type=number] {
            -moz-appearance: textfield;
        }
        
        /* Remove Button */
        .remove-btn {
            background: linear-gradient(135deg, #ff6b6b, #ee5a52);
            border: none;
            color: white;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(255,107,107,0.3);
        }
        .remove-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 15px rgba(255,107,107,0.4);
        }
        
        /* Cart Summary */
        .cart-summary {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 2rem;
            position: sticky;
            top: 2rem;
        }
        .summary-header {
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #f1f3f4;
        }
        .summary-header h4 {
            font-family: var(--heading-font);
            color: var(--text-color);
            margin-bottom: 0.5rem;
        }
        .summary-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #f1f3f4;
        }
        .summary-item:last-child {
            border-bottom: none;
            font-weight: 700;
            font-size: 1.3rem;
            color: var(--primary-color);
            padding-top: 1.5rem;
            border-top: 2px solid #f1f3f4;
        }
        .summary-label {
            color: #6c757d;
        }
        .summary-value {
            font-weight: 600;
            color: var(--text-color);
        }
        .summary-total {
            color: var(--primary-color) !important;
        }
        
        /* Action Buttons */
        .action-buttons {
            margin-top: 2rem;
        }
        .btn-continue {
            background: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 1rem;
            width: 100%;
        }
        .btn-continue:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }
        .btn-checkout {
            background: linear-gradient(135deg, var(--primary-color), #00796b);
            border: none;
            color: white;
            padding: 15px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            width: 100%;
            box-shadow: 0 5px 15px rgba(0,150,136,0.3);
        }
        .btn-checkout:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,150,136,0.4);
            color: white;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            .cart-container {
                padding: 1.5rem;
            }
            .product-card {
                padding: 1rem;
            }
            .product-image {
                width: 80px;
                height: 80px;
            }
            .quantity-control {
                margin: 1rem 0;
            }
        }
        
        /* Footer Styles */
        .footer {
            background-color: var(--text-color);
            color: var(--secondary-color);
            padding: 3rem 0 2rem;
            margin-top: 4rem;
        }
        
        .footer a {
            color: var(--secondary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer a:hover {
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .footer h6 {
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
        }

        /* Session Messages */
        .alert {
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .alert-success {
            background: linear-gradient(135deg, #d4edda, #c3e6cb);
            color: #155724;
        }
        .alert-danger {
            background: linear-gradient(135deg, #f8d7da, #f5c6cb);
            color: #721c24;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <?php include __DIR__ . '/layouts/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title">Giỏ Hàng Của Bạn</h1>
            <p class="hero-subtitle">Kiểm tra và hoàn tất đơn hàng của bạn</p>
            
            <!-- Banner tra cứu đơn hàng cho khách vãng lai -->
            <?php if (!isset($_SESSION['customer_id'])): ?>
                <div class="mt-4" style="background: rgba(255,255,255,0.2); border: 2px solid rgba(255,255,255,0.3); border-radius: 20px; padding: 20px; backdrop-filter: blur(15px); box-shadow: 0 8px 32px rgba(0,0,0,0.1);">
                    <div class="d-flex align-items-center justify-content-center">
                        <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.9); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                            <i class="fas fa-search" style="font-size: 1.3rem; color: var(--primary-color);"></i>
                        </div>
                        <div class="text-center">
                            <p class="mb-2" style="color: rgba(255,255,255,0.95); font-weight: 600; font-size: 1.1rem; margin: 0;">
                                Đã đặt hàng trước đó? 
                                <a href="/websitePS/public/ordertracking" class="text-white text-decoration-underline fw-bold" style="font-size: 1.1rem;">
                                    Tra cứu đơn hàng ngay
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <div class="container">
        <!-- Session Messages -->
        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                <?= htmlspecialchars($_SESSION['success_message']) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['success_message']); ?>
        <?php endif; ?>
        
        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                <i class="fas fa-exclamation-triangle me-2"></i>
                <?= htmlspecialchars($_SESSION['error_message']) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['error_message']); ?>
        <?php endif; ?>
        
        <?php if (empty($cart)): ?>
            <div class="cart-container">
                <div class="empty-cart">
                    <div class="empty-cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Giỏ hàng của bạn đang trống</h3>
                    <p>Hãy khám phá các sản phẩm ngon của chúng tôi và thêm vào giỏ hàng</p>
                    <a href="/websitePS/public/products/list" class="btn btn-primary-custom">
                        <i class="fas fa-shopping-bag me-2"></i>
                        Khám phá sản phẩm
                    </a>
                </div>
            </div>
        <?php else: ?>
            <?php if (!isset($_SESSION['customer_id'])): ?>
                                 <!-- Thông báo cho khách vãng lai -->
                 <div class="alert alert-info mb-4">
                     <div class="d-flex align-items-center">
                         <i class="fas fa-user-clock me-3" style="font-size: 1.5rem;"></i>
                         <div>
                             <h6 class="mb-1">Bạn đang mua hàng mà không cần tài khoản</h6>
                             <p class="mb-2">
                                 Đăng nhập hoặc đăng ký để nhận ưu đãi và theo dõi đơn hàng dễ dàng hơn. 
                                 Sau khi hoàn tất đặt hàng, bạn có thể tra cứu đơn hàng tại 
                                 <a href="/websitePS/public/ordertracking" class="text-decoration-underline fw-bold">Trang Tra Cứu Đơn hàng</a>.
                             </p>
                             <div class="d-flex gap-2">
                                 <a href="/websitePS/public/customerauth/login" class="btn btn-sm btn-primary-custom">
                                     <i class="fas fa-sign-in-alt me-1"></i>
                                     Đăng nhập ngay
                                 </a>
                                 <a href="/websitePS/public/ordertracking" class="btn btn-sm btn-outline-primary-custom">
                                     <i class="fas fa-search me-1"></i>
                                     Tra cứu đơn hàng
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
            <?php endif; ?>
            
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-container">
                        <h3 class="mb-4">
                            <i class="fas fa-shopping-cart me-2 text-primary"></i>
                            Sản phẩm trong giỏ hàng (<?= count($cart) ?>)
                        </h3>
                        
                        <?php $total = 0; ?>
                                                 <?php foreach ($cart as $id => $item): ?>
                             <?php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; ?>
                             <div class="product-card" data-product-id="<?= $id ?>">
                                 <div class="row align-items-center">
                                     <div class="col-md-2 col-4">
                                         <img src="<?= $item['image'] ?>" class="product-image img-fluid">
                                     </div>
                                     <div class="col-md-4 col-8">
                                         <div class="product-info">
                                             <h5><?= htmlspecialchars($item['name']) ?></h5>
                                             <div class="product-code">Mã: <?= $id ?></div>
                                             <div class="product-price"><?= number_format($item['price'], 0, ',', '.') ?> đ</div>
                                         </div>
                                     </div>
                                     <div class="col-md-3 col-6">
                                         <div class="quantity-control">
                                             <button class="quantity-btn" onclick="updateQuantity(<?= $id ?>, -1)">
                                                 <i class="fas fa-minus"></i>
                                             </button>
                                             <input type="number" class="quantity-input" value="<?= $item['quantity'] ?>" 
                                                    min="1" data-original-quantity="<?= $item['quantity'] ?>">
                                             <button class="quantity-btn" onclick="updateQuantity(<?= $id ?>, 1)">
                                                 <i class="fas fa-plus"></i>
                                             </button>
                                         </div>
                                     </div>
                                     <div class="col-md-2 col-3 text-end">
                                         <div class="product-total"><?= number_format($subtotal, 0, ',', '.') ?> đ</div>
                                     </div>
                                     <div class="col-md-1 col-3 text-end">
                                         <a href="/websitePS/public/cart/remove/<?= $id ?>" class="remove-btn" 
                                            title="Xóa sản phẩm" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')">
                                             <i class="fas fa-trash"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         <?php endforeach; ?>
                    </div>
                </div>
                
                                 <div class="col-lg-4">
                     <?php include __DIR__ . '/cart_summary.php'; ?>
                 </div>
            </div>
        <?php endif; ?>
    </div>

    <footer class="footer pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">🦜 Parrot Smell</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: var(--primary-color); height: 2px"/>
                    <p>Nơi mỗi chiếc bánh là một tác phẩm nghệ thuật, mang đến niềm vui và sự ngọt ngào cho cuộc sống của bạn.</p>
                </div>
                <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">Liên kết</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: var(--primary-color); height: 2px"/>
                    <p><a href="/websitePS/public/pages/about">Về chúng tôi</a></p>
                    <p><a href="#!">Chính sách giao hàng</a></p>
                    <p><a href="#!">Điều khoản dịch vụ</a></p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold">Liên hệ</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: var(--primary-color); height: 2px"/>
                    <p><i class="fas fa-home me-3"></i> 02 Võ Oanh, Phường 25, Quận Bình Thạnh, TP.HCM</p>
                    <p><i class="fas fa-envelope me-3"></i> cucxacdufong@gmail.com</p>
                    <p><i class="fas fa-phone me-3"></i> 0767 150 474</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
         <script>
           function updateQuantity(productId, change) {
           console.log('updateQuantity called with:', { productId, change });
           
           // Sử dụng AJAX để cập nhật số lượng sản phẩm mà không reload trang
           const formData = new FormData();
           formData.append('productId', productId);
           formData.append('change', change);
           
           // Hiển thị loading cho sản phẩm cụ thể
           const productCard = document.querySelector(`[data-product-id="${productId}"]`);
           console.log('Product card found:', productCard);
           
           if (productCard) {
               const quantityInput = productCard.querySelector('.quantity-input');
               const originalValue = quantityInput.value;
               quantityInput.disabled = true;
               quantityInput.style.opacity = '0.5';
           }
           
           console.log('Sending request to /websitePS/public/cart/updateQuantity');
           fetch('/websitePS/public/cart/updateQuantity', {
               method: 'POST',
               body: formData
           })
           .then(response => {
               console.log('Response status:', response.status);
               return response.json();
           })
           .then(data => {
               console.log('Response data:', data);
               if (data.success) {
                   // Cập nhật số lượng hiển thị
                   if (productCard) {
                       const quantityInput = productCard.querySelector('.quantity-input');
                       const subtotalElement = productCard.querySelector('.product-total');
                       
                       quantityInput.value = data.newQuantity;
                       quantityInput.disabled = false;
                       quantityInput.style.opacity = '1';
                       
                       // Cập nhật data-original-quantity
                       quantityInput.setAttribute('data-original-quantity', data.newQuantity);
                       
                       if (subtotalElement) {
                           subtotalElement.textContent = data.newSubtotal + ' đ';
                       }
                   }
                   
                   // Cập nhật toàn bộ cart summary
                   updateCartSummary();
                   
                   // Bỏ thông báo thành công
                   // showSuccessMessage('Đã cập nhật số lượng sản phẩm thành công!');
               } else {
                   // Khôi phục giá trị cũ nếu có lỗi
                   if (productCard) {
                       const quantityInput = productCard.querySelector('.quantity-input');
                       quantityInput.disabled = false;
                       quantityInput.style.opacity = '1';
                   }
                   showErrorMessage(data.message || 'Có lỗi xảy ra khi cập nhật số lượng!');
               }
           })
           .catch(error => {
               console.error('Error:', error);
               // Khôi phục giá trị cũ nếu có lỗi
               if (productCard) {
                   const quantityInput = productCard.querySelector('.quantity-input');
                   quantityInput.disabled = false;
                   quantityInput.style.opacity = '1';
               }
               showErrorMessage('Có lỗi xảy ra khi cập nhật số lượng sản phẩm!');
           });
       }
      
      function updateCartSummary() {
          // Cập nhật cart summary thông qua AJAX
          fetch('/websitePS/public/cart/getSummary', {
              method: 'GET'
          })
          .then(response => response.text())
          .then(html => {
              const currentSummary = document.querySelector('.cart-summary');
              if (currentSummary) {
                  currentSummary.innerHTML = html;
                  
                  // Thêm lại event listeners cho các checkbox mới
                  const newCheckboxes = currentSummary.querySelectorAll('input[name="selected_promotions[]"]');
                  newCheckboxes.forEach(checkbox => {
                      checkbox.addEventListener('change', function() {
                          updatePromotions();
                      });
                  });
              }
          })
          .catch(error => {
              console.error('Error updating cart summary:', error);
          });
      }
     
           function updatePromotions() {
          // Sử dụng AJAX để cập nhật khuyến mãi mà không reload trang
          const form = document.getElementById('promotionForm');
          if (form) {
              const formData = new FormData(form);
              
              // Hiển thị loading
              const submitBtn = document.querySelector('.btn-checkout');
              if (submitBtn) {
                  submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Đang cập nhật...';
                  submitBtn.disabled = true;
              }
              
              fetch('/websitePS/public/cart/updatePromotions', {
                  method: 'POST',
                  body: formData
              })
              .then(response => response.text())
              .then(html => {
                  // Cập nhật phần cart summary
                  const currentSummary = document.querySelector('.cart-summary');
                  
                  if (currentSummary) {
                      currentSummary.innerHTML = html;
                      
                      // Thêm lại event listeners cho các checkbox mới
                      const newCheckboxes = currentSummary.querySelectorAll('input[name="selected_promotions[]"]');
                      newCheckboxes.forEach(checkbox => {
                          checkbox.addEventListener('change', function() {
                              updatePromotions();
                          });
                      });
                  }
                  
                  // Khôi phục nút checkout
                  if (submitBtn) {
                      submitBtn.innerHTML = '<i class="fas fa-credit-card me-2"></i>Thanh toán ngay';
                      submitBtn.disabled = false;
                  }
                  
                  // Bỏ thông báo thành công
                  // showSuccessMessage('Đã cập nhật khuyến mãi thành công!');
              })
              .catch(error => {
                  console.error('Error:', error);
                  // Khôi phục nút checkout
                  if (submitBtn) {
                      submitBtn.innerHTML = '<i class="fas fa-credit-card me-2"></i>Thanh toán ngay';
                      submitBtn.disabled = false;
                  }
                  showErrorMessage('Có lỗi xảy ra khi cập nhật khuyến mãi!');
              });
          }
      }
      
             // Thêm event listener để theo dõi thay đổi checkbox và quantity input
       document.addEventListener('DOMContentLoaded', function() {
           // Event listener cho checkbox promotions
           const checkboxes = document.querySelectorAll('input[name="selected_promotions[]"]');
           checkboxes.forEach(checkbox => {
               checkbox.addEventListener('change', function() {
                   // Sử dụng AJAX để cập nhật ngay khi có thay đổi
                   updatePromotions();
               });
           });
           
                       // Event listener cho quantity input
            const quantityInputs = document.querySelectorAll('.quantity-input');
            quantityInputs.forEach(input => {
                input.addEventListener('change', function() {
                    const productId = this.closest('.product-card').getAttribute('data-product-id');
                    const originalQuantity = parseInt(this.getAttribute('data-original-quantity'));
                    const newQuantity = parseInt(this.value);
                    const change = newQuantity - originalQuantity;
                    
                    if (change !== 0) {
                        updateQuantity(productId, change);
                    }
                });
            });
       });
     
           function clearPromotions() {
          // Xóa tất cả checkbox
          const checkboxes = document.querySelectorAll('input[name="selected_promotions[]"]');
          checkboxes.forEach(checkbox => {
              checkbox.checked = false;
          });
          // Sử dụng AJAX để cập nhật
          updatePromotions();
      }
     
     
     
                  // Hàm hiển thị thông báo thành công
       function showSuccessMessage(message) {
           const alertDiv = document.createElement('div');
           alertDiv.className = 'alert alert-success alert-dismissible fade show mt-3';
           alertDiv.innerHTML = `
               <i class="fas fa-check-circle me-2"></i>
               ${message}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           `;
           
           const container = document.querySelector('.container');
           container.insertBefore(alertDiv, container.firstChild);
           
           // Tự động ẩn sau 3 giây
           setTimeout(() => {
               alertDiv.remove();
           }, 3000);
       }
       
       // Hàm hiển thị thông báo lỗi
       function showErrorMessage(message) {
           const alertDiv = document.createElement('div');
           alertDiv.className = 'alert alert-danger alert-dismissible fade show mt-3';
           alertDiv.innerHTML = `
               <i class="fas fa-exclamation-triangle me-2"></i>
               ${message}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           `;
           
           const container = document.querySelector('.container');
           container.insertBefore(alertDiv, container.firstChild);
           
           // Tự động ẩn sau 5 giây
           setTimeout(() => {
               alertDiv.remove();
           }, 5000);
       }
     
     
     </script>
</body>
</html>