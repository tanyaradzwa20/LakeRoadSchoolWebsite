(function($) {
    'use strict';

    const Cart = {
        init: function() {
            this.cart = this.loadCart();
            this.updateCartCount();
            this.bindEvents();
            this.renderCart();
        },

        loadCart: function() {
            const savedCart = localStorage.getItem('lrtps_cart');
            try {
                return savedCart ? JSON.parse(savedCart) : [];
            } catch (e) {
                console.error("Error parsing cart from localStorage", e);
                return [];
            }
        },

        saveCart: function() {
            localStorage.setItem('lrtps_cart', JSON.stringify(this.cart));
            this.updateCartCount();
            this.renderCart();
        },

        addToCart: function(product) {
            const existingItem = this.cart.find(item => item.id === product.id);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                product.quantity = 1;
                this.cart.push(product);
            }
            this.saveCart();
            this.showNotification(product.name + ' added to cart');
        },

        removeFromCart: function(productId) {
            this.cart = this.cart.filter(item => item.id !== productId);
            this.saveCart();
        },

        updateQuantity: function(productId, quantity) {
            const item = this.cart.find(item => item.id === productId);
            if (item) {
                item.quantity = parseInt(quantity);
                if (item.quantity <= 0) {
                    this.removeFromCart(productId);
                } else {
                    this.saveCart();
                }
            }
        },

        updateCartCount: function() {
            const count = this.cart.reduce((total, item) => total + item.quantity, 0);
            $('.cart-count').each(function() {
                $(this).text(count);
            });
        },

        renderCart: function() {
            const $cartList = $('#cart-items-list');
            if ($cartList.length === 0) return;

            $cartList.empty();
            let total = 0;

            if (this.cart.length === 0) {
                $cartList.append('<li><p class="empty-cart" style="padding: 20px; text-align: center; color: #777;">Your cart is empty</p></li>');
            } else {
                this.cart.forEach(item => {
                    const priceValue = parseFloat(item.price.replace(/[^\d.]/g, ''));
                    const subtotal = priceValue * item.quantity;
                    total += subtotal;

                    $cartList.append(`
                        <li class="cart-item" data-id="${item.id}">
                            <div class="cart-item-image">
                                <img src="${item.image}" alt="${item.name}">
                            </div>
                            <div class="cart-item-info">
                                <h6 class="title">${item.name}</h6>
                                <span class="price">${item.price} x ${item.quantity}</span>
                            </div>
                            <button class="remove-cart-item" data-id="${item.id}"><i class="fa-regular fa-xmark"></i></button>
                        </li>
                    `);
                });
            }

            $('.cart-total-amount').text('K' + total.toFixed(2));
        },

        bindEvents: function() {
            const self = this;

            $(document).on('click', '.add-to-cart-btn', function(e) {
                e.preventDefault();
                const $btn = $(this);
                const product = {
                    id: $btn.data('id'),
                    name: $btn.data('name'),
                    price: $btn.data('price'),
                    image: $btn.data('image')
                };
                self.addToCart(product);
            });

            $(document).on('click', '.remove-cart-item', function(e) {
                e.preventDefault();
                const id = $(this).data('id');
                self.removeFromCart(id);
            });

            $(document).on('click', '#cart-trigger', function(e) {
                e.preventDefault();
                $('#cart-drawer').addClass('show');
                $('#anywhere-home').addClass('bgshow');
            });

            $(document).on('click', '.close-cart-drawer, #anywhere-home', function(e) {
                $('#cart-drawer').removeClass('show');
                $('#anywhere-home').removeClass('bgshow');
            });
        },

        showNotification: function(message) {
            const $toast = $('<div class="cart-toast">' + message + '</div>');
            $('body').append($toast);
            setTimeout(() => {
                $toast.addClass('show');
                setTimeout(() => {
                    $toast.removeClass('show');
                    setTimeout(() => $toast.remove(), 300);
                }, 2000);
            }, 100);
        }
    };

    $(document).ready(function() {
        Cart.init();
    });

})(jQuery);
