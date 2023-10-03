<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="../dealer/index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <hr>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="../dealer/product_list.php">
                        <i class="bi bi-circle"></i><span>Product List</span>
                    </a>
                </li>
                <li>
                    <a href="../dealer/add_product.php">
                        <i class="bi bi-circle"></i><span>Add Product</span>
                    </a>
                </li>
            </ul>
        </li>
        <hr>
        <li class="nav-item">
            <a class="nav-link collapsed" href="../dealer/approved_retailer.php">
                <i class="bi bi-person-check-fill"></i><span>Approved Retailer</span>
            </a>
        </li>
        <hr>
        <li class="nav-item">
            <a class="nav-link collapsed" href="../dealer/decline_retailer.php">
                <i class="bi bi-person-dash-fill"></i><span>Declined Retailer</span>
            </a>
        </li>
        <hr>
        <li class="nav-item">
            <a class="nav-link collapsed" href="../dealer/requested_price.php">
                <i class="bi bi-person-plus-fill   "></i><span>Requested Price</span>
            </a>
        </li>
    </ul>
</aside>
<script>
    let item = document.querySelectorAll('.nav-item');
    for (let i = 0; i < item.length; i++) {
        item[i].onclick = function() {
            let j = 0;
            while (j < item.length) {
                item[j++].className = 'nav-item';
            }
            item[i].className = 'nav-item active';
        };
    }
</script>