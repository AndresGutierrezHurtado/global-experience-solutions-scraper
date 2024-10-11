<div class="hero bg-base-200 min-h-screen bg-[url(https://png.pngtree.com/thumb_back/fh260/background/20230705/pngtree-3d-render-of-online-ticketing-for-movies-image_3738846.jpg)]">
    <div class="hero-overlay bg-black/70"></div>
    <div class="hero-content max-w-[700px] text-gray-50">
        <div class="flex flex-col gap-10 items-center justify-center">
            <div class="space-y-5">
                <h1 class="text-center text-7xl font-extrabold tracking-tight">Global Experience <br><span class="text-blue-400">Solutions</span></h1>
                <p class="text-center text-pretty text-lg [&_a]:text-orange-400 [&_a]:font-bold [&_a:hover]:underline [&_a:hover]:text-orange-500 [&_a]:duration-300">
                    Bienvenido a Global Experience Solutions, acá podrás obtener información sobre las boleterias 
                    de <a href="https://www.eticket.co/home.aspx" target="_blank">Eticket</a> y <a href="https://www.masboleteria.com/" target="_blank">Más boletería</a>
                </p>
            </div>
            <div class="card bg-base-100 w-full max-w-[600px] shrink-0 shadow-2xl" data-theme="light">
                <form class="url-form card-body" method="get" action="/event" onsubmit="return validateForm()">
                    <h2></h2>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text font-semibold after:content-['*'] after:text-red-400 after:ml-0.5">Url del evento:</span>
                        </label>
                        <input placeholder="ej; https://www.vividseats.com/real-madrid-ticket..." class="input input-bordered" name="url" />
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary" type="submit">Ver tickets</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>