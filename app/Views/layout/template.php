<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>

    <?= $this->include('layout/navbar') ?>

    <?= $this->renderSection('content') ?>

    <footer class="footer">
        <p>&copy; 2025 TropicalShop. All rights reserved.</p>
    </footer>

    <script>
    // Quantity control for custom order
    function changeQuantity(change) {
        const quantityInput = document.getElementById('quantity');
        if (quantityInput) {
            let currentValue = parseInt(quantityInput.value) || 1;
            const newValue = Math.max(1, currentValue + change);
            quantityInput.value = newValue;
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Pattern buttons functionality
        const patternButtons = document.querySelectorAll('.pattern-btn');
        patternButtons.forEach(button => {
            button.addEventListener('click', function() {
                this.parentElement.querySelectorAll('.pattern-btn').forEach(btn => {
                    btn.style.borderColor = '#e9ecef';
                    btn.style.color = '#6c757d';
                    btn.style.backgroundColor = '#f8f9fa';
                });
                this.style.borderColor = '#2c3e50';
                this.style.color = 'white';
                this.style.backgroundColor = '#2c3e50';
            });
        });

        // Form validation for custom order
        const addToCartBtn = document.querySelector('.custom-order .btn-primary');
        if (addToCartBtn) {
            addToCartBtn.addEventListener('click', function() {
                const productName = document.querySelector('input[placeholder="Enter product name"]')
                    .value;
                if (!productName.trim()) {
                    alert('Please enter a product name');
                    return;
                }
                // Add more validation if needed
                alert('Custom order added to cart!');
            });
        }
    });
    </script>

</body>

</html>