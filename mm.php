<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game ID Shop - ร้านขายไอดีเกม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-image: url('image/background.jpg');
            background-size: cover;
            background-attachment: fixed;
            color: #f1f1f1;
        }
        .navbar, footer {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .game-card {
            transition: transform 0.3s, box-shadow 0.3s;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
        }
        .game-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        .game-card .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .promo-banner {
            background-color: rgba(255, 69, 0, 0.9);
            color: white;
            text-align: center;
            padding: 10px;
            font-weight: bold;
            margin-bottom: 20px;
            border-radius: 5px;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.8;
            }
        }
        .star-rating {
            color: #FFD700;
            font-size: 1.2rem;
        }
        .section-title {
            color: black; /* เปลี่ยนสีเป็นสีดำ */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Game ID Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">หมวดหมู่</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ขายไอดี</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#" class="btn btn-light me-2">
                        <i class="fas fa-user"></i> โปรไฟล์
                    </a>
                    <a href="#" class="btn btn-outline-light">ออกจากระบบ</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Promo Banner -->
    <div class="promo-banner">
        โปรโมชั่นพิเศษ! ลดสูงสุดถึง 30% เมื่อซื้อไอดีวันนี้เท่านั้น!
    </div>

    <div class="container py-5">
        <h2 class="mb-4 section-title">ไอดีเกมแนะนำ</h2>
        
        <!-- Search Bar -->
        <div class="row mb-4">
            <div class="col-md-6 offset-md-3">
                <form class="d-flex" id="searchForm">
                    <input class="form-control me-2" type="search" placeholder="ค้นหาไอดีเกม..." id="searchInput">
                    <button class="btn btn-outline-primary" type="submit">ค้นหา</button>
                </form>
            </div>
        </div>

        <!-- Game Accounts Grid -->
        <div class="row row-cols-1 row-cols-md-3 g-4" id="gameAccountsGrid">
            <!-- Game account cards will be dynamically inserted here -->
        </div>
    </div>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Game ID Shop</h5>
                    <p>ร้านขายไอดีเกมที่ปลอดภัยและน่าเชื่อถือ</p>
                </div>
                <div class="col-md-6">
                    <h5>ติดต่อเรา</h5>
                    <p>
                        <i class="fas fa-envelope"></i> email@example.com<br>
                        <i class="fas fa-phone"></i> 099-999-9999
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sample game account data
        var gameAccounts = [
            {
                id: 1,
                title: "Genshin Impact Premium",
                description: "บัญชีเกมเชียนระดับสูง มีตัวละครหายาก",
                level: 55,
                characterList: ["Raiden Shogun", "Hu Tao", "Ganyu"],
                itemsIncluded: ["Staff of Homa", "Primordial Jade Winged-Spear"],
                price: 5900,
                rating: 4.5,
                imageUrl: "image/461418908_845695361086640_1554480715005006534_n.jpg"
            },
            {
                id: 2,
                title: "ROV Pro Account",
                description: "ไอดี ROV แรงค์ Conqueror มีฮีโร่ครบ",
                level: 30,
                characterList: ["All Heroes"],
                itemsIncluded: ["15 Premium Skins", "Limited Skins", "All Arcana Sets"],
                price: 2500,
                rating: 4,
                imageUrl: "image/462556430_854103010245875_3346089700855648690_n.jpg"
            },
            {
                id: 3,
                title: "Valorant Rare Collection",
                description: "บัญชี Valorant มีสกินปืนหายาก",
                level: 70,
                characterList: ["All Agents Unlocked"],
                itemsIncluded: ["Premium Gun Skins", "Battle Pass Items"],
                price: 3500,
                rating: 4.8,
                imageUrl: "image/461510611_845695254419984_258162378829224302_n.jpg"
            }
        ];

        // Function to display game account cards
        function displayGameAccounts() {
            var grid = $('#gameAccountsGrid');
            grid.empty();

            gameAccounts.forEach(function(account) {
                var card = $('<div>').addClass('col');
                var cardContent = $('<div>').addClass('card h-100 game-card');
                var img = $('<img>').addClass('card-img-top').attr('src', account.imageUrl).attr('alt', account.title);
                var cardBody = $('<div>').addClass('card-body');
                var title = $('<h5>').addClass('card-title').text(account.title);
                var description = $('<p>').addClass('card-text').text(account.description);
                var level = $('<p>').addClass('card-text').html('<small class="text-muted">Level: ' + account.level + '</small>');
                var rating = $('<div>').addClass('star-rating').html("⭐".repeat(Math.floor(account.rating)));
                var price = $('<h4>').addClass('text-primary').text('฿' + account.price.toLocaleString());
                var button = $('<a>').addClass('btn btn-primary w-100').attr('href', 'detail.php?id=' + account.id).text('ดูรายละเอียด');

                cardBody.append(title, description, level, rating, price);
                cardContent.append(img, cardBody, button);
                card.append(cardContent);
                grid.append(card);
            });
        }

        // Search functionality
        $('#searchForm').on('submit', function(e) {
            e.preventDefault();
            var searchTerm = $('#searchInput').val().toLowerCase();
            filterGameAccounts(searchTerm);
        });

        function filterGameAccounts(searchTerm) {
            $('#gameAccountsGrid .col').each(function() {
                var title = $(this).find('.card-title').text().toLowerCase();
                if (title.includes(searchTerm)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }

        // Initial display of game accounts
        displayGameAccounts();
    </script>
</body>
</html>
