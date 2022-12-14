<x-navbar>
    <x-slot name="title">
        Home
    </x-slot>
    <x-slot name="content">
        <section class="main">
            <div>
                <h2>Hello, I'm Muhamad<br><span>Web Developer</span></h2>
                <h3>I build websites and web applications</h3>
                <a href="{{ route('route.project') }}" class="main-btn">View my work</a>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </section>
    </x-slot>
</x-navbar>