<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <h3>Guru</h3>
                <?php foreach ($data['guru'] as $guru) : ?>
                    <ul>
                        <li><?php echo $guru['penulis']; ?></li>
                        <li><?php echo $guru['tulisan']; ?></li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>