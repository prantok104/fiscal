<?php include('header.php'); ?>
<!--Breadcrumb Area Start-->
<section class="fiscal-breadcromb-area section_50">
    <div class="overlay"></div><!--.overlay-->
    <div class="container">
        <div class="row">
            <div class="fiscal-breadcromb">
                <div class="col-md-6">
                    <div class="breadcromb-left">
                        <h3>Checkout</h3>
                    </div><!--.breadcromb-left-->
                </div>
                <div class="col-md-6">
                    <div class="breadcromb-right">
                        <ul>
                            <li><a href="index.html"><i class="fa fa-home"></i>home</a></li>
                            <li>/</li>
                            <li>Shop</li>
                            <li>/</li>
                            <li>Checkout</li>
                        </ul>
                    </div><!--.breadcromb-right-->
                </div>
            </div>
        </div><!--.row-->
    </div><!--.container-->
</section>
<!--Breadcrumb Area End-->
<!--News Area Start-->
<section class="fiscal-shop-checkout-area section-padding">
    <div class="container">
        <div class="row">
            <div class="fiscal-shop-checkout fix"> 
                <div class="col-md-6">
                    <div class="fiscal-checkout-form">
                        <h3>Shipping Address</h3>
                        <form lpformnum="6">
                            <div class="checkout-form">
                               <div class="col-md-6 no-padding">
                                   <div class="form-group small-field">
                                       <label for="name23">First Name</label>
                                       <input type="text" id="name23" name="firstname">
                                   </div>
                               </div>
                            <div class="col-md-6 no-padding">
                                <div class="form-group small-field">
                                    <label for="name22">Last Name</label>
                                    <input type="text" id="name22" name="lastname">
                                </div>
                            </div>
                            </div>
                            <div class="checkout-form">
                                <div class="form-group">
                                    <label for="cntr">Country</label>
                                    <input type="text" id="cntr" name="country">
                                </div>
                            </div>
                            <div class="checkout-form">
                                <div class="form-group">
                                    <label for="addr">Address</label>
                                    <input type="text" id="addr" name="address">
                                    <input type="text" id="addr1" name="address">
                                </div>
                            </div>
                            <div class="checkout-form">
                                <div class="form-group">
                                    <label for="Town">Town / City *</label>
                                    <input type="text" id="Town" name="town">
                                </div>
                            </div>
                            <div class="checkout-form">
                                <div class="form-group">
                                    <label for="notes">other notes</label>
                                    <textarea id="notes"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fiscal-checkout-form checkout-form-right">
                        <h3>Billing Address</h3>
                        <form lpformnum="7">
                            <div class="checkout-form">
                                <div class="col-md-6 no-padding">
                                    <div class="form-group small-field">
                                        <label for="name23">First Name</label>
                                        <input type="text" id="name23" name="firstname">
                                    </div>
                                </div>
                                <div class="col-md-6 no-padding">
                                    <div class="form-group small-field">
                                        <label for="name22">Last Name</label>
                                        <input type="text" id="name22" name="lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-form">
                                <div class="form-group">
                                    <label for="cntr2">Country</label>
                                    <input type="text" id="cntr2" name="country">
                                </div>
                            </div>
                            <div class="checkout-form">
                                <div class="form-group">
                                    <label for="addr2">Address</label>
                                    <input type="text" id="addr2" name="address">
                                    <input type="text" id="addr12" name="address">
                                </div>
                            </div>
                            <div class="checkout-form">
                                <div class="form-group">
                                    <label for="Town2">Town / City *</label>
                                    <input type="text" id="Town2" name="town">
                                </div>
                            </div>
                            <div class="checkout-form">
                                <div class="form-group">
                                    <label for="info2">Contact Info *</label>
                                    <input type="text" placeholder="Email Address" id="info2" name="info2">
                                    <input type="text" placeholder="Phone Number" id="info12" name="info2">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>  
            <div class="checkout-cart">
                <div class="col-md-6">
                    <div class="checkout-cart-table cart-table">
                        <h3>Order Details</h3>
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>Preview</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="shop-cart-item">
                                    <td class="fiscal-cart-preview">
                                        <a href="#">
                                            <img alt="cart-1" src="assets/img/minishop-4.jpg">
                                        </a>
                                    </td>
                                    <td class="fiscal-cart-product">
                                        <a href="#">
                                            <p>michael lewis</p>
                                        </a>
                                    </td>
                                    <td class="fiscal-cart-quantity">
                                        <input type="number" value="1">
                                    </td>
                                    <td class="fiscal-cart-total">
                                        <p>$180</p>
                                    </td>
                                </tr>
                                <tr class="shop-cart-item">
                                    <td class="fiscal-cart-preview">
                                        <a href="#">
                                            <img alt="cart-1" src="assets/img/minishop4.jpg">
                                        </a>
                                    </td>
                                    <td class="fiscal-cart-product">
                                        <a href="#">
                                            <p>michael lewis</p>
                                        </a>
                                    </td>
                                    <td class="fiscal-cart-quantity">
                                        <input type="number" value="1">
                                    </td>
                                    <td class="fiscal-cart-total">
                                        <p>$90</p>
                                    </td>
                                </tr>
                                <tr class="shop-cart-item">
                                    <td class="fiscal-cart-preview">
                                        <a href="#">
                                            <img alt="cart-1" src="assets/img/minshop-2.jpg">
                                        </a>
                                    </td>
                                    <td class="fiscal-cart-product">
                                        <a href="#">
                                            <p>financial inteligency</p>
                                        </a>
                                    </td>
                                    <td class="fiscal-cart-quantity">
                                        <input type="number" value="1">
                                    </td>
                                    <td class="fiscal-cart-total">
                                        <p>$30</p>
                                    </td>
                                </tr>
                                <tr class="shop-cart-item">
                                    <td class="fiscal-cart-preview">
                                        <a href="#">
                                            <img alt="cart-1" src="assets/img/minishop-4.jpg">
                                        </a>
                                    </td>
                                    <td class="fiscal-cart-product">
                                        <a href="#">
                                            <p>financial inteligency</p>
                                        </a>
                                    </td>
                                    <td class="fiscal-cart-quantity">
                                        <input type="number" value="1">
                                    </td>
                                    <td class="fiscal-cart-total">
                                        <p>$30</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="calculate-shipping-right">
                        <h3>Cart Totals</h3>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Cart Subtotal</td>
                                    <td>$180</td>
                                </tr>
                                <tr>
                                    <td>Shipping and Handling</td>
                                    <td>Free Shipping</td>
                                </tr>
                                <tr>
                                    <td>Order Total</td>
                                    <td>$180</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="fiscal-payment">
                            <div class="payment">
                                <input type="checkbox">
                                <h4>Direct Bank Transfer</h4>
                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.order won’t be shipped until the funds have cleared.</p>
                            </div>
                            <div class="payment">
                                <input type="checkbox">
                                <h4>Cheque Payment</h4>
                            </div>
                            <div class="payment">
                                <input type="checkbox">
                                <h4>Credit Card</h4>
                                <img alt="credit card" src="assets/img/master-card.jpg">
                            </div>
                            <div class="payment">
                                <input type="checkbox">
                                <h4>Paypal</h4>
                                <img alt="credit card" src="assets/img/paypal.jpg">
                            </div>
                        </div>
                        <div class="proceed-checkout">
                            <a href="#">place order</a>
                        </div>
                    </div>
                </div>
            </div>        
        </div><!--.row-->
    </div><!--.container-->
</section>
<!--News Area End-->
<?php include('footer.php'); ?>