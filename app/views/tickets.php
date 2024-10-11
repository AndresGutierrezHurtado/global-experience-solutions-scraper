<div class="hero bg-base-200 min-h-screen">
    <div class="hero-content flex-col lg:flex-row">
        <img
            src="<?= $scrap["image"] ?>"
            class="max-w-sm rounded-lg shadow-2xl" />
        <div>
            <h1 class="text-5xl font-bold"><?= $scrap["title"] ?></h1>
            <p class="py-6">
                <span class="font-bold">Información:</span>
                <?= $scrap["address"] ?>
            </p>
            <a href="/">
                <button class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Bold" viewBox="0 0 24 24" width="20px" height="20px">
                        <path d="M19,10.5H10.207l2.439-2.439a1.5,1.5,0,0,0-2.121-2.122L6.939,9.525a3.505,3.505,0,0,0,0,4.95l3.586,3.586a1.5,1.5,0,0,0,2.121-2.122L10.207,13.5H19a1.5,1.5,0,0,0,0-3Z" />
                    </svg>
                    Volver
                </button>
            </a>
        </div>
    </div>
</div>